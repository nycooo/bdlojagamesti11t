<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoPedidos.php");
?>
<div class="container m-5 p-5">
<form action="listaTudoPedidosCod.php" method="POST">
    <div class="row mb-3">
        <label for="inputCod" class="col-sm-2 col-form-label">Digite o Código do Pedido: </label>
        <div class="col-sm-3">
            <input type="number" name="codPed" class="form-control" id="inputCod" required>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </div>
    </div>
</form>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Código do Funcionario</th>
            <th scope="col">Código do Cliente</th>
            <th scope="col">Código do Jogo</th>
            <th scope="col">Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codPed = isset($_POST['codPed'])?$_POST['codPed']:"0";
        if($codPed>0){
            $pedidos = listaTudoPedidosCod($conexao,$codPed);
            if($pedidos){
        ?>
        <tr>
            <th scope="row"><?=$pedidos['codPed']?></th>
            <td><?=$pedidos['codFunFK']?></td>
            <td><?=$pedidos['codCliFK']?></td>
            <td><?=$pedidos['codJogFK']?></td>
            <td>
                <form action="../controller/deletarPedidos.php" method="POST">
                    <input type="hidden" name="codPedDeletar" value="<?=$pedidos['codPed']?>">
                    <button type="submit" class="btn-small btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        <?php
        }
    }
        ?>
        
    </tbody>
    </table>
<?php
include_once("footer.php");
?>