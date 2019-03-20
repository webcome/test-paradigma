<?php

namespace App\Utils;

// Aqui los chequeos para saber si se puede actualizar o guardar...

class Checks
{
    public function isUpdatable(Fixture $fixture)
    {
        return ($fixture->getStatus() == "progress");
    }

    public function isRecordable(Fixture $fixture)
    {
        return ($fixture->getStatus() == "finalized");
    }

}