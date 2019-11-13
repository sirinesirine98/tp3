<?php
require 'dbconnexion.php';

	$req=$cnx->prepare(
		'DELETE FROM students WHERE id=:id'
		);
		$req->bindParam(':id' ,$_GET['id']);
		
		$req->execute();
		
		header('location:index.php');
?>