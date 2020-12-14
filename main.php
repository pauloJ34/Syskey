<!DOCTYPE html>
<?php 
session_start();
include_once("PHP/Login/verifica_sessao.php");
?>
<html lang="pt-br">
    <head>
        
        <link rel="shortcut icon" href="IMG/chave.png">
        <title>SYSKEY</title>
    </head>
    <body>
    
    <?php 
    include "PHP/header/header.php";
    ?>
        <!-- --------------------------------- -->
        <main>
            <button class="btRecarregar">Atualizar</button>
            <table class="tabela" >   
                <tr>    
                    <th>N° das Chaves</th>  
                    <th>Estado</th> 
                    <th>Usando</th> 
                    <th>Horários</th>
                    <th>Entregar</th>
                    <th>Pegar</th>   
                </tr>   
            </table>
        </main>

            
       
        <!-- -------------------------------- -->
    </body>
    
</html>