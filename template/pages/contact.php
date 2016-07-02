contact

<?php

if(isset($_GET['page'])){
  include './template/meta/meta_contact.php'.$_GET['page'].'.php';

}else{
  include './template/meta/meta.php';
}


?>
