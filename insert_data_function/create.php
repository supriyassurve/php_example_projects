<?php
#print_r($_POST);
require_once 'includes/php/active_queries.php';

if(isset($_POST['multiple'])){
  insert_multiple_records($_POST['products'], "products");
}else{
  insert_record($_POST['product'], "products");
}

header('Location: index.php');
?>