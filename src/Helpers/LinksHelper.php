<?php

namespace B3none\NDSScraper\Helpers;

use GuzzleHttp\Client;

class LinksHelper
{
    const URL = "https://www.romulation.net/roms/NDS";

    /**
     * @var Client
     */
    protected $guzzle;

    /**
     * LinksHelper constructor.
     *
     * @param Client $guzzle
     */
    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    /**
     * Get the links off of a page
     *
     * @param int $page
     * @return array
     */
    public function getLinks(int $page): array
    {

    }

    /**
     * Pull the download link off of the page.
     *
     * @return string
     */
    public function getDownloadLink(): string
    {

    }
}
