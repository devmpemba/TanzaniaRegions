<?php 

namespace SalimMbise\TanzaniaRegions;

class TanzaniaRegions
{
    protected $data;

    public function __construct()
    {
        $this->data = json_decode(file_get_contents(__DIR__ . '/../data/regions_and_districts.json'), true);
    }

    public function getRegions()
    {
        return array_keys($this->data);
    }

    public function getDistricts($region)
    {
        if (!isset($this->data[$region])) {
            return [];
        }
        return array_keys($this->data[$region]);
    }

    public function getWards($region, $district)
    {
        if (!isset($this->data[$region][$district])) {
            return [];
        }
        return array_keys($this->data[$region][$district]['wards']);
    }

    public function getWardPostcode($region, $district, $ward)
    {
        if (!isset($this->data[$region][$district]['wards'][$ward])) {
            return null;
        }
        return $this->data[$region][$district]['wards'][$ward];
    }
}
