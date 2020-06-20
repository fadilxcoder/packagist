<?php

    # REQUIREMENT
    require 'functions.php';
    require 'vendor/autoload.php';

    # CONSTANT
    define('EMAIL', 'fadil@xcoder.dev');

    # NAMESPACE
    use Tracy\Debugger as Debugger;
    use Faker\Factory as Factory;

    # CODE LOGICS

    Debugger::enable(Debugger::DEVELOPMENT);
    $faker = Factory::create();

/*
    insert('packagist', [
        '_name' => $faker->name,
        '_address' => $faker->address,
        '_email' => $faker->email,
        '_card_type' => $faker->creditCardType,
        '_card_number' => $faker->creditCardNumber,
        '_uuid' => $faker->uuid,
    ]);
*/    
dump(selectAll());
    
?>