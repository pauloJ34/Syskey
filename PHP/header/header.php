
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/main.css">  
<!--<script src="https://code.jquery.com/jquery-3.5.0.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="javascript/tableColor.js"></script>
<script src="javascript/pegarDevolver.js"></script>



<nav>
    <h2 class="titulo">SYSKEY</h2> 
    <div class="head">
        <a href="#" class="paginas" id="menu"><img src="https://image.flaticon.com/icons/png/512/56/56763.png" alt="" width="" height="30"></a>
        <div class="links">
            
            <ul style="list-style-type:none;">
            
                <li><a href="main" class= "preto paginas">Inicio</a></li>
                <hr>
                
                <?php 
                //se for um ADM vai aparecer para "cadastrar"
                    if($_SESSION["nao_adm"]):
                ?>
                
                <li><a href="cadastrar" class= "preto paginas">Cadastrar</a></li>
                <hr>
                <?php 
                    endif;
                    unset($_SESSION["não adm"]);
                //Fim da condição
                ?>

                <li><a href="PHP/Login/logout" class= "preto paginas">Sair</a></li>
            </ul>
        </div>
    </div>
    <div class="cabe">
        <a href="PHP/Login/logout" class= "paginas">Sair</a>
        <?php 
        //se for um ADM vai aparecer para "cadastrar"
            if($_SESSION["nao_adm"]):
        ?>
        <a href="cadastrar" class= "paginas">Cadastrar</a>
        <?php 
            endif;
            unset($_SESSION["não adm"]);
        //Fim da condição
        ?>
        <a href="main" class= "paginas">Inicio</a>
        </div>  
</nav>

<script type="text/javascript">
    
    document.querySelector("#menu").addEventListener("click", function(){ //quando apertar aparecer os links para outras paginas
        if(document.querySelector(".links").style.display=="block"){
            document.querySelector(".links").style.display="none"
        }else{
            document.querySelector(".links").style.display="block"
        }  
    })
    if(window.innerWidth < 580){//verificar quando carrega a pagina
        //se a pagina for menor do que 580px
        //document.querySelector(.ola).style.property="width:100%"
        document.querySelector(".cabe").hidden=true
        document.querySelector(".head").hidden=false
        document.querySelector(".links").style.display="none"
        
    }
    else{
        //se a pagina for maior do que 580px
        document.querySelector(".cabe").hidden=false
        document.querySelector(".head").hidden=true
        document.querySelector(".links").style.display="none"
            
    }
    window.onresize = function() {//verificar toda atualização de tamanho da tela
        if(window.innerWidth < 580){
            //se a pagina for menor do que 580px
            //document.querySelector(.ola).style.property="width:100%"
            document.querySelector(".cabe").hidden=true
            document.querySelector(".head").hidden=false
        }
        else{
            //se a pagina for maior do que 580px
           document.querySelector(".cabe").hidden=false
            document.querySelector(".head").hidden=true
        }
    }
</script>