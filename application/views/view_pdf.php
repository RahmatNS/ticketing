<?php
class PDF_JavaScript extends FPDF {

	var $javascript;
	var $n_js;

	function IncludeJS($script) {
		$this->javascript=$script;
	}

	function _putjavascript() {
		$this->_newobj();
		$this->n_js=$this->n;
		$this->_out('<<');
		$this->_out('/Names [(EmbeddedJS) '.($this->n+1).' 0 R]');
		$this->_out('>>');
		$this->_out('endobj');
		$this->_newobj();
		$this->_out('<<');
		$this->_out('/S /JavaScript');
		$this->_out('/JS '.$this->_textstring($this->javascript));
		$this->_out('>>');
		$this->_out('endobj');
	}

	function _putresources() {
		parent::_putresources();
		if (!empty($this->javascript)) {
			$this->_putjavascript();
		}
	}

	function _putcatalog() {
		parent::_putcatalog();
		if (!empty($this->javascript)) {
			$this->_out('/Names <</JavaScript '.($this->n_js).' 0 R>>');
		}
	}
}

class PDF_AutoPrint extends PDF_JavaScript
	{
	function AutoPrint($dialog=false)
	{
		//Open the print dialog or start printing immediately on the standard printer
		$param=($dialog ? 'true' : 'false');
		$script="print($param);";
		$this->IncludeJS($script);
	}

	function AutoPrintToPrinter($server, $printer, $dialog=false)
	{
		//Print on a shared printer (requires at least Acrobat 6)
		$script = "var pp = getPrintParams();";
		if($dialog)
			$script .= "pp.interactive = pp.constants.interactionLevel.full;";
		else
			$script .= "pp.interactive = pp.constants.interactionLevel.automatic;";
		$script .= "pp.printerName = '\\\\\\\\".$server."\\\\".$printer."';";
		$script .= "print(pp);";
		$this->IncludeJS($script);
	}
	function Content($data)
	{
                foreach ($data as $key) {
                        $this->setFont('Times','B',12);
                        $this->SetAutoPageBreak('0');
                        $this->setFillColor(255,255,255);
                        $this->setY(20);	
                        $this->cell(0,0,$key->name,0,0,'C');
                        $this->setY(30);
                        $this->cell(0,0,$key->afiliasi,0,0,'C');
                        $this->setY(40);
                        $this->cell(0,0,'PARTICIPANT',0,0,'C');
                        $this->setY(70);
                        $this->cell(0,0,'DOOR PRIZE',0,0,'C');
                        $this->setY(80);
                        $this->cell(0,0,$key->name,0,0,'C');
                        $this->setY(95);
                        $this->cell(0,0,'TOUR',0,0,'C');
                        $this->setY(105);
                        $this->cell(0,0,$key->name,0,0,'C');
                        $this->setY(120);
                        $this->cell(0,0,'VISIT',0,0,'C');
                        $this->setY(130);
                        $this->cell(0,0,$key->name,0,0,'C');
                        //$this->cell(50,10,$key->kelamin,1,1,'L',1);
                }
    }            
 
}
 
$pdf = new PDF_AutoPrint('P','mm',array(97,137));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($data);
$pdf->AutoPrint(true);
$pdf->Output();
//$filename="pdf/ticket.pdf";
//$pdf->Output($filename,'F');
?>