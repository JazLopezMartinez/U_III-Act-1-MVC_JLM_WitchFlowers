<?php
class pedido_flores
{
	private $pdo;
    
    public $idpedido;
    public $idcliente;
    public $idproducto;
    public $color;
    public $cantidad;
    public $numtelefono;
	public $direccion;
	public $tipopago;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblpedido_flores");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idpedido)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tblpedido_flores WHERE idpedido = ?");
			          

			$stm->execute(array($idpedido));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idpedido)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tblpedido_flores WHERE idpedido = ?");			          

			$stm->execute(array($idpedido));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tblpedido_flores SET 
						idcliente          = ?, 
						idproducto        = ?,
                        color        = ?,
						cantidad            = ?, 
						numtelefono = ?,
						direccion = ?,
						tipopago = ?
				    WHERE idpedido = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->idcliente, 
                        $data->idproducto,
                        $data->color,
                        $data->cantidad,
                        $data->numtelefono,
						$data->direccion,
						$data->tipopago,
                        $data->idpedido
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tblpedido_flores` (idcliente,idproducto,color,cantidad,numtelefono,direccion,tipopago) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idcliente, 
                    $data->idproducto,
                    $data->color,
                    $data->cantidad,
                    $data->numtelefono,
					$data->direccion,
					$data->tipopago                
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
