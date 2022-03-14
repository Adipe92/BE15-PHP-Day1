<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Excercise</title>
    <style>
        h1 {
            text-align: center;
            position: relative;
            top: 100px;
        }

        p, ul{
            text-align: center;
            position: relative;
            top: 50px;
            list-style:none;
            }
    </style>
</head>
<body>
    <?php

    $name = "ADRIAN PEDZIWIATR";

    echo "<h1>$name</h1>";

    $f_name = "Adrian";
    $l_name = "Pedziwiatr";
    $age = 30;
    $nation = "Poland";
    $job = "Teacher";

    echo "<br>";

    echo "<p>Hi, my name is $f_name $l_name, I'm $age years old, I came from $nation and I am working as a $job.</p>";


    $arr = array("Mark", "Georg", "John", "Lisa");

    echo "<br>";

    echo "<p>The third player in the team is: $arr[3]</p>";

    $disney = array(
        "Mickie" => "Mickiey Mouse",
        "Princess" => "Sleeping Beuty",
        "Duck" => "Donald Duck"
    );

    $game = array(
        "Mario" => "Super Mario Bros",
        "Ratchet" => "Rachet and Clank: A Crack in Time",
        "GTA" => "GTA: Niko Belic"
    );

    $anime = array(
        "Izuku" => "Izuku Midoriya",
        "Chicka" => "Chicka Fujiwara",
        "Kurosaki" => "Kurosaki Ichigo"
    );

    echo "<p><b>Popular disney characters are:</b></p> <br>
    <ul>
        <li>{$disney["Mickie"]}</li>
        <li>{$disney["Princess"]}</li>
        <li>{$disney["Duck"]}</li>
    </ul>
    ";

    echo "<br>";

    echo "<p><b>Popular game characters are:</b></p> <br>
    <ul>
        <li>{$game["Mario"]}</li>
        <li>{$game["Ratchet"]}</li>
        <li>{$game["GTA"]}</li>
    </ul>
    ";

    echo "<br>";

    echo "<p><b>Popular anime characters are:</b></p> <br>
    <ul>
        <li>{$anime["Izuku"]}</li>
        <li>{$anime["Chicka"]}</li>
        <li>{$anime["Kurosaki"]}</li>
    </ul>
    ";

    echo "<br>";

    $character = array(
        "disney" => array
            (
            "Mickie" => "Mickiey Mouse",
            "Princess" => "Sleeping Beuty",
            "Duck" => "Donald Duck"
            ),
        "game" => array 
            (
            "Mario" => "Super Mario Bros",
            "Ratchet" => "Rachet and Clank: A Crack in Time",
            "GTA" => "GTA: Niko Belic"
            ),
        "anime" => array 
            (
            "Izuku" => "Izuku Midoriya",
            "Chicka" => "Chicka Fujiwara",
            "Kurosaki" => "Kurosaki Ichigo"
            )

            );

            echo "<p><b>Popular characters in disney!</b></p> <br>";
            echo "
            <ul>
               <li>{$character["disney"]["Mickie"]}</li>
               <li>{$character["disney"]["Princess"]}</li>
               <li>{$character["disney"]["Duck"]}</li>
           </ul>
           ";

           echo "<br>";

           echo "<p><b>Popular characters in game!</b></p> <br>";
            echo "
            <ul>
               <li>{$character["game"]["Mario"]}</li>
               <li>{$character["game"]["Ratchet"]}</li>
               <li>{$character["game"]["GTA"]}</li>
           </ul>
           ";

           echo "<br>";

           echo "<p><b>Popular characters in anime!</b></p> <br>";
            echo "
            <ul>
               <li>{$character["anime"]["Izuku"]}</li>
               <li>{$character["anime"]["Chicka"]}</li>
               <li>{$character["anime"]["Kurosaki"]}</li>
           </ul>
           ";

           echo "<br>";


    ?>
</body>
</html>