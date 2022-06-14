<?php
	$conex=new mysqli("localhost","root","","trippic");
	if ($conex->connect_error) {
            die("Connection failed: " . $conex->connect_error);
        } 
?>