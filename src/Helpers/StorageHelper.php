<?php

namespace B3none\NDSScraper\Helpers;

class StorageHelper
{
    const DIRECTORY = __DIR__.'/../storage/';

    const FILES = [
        'scrape_state.json',
        'urls.json',
    ];

    /**
     * StorageHelper constructor.
     *
     * Initialise any storage files that do not already exist.
     */
    public function __construct()
    {
        foreach (self::FILES as $file) {
            $file = self::DIRECTORY . $file;

            if (!file_exists($file)) {
                $handle = fopen($file, 'w');

                fwrite($handle, json_encode([]));

                fclose($handle);
            }
        }
    }

    /**
     * Return all stored links regardless of state.
     *
     * @return array
     */
    public function getAllLinks(): array
    {
        return json_decode(self::DIRECTORY . 'urls.json', true);
    }

    /**
     * Return all completed links
     *
     * @return array
     */
    public function getCompletedLinks(): array
    {
        return array_filter($this->getAllLinks(), function ($link) {
            return $link['is_completed'] == true;
        });
    }

    /**
     * Return all unfinished links
     *
     * @return array
     */
    public function getUnfinishedLinks(): array
    {
        return array_filter($this->getAllLinks(), function ($link) {
            return $link['is_completed'] == false;
        });
    }
}
