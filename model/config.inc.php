<?php
     const title = "Started PHP";
     $version = phpVersion();
     $date = date("d-m-Y");
     $lang = ["fr","en","it"];
     $date_footer = new DateTime();
     $navigator = $_SERVER["HTTP_USER_AGENT"]; # super globales
     $add_ip = $_SERVER["SERVER_ADDR"];
     $sign = $_SERVER["SERVER_SIGNATURE"];
     $path = $_SERVER["PHP_SELF"];