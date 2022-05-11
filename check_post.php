<?php
require 'components/header.php';
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];


foreach ($_POST as $item => $value) {
    echo "<p>$item : $value</p><br>";
}

require 'components/footer.php';
