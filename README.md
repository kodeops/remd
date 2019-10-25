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

Quick use though Facade:

`remd::api($service, $method, $params);`

##  Available services and methods

### AVM

`remd::api('AVM', 'asset', $params);`

### Geolocation

`remd::api('Geolocation', 'geocode', $params);`

`remd::api('Geolocation', 'reverse', $params);`

### Market Data

`remd::api('MarketData', 'listings', $params);`

`remd::api('MarketData', 'user', $params);`

`remd::api('MarketData', 'export', $params);`

`remd::api('MarketData', 'history', $params);`

`remd::api('MarketData', 'historyChart', $params);`

### Registry

`remd::api('Registry', 'valuate', $params);`

`remd::api('Registry', 'queue', $params);`