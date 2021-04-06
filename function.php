<?php

$tipocarteira = $_GET["tipo"];

if($tipocarteira == 'gerente'){
    $query = (" SELECT * FROM projetinho1 ");
    buscarDados($query);
}elseif($tipocarteira == 'funcionario'){
    $query = (" SELECT * FROM projetinho1 WHERE tipo = '{$tipocarteira}' ");
    buscarDados($query);
}

    function buscarDados($query){
        try{
            $viapdo = new PDO('mysql:host=localhost; dbname=projetinho', 'root', '');
            $viapdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $viapdo->query($query);

            echo json_encode($consulta->fetchAll());
        }catch(PDOException $e){
            echo'erro' . $e->getMessage();
        }
    }
?>