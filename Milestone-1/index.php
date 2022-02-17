<?php

$database = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
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

?>


<style  lang="scss" scoped>
@import "../../assets/style/vars.scss";
    *{
        box-sizing: border-box;
        margin:0;
        padding:0;
    }

    .container{
        margin: 0 auto;
        width:95%;
        display:flex;
        flex-wrap: wrap;
    }

    main{
        background-color:#1f2d3a;
        height:100vh;
    }

    .ms_boxdisco{
        color: white;
        text-align: center;
        height: 350px;
        background-color: #2e3a46;
        margin: 20px 20px;
        width:250px;
    }

    .ms_boxdisco img{
        width: 180px;
        padding: 10px 0px;
    }

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            
            <?php
                foreach ($database as $key => $element){
                    echo "<div class='ms_boxdisco'>";
                        /* echo "<p>".$element["title"]."</p>"; */
                        echo '<img src="'.$element["poster"].'"/>';
                        echo  "<p>".$element["title"]."</p>";
                        echo "<div>";
                            echo  "<p>".$element["author"]."</p>";
                            echo  "<p>".$element["year"]."</p>";
                        echo "</div>"; 
                    echo "</div>";
                    };
            ?>

        </div>
    </main>
</body>
</html>