<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RegionController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getProvinces()
    {
        $response = $this->client->get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        return response()->json(json_decode($response->getBody(), true));
    }

    public function getRegencies($province_id)
    {
        $response = $this->client->get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/{$province_id}.json");
        return response()->json(json_decode($response->getBody(), true));
    }

    public function getDistricts($regency_id)
    {
        $response = $this->client->get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/{$regency_id}.json");
        return response()->json(json_decode($response->getBody(), true));
    }

    public function getVillages($district_id)
    {
        $response = $this->client->get("https://emsifa.github.io/api-wilayah-indonesia/api/villages/{$district_id}.json");
        return response()->json(json_decode($response->getBody(), true));
    }
}
