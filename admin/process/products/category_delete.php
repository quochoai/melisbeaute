<?php
	include("../../../require_inc.php");
	if (isset($_SESSION['is_logined']) || isset($_COOKIE['islogined'])) {
		if (isset($_SESSION['is_logined']))
			$user_id = $_SESSION['is_logined'];
		else
			$user_id = $_COOKIE['islogined'];
		$id = $_POST['id'];
		$table = "products";
		$tableCate = "categories";
		$sc = $h->softDeleteBy($tableCate, " where id = $id", $user_id);
		$sp = $h->softDeleteBy($table, " where product_id = $id", $user_id);
		if ($sc)
			echo '1';
		else
			echo '2';
	} else
		echo '5';
