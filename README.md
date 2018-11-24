# Czech stemmer

This is fork of x3wil/czech-stemmer repo, class is modified for use with TNTSearch 

Port of stemmer for Czech language.

Original code is a Java class by [Jacques Savoy](http://members.unine.ch/jacques.savoy/clef/) released under BSD license.


Installation
------------

Install using [Composer](http://getcomposer.org/):

    composer require 'tvaliasek/czech-stemmer'

Usage
-----
``` php
use TeamTNT\TNTSearch\TNTSearch;

$tnt = new TNTSearch;

$tnt->loadConfig([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'dbname',
    'username'  => 'user',
    'password'  => 'pass',
    'storage'   => '/var/www/tntsearch/examples/',
    'stemmer'   => \Tvaliasek\Search\TNTCzechStemmer::class
]);

```

Standalone usage
----------------

``` php
use tvaliasek\Search\CzechStemmer;

CzechStemmer::stemmLight('velkého');
// velk

CzechStemmer::stemmAgressive('velkého');
// vel
```

Original word | stemmLight() | stemmAgressive()
------------- | ------------ | ----------------
velí | vel | vel
velmi | vel | vel
velkém | vel | vel
velcí | velc | vel
velká | velk | vel
velkému | velk | vel
velký | velk | vel
velké | velk | vel
velkou | velk | vel
velkým | velk | vel
velkých | velk | vel
velkého | velk | vel
velení | velen | vel
velice | velik | vel
veliký | velik | vel
velikými | velik | vel
velikou | velik | vel
veliká | velik | vel
velitel | velitel | vel
velitele | velitel | vel
velitelem | velitel | vel
velitelů | velitel | vel
