#!/usr/bin/php
<?php


if ($argc != 2)
    exit(1);
// First request
$ch = curl_init();
$curl_opts = array( // array specifying which options to set and their values
    CURLOPT_URL => $argv[1], // a pointer of url
    CURLOPT_HEADER => 0,// don't include header
    CURLOPT_RETURNTRANSFER => 1, // returns the transfer as a string of the return value of curl_exec() instead of outputting it directly
);
curl_setopt_array($ch, $curl_opts); // Sets multiple options for a cURL session
$data = curl_exec($ch);
curl_close($ch);
// Failed
if (!$data)
    exit(1);
$adress = $argv[1]; // the website adress
$adress = substr($adress, strlen('http://') + (strpos($adress, 'https') !== false));
if (substr($adress, -1) !== '/')
    $adress .= '/';
// Get all images
 if (!preg_match_all('/<img[^>]+\/?>/i', $data, $matches))
     exit(0); // if there are no images
// For each image
 foreach ($matches[0] as $match) {
     // Match src
     if (!preg_match('/src\s*=\s*("|\')(.+?)("|\')/i', $match, $url) || !isset($url[2]) || empty($url[2]))
         continue;
     // set url
     $url = $url[2];
     if (strpos($url, 'http') === false)
         $url = $argv[1] . '/' . $url;
     // get img url
     $ch = curl_init();
     $curl_opts[CURLOPT_URL] = $url;
     curl_setopt_array($ch, $curl_opts);
     $data = curl_exec($ch);
     curl_close($ch);
     // Save
     if (!is_dir($adress))
         mkdir($adress);
     $image_name = basename($url);
     file_put_contents($adress . $image_name, $data);
}

?>