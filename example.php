<?php

date_default_timezone_set('Europe/London');
require __DIR__ . '/vendor/autoload.php';

use Givey\Adapter\Buzz;
use Givey\Resource;
use Givey\User;
use Givey\Business;
use Givey\Charity;

Resource::setAdapter(new Buzz('Ghdw5zvtL9hi4pnEAOGamJ1nWw6n6HHQLtWmjVHC'));

$user = User::retrieve('scott'); // Givey\Entity\User
$business = Business::retrieve('giveybiz'); // Givey\Entity\Business
$charity = Charity::retrieve('dogstrust'); // Givey\Entity\Charity
