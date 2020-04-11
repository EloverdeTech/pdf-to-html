<?php
use Gufy\PdfToHtml\Html,
Gufy\PdfToHtml\Config;
class HtmlParseTest extends PHPUnit_Framework_TestCase
{
  public function testConvertAndCatch()
  {
    Config::set('pdfinfo.bin', '/usr/lbin/pdfinfo');
    Config::set('pdftohtml.bin', '/usr/lbin/pdftohtml');
    $pdf = dirname(__FILE__).'/source/test.pdf';
    $html = new Html($pdf);
    $this->assertInstanceOf('PHPHtmlParser\\Dom', $html);
  }
}
