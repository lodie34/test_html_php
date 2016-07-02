home

<?php

if(isset($_GET['page'])){
  include './template/meta/meta_home.php'.$_GET['page'].'.php';

}else{
  include './template/meta/meta.php';
}


?>
