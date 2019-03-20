<?php

namespace App\Controller;

use App\Utils\ApiFetch;
use App\Utils\Checks;
use App\Utils\FixtureManager;
use App\Utils\JsonToFixture;
use App\Utils\JsonToMatch;
use App\Utils\Manager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("get/fixtures", name="app_get_fixtures")
     */
    public function getFixtures(ApiFetch $apiFetch, FixtureManager $manager)
    {
        $fixtures = $apiFetch->do('fixtures');

        if ($fixtures) {
            $manager->saving($fixtures);
        }

        return new JsonResponse($fixtures);
    }

    /**
     * @Route("get/matches", name="app_get_fixtures")
     */
    public function getMatches(ApiFetch $apiFetch, FixtureManager $manager)
    {
        $fixtures = $apiFetch->do('matches');

        if ($fixtures) {
            $manager->saving($fixtures);
        }

        return new JsonResponse($fixtures);
    }

}