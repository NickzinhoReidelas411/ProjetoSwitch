<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['opcao'])) {
    $opcao = $_POST['opcao'];
    switch ($opcao) {
        case 'A':
            $icone = '&#128101;';
            $mensagem = 'Modulo de Cadastro de Clientes aberto com sucesso!';
            $tipo = 'sucesso'; break;
        case 'B':
            $icone = '&#128230;';
            $mensagem = 'Modulo de Cadastro de Produtos aberto com sucesso!';$tipo='sucesso';break;
        case 'C':
            $icone='&#128202;';$mensagem='Modulo de Relatorio de Vendas aberto com sucesso!';$tipo='sucesso';break;
        case 'D':
            $icone='&#127981;';$mensagem='Modulo de Controle de Estoque aberto com sucesso!';$tipo='sucesso';break;
        case 'E':
            $icone='&#9881;';$mensagem='Modulo de Configuracoes aberto com sucesso!';$tipo='sucesso';break;
        case 'F':
            $icone='&#128682;';$mensagem='Voce saiu do sistema. Ate logo!';$tipo='sucesso';break;
        default:
            $icone = '&#10060;';
            $mensagem = 'Opcao invalida. Selecione um modulo valido.';
            $tipo = 'erro'; break;
    }
} else {
    $icone = '&#8505;';
    $mensagem = 'Selecione um modulo no menu acima para continuar.';
    $tipo = '';
}
?>
