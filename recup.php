<?php
new PDO('mysql:host=hs40538-001.dbaas.ovh.net:35111;dbname=QW-AZ;charset=utf8;time_zone="Europe/Berlin"', 'QW-AZ', 'Rz229GzH76muPU4f');

$messages = array();

$recup_messages = $db->query("SELECT * FROM avis ORDER by id DESC");

while($all = $recup_messages->fetch()){
	$messages[] = $all;	
}

	?>
    
    
    <?php

foreach($messages as $message){
	?>
    <div class="message-container">
        <strong><p class="msgName"><?php echo $message["nom"];?></p></strong>
        <p class="message"><?php echo $message["message"];?></p><br>
    </div>
    <?php
}

?>

