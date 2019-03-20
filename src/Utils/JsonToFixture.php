<?php

namespace App\Utils;

use App\Model\Fixture;

class JsonToFixture implements JsonProcessInterface
{

    // Aqui debemos de convertir el json a nuestros objetos Card Fixture Match Player Team que tenemos en la carpeta Model
    public function process($json)
    {
        // Algo rapido
        $fixture = new Fixture();
        $fixture
            ->setId($json['id'])
            ->setStatus($json['status'])
            ->setDatetime($json['datetime'])
            ->setLocation($json['location']);
        // Asi sucesivamente con las....


    }
}