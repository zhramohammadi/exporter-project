<?php
include "autoloader.php";
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    // echo "not submited";
    return;
}

[$title,$content,$format] = [$_POST['title'],$_POST['content'],$_POST['format']];

  $whiteList = ['text', 'pdf', 'json'];
  if(!in_array($format, $whiteList)){
      echo "invalid format";
      return;
  }
$className = "Exporter\\{$format}Exporter";
if(class_exists($className)){
    $exporter = new $className(['title'=>$title,'content'=>$content]);
    $exporter->export();
}

