<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Enhanced Form Validation library by CI Bootstrap 3
 */
include dirname(__FILE__) . '\tcpdf.php';
class Pdf extends TCPDF {
	public function __construct()
	{
		parent::__construct();
	}
	
}