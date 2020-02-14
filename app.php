<?php require __DIR__ . '/vendor/autoload.php';
// Here comes your code.
$nemo=new \App\Animals\Fish('nemo');
echo $nemo->noise().'<br>';
$babar=new \App\Animals\Elephant('babar');
echo $babar->noise().'<br>';

$animals = [
    \App\Animals\Fish::class => 5,
    \App\Animals\CatFish::class=>3,
    \App\Animals\ClownFish::class=>1,
    \App\Animals\Elephant::class=>2,
    \App\Animals\Zebra::class=>3,

//
//
//    [
//        'type'=> \App\Animals\BubbleFish::class,
//         'nb' => 3
//    ],
//    [
//        'type'=> \App\Animals\CatFish::class,
//        'nb' => 2
//    ],
//    [
//        'type'=> \App\Animals\ClownFish::class,
//        'nb' => 1
//    ],
//    [
//        'type'=> \App\Animals\Elephant::class,
//        'nb' => 2
//    ],
//    [
//        'type'=>\App\Animals\Zebra::class,
//        'nb' => 3
//    ],
//    [
//        'type'=> \App\Animals\Whale::class,
//        'nb' => 3
//    ],
//    [
//        'type'=> \App\Animals\Parrot::class,
//        'nb' => 3
//    ],
//    [
//        'type'=>\App\Animals\Dove::class,
//        'nb' => 3
//    ],

];

foreach ($animals as $key => $value){
    for($i = 0; $i < $value; $i++){
        $bestio = new $key(getPartName($key . ' ' . ($i + 1)));
        echo $bestio->getName() .' fait: '. $bestio->noise(). '<br>';
    }
}

function getPartName($class) {
    return (substr($class, strrpos($class, '\\') + 1));
}