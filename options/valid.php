<?php
var_dump($_POST['parti']);
if($_POST['parti']==='particulier'){
  header('Location:../requerantpar/home.php');
}else{
  header('Location:../requerantpro/home.php');
}
?>
