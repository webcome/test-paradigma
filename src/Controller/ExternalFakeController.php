<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExternalFakeController
{
    /**
     * @Route("api/fixtures", name="app_fixtures")
     */
    public function apiFixtures()
    {
        $fixtures = [
            "1" => [
                "id" => 1,
                "teams" => [
                    "1" =>  [["id" => 1, "name" => "Club A"]],
                    "2" => [["id" => 2, "name" => "Club B"]]
                ],
                "location" => "City A",
                "datetime" => "2019-03-01 21:00:00+01:00",
                "status" => "finalized",
                "result" => [3,0]
            ],
            "2" => [
                "id" => 2,
                "teams" => [
                    "1" => [["id" => 3, "name" => "Club C"]],
                    "2" => [["id" => 4, "name" => "Club D"]]
                ],
                "location" => "City D",
                "datetime" => "2019-03-02 21:00:00+01:00",
                "status" => "finalized",
                "result" => [1,2]
            ],
            "3" => [
                "id" => 3,
                "teams" => [
                    "1" => [["id" => 1, "name" => "Club A"]],
                    "2" => [["id" => 3, "name" => "Club C"]]
                ],
                "location" => "City C",
                "datetime"  => "2019-03-03 21:00:00+01:00",
                "status" => "finalized",
                "result" => [1,1]
            ],
            "4" => [
                "id" => 4,
                "teams" => [
                    "1" => [["id" => 2, "name" => "Club B"]],
                    "2" => [["id" => 4, "name" => "Club D"]]
                ],
                "location"=> "City B",
                "datetime" => "2019-03-20 21:00:00+01:00",
                "status" => "progress",
                "result" => [1,3]
            ]

        ];

        return new JsonResponse($fixtures);
    }

    /**
     * @Route("api/matches", name="app_matches")
     */
    public function apiMatches()
    {
        $matches = [
            "1" =>  [
                "teams" =>  [
                    "team1 => " =>  [["id" =>  1, "name" =>  "Club A"]],
                    "team2 => " =>  [["id" =>  2, "name" =>  "Club B"]]
                ],
                "location" =>  "City A",
                "datetime"  =>  "2019-03-01 21 => 00 => 00+01 => 00",
                "status" =>  "finalized",
                "result" =>  [3,1],
                "players" =>  [
                    "team1" =>  [
                        ["id" =>  1, "name" =>  "Jugador 1"],
                        ["id" =>  2, "name" =>  "Jugador 2"],
                        ["id" =>  3, "name" =>  "Jugador 3"],
                        ["id" =>  4, "name" =>  "Jugador 4"],
                        ["id" =>  5, "name" =>  "Jugador 5"],
                        ["id" =>  6, "name" =>  "Jugador 6"],
                        ["id" =>  7, "name" =>  "Jugador 7"],
                        ["id" =>  8, "name" =>  "Jugador 8"],
                        ["id" =>  9, "name" =>  "Jugador 9"],
                        ["id" =>  10, "name" =>  "Jugador 10"],
                        ["id" =>  11, "name" =>  "Jugador 11"],
                    ],
                    "team2"  => [
                        ["id" =>  12, "name" =>  "Jugador 12"],
                        ["id" =>  13, "name" =>  "Jugador 13"],
                        ["id" =>  14, "name" =>  "Jugador 14"],
                        ["id" =>  15, "name" =>  "Jugador 15"],
                        ["id" =>  16, "name" =>  "Jugador 16"],
                        ["id" =>  17, "name" =>  "Jugador 17"],
                        ["id" =>  18, "name" =>  "Jugador 18"],
                        ["id" =>  19, "name" =>  "Jugador 19"],
                        ["id" =>  20, "name" =>  "Jugador 20"],
                        ["id" =>  21, "name" =>  "Jugador 21"],
                        ["id" =>  22, "name" =>  "Jugador 22"],
                    ]
                ],
                "goals" =>  [
                    "team1" =>  [
                        "1" =>  ["id" =>  4, "name" =>  "Jugador 4", "datetime" =>  "2019-03-01 21 => 20 => 00+01 => 00"],
                        "2" =>  ["id" =>  5, "name" =>  "Jugador 5", "datetime" =>  "2019-03-01 21 => 30 => 00+01 => 00"],
                        "3" =>  ["id" =>  6, "name" =>  "Jugador 6", "datetime" =>  "2019-03-01 21 => 40 => 00+01 => 00"]
                    ],
                    "team2" =>  [
                        "1" =>  ["id" =>  15, "name" =>  "Jugador 15", "datetime" =>  "2019-03-01 21 => 25 => 00+01 => 00"],
                        "2" =>  ["id" =>  19, "name" =>  "Jugador 19", "datetime" =>  "2019-03-01 21 => 35 => 00+01 => 00"]
                    ],

                ],
                "cards" =>  [
                    "team1" =>  [
                        "yellow" =>  [
                            "1" =>  ["id" =>  3, "name" =>  "Jugador 3", "datetime" =>  "2019-03-01     21 => 22 => 00+01 => 00"],
                            "2" =>  ["id" =>  8, "name" =>  "Jugador 8", "datetime" =>  "2019-03-01 21 => 27 => 00+01 => 00"]
                        ],
                        "red" =>  [
                            "1" =>  ["id" =>  7, "name" =>  "Jugador 7", "datetime" =>  "2019-03-01 22 => 10 => 00+01 => 00"]
                        ]
                    ],
                    "team2" =>  [
                        "yellow" =>  [
                            "1" =>  ["id" =>  13, "name" =>  "Jugador 13", "datetime" =>  "2019-03-01     21 => 22 => 00+01 => 00"],
                            "2" =>  ["id" =>  18, "name" =>  "Jugador 18", "datetime" =>  "2019-03-01 21 => 27 => 00+01 => 00"]
                        ],
                        "red" =>  [
                            "2" =>  ["id" =>  22, "name" =>  "Jugador 19", "datetime" =>  "2019-03-01 22 => 25 => 00+01 => 00"]
                        ]
                    ],

                ],

            ]
        ];

        return new JsonResponse($matches);
    }

}