<html lang="pt-br">
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8" />  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title id='titulo'>WebSampaio - HOME</title>
        <link href="../mps/img/logo.png" rel="icon">
        
        <!-- Biblioteca de icones  -->
        <script src="https://kit.fontawesome.com/26715a91f4.js" crossorigin="anonymous"></script>

        <!-- jquery JS  -->
        <script src="../mps/js/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap (CSS e JS) -->
        <link href="../mps/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <header>
        <div class="container-fluid fixed-top">
            <div class="row p-3 bg-light">
                <div class="col-md-6 text-left">
                    <a class="nav-link text-dark h1" href="index.php" title="www.websampaio.com.br">
                        <img src="../mps/img/logo.png" width="50" height="50" class="" alt=""> WebSampaio
                    </a>
                </div>
                <div class="col-md-2 text-center">

                </div>
                <div class="col-md-4 bg-secondary rounded">
                    <div Class="col-md-3 p-0 mt-1 text-light h6"><i class="fas fa-user fa-md fa-fw text-light"></i> Login</div>
                    <form>
                        <div Class="form-row">
                            <div class="form-group my-1 col-lg-5">
                                <input class="form-control" type="text" style="text-transform: uppercase;" placeholder="USUÁRIO">
                            </div>
                            <div class="form-group my-1 col-lg-5">
                                <input class="form-control" type="password" style="text-transform: uppercase;" placeholder="SENHA">
                            </div>
                            <div class="form-group my-1 col-lg-2 text-sm-center">
                                <button class="btn btn-info" type="submit" title="Entrar">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="bg-info" Style="height: 800px">

        </div>
    </body>
    <footer>
        <div class="container-fluid fixed-bottom">
            <div class="row p-3 bg-dark">
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