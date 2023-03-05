<?php

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
                    AND MONTH(Review.Fecha) = MONTH(NOW())-1
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
                    AND MONTH(Lista_Favoritos.Fecha) = MONTH(NOW())-1
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

    public function getArrayNumeroDeFavoritosPorMes(){
        $ArrayNumeroDeFavoritosPorMes;
        
        $query = "  SELECT n.numero AS Mes, COUNT(r.ID_Lista_Favoritos) AS nro_de_favoritos
                    FROM (
                        SELECT 1 AS numero UNION SELECT 2 UNION SELECT 3 UNION SELECT 4
                        UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8
                        UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
                    ) n
                    LEFT JOIN Producto p ON p.ID_Emprendimiento = {$_SESSION['id_e']}
                    LEFT JOIN Lista_Favoritos r ON p.ID_Producto = r.ID_Producto AND MONTH(r.Fecha) = n.numero
                    GROUP BY n.numero";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $mes, $nro_de_favoritos);

            while(mysqli_stmt_fetch($stmt)) {
                $ArrayNumeroDeFavoritosPorMes[] = $nro_de_favoritos;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el array de nro de favoritos por mes " . $e->getMessage();
            $ArrayNumeroDeFavoritosPorMes = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $ArrayNumeroDeFavoritosPorMes;
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
                    AND MONTH(Proforma.Fecha) = MONTH(NOW())-1
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

    public function getArrayNumeroDeProformasPorMes(){
        $ArrayNumeroDeProformasPorMes;
        
        $query = "  SELECT n.numero AS Mes, COUNT(r.ID_Proforma) AS nro_de_proformas
                    FROM (
                        SELECT 1 AS numero UNION SELECT 2 UNION SELECT 3 UNION SELECT 4
                        UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8
                        UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
                    ) n
                    LEFT JOIN Producto p ON p.ID_Emprendimiento = {$_SESSION['id_e']}
                    LEFT JOIN Proforma r ON p.ID_Producto = r.ID_Producto AND MONTH(r.Fecha) = n.numero
                    GROUP BY n.numero";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $mes, $nro_de_proformas);

            while(mysqli_stmt_fetch($stmt)) {
                $ArrayNumeroDeProformasPorMes[] = $nro_de_proformas;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el array de nro de proformas por mes " . $e->getMessage();
            $ArrayNumeroDeProformasPorMes = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $ArrayNumeroDeProformasPorMes;
    }

    public function getArrayProductosPopulares(){
        $ArrayProductosPopulares;
        $ArrayNroDeProductosPopulares;
        
        $query = "  SELECT p.Nombre AS Producto, COALESCE(COUNT(lf.ID_Lista_Favoritos), 0) AS VecesFavorito
                    FROM Producto p
                    LEFT JOIN Lista_Favoritos lf ON p.ID_Producto = lf.ID_Producto
                    WHERE p.ID_Emprendimiento = {$_SESSION['id_e']}
                    GROUP BY p.Nombre
                    ORDER BY COALESCE(COUNT(lf.ID_Lista_Favoritos), 0) DESC, p.Nombre ASC
                    LIMIT 5";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $Producto, $VecesFavorito);

            while(mysqli_stmt_fetch($stmt)) {
                $ArrayProductosPopulares [] = $Producto;
                $ArrayNroDeProductosPopulares[] = $VecesFavorito;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el array de productos populares " . $e->getMessage();
            $ArrayProductosPopulares = null;
            $ArrayNroDeProductosPopulares = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $ArrayProductosPopulares;
    }

    public function getArrayNroProductosPopulares(){
        $ArrayProductosPopulares;
        $ArrayNroDeProductosPopulares;
        
        $query = "  SELECT p.Nombre AS Producto, COALESCE(COUNT(lf.ID_Lista_Favoritos), 0) AS VecesFavorito
                    FROM Producto p
                    LEFT JOIN Lista_Favoritos lf ON p.ID_Producto = lf.ID_Producto
                    WHERE p.ID_Emprendimiento = {$_SESSION['id_e']}
                    GROUP BY p.Nombre
                    ORDER BY COALESCE(COUNT(lf.ID_Lista_Favoritos), 0) DESC, p.Nombre ASC
                    LIMIT 5";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $Producto, $VecesFavorito);

            while(mysqli_stmt_fetch($stmt)) {
                $ArrayProductosPopulares [] = $Producto;
                $ArrayNroDeProductosPopulares[] = $VecesFavorito;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el array de productos populares " . $e->getMessage();
            $ArrayProductosPopulares = null;
            $ArrayNroDeProductosPopulares = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $ArrayNroDeProductosPopulares;
    }

    public function getArrayNombresProductos(){
        $ArrayNombresProductos;
        
        $query = "SELECT nombre FROM PRODUCTO WHERE ID_Emprendimiento={$_SESSION['id_e']} ORDER BY nombre ASC";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $nombre);

            while(mysqli_stmt_fetch($stmt)) {
                $ArrayNombresProductos [] = $nombre;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el array de nombres de productos" . $e->getMessage();
            $ArrayNombresProductos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $ArrayNombresProductos;
    }

    public function getArrayNroDeReviewsProductos(){
        $ArrayNroDeReviewsProductos;
        
        $query = "  SELECT p.ID_Producto, p.Nombre, COALESCE(COUNT(r.ID_Review), 0) AS numero_reviews
                    FROM Producto p
                    LEFT JOIN Review r ON p.ID_Producto = r.ID_Producto
                    WHERE p.ID_Emprendimiento = {$_SESSION['id_e']}
                    GROUP BY p.ID_Producto
                    ORDER BY p.Nombre ASC";

        try{
            $stmt = mysqli_prepare($this->conexion->getConexion(), $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $ID_Producto,$Nombre,$numero_reviews);

            while(mysqli_stmt_fetch($stmt)) {
                $ArrayNroDeReviewsProductos [] = $numero_reviews;
            }

        } catch (Exception $e) {
            echo "Error al conseguir el array de numero de reviews de productos" . $e->getMessage();
            $ArrayNroDeReviewsProductos = null;
        } finally{
            if($stmt){
                mysqli_stmt_close($stmt);
            }
        }
        return $ArrayNroDeReviewsProductos;
    }

}

?>