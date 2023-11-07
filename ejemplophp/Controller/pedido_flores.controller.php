<?php
require_once 'Model/pedido_flores.php';

class pedido_floresController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new pedido_flores();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/pedido_flores.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new pedido_flores();
        
        if(isset($_REQUEST['idpedido'])){
            $alm = $this->model->getting($_REQUEST['idpedido']);
        }
        
        require_once 'View/header.php';
        require_once 'View/pedido_flores-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new pedido_flores();
        
        $alm->idpedido = $_REQUEST['idpedido'];
        $alm->idcliente = $_REQUEST['idcliente'];
        $alm->idproducto = $_REQUEST['idproducto'];
        $alm->color = $_REQUEST['color'];
        $alm->cantidad = $_REQUEST['cantidad'];
        $alm->numtelefono = $_REQUEST['numtelefono'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->tipopago = $_REQUEST['tipopago'];

        // SI ID pedido ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA pedido, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idpedido > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpedido > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idpedido']);
        header('Location: index.php');
    }
}
