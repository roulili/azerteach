<?php

$db = new PDO("mysql:host=azerteach.bb;dbname=avis","root","");

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

