# Saloka PayTabs

# Install
``````````````
composer dump-autoload
composer require saloka/paytabs:dev-master
>>config>>app.php
  providers = [
    Saloka\Paytabs\PaytabsData\src\PayTabsServProvider::class,
  ];
php artisan vendor:publish --tag=paytabs --force
``````````````
# Used
```````````````
Following The Controller Name ( PayController.php )
use Saloka\Paytabs\PaytabsData;
$new = new PaytabsData();
$nn = $new->RunPaytabs($array);
````````````````


