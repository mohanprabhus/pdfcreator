<?php

namespace PdfCreator;

use PdfCreator\FPDFExtensions\FPDFExtended;

class PdfDocumentItemImage extends PdfDocumentItem {
		
	public function render(FPDFExtended $pdf) {
		parent::render($pdf);

		$pdf->Image(
				$this->getText(),
				$this->getX1(),
				$this->getY1(),
				$this->getX2() - $this->getX1(),
				$this->getY2() - $this->getY1(),
				'',
				''
				);
		
	}
	
}