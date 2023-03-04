<?php

include "../../Conexion/Conexion.php";

class ReporteDAO {
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

    public function getNumeroDeReviewsTotal(){
        $nroDeReviews;

        $query = "  SELECT COUNT(ID_Review) as nroReviews
                    FROM Review
                    INNER JOIN Producto ON Review.ID_Producto = Producto.ID_Producto
                    WHERE Producto.ID_Emprendimiento = {$_SESSION['id_e']}";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nroReviews);

            if (mysqli_stmt_fetch($stmt)) {
                $nroDeReviews = $nroReviews;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el nro de Reviews " . $e->getMessage();
            $nroDeReviews = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $nroDeReviews;
    }

    public function getNumeroDeReviewsUltimoMes(){
        $nroDeReviews;

        $query = "  SELECT COUNT(ID_Review) AS nroReviews
                    FROM Review
                    INNER JOIN Producto ON Review.ID_Producto = Producto.ID_Producto
                    WHERE Producto.ID_Emprendimiento = {$_SESSION['id_e']}
                    AND MONTH(Review.Fecha)-1 = MONTH(NOW())-1
                    AND YEAR(Review.Fecha) = YEAR(NOW())";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nroReviews);

            if (mysqli_stmt_fetch($stmt)) {
                $nroDeReviews = $nroReviews;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el nro de Reviews del ultimo mes " . $e->getMessage();
            $nroDeReviews = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $nroDeReviews;
    }

    public function getArrayNumeroDeReviewsPorMes(){
        $ArraynroDeReviewsPorMes;
        
        $query = "  SELECT n.numero AS Mes, COUNT(r.ID_Review) AS nro_de_reviews
                    FROM (
                        SELECT 1 AS numero UNION SELECT 2 UNION SELECT 3 UNION SELECT 4
                        UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8
                        UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
                    ) n
                    LEFT JOIN Producto p ON p.ID_Emprendimiento = {$_SESSION['id_e']}
                    LEFT JOIN Review r ON p.ID_Producto = r.ID_Producto AND MONTH(r.Fecha) = n.numero
                    GROUP BY n.numero";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $mes, $nroReviews);

            while(mysqli_stmt_fetch($stmt)) {
                $ArraynroDeReviewsPorMes[] = $nroReviews;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el array de nro de reviews por mes " . $e->getMessage();
            $ArraynroDeReviewsPorMes = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $ArraynroDeReviewsPorMes;
    }

    public function getNumeroDeFavoritosTotal(){
        $nroDeFavoritos;

        $query = "  SELECT COUNT(ID_Lista_Favoritos) as nroFavoritos
                    FROM Lista_Favoritos
                    INNER JOIN Producto ON Lista_Favoritos.ID_Producto = Producto.ID_Producto
                    WHERE Producto.ID_Emprendimiento = {$_SESSION['id_e']}";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nroFavoritos);

            if (mysqli_stmt_fetch($stmt)) {
                $nroDeFavoritos = $nroFavoritos;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el nro de Favoritos " . $e->getMessage();
            $nroDeFavoritos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $nroDeFavoritos;
    }

    public function getNumeroDeFavoritosUltimoMes(){
        $nroDeFavoritos;

        $query = "  SELECT COUNT(ID_Lista_Favoritos) AS nroFavoritos
                    FROM Lista_Favoritos
                    INNER JOIN Producto ON Lista_Favoritos.ID_Producto = Producto.ID_Producto
                    WHERE Producto.ID_Emprendimiento = {$_SESSION['id_e']}
                    AND MONTH(Lista_Favoritos.Fecha)-1 = MONTH(NOW())-1
                    AND YEAR(Lista_Favoritos.Fecha) = YEAR(NOW())";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nroFavoritos);

            if (mysqli_stmt_fetch($stmt)) {
                $nroDeFavoritos = $nroFavoritos;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el nro de Favoritos del ultimo mes " . $e->getMessage();
            $nroDeFavoritos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $nroDeFavoritos;
    }

    public function getNumeroDeProformaTotal(){
        $nroDeProforma;

        $query = "  SELECT COUNT(ID_Proforma) as nroProforma
                    FROM Proforma
                    INNER JOIN Producto ON Proforma.ID_Producto = Producto.ID_Producto
                    WHERE Producto.ID_Emprendimiento = {$_SESSION['id_e']}";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nroProforma);

            if (mysqli_stmt_fetch($stmt)) {
                $nroDeProforma = $nroProforma;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el nro de Proforma " . $e->getMessage();
            $nroDeProforma = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $nroDeProforma;
    }

    public function getNumeroDeProformaUltimoMes(){
        $nroDeProforma;

        $query = "  SELECT COUNT(ID_Proforma) AS nroProforma
                    FROM Proforma
                    INNER JOIN Producto ON Proforma.ID_Producto = Producto.ID_Producto
                    WHERE Producto.ID_Emprendimiento = {$_SESSION['id_e']}
                    AND MONTH(Proforma.Fecha)-1 = MONTH(NOW())-1
                    AND YEAR(Proforma.Fecha) = YEAR(NOW())";
        
        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nroProforma);

            if (mysqli_stmt_fetch($stmt)) {
                $nroDeProforma = $nroProforma;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el nro de Proforma del ultimo mes " . $e->getMessage();
            $nroDeProforma = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $nroDeProforma;
    }

/*

*/

}

?>