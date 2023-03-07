<?php
require_once('tcpdf/tcpdf.php'); //Llamando a la Libreria TCPDF
//include('tcpdf//tcpdf.php');
//require_once('conexion.php'); //Llamando a la conexión para BD
//require_once('DAO/ProformaDAO.php');
require '../../Conexion/Conexion.php';
date_default_timezone_set('America/Lima');

class DescargarReporte_PDF{
    private $conexion;
    public function __construct(){
        $this->conexion = new Conexion();
    }
}

ob_end_clean(); //limpiar la memoria


class MYPDF extends TCPDF{
    
      
    	public function Header() {
            $bMargin = $this->getBreakMargin();
            $auto_page_break = $this->AutoPageBreak;
            $this->SetAutoPageBreak(false, 0);
            $img_file = dirname( __FILE__ ) .'Image/hallpa.png';
            $this->Image($img_file, 85, 8, 20, 25, '', '', '', false, 30, '', false, false, 0);
            $this->SetAutoPageBreak($auto_page_break, $bMargin);
            $this->setPageMark();
	    }
}


//Iniciando un nuevo pdf
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);
 
//Establecer margenes del PDF
$pdf->SetMargins(20, 35, 25);
$pdf->SetHeaderMargin(20);
$pdf->setPrintFooter(false);
$pdf->setPrintHeader(true); //Eliminar la linea superior del PDF por defecto
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM); //Activa o desactiva el modo de salto de página automático
 
//Informacion del PDF
$pdf->SetCreator('Hallpa');
$pdf->SetAuthor('Hallpa');
$pdf->SetTitle('Informe de Productos');
 
/** Eje de Coordenadas
 *          Y
 *          -
 *          - 
 *          -
 *  X ------------- X
 *          -
 *          -
 *          -
 *          Y
 * 
 * $pdf->SetXY(X, Y);
 */

//Agregando la primera página
$pdf->AddPage();
$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(150, 20);
$pdf->Write(0, 'Código: 0014ABC');
$pdf->SetXY(150, 25);
$pdf->Write(0, 'Fecha: '. date('d-m-Y'));
$pdf->SetXY(150, 30);
$pdf->Write(0, 'Hora: '. date('h:i A'));

$canal ='Nombre';
$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(15, 20); //Margen en X y en Y
$pdf->SetTextColor(204,0,0);
$pdf->Write(0, 'Empresa: Hallpa');
$pdf->SetTextColor(0, 0, 0); //Color Negrita
$pdf->SetXY(15, 25);
$pdf->Write(0, 'Cliente: ');



$pdf->Ln(35); //Salto de Linea
$pdf->Cell(40,26,'',0,0,'C');
/*$pdf->SetDrawColor(50, 0, 0, 0);
$pdf->SetFillColor(100, 0, 0, 0); */
$pdf->SetTextColor(34,68,136);
//$pdf->SetTextColor(255,204,0); //Amarillo
//$pdf->SetTextColor(34,68,136); //Azul
//$pdf->SetTextColor(153,204,0); //Verde
//$pdf->SetTextColor(204,0,0); //Marron
//$pdf->SetTextColor(245,245,205); //Gris claro
//$pdf->SetTextColor(100, 0, 0); //Color Carne
$pdf->SetFont('helvetica','B', 15); 
$pdf->Cell(100,6,'LISTA DE PRODUCTOS',0,0,'C');


$pdf->Ln(10); //Salto de Linea
$pdf->SetTextColor(0, 0, 0); 

//Almando la cabecera de la Tabla
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('helvetica','B',12); //La B es para letras en Negritas
$pdf->Cell(35,6,'N° de Producto',1,0,'C',1);
$pdf->Cell(50,6,'Nombre',1,0,'C',1);
$pdf->Cell(30,6,'Cantidad',1,0,'C',1);
$pdf->Cell(35,6,'Precio unitario',1,0,'C',1); 
$pdf->Cell(30,6,'Precio',1,1,'C',1); 
/*El 1 despues de  Fecha Ingreso indica que hasta alli 
llega la linea */

