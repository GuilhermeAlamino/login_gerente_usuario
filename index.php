<?php
include("./head.php");

require_once("./banco.php");
//iniciando sessao

session_start();

//dica 1
//function validaLogin(); //true
//function redirectUser($tipo); //gerente //funcionario

//dica 2 
// foreach para pegar os dados via POST
// PDO
?>

<section id="form">

    <form id="formularioindex">
    <h1>Bem-Vindo</h1>
    <div class="form group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" >
    </div>
    
    <div class="form group">    
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" >
    <div>

    <input type="submit" id="enviar" class="btn btn-info" name="enviar" value="Login">
    <p class="msg"></p>
    <a href="./cadastro.php" class="btn btn-info" id="cadastro" name="cadastro">Cadastrar</a>
    
    
    </form>
</section>


<?php
include("./footer.php")
?>

<script>
    $(function(e){
        $('.msg').hide();
    })
    $('#formularioindex').submit(function(e){
        e.preventDefault();

        $.ajax({
            url:'login.php',
            type:'POST',
            data:$(this).serialize(),
            async:false,
        }).done(sucesso);
            function sucesso(request){
                //chamo a função
                isJson(request);

                //valida se o request é json
                function isJson(params){
                    try{
                        if(JSON.parse(params)){
                            var user =  JSON.parse(request);
                            window.location.href = 'visualizar.php?user='+user.id+'&type='+user.tipo;
                        };
                    }catch(e){
                        //se não for json, será validações do formulário
                        $('.msg').show().html(request);
                    }
                }
        }

        }
    );
        

</script>