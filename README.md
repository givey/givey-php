# Givey PHP SDK

This is a preview release so please use at your own risk and report any issues you may experience. Contact [Givey Support](https://www.givey.com/support) if you have any questions.

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

### Loading Users

``` php
use Givey\User;

User::retrieve('scott'); // Givey\Entity\User
User::all(array('business_id' => 100); // array(Givey\Entity\User, Givey\Entity\User)
```

### Loading Businesses

``` php
use Givey\Business;

Business::retrieve('giveybiz'); // Givey\Entity\Business
```

### Loading Charities

``` php
use Givey\Charity;

Charity::retrieve('dogstrust'); // Givey\Entity\Charity
Charity::all(array('business_id' => 100); // array(Givey\Entity\Charity, Givey\Entity\Charity)
```
