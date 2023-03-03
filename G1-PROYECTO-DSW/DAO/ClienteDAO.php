<?php
//require '../../Conexion/Conexion.php';
//require '../../Clases/Cliente.php';
// si tienes problemas quitale "../"

class ClienteDAO {
    //Atributos
    private $conexion;

    //Constructor
    public function __construct(){
        $this->conexion = new Conexion();
    }

    //Destructor (Se ejecutará al final del script)
    public function __destruct() {
        $this->conexion->close();
    }

    //CRUD
    public function listar(){
        $clientes = array();
        $query = "SELECT * FROM Cliente";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Cliente, $Nombres, $Apellidos, $Email, $Celular, $Contrasena, $Departamento, $Usuario, $DNI, $Fecha_Creacion, $Foto_Perfil);

            while (mysqli_stmt_fetch($stmt)) {
                $cliente = new Cliente();
                $cliente->setID_Cliente($ID_Cliente);
                $cliente->setNombres($Nombres);
                $cliente->setApellidos($Apellidos);
                $cliente->setEmail($Email);
                $cliente->setCelular($Celular);
                $cliente->setContrasena($Contrasena);
                $cliente->setDepartamento($Departamento);
                $cliente->setUsuario($Usuario);
                $cliente->setDNI($DNI);
                $cliente->setFecha_Creacion($Fecha_Creacion);
                $cliente->setFoto_Perfil($Foto_Perfil);
                $clientes[] = $cliente;
            }

        } catch (Exception $e) {
            echo "Error al listar clientes: " . $e->getMessage();
            $clientes = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $clientes;
    }

    /*
    Nota: El primero parametro de la funcion 'bind_param' requiere que se especifique el tipo de elemento que se le pasa.
        i: para variables de tipo entero
        d: para variables de tipo punto flotante
        s: para variables de tipo cadena (string)
        b: para variables de tipo blob
        ETC...
    */

    public function insert(Cliente $cliente){

        $query = "INSERT INTO Cliente(Nombres, Apellidos, email, Celular, Contraseña, Departamento, Usuario, DNI, Fecha_Creacion, Foto_Perfil) VALUES (?,?,?,?,?,?,?,?,?,?)";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            //$ID_Cliente = $cliente->getID_Cliente(); //i
            $Nombres = $cliente->getNombres(); //s
            $Apellidos = $cliente->getApellidos(); //s
            $Email = $cliente->getEmail(); //s
            $Celular = $cliente->getCelular(); //s
            $Contrasena = $cliente->getContrasena(); //s
            $Departamento = $cliente->getDepartamento(); //s
            $Usuario = $cliente->getUsuario(); //s
            $DNI = $cliente->getDNI(); //s
            $Fecha_Creacion = $cliente->getFecha_Creacion(); //s
            $Foto_Perfil = $cliente->getFoto_Perfil(); //s

            mysqli_stmt_bind_param($stmt, "ssssssssss", $Nombres, $Apellidos, $Email, $Celular, $Contrasena, $Departamento, $Usuario, $DNI, $Fecha_Creacion, $Foto_Perfil);
            mysqli_stmt_execute($stmt);
        
        } catch (Exception $e) {
            echo "Error al insertar cliente: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function update(Cliente $cliente) {

        $query = "UPDATE Cliente SET Nombres=?, Apellidos=?, Email=?, Celular=?, Contrasena=?, Departamento=?, Usuario=?, DNI=?, Fecha_Creacion=?, Foto_Perfil=? WHERE ID_Cliente=?";

        try {
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);

            $Nombres = $cliente->getNombres(); //s
            $Apellidos = $cliente->getApellidos(); //s
            $Email = $cliente->getEmail(); //s
            $Celular = $cliente->getCelular(); //s
            $Contrasena = $cliente->getContrasena(); //s
            $Departamento = $cliente->getDepartamento(); //s
            $Usuario = $cliente->getUsuario(); //s
            $DNI = $cliente->getDNI(); //s
            $Fecha_Creacion = $cliente->getFecha_Creacion(); //s
            $Foto_Perfil = $cliente->getFoto_Perfil(); //s
            $ID_Cliente = $cliente->getID_Cliente(); //i

            mysqli_stmt_bind_param($stmt, "ssssssssssi", $Nombres, $Apellidos, $Email, $Celular, $Contrasena, $Departamento, $Usuario, $DNI, $Fecha_Creacion, $Foto_Perfil, $ID_Cliente);
            mysqli_stmt_execute($stmt);

        } catch (Exception $e) {
            echo "Error al actualizar cliente: " . $e->getMessage();
        } finally {
            if ($stmt) {
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function delete($ID_Cliente) {
        $query = "DELETE FROM Cliente WHERE ID_Cliente=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "s", $ID_Cliente);
            mysqli_stmt_execute($stmt);
        } catch (Exception $e) {
            echo "Error al eliminar cliente: " . $e->getMessage();
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
    }

    public function listarPorIdCliente($ID_Cliente_Buscado){

        $query = "SELECT * FROM Cliente WHERE ID_Cliente=?";

        try{

            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_bind_param($stmt, "i", $ID_Cliente_Buscado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Cliente, $Nombres, $Apellidos, $Email, $Celular, $Contrasena, $Departamento, $Usuario, $DNI, $Fecha_Creacion, $Foto_Perfil);
            
            if (mysqli_stmt_fetch($stmt)) {
                $cliente = new cliente();
                $ID_Cliente = $cliente->getID_Cliente(); //i
                $Nombres = $cliente->getNombres(); //s
                $Apellidos = $cliente->getApellidos(); //s
                $Email = $cliente->getEmail(); //s
                $Celular = $cliente->getCelular(); //s
                $Contrasena = $cliente->getContrasena(); //s
                $Departamento = $cliente->getDepartamento(); //s
                $Usuario = $cliente->getUsuario(); //s
                $DNI = $cliente->getDNI(); //s
                $Fecha_Creacion = $cliente->getFecha_Creacion(); //s
                $Foto_Perfil = $cliente->getFoto_Perfil(); //s
            }

        } catch (Exception $e) {
            echo "Error al listar 1 cliente: " . $e->getMessage();
            $cliente = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $cliente;
    }

    public function verificaUsuario($user){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT Usuario FROM Cliente WHERE usuario=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $Usuario);

            if(mysqli_stmt_fetch($stmt)){
                //$_SESSION['user_id']=$row['ID_Cliente'];
                $r=1;
            }

            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        return $r;
    }

    public function verificaEmail($emai){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT Usuario FROM Cliente WHERE email=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_bind_param($stmt, "s", $emai);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $Usuario);

            if(mysqli_stmt_fetch($stmt)){
                //$_SESSION['user_id']=$row['ID_Cliente'];
                $r=1;
            }

            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        return $r;
    }

    public function verificaLogin($email,$contra){
        $r=0;//1 existe  0 no existe
        $sql = "SELECT ID_Cliente, Nombres, Usuario FROM Cliente WHERE Email=? AND Contraseña=?";
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $sql);
            mysqli_stmt_bind_param($stmt, "ss", $email, $contra);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Cliente, $Nombres, $Usuario);

            if(mysqli_stmt_fetch($stmt)){
                //$_SESSION['user_id']=$row['ID_Cliente'];
                //echo "el id es:".$ID_Cliente." ";
                $_SESSION['id_usuario_c'] = $ID_Cliente;
                $_SESSION['nombre_c'] = $Nombres;
                $_SESSION['nombre_c'] = $Usuario;
                $_SESSION['tipo_usuario'] = 'cliente';
                $r=1;
            }// }else{
            //     echo "No hay";
            // }

            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        return $r;
    }

}
?> 


