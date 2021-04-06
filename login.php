<?php
  require_once("./banco.php");
?>

<?php
    //echo"passei";
  
    if(empty($_POST["email"]) || empty($_POST["senha"])){
      echo "Preencha todos os campos.";
    }else{
      //consulta 
      $email = $_POST['email'];
      $query = ' SELECT * FROM projetinho1 WHERE email = "'.$email.'" ';
      $result = mysqli_query($conexaoaobanco, $query);
      $informacao = mysqli_fetch_assoc($result);
      //se retornar informacao
      if(!empty($informacao)){
        echo json_encode($informacao);
      }else{
        //usuário não existe
        echo "usuário não existe";
      }
    }   
  
 ?>
