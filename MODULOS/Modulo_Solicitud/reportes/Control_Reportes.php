<<<<<<< HEAD
<?php

require("mod/reportes.php");
require_once('../../../tcpdf/config/lang/spa.php');
require_once('../../../tcpdf/tcpdf.php');

//require_once('../../../tcpdf-mio/tcpdf.php');






class Control_Reportes{


	function ReporteGeneral_Especialidades(){

	$obj= new reportes();

	$perfil="";
	
	$pdf=new TCPDF('p', PDF_UNIT, PDF_FORMAT, true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('IUTY Edinson Figueroa');
$pdf->SetTitle('Reporte');
$pdf->SetSubject('PNFInformatica');
$pdf->SetKeywords('Reporte, usuario, php, postgres');

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins('5', '26', '3');//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetHeaderData('logo-encabezado.jpg','200');
$pdf->SetFooterMargin('10');//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);




//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 9, '', true);

// Add a page 
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(true); //no imprime la cabecera ni la linea 
$pdf->setPrintFooter(true); // imprime el pie ni la linea 

$pdf->AddPage();
//*************
  ob_end_clean();//rompimiento de pagina
//************* 

$html = $obj->GenerarReporteEspecialidad();
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='center', $autopadding=true);

$pdf->Output('Reporte_Especialidad.pdf', 'I');
}



function ReporteGeneral_Oficinas(){

	$obj= new reportes();

	$perfil="";
	
	$pdf=new TCPDF('p', PDF_UNIT, PDF_FORMAT, true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('IUTY Edinson Figueroa');
$pdf->SetTitle('Reporte');
$pdf->SetSubject('PNFInformatica');
$pdf->SetKeywords('Reporte, usuario, php, postgres');

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins('3', '26', '3');//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetHeaderData('logo-encabezado.jpg','200');
$pdf->SetFooterMargin('10');//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);




//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 9, '', true);

// Add a page 
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(true); //no imprime la cabecera ni la linea 
$pdf->setPrintFooter(true); // imprime el pie ni la linea 

$pdf->AddPage();
//*************
  ob_end_clean();//rompimiento de pagina
//************* 

$html = $obj->GenerarReporteOficinas();
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='center', $autopadding=true);

$pdf->Output('Reporte_Oficinas.pdf', 'I');
}





}
=======
<?php

require("mod/reportes.php");
require_once('../../../tcpdf/config/lang/spa.php');
require_once('../../../tcpdf/tcpdf.php');

//require_once('../../../tcpdf-mio/tcpdf.php');






class Control_Reportes{


	function ReporteGeneral_Especialidades(){

	$obj= new reportes();

	$perfil="";
	
	$pdf=new TCPDF('p', PDF_UNIT, PDF_FORMAT, true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('IUTY Edinson Figueroa');
$pdf->SetTitle('Reporte');
$pdf->SetSubject('PNFInformatica');
$pdf->SetKeywords('Reporte, usuario, php, postgres');

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins('5', '26', '3');//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetHeaderData('logo-encabezado.jpg','200');
$pdf->SetFooterMargin('10');//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);




//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 9, '', true);

// Add a page 
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(true); //no imprime la cabecera ni la linea 
$pdf->setPrintFooter(true); // imprime el pie ni la linea 

$pdf->AddPage();
//*************
  ob_end_clean();//rompimiento de pagina
//************* 

$html = $obj->GenerarReporteEspecialidad();
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='center', $autopadding=true);

$pdf->Output('Reporte_Especialidad.pdf', 'I');
}



function ReporteGeneral_Oficinas(){

	$obj= new reportes();

	$perfil="";
	
	$pdf=new TCPDF('p', PDF_UNIT, PDF_FORMAT, true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('IUTY Edinson Figueroa');
$pdf->SetTitle('Reporte');
$pdf->SetSubject('PNFInformatica');
$pdf->SetKeywords('Reporte, usuario, php, postgres');

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins('3', '26', '3');//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetHeaderData('logo-encabezado.jpg','200');
$pdf->SetFooterMargin('10');//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);




//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 9, '', true);

// Add a page 
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(true); //no imprime la cabecera ni la linea 
$pdf->setPrintFooter(true); // imprime el pie ni la linea 

$pdf->AddPage();
//*************
  ob_end_clean();//rompimiento de pagina
//************* 

$html = $obj->GenerarReporteOficinas();
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='center', $autopadding=true);

$pdf->Output('Reporte_Oficinas.pdf', 'I');
}





}
>>>>>>> 5c2d1cc2998a4740e76c5d5ccb12eccefda7e905
?>