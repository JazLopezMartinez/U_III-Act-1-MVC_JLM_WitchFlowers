<h1 class="page-header">Pedidos</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=pedido_flores&a=Crud">Agregar Pedido</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >IDPedido</th>
            <th >IDCliente</th>
            <th>IDProducto</th>
            <th>Color</th>
            <th >Cantidad</th>
            <th >Numero telefonico</th>
            <th >Direccion</th>
            <th >Tipo de pago</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idpedido; ?></td>
            <td><?php echo $r->idcliente; ?></td>
            <td><?php echo $r->idproducto; ?></td>
            <td><?php echo $r->color; ?></td>
            <td><?php echo $r->cantidad; ?></td>
            <td><?php echo $r->numtelefono; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->tipopago; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=pedido_flores&a=Crud&idpedido=<?php echo $r->idpedido; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=pedido_flores&a=Eliminar&idpedido=<?php echo $r->idpedido; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
