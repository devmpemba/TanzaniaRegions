## Tanzania Regions-Districts-Wards Library


## How to Install the Package

```bash
composer require salimmbise/tanzania-regions
````

## How to Use it 
At first make sure you run composer require and publish the Vendor,
then import this package in order to use it:

```bash
use SalimMbise\TanzaniaRegions\TanzaniaRegions; 
```

## Get All Regions

```bash
$tanzaniaRegions = new TanzaniaRegions();
$regions = $tanzaniaRegions->getRegions();
```

## Get All Regions, Districts and Wards (with Postcode)

```bash
$regions = new TanzaniaRegions();
$allRegionsData = $regions->getAllData();
```

## Get All Districts

```bash
$tanzaniaRegions = new TanzaniaRegions();
$districts = $tanzaniaRegions->getDistricts();
```

## Get All Regions with their Districts
```bash
$tanzaniaRegions = new TanzaniaRegions();
$regions = $tanzaniaRegions->getRegions();

$regionsWithDistricts = [];

foreach ($regions as $region) {
$districts = $tanzaniaRegions->getDistricts($region);
$regionsWithDistricts[$region] = $districts;

}
```


Happy Coding! 
