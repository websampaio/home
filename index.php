<!doctype html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8" />  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title id='titulo'>WebSampaio - HOME</title>
        <link href="../home/img/logo.png" rel="icon">
        
        <!-- Biblioteca de icones  -->
        <script src="https://kit.fontawesome.com/26715a91f4.js" crossorigin="anonymous"></script>

        <!-- jquery JS  -->
        <script src="../home/js/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap (CSS e JS) -->
        <link href="../home/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="../home/css/estilos.css" rel="stylesheet">
    </head>
    <header>
        <div class="container-fluid fixed-top">
            <div class="row fundo-verde justify-content-around">
                <div class="col-sm-8">
                    <div class="row my-2">
                        <div class="col-sm-4 text-left align-self-center">
                            <a class="text-white h6" href="index.php" title="www.websampaio.com.br">Plataforma</a>
                            <a class="nav-link text-white h3 p-0" style="font-weight: 900" href="index.php" title="www.websampaio.com.br">Web<span class="text-info">Sampaio<span></a>
                        </div>
                        <div class="col-sm-2 px-2 mt-5 text-center rounded">
                            <a class="nav-link p-0 bg-info text-white rounded" href="#"><b>Link A</b></a>
                        </div>
                        <div class="col-sm-2 px-2 mt-5 text-center rounded">
                            <a class="nav-link p-0 bg-info text-white rounded" href="#"><b>Link B</b></a>
                        </div>
                        <div class="col-sm-2 px-2 mt-5 text-center rounded">
                            <a class="nav-link p-0 bg-info text-white rounded" href="#"><b>Link C</b></a>
                        </div>
                        <div class="col-sm-2 px-2 mt-5 text-center rounded">
                            <a class="nav-link p-0 bg-info text-white rounded" href="http://websampaio.com.br/e-painel/"><b>E-PAINEL</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 border-left border-secondary align-self-center">
                    <div Class="col-sm-3 p-0 mt-2 text-light h6"><i class="fas fa-user fa-md fa-fw text-light"></i> Login</div>
                    <form class="m-0">
                        <div Class="form-row">
                            <div class="form-group col-sm-5">
                                <input class="form-control form-control-sm" type="text" style="text-transform: uppercase;" placeholder="USUÁRIO" required>
                            </div>
                            <div class="form-group col-sm-5">
                                <input class="form-control form-control-sm" type="password" style="text-transform: uppercase;" placeholder="SENHA" required>
                            </div>
                            <div class="form-group col-sm-2 text-sm-center">
                                <button class="btn btn-sm btn-info" type="submit" title="Entrar">Acessar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div id="site">
            <div class="h2 mt-2 p-4 bg-secondary text-white text-center rounded">GERÊNCIE SEU NEGÓCIO DE QUALQUER LUGAR</div>
        </div>
    </body>
    <footer>
        <div class="container-fluid fixed-bottom">
            <div class="row p-2 fundo-verde">
                <div class="col-sm-4 text-md-left text-sm-center">
                    <a class="nav-link p-0 text-light" href="index.php" title="www.websampaio.com.br">www.websampaio.com.br</a>
                </div>
                <div class="col-sm-4 text-center">

                </div>
                <div class="col-sm-4 text-md-right text-sm-center">
                    <div class="text-white" id="data-hora"></div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Função para formatar 1 em 01
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }

        // Cria intervalo
        const interval = setInterval(() => {
            // Pega o horário atual
            const now = new Date();

            // Formata a data conforme dd/mm/aaaa hh:ii:ss
            const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear() + ' - ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

            // Exibe na tela usando a div#data-hora
            document.getElementById('data-hora').innerHTML = dataHora;
        }, 1000);
    </script> 
</html>