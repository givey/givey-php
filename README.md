# Givey PHP SDK

This is a preview release so please use at your own risk and report any issues you may experience. Contact [Givey Support](https://www.givey.com/support) if you have any questions.

![Build Status](https://img.shields.io/travis/givey/givey-php/master.svg)
![Downloads](https://img.shields.io/packagist/dt/givey/givey.svg)
![Version](https://img.shields.io/packagist/v/givey/givey.svg)
![Licence](https://img.shields.io/packagist/l/givey/givey.svg)

## Usage

### Install
``` json
{
    "require": {
        "givey/givey" : "*"
    }
}
```

### Setup Resource and Adapter


``` php
use Givey\Adapter\Buzz;
use Givey\Resource;

Resource::setAdapter(new Buzz($token));
```

### Users

``` php
use Givey\User;

User::retrieve('scott'); // Givey\Entity\User
User::all(array('business_id' => 100); // array(Givey\Entity\User, Givey\Entity\User)
```

### Businesses

``` php
use Givey\Business;

$business = Business::retrieve('giveybiz'); // Givey\Entity\Business
$business->employees(); // array(Givey\Entity\User, Givey\Entity\User)
```

### Charities

``` php
use Givey\Charity;

Charity::retrieve('dogstrust'); // Givey\Entity\Charity
Charity::all(array('business_id' => 100); // array(Givey\Entity\Charity, Givey\Entity\Charity)
```
