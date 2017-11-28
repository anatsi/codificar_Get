<?php
  $descripcion=array('Reparacion parachoques', 'Reparacion luna trasera', 'Campa', 'FAL');
  echo "Texto sin serialize: ";
  print_r($descripcion);
  echo "<br><br>";

  $descripcion_serializad=serialize($descripcion);
  echo "Texto con serialize: ".$descripcion_serializad."<br><br>";

  $descripcion_again=unserialize($descripcion_serializad);
  echo "Texto original again: ";
  print_r($descripcion_again);
  echo "<br><br>";

  $encode_serial=base64_encode($descripcion_serializad);
  $encode_array=urlencode($descripcion);

  echo "<a href='get.php?array=".$encode_array."&serialize=".$encode_serial."'>Probar get</a>";
 ?>
