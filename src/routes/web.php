<?php

use Nelisys\LaravelPackage\Item;

Route::get('hello', function() {
    return (new Item())->hello();
});
