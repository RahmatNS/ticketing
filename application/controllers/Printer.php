<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Printer extends CI_Controller {
		// start printer
	ob_start();
		$handle = printer_open();
		printer_start_doc($handle, "My Document");
		printer_start_page($handle);
		// create content here
		// print
		printer_end_page($handle);
		printer_end_doc($handle);
		printer_close($handle);
		echo "test";
}
