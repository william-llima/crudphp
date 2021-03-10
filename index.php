<?php

if(!isset($_SESSION)):
    session_start();
    $_SESSION["verifica"]="bG9nYWRv";
    
endif;
$_SESSION['mostra']="invalido";
require_once "vendor/autoload.php";

// $pessoa= new \App\model\Produto();
// $pessoa->setNome("Mario");
// $pessoa->setTelefone(11121317);
// $pessoa->setCidade("Garça");
// $pessoaDao=new \App\model\ProdutoDao();
// $pessoaDao->create($pessoa); 
//echo"<a href='App/view/cadastro.php'>CADASTRAR</a><br/>";
// $produtoRead=new \App\model\ProdutoDao();
// $produtoList=$produtoRead->read();
// foreach($produtoList as $produto):
// echo "<h3>".$produto["nome"]." : ".$produto["numero"]." : ".$produto["cidade"]."</h3></br>";
// endforeach;
?>
<html>
<head>
<title>CrudPHP</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="App/view/style.css">
</head>
<body>
    <center>
<?php require 'App/view/nav.php'; ?>
<div id="container-box-contato">
<?php 
$produtoRead=new \App\model\ProdutoDao();
 $produtoList=$produtoRead->read();
 foreach($produtoList as $produto):
?>
    <div id="box-contato">
        <div id='face'>
        <img src="App/view/img/group.svg">
        </div>
        <div id="information">
            <p>NOME : <?php echo substr($produto["nome"],0,10)  ?></p>
            <p>TELEFONE: <?php echo $produto["numero"] ?></p>
            <p>CIDADE: <?php echo substr($produto["cidade"],0,10) ?></p>
            
                <div id="formsbuttons">
                    <form action="App/view/atualiza.php" method="POST">
                        <input type="hidden" value="<?php echo $produto['id'] ?>" name="id">
                    <button id="buuton-box1"type="submit">AT</button>
                    </form>
                    <form action="App/view/delete.php" method="POST">
                    <input type="hidden" value="<?php echo $produto['id'] ?>" name="id">
                    <input type="hidden" value="<?php echo $produto['nome'] ?>" name="nome">
                    <button id="buuton-box2"type="submit">Dl</button>
                
                    </form>
                    </div>
                    
         </div>
    </div>
    <?php  endforeach; ?>
</div>

<?php require "App/view/footer.php" ?>
 </center>
</body>
</html>

