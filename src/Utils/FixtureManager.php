<?php
namespace App\Utils;

// Dependera de donde y como necesitemos guardar los datos, se podra utilizar los de doctrine o memoria o cache
// muchas variables...
class FixtureManager extends Manager
{
    protected $checks;

    public function __construct(Checks $checks)
    {
        $this->checks = $checks;
    }

    public function save($fixture)
    {

    }

    public function update($fixture)
    {

    }

    public function saving($fixtures, $jsonTo)
    {
        if ($fixtures) {
            $fixtures = $jsonTo->process($fixtures);

            foreach ($fixtures as $fixture) {
                if ($this->checks->isUpdatable()) {
                    $this->update($fixture);
                } elseif ($this->checks->isRecordable()) {
                    $this->save($fixture);
                }
            }
        }
    }

}