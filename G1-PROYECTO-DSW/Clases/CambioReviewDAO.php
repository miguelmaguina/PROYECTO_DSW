<?php
if (!class_exists('CambioReviewDAO'))
{
    class CambioReviewDAO
    {
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

        public function getArrayClientesSolicitantes(){
            $ArrayIdClientesSolicitantes;
            
            $query = "SELECT ID_Cliente FROM Review WHERE Estado={$_POST["estadobase2"]}";
    
            try{
                $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $idClienteSolicitante);
    
                while(mysqli_stmt_fetch($stmt)) {
                    $ArrayIdClientesSolicitantes[] = $idClienteSolicitante;
                }
    
            } catch (Exception $e) {
                echo "Error al conseguir el array de nro de reviews por mes " . $e->getMessage();
                $ArrayIdClientesSolicitantes = null;
            } finally{
                if($stmt){
                    mysqli_stmt_close($stmt);
                }
            }
            return $ArrayIdClientesSolicitantes;
        }
    }
}
?>