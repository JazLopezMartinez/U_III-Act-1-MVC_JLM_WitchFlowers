<h1 class="page-header">
    <?php echo $alm->idpedido != null ? $alm->idcliente : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=pedido_flores">Pedido</a></li>
  <li class="active"><?php echo $alm->idpedido != null ? $alm->idcliente : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=pedido_flores&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idpedido" value="<?php echo $alm->idpedido; ?>" />
    
    <div class="form-group">
        <label>IDCliente</label>
        <input type="text" name="idcliente" value="<?php echo $alm->idcliente; ?>" class="form-control" placeholder="Ingresa el ID del cliente" data-validacion-tipo="requerido|min:1" />
    </div>
    <div class="form-group">
        <label>IDProducto</label>
        <input type="text" name="idproducto" value="<?php echo $alm->idproducto; ?>" class="form-control" placeholder="Ingresa el ID del pedido" data-validacion-tipo="requerido|min:1" />
    </div>
    <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" value="<?php echo $alm->color; ?>" class="form-control" placeholder="Ingresa el color" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $alm->cantidad; ?>" class="form-control" placeholder="Ingresa la cantidad" data-validacion-tipo="requerido|min:1" />
    </div>
    <div class="form-group">
        <label>Numero Telefonico</label>
        <input type="text" name="numtelefono" value="<?php echo $alm->numtelefono; ?>" class="form-control" placeholder="Ingresa el numero telefonico" data-validacion-tipo="requerido|min:2" />
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingresa la direccion" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Tipo de Pago</label>
        <input type="text" name="tipopago" value="<?php echo $alm->tipopago; ?>" class="form-control" placeholder="Ingresa el tipo de pago" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
