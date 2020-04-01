```
                           __     
                          /\ \    
 _ __    __    ___ ___    \_\ \   
/\`'__\/'__`\/' __` __`\  /'_` \  
\ \ \//\  __//\ \/\ \/\ \/\ \L\ \ 
 \ \_\\ \____\ \_\ \_\ \_\ \___,_\
  \/_/ \/____/\/_/\/_/\/_/\/__,_ /
```

# remd | PHP API Wrapper for all remd services

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

### AVM

* Repository [aktualabsdev/atenea-avm-api](https://bitbucket.org/aktualabsdev/atenea-avm-api)
* [API Documentation](https://bitbucket.org/aktualabsdev/atenea-avm-api/src/master/README.md)

Requires `REMD_PAW_ATENEA_AVM_KEY` in `.env` environment file.

`remd::api('AVM', 'asset', $params);`

`remd::api('AVM', 'queue', $params);`

Available methods for v2:

`remd::api('AVM', 'value', $params);`

### Geolocation

* Repository [remdtech/geolocation](https://bitbucket.org/remdtech/geolocation)
* [API Documentation](https://bitbucket.org/remdtech/geolocation/src/master/README.md)

Requires `REMD_PAW_GEOLOCATION_KEY` in `.env` environment file.

`remd::api('Geolocation', 'geocode', $params);`

`remd::api('Geolocation', 'reverse', $params);`

### Idealista

* Repository [remdtech/idealista-api-wrapper](https://bitbucket.org/remdtech/idealista-api-wrapper)
* [API Documentation](https://bitbucket.org/remdtech/idealista-api-wrapper/src/master/README.md)

Requires `REMD_PAW_IDEALISTA_KEY` in `.env` environment file.

`remd::api('Idealista', 'search', $params);`

### Market Data

* Repository [remdtech/comparables-api](https://bitbucket.org/remdtech/comparables-api)
* [API Documentation](https://bitbucket.org/remdtech/comparables-api/src/master/README.md)

Requires `REMD_PAW_MARKETDATA_KEY` in `.env` environment file.

`remd::api('MarketData', 'listings', $params);`

`remd::api('MarketData', 'user', $params);`

`remd::api('MarketData', 'export', $params);`

`remd::api('MarketData', 'history', $params);`

`remd::api('MarketData', 'historyChart', $params);`

### Registry (Spain)

* Repository [remdtech/registry-es](https://bitbucket.org/remdtech/registry-es)
* [API Documentation](https://bitbucket.org/remdtech/registry-es/src/master/README.md)

Requires `REMD_PAW_REGISTRY_KEY` in `.env` environment file.

`remd::api('Registry', 'valuate', $params);`

`remd::api('Registry', 'queue', $params);`

### Cadaster (Spain)

* Repository [remdtech/cadaster-es](https://bitbucket.org/remdtech/cadaster-es)
* [API Documentation](https://bitbucket.org/remdtech/cadaster-es/src/master/README.md)

Requires `REMD_PAW_CADASTER_KEY` in `.env` environment file.

`remd::api('Cadaster', 'reference', $reference);`

`remd::api('Cadaster', 'ConsultaRCCOOR_Distancia', $reference);`

### Reference (Spain)

* Repository [remdtech/reference-es](https://bitbucket.org/remdtech/reference-es)
* [API Documentation](https://bitbucket.org/remdtech/reference-es/src/master/readme.md)

Requires `REMD_PAW_REFERENCEES_KEY` in `.env` environment file.

`remd::api('Reference-Es', 'search', $params);`