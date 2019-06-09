<?php require 'config.php' ?>
<html>
    <head>
        <title>SQLGen</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <section class="py-5">
            <div class="container">
                <form method="POST" action="/generator.php" class="jumbotron">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Gerador</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="table_name">Nome Tabela</label>
                                <input type="text" class="form-control" name="table_name" required>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="rows_num">Qtd de Registros</label>
                                <input type="number" class="form-control" name="rows_num" min="1" value="1">
                            </div>
                        </div>                    
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-9">
                            <h4>Colunas</h4>
                        </div>
                        <div class="col-lg-3">
                            <a href="javascript:void(0);" class="btn btn-outline-primary btn-add btn-block btn-sm">Adicionar Coluna</a>
                        </div>  
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <small>Utilize o campo <i>"valor padrão"</i> para definir um valor padrão para a coluna.
                            <br> Para gerar um valor inteiro randômico selecione a opção de tipo de dado <i>"gerar > entre inteiros"</i> e informe o valor inicial e final
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <th width="20%">Nome da Coluna</th>
                                        <th  width="25%">Tipo do Dado</th>
                                        <th width="15%">Raio de Geração</th>
                                        <th width="25%">Valor Padrão</th>
                                        <th>Ações</th>
                                    </thead>
                                    <tbody>                                        
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control input-name" name="column[0][name]">
                                            </td>
                                            <td>
                                                <select class="form-control input-type" name="column[0][type]">
                                                    <?php foreach ($config['options'] as $groupName => $group): ?>
                                                    <optgroup label="<?= $groupName ?>">
                                                        <?php foreach ($group as $key => $type): ?>
                                                            <option value="<?= $type ?>"><?= $type ?></option>
                                                        <?php endforeach ?>
                                                    </optgroup>                                                
                                                    <?php endforeach ?>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control input-ini" min="1" name="column[0][rand_ini]">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control input-fin" name="column[0][rand_fin]">
                                                    </div>                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control input-value" name="column[0][value]">
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm btn-remove btn-block">Remover</a>
                                            </td>
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-success">Gerar Inserts</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(function() {
                $('.btn-remove').on('click', function() {     
                    if ($('table > tbody > tr').length > 1) {
                        $(this).parent().parent().fadeOut(300, function() {
                            $(this).remove();
                        });
                    }
                });

                $('.btn-add').on('click', function() {
                    var $clone = $('table > tbody > tr').last().clone(true);

                    var rand = Math.floor((Math.random() * 1000) + 1) + Math.floor(Date.now() / 1000);

                    $clone.find('.input-name').attr('name', 'column['+ rand +'][name]');
                    $clone.find('.input-type').attr('name', 'column['+ rand +'][type]');
                    $clone.find('.input-ini').attr('name', 'column['+ rand +'][rand_ini]');
                    $clone.find('.input-fin').attr('name', 'column['+ rand +'][rand_fin]');

                    $('table').append($clone);
                });
                
                $('body').bind('keypress', function(e) {
                    if(e.keyCode==43){
                        $('.btn-add').trigger('click');
                    }
                });
            });
        </script>
    </body>
</html>