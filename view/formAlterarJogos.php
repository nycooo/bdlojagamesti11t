<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoJogos.php");
?>
</br>
<div class="container3">
<div class="card">
<div class="card-body">
<form method="POST" action="../controller/alterarJogos.php">
<?php 
$codJog=$_POST['codJogAlterar'];
$jogo=listaTudoJogosCod($conexao,$codJog);
?>
    <p>Código <input type="text" name="codJog" value="<?=$jogo['codJog']?>" readonly></p>
    <p>Jogo <input type="text" name="nomeJog" value="<?=$jogo['nomeJog']?>"></p>
    <p>Tamanho do Jogo <input type="text" name="tamanhoJog" value="<?=$jogo['tamanhoJog']?>"></p>
    <p>Preço do Jogo <input type="number" name="precoJog" value="<?=$jogo['precoJog']?>"></p>
    <p>Requisitos do Jogo <input type="text" name="requisitosJog" value="<?=$jogo['requisitosJog']?>"></p>
    <p>Plataformas <input type="text" name="consoleJog" value="<?=$jogo['consoleJog']?>"></p>
    <p>Classificação <input type="number" name="classificacaoJog" value="<?=$jogo['classificacaoJog']?>"></p>
    <p>Avaliação <input type="number" name="avaliacaoJog" value="<?=$jogo['avaliacaoJog']?>"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
</div>
<?php
include_once("footer.php");
?>