<?php
$app = "localhost/mvc-php/";
class IndexController {
	function index () {
		require_once 'view/header.php';
		require_once 'view/index.php';
		require_once 'view/footer.php';
	}
}

?>