<?php
function getConnection()
{
	return new mysqli("localhost", "root", "", "ecommerce");;
}
?>