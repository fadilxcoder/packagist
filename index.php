<?php

    # REQUIREMENT
    require 'functions.php';
    require 'vendor/autoload.php';

    # CONSTANT
    define('EMAIL', 'fadil@xcoder.dev');

    # NAMESPACE
    use Tracy\Debugger;
    use Faker\Factory;

    # CODE LOGICS
    Debugger::enable();
    $faker = Factory::create();

    dump($faker->name);
    dump($faker->address);
    dump($faker->text);
    dump(selectAll());
    
    // echo json_encode(['HTTP' => 200]);
?>