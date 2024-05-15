<!-- <?php
	// incluye la conexion BD
	// require_once('');

	// class CrudCliente
	// {
	// 	//constructor de la clase
	// 	public function construct(){}

	// 	//metodo para insertar
	// 	public function insertar($Cliente)
	// 	{
    //        	$db=Db::conectar();
    //        // se crea la linea de insertar
    //        	$inserta=$db->prepare('INSERT INTO registroinquilino values(NULL,:Nombre,:Apellido,:Numero,:Arriendo,:Cedula,:Residencia,:Valor,:Resultado,:Fecha)');
    //        	$inserta->bindValue('Nombre',$Cliente->getNombre());
    //        	$inserta->bindValue('Apellido',$Cliente->getApellido());
    //        	$inserta->bindValue('Numero',$Cliente->getNumero());
    //        	$inserta->bindValue('Arriendo',$Cliente->getArriendo());
    //        	$inserta->bindValue('Cedula',$Cliente->getCedula());
    //        	$inserta->bindValue('Residencia',$Cliente->getResidencia());
	// 		$inserta->bindValue('Valor',$Cliente->getValor());
	// 		$inserta->bindValue('Resultado',$Cliente->getResultado());
	// 		$inserta->bindValue('Fecha',$Cliente->getFecha());
	
	// 		$inserta->execute();
	// 	}
	// 	//otro metodo de prueba
	// 	public function verDatos()
	// 	{
	// 		$db=Db::conectar();
	// 	 	$lista_clientes=[];
	// 		$select=$db->query('SELECT * FROM registroinquilino');

	// 		foreach ($select->fetchAll() as $Cliente){
	// 		    $myClientes = new Cliente();
	// 		    $myClientes->setNombre($Cliente['Nombre']);
	// 		    $myClientes->setArriendo($Cliente['Arriendo']);
	// 		    $myClientes->setCedula($Cliente['Cedula']);
			   
	// 		    $lista_clientes[] = $myClientes;
	// 		}
	// 		return $lista_clientes;
	// 	}
	// 	// metodo para mostrar
	// 	public function mostrar()
	// 	{
	// 		$db=Db::conectar();
	// 	 	$lista_clientes=[];
	// 		$select=$db->query('SELECT * FROM registroinquilino');

	// 		foreach ($select->fetchAll() as $Cliente) 
	// 		{
	// 		    $myClientes = new Cliente();
	// 		    $myClientes->setID($Cliente['ID']);
	// 		    $myClientes->setNombre($Cliente['Nombre']);
	// 		    $myClientes->setApellido($Cliente['Apellido']);
	// 		    $myClientes->setNumero($Cliente['Numero']);
	// 		    $myClientes->setArriendo($Cliente['Arriendo']);
	// 			$myClientes->setValor($Cliente['Valor']);
	// 		    $myClientes->setCedula($Cliente['Cedula']);
	// 		    $myClientes->setResidencia($Cliente['Residencia']);
	// 			$myClientes->setResultado($Cliente['Resultado']);
	// 			$myClientes->setFecha($Cliente['Fecha']);
			   
	// 		    $lista_clientes[] = $myClientes;
	// 		}
	// 		return $lista_clientes;
	// 	}

	// 	//metodo delete
	// 	public function eliminar($ID)
	// 	{
	// 		$db=Db::conectar();
	// 		$eliminar=$db->prepare('DELETE FROM registroinquilino WHERE ID=:ID');
	// 		$eliminar->bindValue('ID',$ID);
	// 		$eliminar->execute();
	// 	}

	// 	//metodo buscar Clientes
	// 	public function obtenerClientes($ID)
	// 	{
    // 		$db=Db::conectar();
    // 		$select=$db->prepare('SELECT * FROM registroinquilino WHERE ID=:ID');
    // 		$select->bindValue('ID',$ID);
    // 		$select->execute();
    // 		$Cliente = $select->fetch();
    // 		$myClientes = new Cliente();
	// 		$myClientes->setID($Cliente['ID']);
	// 		$myClientes->setNumero($Cliente['Numero']);
	// 		$myClientes->setArriendo($Cliente['Arriendo']);
	// 		$myClientes->setValor($Cliente['Valor']);
	// 		$myClientes->setResidencia($Cliente['Residencia']);
	// 		$myClientes->setResultado($Cliente['Resultado']);
	// 		$myClientes->setFecha($Cliente['Fecha']);
			   
    // 		return $myClientes;
	// 	}

	// 	public function actualizar($Cliente)
	// 	{
    //  		$db=Db::conectar();
    //  		$actualizar=$db->prepare('UPDATE registroinquilino SET Numero=:Numero,Arriendo=:Arriendo,Residencia=:Residencia,Valor=:Valor,Resultado=:Resultado,Fecha=:Fecha WHERE ID=:ID');
    //  		$actualizar->bindValue('ID',$Cliente->getID());
	// 		$actualizar->bindValue('Numero',$Cliente->getNumero());
    //  		$actualizar->bindValue('Arriendo',$Cliente->getArriendo());
    //  		$actualizar->bindValue('Residencia',$Cliente->getResidencia());
	// 		$actualizar->bindValue('Valor',$Cliente->getValor());
	// 		$actualizar->bindValue('Resultado',$Cliente->getResultado());
	// 		$actualizar->bindValue('Fecha',$Cliente->getFecha());
    //         $actualizar->execute();
	// 	}

	// }
?> 