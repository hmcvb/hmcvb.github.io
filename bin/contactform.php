<?php 

$action=$_REQUEST['action']; 

if($action=="POST")
{
    /* send the submitted data */ 

    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message'];
    $from="From: <$email>"; 
    $subject="HMCVB: Message from $name"; 
    mail("hmcvb@hcs.harvard.edu", $subject, "From: $name <$email>: \n \n $message", $from);
}
?> 