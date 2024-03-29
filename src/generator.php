<?php 

require_once dirname(__DIR__) . '/vendor/autoload.php';

$faker = Faker\Factory::create('pt_BR');

$rowsNumber = $_POST['rows_num'];
$columns    = $_POST['column'];
$tableName  = $_POST['table_name'];

$insertQuery = "insert into %s (%s) values (%s);";

for ($i=0; $i<$rowsNumber; $i++) {
    $parseColumns = [];
    $parseValues  = [];

    foreach ($columns as $column) {

        if (!empty($column['value'])) {
            $fakerValue = $column['value'];
        }
        else if ($column['type'] == 'placa') {
            $fakerValue = sprintf("%s-%s", strtoupper(randAlphabet(3)), rand(1000, 9999));
        }        
        else if ($column['type'] == 'dateTime') {
            $fakerValue = $faker->{$column['type']};
            $fakerValue = $fakerValue->format('Y-m-d h:i:s');
        }           
        else if ($column['type'] == 'entre inteiros') {
            $fakerValue = rand($column['rand_ini'], $column['rand_fin']);
        }
        else {
            $fakerValue = $faker->{$column['type']};
        }
        $fakerValue = str_replace("'", "\'", $fakerValue);
        $fakerValue = str_replace('"', '\"', $fakerValue);
        $fakerValue = empty($fakerValue) ? '0' : $fakerValue;
        $fakerValue = !is_numeric($fakerValue) ? sprintf("'%s'", $fakerValue) : $fakerValue;

        $parseColumns[] = $column['name'];
        $parseValues[]  = $fakerValue;
    }

    $query = sprintf($insertQuery, $tableName, implode(", ", $parseColumns), implode(", ", $parseValues));
    
    echo $query . '<br>';
}

function randAlphabet($number = 1)
{
    $permitted = 'abcdefghijklmnopqrstuvwxyz';

    $generate = '';

    for ($i=0; $i<$number; $i++) {
        $rand = rand(0, strlen($permitted) - 1);
        $generate .= $permitted[$rand];
    }

    return $generate;
}
