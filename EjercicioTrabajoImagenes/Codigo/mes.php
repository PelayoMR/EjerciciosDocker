<?php
date_default_timezone_set("America/Mexico_City");
$mes = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"][date("n") - 1];
echo $mes;
?>