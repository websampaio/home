<?php
    include_once("../home/includes/head.php"); // Inclui chamadas do head no PHP
?>
<!doctype html>
<html lang="pt-br">
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
                    <div Class="col-sm-6 p-0 mt-2 text-light h6">
                        <i class="fas fa-user fa-md fa-fw text-light"></i> Login
                    </div>
                    <form>
                        <div Class="form-row">
                            <div class="col-sm-5 m-0 form-group">
                                <input class="form-control form-control-sm" type="text" style="text-transform: uppercase;" placeholder="USUÁRIO" required>
                            </div>
                            <div class="col-sm-5 m-0 form-group">
                                <input class="form-control form-control-sm" type="password" style="text-transform: uppercase;" placeholder="SENHA" required>
                            </div>
                            <div class="col-sm-2 mb-1 form-group text-sm-center">
                                <button class="btn btn-sm btn-info" type="submit" title="Acessar">Acessar</button>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-between">
                        <div class="col-sm-4 my-1">
                            <button type="button" class="btn btn-outline-info btn-sm text-white" style="font-size: 11px; font-weight: 600" data-toggle="modal" data-target="#ModalCadastro"><i class="fas fa-user-plus fa-sm fa-fw"></i> Cadastre-se aqui</button>
                        </div>
                        <div class="col-sm-5 ml-3 my-1">
                            <button type="button" class="btn btn-outline-info btn-sm text-white" style="font-size: 11px; font-weight: 600" data-toggle="modal" data-target="#ModalCadastro"><i class="fas fa-lock fa-sm fa-fw"></i> Esqueci minha senha</button>
                        </div>
                        <div class="col-sm-2 my-1">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <body>
        <!-- Inicio Modal Cadastro -->
        <div class="modal fade" id="ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="ModalLabel"><i class="fas fa-user-plus fa-lg fa-fw"></i> Cadastre-se e conheça nossa plataforma.</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" onclick="" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="was-validated" method="POST" action="cadastro.php" enctype="multipart/form-data" autocomplete="off">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-4 form-group">
                                    <select id="tipo" name="tipo" class="custom-select text-secondary" required>
                                        <option value="" disabled selected>SELECIONE TIPO</option>
                                        <option value="1">PESSOA FÍSICA</option>
                                        <option value="2">PESSOA JURÍDICA</option>
                                    </select>
                                </div>  
                                <div class="col-5 form-group">
                                    <input class="form-control is-invalid maiusculo" type="text" id="cnpj_cpf" name="cnpj_cpf" onKeyPress="SoNumero(this);" onKeyPress="MascaraCNPJ_CPF(this);" maxlenght="18" placeholder="CPF / CNPJ" required/>
                                </div>                                
                                <div class="col-9 form-group">
                                    <input class="form-control is-invalid maiusculo" type="text" id="nome" name="nome" placeholder="NOME COMPLETO" required autocomplete="off"/>
                                </div>
                                <div class="col-6 form-group">
                                    <span class="text-secondary">Especialidade 1</span>
                                    <select id="add_especialidade_1" name="add_especialidade_1" class="custom-select text-secondary" required>
                                        <option value="" disabled selected>SELECIONE A ESPECIALIDADE 1</option>
                                        <?php
                                            $sel_especialidades = mysqli_query($conn, "SELECT * FROM especialidades ORDER BY especialidade");
                                            while($lista_especialidades = mysqli_fetch_array($sel_especialidades)) { ?>
                                                <option value="<?php echo $lista_especialidades['id_especialidade'];?>"><?php echo $lista_especialidades['especialidade'];?></option>
                                        <?php }?>
                                    </select>
                                </div>  
                            </div>
                        </div>                       
                        <div class="modal-footer">
                            <button type="submit" id="gravar" name="gravar" value="gravar" class="btn btn-success" disabled="disabled"><i class="fas fa-save fa-lg fa-fw"></i> Gravar</button>
                            <button class="btn btn-danger " data-dismiss="modal" onclick=""><i class="fas fa-times-circle fa-lg fa-fw"></i> Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Fim Modal Cadastro -->
        <div id="site">
            <div class="h2 mt-2 p-4 bg-secondary text-white text-center rounded">GERÊNCIE SEU NEGÓCIO DE QUALQUER LUGAR</div>
        </div>
    </body>
    <footer>
        <div class="container-fluid fixed-bottom" style="font-size: 14px">
            <div class="row p-2 fundo-verde">
                <div class="col-sm-4 text-md-left text-sm-center">
                    <a class="nav-link p-0 text-light" href="mailto:mpsampaio@websampaio.com.br" title="mpsampaio@websampaio.com.br">Contato: mpsampaio@websampaio.com.br</a>
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