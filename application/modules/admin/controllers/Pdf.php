<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class pdf extends Admin_Controller {
		
            function index() {
$this->load->library('html2pdfclass');
$this->html2pdfclass->load();
// get the HTML
ob_start();
$this->load->view('admin/pdf');
$content = ob_get_clean();
 
try {
// init HTML2PDF
$html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0, 0, 0, 0));
 
// display the full page
$html2pdf->pdf->SetDisplayMode('fullpage');
 
// convert
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 
// add the automatic index
$html2pdf->pdf->SetFont('freeserif');
 
// send the PDF
$html2pdf->Output('score.pdf');
} catch (HTML2PDF_exception $e) {
echo $e;
exit;
}
}
 
}

						