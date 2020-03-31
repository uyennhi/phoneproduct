<?php
//	$link=mysql_connect("localhost","root","","dienthoai") or die("Cannot connect to the localhost");
//	mysql_select_db("dienthoai",$link) or die("Cannot connect to the database");
//	mysql_query("SET NAMES 'UTF8'");

	$link = new mysqli("localhost","root","","dienthoai");
        $link->set_charset("utf8");
?>
