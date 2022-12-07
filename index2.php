<?php
    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);
    }
    $servidor = $_POST['servidor'];

    // Parametros da requisição
    $content = http_build_query(array(
        'txtXML' => $_POST['txtXML']
    ));

    /*$context = stream_context_create(array(
        'http' => array(
            'method' => 'POST',                    
            'header' => "Connection: close\r\n".
                        "Content-type: application/x-www-form-urlencoded\r\n".
                        "Content-Length: ".strlen($content)."\r\n",
            'content' => $content                               
        )
    ));
    // Realize comunicação com o servidor
    $contents = file_get_contents($servidor, null, $context);            
    $resposta = json_decode($contents);  //Parser da resposta Json
    */

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
    <div class="box">
        <form action="" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="inputBox">
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
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
                                        <div class="inputBox">
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
                                        <div class="inputBox">
                                            <label>Unidade</label>
                                            <select class="form-control" name="unidade">
                                                <option value="">Selecione a unidade mais próxima</option>

                                                    $arrayregiao[sul]
                                                <option>Porto Alegre</option>
                                                <option>Curitiba</option>
                                                    $arrayregiao[Sudeste]
                                                <option>São Paulo</option>
                                                <option>Rio de Janeiro</option>
                                                <option>Belo Horizonte</option>
                                                    $arrayregiao[Centro-Oeste]
                                                <option>Brasília</option>
                                                    $arrayregiao[Nordeste]
                                                <option>Salvador</option>
                                                <option>Recife</option>
                                                    $arrayregiao[Norte]
                                                <option>Não possui disponibilidade</option>

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