<?php
namespace Exporter;
class TextExporter extends Exporter{
    protected $format = '.txt';
    public  function export(){
        $fileName = "text-file-".rand(100,999) . $this->format;
        $file_path =__DIR__."/files/.$fileName";
        file_put_contents($file_path,"{$this->data["title"]}\n {$this->data["content"]}");
        echo "$fileName successfully created";
    }
}
