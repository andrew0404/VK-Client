<?php 

if (isset($_GET['to']) && isset($_GET['from']) && isset($_GET['subj']) && isset($_GET['msg'])) { 

    $to = $_GET['to']; 
    $from = $_GET['from']; 
    $subj = $_GET['subj']; 
    $msg = $_GET['msg']; 
     
    $msg = wordwrap($msg,70); 
    $mail = mail($to,$subj,$msg,"From:" . $from); 
    echo("To: " . $to . "<br/>"); 
    echo("From: " . $from . "<br/>"); 
    echo("Subject: " . $subj . "<br/>"); 
    echo("Message: " . $msg . "<br/><br/>"); 
     
    if ($mail) { 
        echo("Mail Sucessful"); 
    } 
} 

?>