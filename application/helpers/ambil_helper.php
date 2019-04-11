<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function ambil_id($us){
    $crl = curl_init();
    $url = "https://www.instagram.com/" . $us . "/";
    curl_setopt_array($crl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => TRUE
    ));
    $respn = curl_exec($crl);
    curl_close($crl);
    $subData = substr($respn, strpos($respn, 'window._sharedData'), strpos($respn, '};'));
    $userID = strstr($subData, '"id":"');
    $userID = str_replace('"id":"', '', $userID);
    $userID = strstr($userID, '"', true);
    return $userID;
}

function ambil_inst($id){
    $url = 'https://i.instagram.com/api/v1/users/'.$id.'/info/';
    $crl = curl_init();
    curl_setopt_array($crl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => TRUE
    ));
    $respn = curl_exec($crl);
    curl_close($crl);
    return json_decode($respn);
}
