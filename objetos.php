<?php
include ('cliente.php');
if (isset ($_POST['btn.aprocesar'])){
    $clinte = new $clinte();
    $cliente -> setDescripcion($_POST['selProducto']);
    $cliente -> setCantidad($_POST['txtCantidad']);
}
function productoxDefecto ($producto){
    if ($producto =='doloneurotropas') $selV='SELECTED';else $selV='';
    if ($producto =='vital forte') $selC='SELECTED';else $selC='';
    if ($producto =='jarabe para la tos') $selT='SELECTED';else $selT='';
    return array ($selV,$selT,$selC);
}
?>
<|DOCTYPE html>
