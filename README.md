```
                           __     
                          /\ \    
 _ __    __    ___ ___    \_\ \   
/\`'__\/'__`\/' __` __`\  /'_` \  
\ \ \//\  __//\ \/\ \/\ \/\ \L\ \ 
 \ \_\\ \____\ \_\ \_\ \_\ \___,_\
  \/_/ \/____/\/_/\/_/\/_/\/__,_ /
```

# remd | Laravel wrapper for remd services

This package is a simple wrapper for remd services (for laravel framework).

## Setup

Add composer package:

`$ composer require kodeops/remd`

Add class alias in `config/app.php`:

```
'aliases' => [
    ...

    'remd' => kodeops\remd\Facade::class,
],
```

##  Usage

Quick use through Facade:

`\remd::api($service, $method, $params);`

or regular call:

`\kodeops\remd\Services\AVM::asset($params);`

##  Available services and methods

### Geolocation

* Repository [remdtech/geolocation](https://bitbucket.org/remdtech/geolocation)
* [API Documentation](https://bitbucket.org/remdtech/geolocation/src/master/README.md)

Requires `REMD_GEOLOCATION_KEY` in `.env` environment file.
Requires `REMD_GEOLOCATION_ENDPOINT` in `.env` environment file.

`remd::api('Geolocation', 'geocode', $params);`

`remd::api('Geolocation', 'reverse', $params);`

### Idealista

* Repository [remdtech/idealista-api-wrapper](https://bitbucket.org/remdtech/idealista-api-wrapper)
* [API Documentation](https://bitbucket.org/remdtech/idealista-api-wrapper/src/master/README.md)

Requires `REMD_IDEALISTA_KEY` in `.env` environment file.
Requires `REMD_IDEALISTA_ENDPOINT` in `.env` environment file.

`remd::api('Idealista', 'search', $params);`

### Market Data

* Repository [remdtech/comparables-api](https://bitbucket.org/remdtech/comparables-api)
* [API Documentation](https://bitbucket.org/remdtech/comparables-api/src/master/README.md)

Requires `REMD_MARKETDATA_KEY` in `.env` environment file.
Requires `REMD_MARKETDATA_ENDPOINT` in `.env` environment file.

`remd::api('MarketData', 'listings', $params);`

`remd::api('MarketData', 'user', $params);`

`remd::api('MarketData', 'export', $params);`

`remd::api('MarketData', 'history', $params);`

`remd::api('MarketData', 'historyChart', $params);`

### Registry (Spain)

* Repository [remdtech/registry-es](https://bitbucket.org/remdtech/registry-es)
* [API Documentation](https://bitbucket.org/remdtech/registry-es/src/master/README.md)

Requires `REMD_REGISTRY_KEY` in `.env` environment file.
Requires `REMD_REGISTRY_ENDPOINT` in `.env` environment file.

`remd::api('Registry', 'valuate', $params);`

`remd::api('Registry', 'queue', $params);`

### Cadaster (Spain)

* Repository [remdtech/cadaster-es](https://bitbucket.org/remdtech/cadaster-es)
* [API Documentation](https://bitbucket.org/remdtech/cadaster-es/src/master/README.md)

Requires `REMD_CADASTER_KEY` in `.env` environment file.
Requires `REMD_CADASTER_ENDPOINT` in `.env` environment file.

`remd::api('Cadaster', 'reference', $reference);`

`remd::api('Cadaster', 'ConsultaRCCOOR_Distancia', $reference);`

### Reference (Spain)

* Repository [remdtech/reference-es](https://bitbucket.org/remdtech/reference-es)
* [API Documentation](https://bitbucket.org/remdtech/reference-es/src/master/readme.md)

Requires `REMD_REFERENCEES_KEY` in `.env` environment file.
Requires `REMD_REFERENCEES_ENDPOINT` in `.env` environment file.

`remd::api('ReferenceEs', 'search', $params);`

### Static Street View

* Repository [remdtech/reference-es](https://bitbucket.org/remdtech/static-street-view)
* [API Documentation](https://bitbucket.org/remdtech/static-street-view/src/master/README.md)

Requires `REMD_SSV_KEY` in `.env` environment file.
Requires `REMD_SSV_ENDPOINT` in `.env` environment file.

`remd::api('StaticStreetView', 'streetview', $params);`

### Rent Price Index Cat

* Repository [remdtech/rent-price-index-cat](https://bitbucket.org/remdtech/rent-price-index-cat)
* [API Documentation](https://bitbucket.org/remdtech/rent-price-index-cat/src/master/README.md)

Requires `REMD_RPIC_KEY` in `.env` environment file.
Requires `REMD_RPIC_ENDPOINT` in `.env` environment file.

`remd::api('RentPriceIndexCat', 'rentPriceIndex', $params);`

### POIs

* Repository [remdtech/pois](https://bitbucket.org/remdtech/pois)
* [API Documentation](https://bitbucket.org/remdtech/pois/src/master/README.md)

Requires `REMD_POIS_KEY` in `.env` environment file.
Requires `REMD_POIS_ENDPOINT` in `.env` environment file.

`remd::api('Pois', 'nearbyPoints', $params);`
