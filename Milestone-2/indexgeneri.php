<?php

$datageneri = [];

$databasedischi = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Mr Simpatia',
        'author' => 'Fabri Fibra',
        'year' => 2004,
        'poster' => 'https://upload.wikimedia.org/wikipedia/it/5/53/Mr._Simpatia.jpg',
        'genre' => 'Rap'
    ],
    [
        'title' => 'Logico',
        'author' => 'Cesare Cremonini',
        'year' => 2014,
        'poster' => 'https://s.mxmcdn.net/images-storage/albums/2/2/4/8/3/7/30738422_350_350.jpg',
        'genre' => 'Pop'
    ],
    [
        "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
        "title" => "Bad",
        "author" => "Michael Jacjson",
        "genre" => "Pop",
        "year" => "1987"
    ],
    [
        'title' => 'Californication',
        'author' => 'Red Hot Chili Peppers',
        'year' => 1999,
        'poster' => 'https://m.media-amazon.com/images/I/81TnWHafWdL._AC_SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Slipknot',
        'author' => 'Slipknot',
        'year' => 1999,
        'poster' => 'https://m.media-amazon.com/images/I/51Uu6lUpnhL._AC_SY450_.jpg',
        'genre' => 'Heavy metal'
    ],
    [
        'title' => 'Dua Lipa',
        'author' => 'Dua Lipa',
        'year' => 2017,
        'poster' => 'https://m.media-amazon.com/images/I/81-SxZnlDXL._AC_SL1200_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ]
];

header('Content-Type: application/json');
/* echo json_encode($databasedischi['genre']); */

foreach ($databasedischi as $key => $element){
        
    if(!in_array($element["genre"], $datageneri)){

        array_push($datageneri,  $element["genre"]);
    }

}

    echo json_encode ($datageneri)
?>
