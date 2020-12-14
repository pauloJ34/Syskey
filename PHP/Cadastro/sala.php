<?php
include_once("../conexao.php");
session_start();
error_reporting(0);


//verificação se ja exite
$sql="SELECT * FROM chaves where numero=".$_POST["numero"];
$result= mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);
$_SESSION['VaziuSalas']=false;
//se existir um no banco de dados, se exitir irá retornar para a pagina de cadastro
if($row == 1){
    $_SESSION['numCasd']=true;
    header("location: ../../cadastrar");
    exit();
}
//se não exitir, irá verificar se ta vaziu ou não
else{
    
    $nu=$_POST["numero"];
    $tipo=$_POST["tipo"];
    $texto=$_POST["texto"];
    //verificação se está com os campus estão vazius
    if(empty($_POST["numero"])|| empty($_POST["texto"])){
        header("location: ../../cadastrar");
        $_SESSION['VaziuSalas']=true;
        exit();
    }
    // se o "outro" estiver selecionado, vai pegar o valor do texto
    elseif($tipo=="vd"){
        $sql="INSERT INTO chaves (numero, estado, usuario, horario, tipo) VALUES ('".$nu."', 'livre', 'ninguém', '--:--/ --:--', '".$texto."')";
        $conexao=mysqli_query($conexao, $sql);
        header("location: ../../cadastrar");
        exit();
    }
    // se tiver escolhido, vai pegar o valor da seleção
    else{
        $sql="INSERT INTO chaves (numero, estado, usuario, horario, tipo) VALUES ('".$nu."', 'livre', 'ninguém', '--:--/--:--', '".$tipo."')";
        $conexao=mysqli_query($conexao, $sql);
        header("location: ../../cadastrar");
        exit();
    }
}





?>