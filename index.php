<?php 
if (isset($_GET['page']) && !empty($_GET['page'])) {

$page=$_GET['page'];

}else {
	$page='Home';
}
// Pour avoir une adresse mvc:

// if (strpos($page,'/') != -1) {
// 	$params = explode("/", $page);
// 	$page=$params[0];
// 	$id_film=$params[1];
// }


$page = ucfirst($page);


// if ($page == 'Form') {
	
// include('controllers/FormController.php');

// } else {

include('controllers/'.$page.'Controller.php');


