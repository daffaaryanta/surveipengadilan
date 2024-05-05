<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('assets/dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

class Mypdf
{
	//protected $ci;

	// public function __construct()
	// {
	// $this->ci =& get_instance();
	// }

	// public function generate($view, $data = array(), $filename = 'Laporan', $paper = 'A4', $orientation = 'landscape')
	// {
	// $dompdf = new Dompdf();
	// 	$html = $this->ci->load->view($view, $data, TRUE);
	// 	$dompdf->loadHtml($html);
	// 	$dompdf->setPaper($paper, $orientation);
	// 	//Render the HTML as PDF
	// 	$dompdf->render();
	// 	$dompdf->stream( $filename . ".pdf", array("Attachment" => FALSE));
	// }

	public function generate($html, $filename = '', $paper = '', $orientation = '', $stream = TRUE)
	{
		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$dompdf = new Dompdf($options);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		$dompdf->render();
		if ($stream) {
			$dompdf->stream($filename . ".pdf", array("Attachment" => 0));
		} else {
			return $dompdf->output();
		}
	}
}
