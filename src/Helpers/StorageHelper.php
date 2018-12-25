<?php

namespace B3none\NDSScraper\Helpers;

class StorageHelper
{
    const FILES = [
        __DIR__.'/../storage/scrape_state.json',
        __DIR__.'/../storage/urls.json',
    ];

    /**
     * StorageHelper constructor.
     *
     * Initialise any storage files that do not already exist.
     */
    public function __construct()
    {
        foreach (self::FILES as $file) {
            if (!file_exists($file)) {
                $handle = fopen($file, 'w');

                fwrite($file, json_encode([]));

                fclose($handle);
            }
        }
    }

    public function getAllLinks()
    {

    }

    public function getCompletedLinks()
    {

    }

    public function getUnfinishedLinks()
    {

    }
}
