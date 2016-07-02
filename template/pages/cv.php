cv

<?php

if(isset($_GET['page'])){
  include './template/meta/meta_about.php'.$_GET['page'].'.php';

}else{
  include './template/meta/meta.php';
}


?>
