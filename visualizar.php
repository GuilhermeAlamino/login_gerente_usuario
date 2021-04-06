<?php
    include("./head.php");
    require_once("./banco.php");

//trata os dados recebidos
 if($_GET['type'] == 'funcionario'){
    $query = " SELECT * FROM projetinho1 WHERE id = {$_GET['user']} ";
    $items = searchUser($query);
 }else{
    $query = " SELECT * FROM projetinho1 ";
    $items = searchUser($query);
 }

function searchUser($params){
    $pdo = new PDO('mysql:host=localhost;dbname=projetinho', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query($params);
    $dados = $stmt->fetchAll();
    return $dados;
}
?>


<div class="container mb-3 mt-3">

<h4>Bem vindo</h4>1
<p><a href="index.php">Retornar ao login</a></p>

<table class="table table-striped table-bordered mytabledata" style="width:100%;">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>Tipo</th>
    </tr>
    </thead>

    <tbody >
    <?php foreach ($items as $item){ ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nome'] ?></td>
            <td><?= $item['sobrenome'] ?></td>
            <td><?= $item['email'] ?></td>
            <td><?= $item['tipo'] ?></td>
        </tr>
    <?php }?>
    </tbody>
</table>
</div>




<?php
    include("./footer.php");
?>