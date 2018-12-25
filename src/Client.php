<?php

namespace B3none\NDSScraper;

class Client
{
    public static function create()
    {
        return new self();
    }

    public function downloadGames(int $numGames = 100)
    {
        for ($i = 0; $i < $numGames; $i++) {

        }
    }
}
