<?php
    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['telefone']);

        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $regiao = $_POST['regiao'];
        $unidade = $_POST['unidade'];
        $pontuacao = $_POST['pontuacao'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,data_nascimento,email,telefone,regiao,unidade,pontuacao) 
        VALUES('$nome','$data_nascimento','$email','$telefone','$regiao','$unidade','$pontuacao')");

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compre Já</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin:30px 0">
                <div class="col-lg-3">
                    <img src="img/logo.png" class="img-thumbnail">
                </div>
                <div class="col-lg-9">
                    <h3>Nome do Produto</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6" id="form-container">

                    <form id="step_1" class="form-step">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Preencha seus dados para receber contato
                                </div>
                            </div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <label>Nome Completo</label>
                                            <input class="form-control" type="text" name="nome">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Data de Nascimento</label>
                                            <input class="form-control" type="text" name="data_nascimento">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email">
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Telefone</label>
                                            <input class="form-control" type="text" name="telefone">
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-lg btn-info next-step">Próximo Passo</button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </form>

                    <form id="step_2" class="form-step" style="display:none">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Preencha seus dados para receber contato
                                </div>
                            </div>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                            <label>Região</label>
                                            <select class="form-control" name="regiao">
                                                <option value="">Selecione a sua região</option>
                                                <option>Sul</option>
                                                <option>Sudeste</option>
                                                <option>Centro-Oeste</option>
                                                <option>Nordeste</option>
                                                <option>Norte</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6">
                                            <label>Unidade</label>
                                            <select class="form-control" name="unidade">
                                                <option value="">Selecione a unidade mais próxima</option>

                                                if ($Regiao[Sul]){
                                                    <option>Porto Alegre</option>
                                                    <option>Curitiba</option>}
                                                else if ($Regiao[Sudeste]){
                                                    <option>São Paulo</option>
                                                    <option>Rio de Janeiro</option>
                                                    <option>Belo Horizonte</option>}
                                                else if ($Regiao[Centro-Oeste]){
                                                    <option>Brasília</option>}
                                                else if ($Regiao[Nordeste]){
                                                    <option>Salvador</option>
                                                    <option>Recife</option>
                                                else ($Regiao[Nordeste]){
                                                    <option>Não possui disponibilidade</option>}



                                                $arrayRegiao[Sul]
                                                <option>Porto Alegre</option>
                                                <option>Curitiba</option>
                                                    $arrayRegiao[Sudeste];
                                                <option>São Paulo</option>
                                                <option>Rio de Janeiro</option>
                                                <option>Belo Horizonte</option>
                                                    $arrayRegiao[Centro-Oeste];
                                                <option>Brasília</option>
                                                    $arrayRegiao[Nordeste];
                                                <option>Salvador</option>
                                                <option>Recife</option>
                                                    $arrayRegiao[Norte];
                                                <option>Não possui disponibilidade</option>

                                                $arrayRegiao = [sul =>10-4];
                                                $arrayRegiao = [Sudeste =>10-1];
                                                $arrayRegiao = [Centro-Oeste =>10-3];
                                                $arrayRegiao = [Nordeste =>10-2];
                                                $arrayRegiao = [Norte =>10-5];

                                                
                                                $data = new DateTime($data_nascimento );
                                                $resultado = $data->diff( new DateTime( date('Y-m-d') ) );
                                                echo $resultado->format( '%Y anos' );
                                                

                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-lg btn-info next-step">Enviar</button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </form>

                    <div id="step_sucesso" class="form-step" style="display:none">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Obrigado pelo cadastro!
                                </div>
                            </div>
                            <div class="panel-body">
                                Em breve você receberá uma ligação com mais informações!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1>Chamada interessante para o produto</h1>
                    <h2>Mais uma informação relevante</h2>
                </div>
            </div>
        </div>
        <script>
            $(function () {
                $('.next-step').click(function (event) {
                    event.preventDefault();
                    $(this).parents('.form-step').hide().next().show();
                });
            });
        </script>
    </body>
</html>