<?php
echo "array: " .$_GET['array'] ."<br><br>";
echo "serializedd codificado: ".$_GET['serialize']."<br><br>";

$serialized=base64_decode($_GET['serialize']);
echo "DESCODIFICADO: ".$serialized;

 ?>
