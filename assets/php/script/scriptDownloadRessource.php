<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/ressources/premier_pas_ressources.zip")) {
  header("Content-Type: application/zip");
  
  header("Content-Disposition:attachment;filename=premier_pas_ressources.zip");
  
  readfile($_SERVER['DOCUMENT_ROOT'] . "/ressources/premier_pas_ressources.zip");
} else {
  header("Location: /?redirect=1");
}

?>