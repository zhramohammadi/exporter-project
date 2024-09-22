<?php
namespace Exporter;
class PdfExporter extends Exporter
{
    protected $format = '.pdf';
    public  function export(){
        echo "pdf export ok";
    }
}
$pdfExporter =new PdfExporter(["title"=>"zahra","content"=>"is a programmer"]);
$pdfExporter->export();