<?php

    # REQUIREMENT
    require 'functions.php';
    require 'vendor/autoload.php';

    # CONSTANT
    define('EMAIL', 'fadil@xcoder.dev');
    define('DR', $_SERVER['DOCUMENT_ROOT']);

    # NAMESPACE
    use Tracy\Debugger as Debugger;
    use Faker\Factory as Factory;
    /** Use both for Dompdf **/
    use Dompdf\Dompdf as Dompdf;
    use Dompdf\Options as Options;

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

    $path = constant('DR') . '/assets/';
    $imageName = 'image.png';
    $image = $path . $imageName;
    $imageData = base64_encode(file_get_contents($image));
    $src = 'data:'.mime_content_type($image).';base64,'.$imageData;
    
    $data = [
        'src' => $src,
        'details' => selectAll(),
    ];


    $html = renderView('image-file.php', $data);

    $options = new Options();
    $options->setIsRemoteEnabled(true);
    $dompdf = new Dompdf($options);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->loadHtml($html);
    $dompdf->render();
    
    # Save the file on web server
    // $output = $dompdf->output();
    // file_put_contents('mypdf.pdf', $output);
    
    # Save file on PC
    $dompdf->stream("mypdf-downloaded.pdf", [
        // "Attachment" => true, # Download the file
        "Attachment" => false, # Open PDF in tab
    ]);
    
?>
