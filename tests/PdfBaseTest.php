<?php
use Gufy\PdfToHtml\Base,
 Gufy\PdfToHtml\Config,
 Gufy\PdfToHtml\Html,
 Gufy\PdfToHtml\Pdf;

class PdfBaseTest extends PHPUnit_Framework_TestCase
{
  public function testConfiguration()
  {
    $pdf = new Base;
    Config::set('pdftohtml.bin', '/usr/lbin/pdftohtml');
    $this->assertEquals('/usr/lbin/pdftohtml', $pdf->bin());
    Config::set('pdftohtml.bin', '/usr/lbin/pdftohtml');
    $this->assertEquals('/usr/lbin/pdftohtml', $pdf->bin());
    Config::set('pdftohtml.bin', '/usr/lbin/pdftohtml');
  }
  public function testInfoConfiguration()
  {
  Config::set('pdfinfo.bin', '/usr/lbin/pdfinfo');
    $pdf = new Pdf(dirname(__FILE__).'/source/test.pdf');
    $this->assertEquals('/usr/lbin/pdfinfo', $pdf->bin());
    Config::set('pdfinfo.bin', '/usr/lbin/pdfinfo');
    $this->assertEquals('/usr/lbin/pdfinfo', $pdf->bin());
    Config::set('pdfinfo.bin', '/usr/lbin/pdfinfo');
  }

  public function testConvertAsRaw(){

    Config::set('pdfinfo.bin', '/usr/lbin/pdfinfo');
    Config::set('pdftohtml.bin', '/usr/lbin/pdftohtml');
    $pdf = new Pdf(dirname(__FILE__).'/source/test.pdf');
    $html = $pdf->html();
  }
}
