<?php
class view{
 public function __construct(){
    $this->header="templates/header.php";
    $this->aside="templates/aside.php";
    $this->footer="templates/footer.php";
 }
 public function render($vista,$variable){
    include $this->header;
    include $this->aside;
    include "templates/".$vista.".php";
   //  include $this->footer;
 }
}
?>