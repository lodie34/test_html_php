Inscription

<?php

if(isset($_GET['page'])){
  include './template/meta/meta_Inscription.php'.$_GET['page'].'.php';

}else{
  include './template/meta/meta.php';
}


?>
