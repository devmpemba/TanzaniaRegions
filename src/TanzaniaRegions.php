<?php

namespace SalimMbise\TanzaniaRegions;

class TanzaniaRegions
{
    protected $data;

    public function __construct()
    {
        $this->data = json_decode(file_get_contents(storage_path('app/regions_and_districts.json')), true);
    }

    public function getRegions()
    {
        return array_keys($this->data);
    }

    public function getDistricts($region)
    {
        return $this->data[$region] ?? [];
    }
}
