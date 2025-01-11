<?php //IP Grabber
//Retrieve data from POST request $ip = $_POST['ip']; $port = $_POST['port']; $agent = $_POST['agent']; $ref = $_POST['ref']; $hostname = $_POST['hostname'];

//Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT $fh = fopen('log.txt', 'a'); fwrite($fh, 'IP Address: '."".$ip ."\n"); fwrite($fh, 'Hostname: '."".$hostname ."\n"); fwrite($fh, 'Port Number: '."".$port ."\n"); fwrite($fh, 'User Agent: '."".$agent ."\n"); fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n"); fclose($fh); ?>

This code will log the IP address, hostname, port number, user agent, and referrer of anyone who visits the HTML page. The data is sent to the PHP file using an asynchronous POST request, which then writes the data to a text file called log.txt.
