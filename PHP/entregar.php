<?php 
    session_start();

    // incluir a conexão
    include_once("conexao.php");


    $id=$_POST["id"];
    

    //chamar o banco de dados "chaves"
    $chave = "SELECT * FROM chaves where numero=".$id." and usuario='".$_SESSION["matricula"]."'";
    //chamar os dados do banco de dados
    $resultado = mysqli_query($conexao, $chave);
    //contar quantas vezes aparece no banco de dados
    $row = mysqli_num_rows($resultado);
    echo $row;
    if($row==1){
        $atualizar="UPDATE chaves SET usuario = 'ninguém', estado='livre' WHERE (numero = ".$id.")";
        if($conexao=mysqli_query($conexao, $atualizar)){
            echo "deu certo"; 
        }else{
            echo "erro ao conectar com o banco de dados";
            die( mysqli_error( $conexao ) );
        }
        exit();  
    }else{
        echo "2";
        exit();
    }


?>