## How to Install the Package

composer require salimmbise/tanzania-regions

## How to Use it 
At first make sure you run composer require and publish the Vendor,
then import this package in order to use it:

use SalimMbise\TanzaniaRegions\TanzaniaRegions; 

## Get All Regions

$tanzaniaRegions = new TanzaniaRegions();
$regions = $tanzaniaRegions->getRegions();

## Get All Districts

$tanzaniaRegions = new TanzaniaRegions();
$districts = $tanzaniaRegions->getDistricts();

## Get All Regions with their Districts

$tanzaniaRegions = new TanzaniaRegions();
$regions = $tanzaniaRegions->getRegions();

$regionsWithDistricts = [];

foreach ($regions as $region) {
$districts = $tanzaniaRegions->getDistricts($region);
$regionsWithDistricts[$region] = $districts;

}


Happy Coding! 
