<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $parking = $_GET["parking"] ?? "";
    $hotel_vote = $_GET["hotel-vote"] ?? "";

    
$category = [];

    // foreach($hotels as $key => $hotel){
    //     foreach($hotel[0 as $single_key => $hotel_feature)
    //     $category[] = $single_key;
    // }

    foreach($hotels[0] as $feature => $hotel){
        $category[] = $feature;
    }


    // foreach($hotels as $key => $hotel){ 
    // foreach($hotel as $single_key => $hotel_feature ){
    //     if ($parking && $hotel["parking"] && !$hotel_vote) {
    //         # code...
    //         echo $single_key . ": " . $hotel_feature . "<br/>"; 
    //     };

    //     if ($hotel_vote && $hotel["vote"] >= $hotel_vote && !$parking) {
    //         # code...
    //                     echo $single_key . ": " . $hotel_feature . "<br/>"; 

    //     };

    //     if($parking && $hotel["parking"] && $hotel_vote && $hotel["vote"] >= $hotel_vote ){
    //          echo $single_key . ": " . $hotel_feature . "<br/>"; 
    //     };

    // };
    // echo "<br/>";
    // };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PhP Hotels</title>
</head>
<body class="bg-dark text-white" >
<main class="container-fluid ">

    <h1>PhP Hotels</h1>
    <section >

        <form action="index.php" method="$_GET">
            <label for="parking">Parking</label>
            <input type="checkbox" name="parking" id="parking">
            <label for="hotel-vote">Vote:</label>
            <input type="text" placeholder="Insert vote" name="hotel-vote" id="hotel-vote">
            <button class="bg-danger text-white rounded" type="submit">Filter</button>
            <br> <br>
        </form>
    </section>

    <section class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <?php 
                    foreach($category as $feature_name){ echo '<th scope="col">'. $feature_name .'</th>';}
                ?>
                </tr>
             </thead>
            <tbody>
                <?php
                    foreach($hotels as $key => $hotel){ 
                    echo '<tr>';
                    foreach($hotel as $single_key => $hotel_feature ){
                        if(!$parking && !$hotel_vote){
                             echo    '<td>' . $hotel_feature .'</td>'; 
                        };
                        if ($parking && $hotel["parking"] && !$hotel_vote) {
                            echo    '<td>' . $hotel_feature .'</td>'; 
                        };
                        if ($hotel_vote && $hotel["vote"] >= $hotel_vote && !$parking) {
                        echo '<td>'. $hotel_feature . "</td>"; 
                        };
                        if($parking && $hotel["parking"] && $hotel_vote && $hotel["vote"] >= $hotel_vote ){
                            echo '<td>'. $hotel_feature . "</td>"; 
                        };
                    };
                    echo '</tr>';
                     };
                ?>
          </tbody>
</table>
</section>
</main>
</body>
</html>