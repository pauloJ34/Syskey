
function entregar(id){
    $.ajax({
        type:"POST",
        url:"PHP/entregar",
        data: "id="+id,
        dataType: "html",
        /*success: function(result){
            $("main").html(result);
        },error: function(){
            $("main").html("Error");
        }*/
    /*}).done(function(resposta, textStatus) {
        console.log(textStatus+" 0");*/
    }).fail(function(jqXHR, textStatus ) {
        alert("Request failed: " + textStatus);
    })
    setTimeout(function(){
    $.ajax({//quando apertar atualizar
            url: "PHP/busca",
            success: function(result){
                $(".tabela").html(result);
                var tdX=document.querySelectorAll("td")
                var trx=document.querySelectorAll("tr")
                num=1
                 //cor de estado da chave
                for(i=0; i<trx.length;i++){
                    if(tdX[num].textContent==="livre"){//verde=livre
                        trx[i+1].style.backgroundColor="lime"
                    }else if(tdX[num].textContent=="agendado"){//amarelo=agendado
                        trx[i+1].style.backgroundColor="yellow"  
                    }else if(tdX[num].textContent=="em uso"){//vermelho=usando
                        trx[i+1].style.backgroundColor="red"
                    }num+=6
                }
            },
            error: function(){
                $("main").html("Error");
            }
        })
    },100)
}
function pegar(id){
    $.ajax({
        type:"POST",
        url:"PHP/pegar",
        data: "id="+id,
        dataType: "html",
        /*success: function(result){
            $("main").html(result);
        },error: function(){
            $("main").html("Error");
        }*/
    /*}).done(function(resposta, textStatus) {
        console.log(textStatus+" 1 "+id);*/
    }).fail(function(jqXHR, textStatus ) {
        alert("Request failed: " + textStatus);
    })
    setTimeout(function(){
    $.ajax({//quando apertar atualizar
            url: "PHP/busca",
            success: function(result){
                $(".tabela").html(result);
                var tdX=document.querySelectorAll("td")
                var trx=document.querySelectorAll("tr")
                num=1
                 //cor de estado da chave
                for(i=0; i<trx.length;i++){
                    if(tdX[num].textContent==="livre"){//verde=livre
                        trx[i+1].style.backgroundColor="lime"
                    }else if(tdX[num].textContent=="agendado"){//amarelo=agendado
                        trx[i+1].style.backgroundColor="yellow"  
                    }else if(tdX[num].textContent=="em uso"){//vermelho=usando
                        trx[i+1].style.backgroundColor="red"
                    }num+=6
                }
            },
            error: function(){
                $("main").html("Error");
            }
        })
    },100)
}
