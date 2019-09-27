#!/usr/bin/php
<?php

    if ($argc != 3 || !file_exists($argv[1]))
        exit();
    $fd = fopen($argv[1], 'r');
  
    while ($fd && !feof($fd))
        $data[] = explode(";", fgets($fd));
    $header = $data[0]; // gets the header
    //print_r($header);
    unset($data[0]); // deletes header from data
    foreach ($header as $key => $value) // stores data into prenom, nom...
        $header[$key] = trim($value);
    //print_r($header);
    $index = array_search($argv[2], $header); //if argv[2] is nom /prenom/mail/IP/pseudo
    //echo "$index";
    if ($index === false)
        exit();
    foreach ($header as $header_k => $header_v)
    {
        $temp = array();
        foreach ($data as $el)
        {
            if (isset($el[$index])) // if the nom /prenom/mail/IP/pseudo in el
                $temp[trim($el[$index])] = trim($el[$header_k]);
        }
        $$header_v = $temp; // gets all the data for argv[2]
    }
    //print_r($header);
    //print_r($$header_v);
    $stdin = fopen("php://stdin", "r");
    while ($stdin && !feof($stdin)) {
        echo "Enter your command: ";
        $order = fgets($stdin);
        if ($order)
            eval($order); // executes the order as php code
    }
    fclose($stdin);


?>
 