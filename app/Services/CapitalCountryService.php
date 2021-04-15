<?php

namespace App\Services;

use App\Traits\ResponseApiTrait;
use Exception;
use Illuminate\Support\Facades\Http;

class CapitalCountryService {

    use ResponseApiTrait;

    public function execute($country) {
        try {
            $response = Http::get("https://restcountries.eu/rest/v2/name/{$country}");
            return $response->json()[0]['capital'];
        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
