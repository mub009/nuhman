<?php
    $email_from = 'bimmarkeng@gmail.com';
    $email_to = 'riyahusna111@gmail.com';
    $email_subject = 'Enquiry-BIM Mark';

    $table = '<table><tr><th colspan="3" style="text-align:center;font-size:20px;">'.$email_subject.' </th></tr>';

    $table .= '<tr><th style="text-align:left;font-size:20px;">Name</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">'.$_POST['email_name'].'</td></tr>';        

    $table .= '<tr><th style="text-align:left;font-size:20px;">Email ID</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">'.$_POST['email_from'].'</td></tr>';        

    $table .= '<tr><th style="text-align:left;font-size:20px;">Service</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">'.$_POST['serive'].'</td></tr>';        

    $table .= '<tr><th style="text-align:left;font-size:20px;">Phone</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">'.$_POST['serive'].'</td></tr>';        

    $table .= '<tr><th style="text-align:left;font-size:20px;">Message</th><td style="text-align:center;padding-left:10px;font-size:20px;">:</td><td style="padding-left:10px;font-size:20px;">'.$_POST['message'].'</td></tr>';        
    $table .= '</table>'; 

    $email_message='<div style="background:#f2f2f2; padding:30px; font-family:calibri; font-size:20px; color:#666666; padding-top:60px">
    <div style="width:600px; margin:0 auto; background:#fff;  padding:20px; position:relative; border-radius:10px;">'.$table.'</div></div></div>';

    $headers = 'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From: ".$email_from."\r\n";

    if(mail($email_to,$email_subject,$email_message,$headers))
        echo "Message Sent";
    else
	    echo "message not send";