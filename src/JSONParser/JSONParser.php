<?php


namespace AcikVeri\Importer\JSONParser;


use AcikVeri\Importer\Interfaces\Importer;
use GuzzleHttp\Client;


class JSONParser implements Importer
{
    private $data;

    /**
     * @param $url
     * @return $this
     */
    public function loadFromUrl($url)
    {
        $client = new Client();
        $this->data = $client->get($url);
        return $this;
    }

    /**
     * @param $data
     * @return $this
     */
    public function loadFromString($data) {
        $this->data = simplejson_load_string($data);
        return $this;
    }
}