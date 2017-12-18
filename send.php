<?php
new PDO('mysql:host=172.17.0.1:11001;dbname=QW_azerteach;charset=utf8;time_zone="Europe/Berlin"', 'azerteach', '4SNKd*P=7kYnm6gL8ujdsg!y+G7SRrs@');

if(isset($_POST["msg"]) && !empty($_POST["msg"])){
	$user = mysql_real_escape_string(htmlspecialchars(trim($_POST["user"])));
	$msg = mysql_real_escape_string(htmlspecialchars(trim($_POST["msg"])));
	$db->exec("INSERT INTO ajax (id,nom,message) VALUES ('' , '$user', '$msg')");
	echo "<span class='success'>Merci!</span>"; 
} else {
	echo "<span class='error'>Veuillez écrire un avis.</span>";	
}
