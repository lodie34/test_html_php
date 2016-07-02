news

<?php

if(isset($_GET['page'])){
  include './template/meta/meta_'.$_GET['page'].'.php';

}else{
  include './template/meta/meta.php';
}


?>
