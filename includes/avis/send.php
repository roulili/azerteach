<?php
$db = new PDO('mysql:host=172.17.0.1:11001;dbname=QW_azerteach;charset=utf8;time_zone="Europe/Berlin"', 'QW_prod', '6f>#j`8[Akrk?Bk`hy');

if(isset($_POST["msg"]) && !empty($_POST["msg"]) && isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){

	$secret = "6LeI9RkTAAAAANxx4NoPoX5D74ndcPhjlN4ynp_H";
	$ip = $_SERVER["REMOTE_ADDR"];
	$captcha = $_POST["g-recaptcha-response"];
  $user = htmlspecialchars(trim($_POST["user"]));
  $msg = htmlspecialchars(trim($_POST["msg"]));
	$db->exec("INSERT INTO avis (id,nom,message) VALUES ('' , '$user', '$msg')");
	echo "<span class='success'>Merci!</span>";
} else {
	echo "<span class='error'>Veuillez remplir toutes le cases.</span>";
}
