<?php 

$action=$_REQUEST['action']; 

if($action=="POST")
{
    /* send the submitted data */ 

    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $from="From: <$email>"; 
    $subject="HMCVB: Add $name to Mailing List"; 
    mail("hmcvb@hcs.harvard.edu", $subject, "$name <$email> would like to be added to the hmcvb mailing list", $from);
}
?> 