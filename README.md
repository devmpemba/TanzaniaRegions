## How to Install the Package

## Install via Composer

```bash
composer require salimmbise/tanzania-regions
```

## Usage

At first make sure you run composer require and publish the Vendor,
then import this package in order to use it:

```php
use SalimMbise\TanzaniaRegions\TanzaniaRegions;
```

## Get All Regions

```php
$tanzaniaRegions = new TanzaniaRegions();
$regions = $tanzaniaRegions->getRegions();
```

## Get All Regions, Districts and Wards (with Postcode)

```php
$regions = new TanzaniaRegions();
$allRegionsData = $regions->getAllData();
```

## Get All Districts

```php
$tanzaniaRegions = new TanzaniaRegions();
$districts = $tanzaniaRegions->getDistricts();
```

## Get All Regions with their Districts

```php
$tanzaniaRegions = new TanzaniaRegions();
$regions = $tanzaniaRegions->getRegions();

$regionsWithDistricts = [];

foreach ($regions as $region) {
    $districts = $tanzaniaRegions->getDistricts($region);
    $regionsWithDistricts[$region] = $districts;
}
```


Happy Coding!