$pdf->SetFont('helvetica','',10);


//SQL para consultas Empleados
//$fechaInit = date("Y-m-d", strtotime($_POST['fecha_ingreso']));
//$fechaFin  = date("Y-m-d", strtotime($_POST['fechaFin']));
//SELECT proforma.ID_Proforma, producto.Nombre, proforma.Cantidad, producto.Precio
//FROM proforma
//INNER JOIN producto
//ON proforma.ID_Producto = producto.ID_Producto;
$conexion = mysqli_connect("localhost", "root", "","proyfinal_dsw_g1");
$sqlProforma = ("SELECT proforma.ID_Proforma, producto.Nombre, proforma.Cantidad, producto.Precio, cliente.Nombres, cliente.Apellidos
                FROM proforma
                INNER JOIN producto
                ON proforma.ID_Producto = producto.ID_Producto
                INNER JOIN cliente
                ON proforma.ID_Cliente = cliente.ID_Cliente;");
//$sqlTrabajadores = ("SELECT * FROM trabajadores");
$query = mysqli_query($conexion, $sqlProforma);
$contador = 0;

/*while ($dataRow = mysqli_fetch_array($query)) {
        $pdf->Cell(35,6,($dataRow[0]),1,0,'C');
        $pdf->Cell(50,6,$dataRow[1],1,0,'C');
        $pdf->Cell(30,6,$dataRow[2],1,0,'C');
        $pdf->Cell(30,6,('S/ '. $dataRow[3]),1,0,'C');
        $pdf->Cell(30,6,('S/ '. $dataRow[3]*$dataRow[2]),1,0,'C');
                

            $pdf->Ln(); // Agrega una nueva línea
        
    }*/
    $total = 0; // Variable para almacenar la suma

    while ($dataRow = mysqli_fetch_array($query)) {
        $pdf->Cell(35,6,($dataRow[0]),1,0,'C');
        $pdf->Cell(50,6,$dataRow[1],1,0,'C');
        $pdf->Cell(30,6,$dataRow[2],1,0,'C');
        $pdf->Cell(35,6,('S/ '. $dataRow[3]),1,0,'C');
        
        $subtotal = $dataRow[3] * $dataRow[2]; // Multiplicación de la columna 2 y 3
        $total += $subtotal; // Agregar el subtotal a la variable total
        $nombreCliente = $dataRow['Nombres'] . ' ' . $dataRow['Apellidos'];
        
        $pdf->Cell(30,6,('S/ '. $subtotal),1,0,'C');
        $pdf->Ln(); // Agrega una nueva línea
    }
    
    // Imprimir la suma total fuera del ciclo while
    //$pdf->Cell(22,40,'Importe Total:',0,0,'C');
    //$pdf->Cell(20,40,'S/ '. $total,0,0,'C');

    $pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
    $pdf->SetXY(15, 150); //Margen en X y en Y
    $pdf->SetTextColor(204,0,0);
    $pdf->Write(0, 'Importe total:');


    $pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
    $pdf->SetXY(40, 150); //Margen en X y en Y
    $pdf->SetTextColor(0,0,0);
    $pdf->Write(0,'S/ '. $total);

    $pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
    $pdf->SetXY(29, 25); //Margen en X y en Y
    $pdf->SetTextColor(0,0,0);
    $pdf->Write(0,$nombreCliente);

    $pdf->Image('../../Image/marcaDeAgua.jpg', 60, 170, 100);
    

    //$pdf->Cell(100,6,'LISTA DE PRODUCTOS',0,0,'C');
  
//$pdf->AddPage(); //Agregar nueva Pagina

$pdf->Output('Resumen_Pedido_'.date('d_m_y').'.pdf', 'I'); 

// Output funcion que recibe 2 parameros, el nombre del archivo, ver archivo o descargar,
// La D es para Forzar una descarga
