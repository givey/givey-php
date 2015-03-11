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

### Loading a User

``` php
use Givey\User;

User::retrieve('scott'); // Givey\Entity\User
```

### Loading a Business

``` php
use Givey\Business;

Business::retrieve('giveybiz'); // Givey\Entity\Business
```

### Loading a Charity

``` php
use Givey\Charity;

Charity::retrieve('dogstrust'); // Givey\Entity\Charity
```
