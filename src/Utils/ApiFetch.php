<?php

namespace App\Utils;

class ApiFetch
{
    public function do($feed)
    {
        // Aqui podriamos usar librerias para traernos los JSON, pero aqui pondre codigo curl...
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, getenv('API_URL') . $feed);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);

        return json_decode($response);
    }

}