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

`remd::api($service, $method, $params);`

or regular call:

`\kodeops\remd\Services\AVM::asset($params);`

##  Available services and methods

### AVM
Requires `REMD_AW_ATENEA_AVM_KEY` in `.env` environment file.

`remd::api('AVM', 'asset', $params);`

### Geolocation

Requires `REMD_GEOLOCATION_KEY` in `.env` environment file.

`remd::api('Geolocation', 'geocode', $params);`

`remd::api('Geolocation', 'reverse', $params);`

### Market Data

Requires `REMD_AW_MARKETDATA_KEY` in `.env` environment file.

`remd::api('MarketData', 'listings', $params);`

`remd::api('MarketData', 'user', $params);`

`remd::api('MarketData', 'export', $params);`

`remd::api('MarketData', 'history', $params);`

`remd::api('MarketData', 'historyChart', $params);`

### Registry

Requires `REMD_AW_REGISTRY_KEY` in `.env` environment file.

`remd::api('Registry', 'valuate', $params);`

`remd::api('Registry', 'queue', $params);`

### Idealista

Requires `REMD_AW_IDEALISTA_KEY` in `.env` environment file.

`remd::api('Idealista', 'search', $params);`