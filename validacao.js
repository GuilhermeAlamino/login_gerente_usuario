$(function(){
    $('#mensagem').hide();
});

$('#formulario2').submit(function(e){
    e.preventDefault();
    var formulario = $(this);
    var retorno = retornoDado(formulario);
});

function retornoDado(dados){
    $.ajax({
        type:"POST",
        url:"banco.php",
        data:dados.serialize(),
        async:false,
    }).done(sucesso);
    function sucesso(data){
        if(sucesso){
            
            $('#mensagem').show().html("Cadastro Feito");
        }else{
            console.log("Atenção");
        }
    }
}