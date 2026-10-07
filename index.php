<?php
// Inclui o arquivo de processamento
require_once 'processa.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- ===== CABECALHO ===== -->
    <header>
        <h1>&#128187; SistemaGer Pro</h1>
        <p class="subtitle">Painel Administrativo &mdash; Selecione um modulo para continuar</p>
    </header>

    <!-- ===== CARD PRINCIPAL ===== -->
    <div class="card">

        <!-- Formulario com metodo POST -->
        <form method="POST" action="index.php">

            <!-- Grade de botoes do menu -->
            <div class="menu-grid">

                <!-- Botao A: Cadastro de Clientes -->
                <button type="submit" name="opcao" value="A" class="btn-modulo btn-a">
                    &#128101; <span>Cadastro de Clientes</span>
                </button>

                <!-- Botao B: Cadastro de Produtos -->
                <button type="submit" name="opcao" value="B" class="btn-modulo btn-b">
                    &#128230; <span>Cadastro de Produtos</span>
                </button>

                <!-- Botao C: Relatorio de Vendas -->
                <button type="submit" name="opcao" value="C" class="btn-modulo btn-c">
                    &#128202; <span>Relatorio de Vendas</span>
                </button>

                <!-- Botao D: Controle de Estoque -->
                <button type="submit" name="opcao" value="D" class="btn-modulo btn-d">
                    &#127981; <span>Controle de Estoque</span>
                </button>

                <!-- Botao E: Configuracoes -->
                <button type="submit" name="opcao" value="E" class="btn-modulo btn-e">
                    &#9881; <span>Configuracoes</span>
                </button>

                <!-- Botao F: Sair do Sistema -->
                <button type="submit" name="opcao" value="F" class="btn-modulo btn-f">
                    &#128682; <span>Sair do Sistema</span>
                </button>

            </div><!-- /.menu-grid -->

        </form><!-- /form -->

        <!-- ===== AREA DE RESULTADO ===== -->
        <div id="resultado" class="<?php echo htmlspecialchars($tipo); ?>">
            <p>
                <?php echo $icone; ?>&nbsp;
                <?php echo htmlspecialchars($mensagem); ?>
            </p>
        </div>

    </div><!-- /.card -->

    <!-- ===== RODAPE ===== -->
    <footer>
        <p>
            &#169; 2026 &nbsp;<span>SistemaGer Pro</span> &nbsp;&mdash;&nbsp;
            Desenvolvido com PHP, HTML &amp; CSS &nbsp;|&nbsp; Versao 1.0.0
        </p>
    </footer>

</body>
</html>
