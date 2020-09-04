<?php
   $link = mysqli_connect("localhost","root","","sms_project");
   if($link){
   	echo 'yes';
   }
   else{
   	echo 'no';
   }
   ?>