<?php
session_start();

include_once('../../../bancoDados/conexaoNotas/conexaoNotas.php');

// Acessar o if quando e selecionado quando o usuario selecionar pelo menos 1 estrela
if(!empty($_POST['estrela'])){ // se ele for diferente de vazio

    // Receber os dados do formulario
    $avaliacoes = filter_input(INPUT_POST, 'estrela', FILTER_DEFAULT);
    $mensagem = filter_input(INPUT_POST, 'comentario', FILTER_DEFAULT);
    
    /* Criando a query para cadastrar no banco de dados */
    $sql = "INSERT INTO aquamem2reinoperdido(nota,comentario,data_comentario) VALUE('$avaliacoes','$mensagem',NOW())";
    $result = mysqli_query($connNota, $sql);

    if(!$result){
        // Cria mensagem de erro 
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: avaliação não cadastrada</p>";
    }else{
        header('Location: aquamen.php');
    }

}else{

    // Cria mensagem de erro 
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: tem que selecionar ao menos 1 estrela</p>";

    // Redirecionando o usuario
    header('Location: aquamen.php');
}

?>