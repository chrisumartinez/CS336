<?php
include 'database.php';
$conn = getDatabaseConnection();

$sql = "SELECT *
        FROM celebrity";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($records as $record){
    echo $record['firstName'] . " " . $record["lastName"] . " " . $record["gender"] . " " . $record["country_of_birth"];
    echo '<br>';
}

echo'<br>';
//Female Actresses Not born in USA, born by last name:
echo 'FEMALE ACTRESSES NOT BORN IN USA, BORN BY LAST NAME: ';
echo '<br>';
$sql2 = "SELECT * 
        FROM celebrity
        WHERE gender='F'
        AND country_of_birth != 'USA'
        ORDER BY lastName";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$records2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

foreach($records2 as $record2){
    echo $record2['lastName'] . " " . $record2["firstName"] . " " . $record2["gender"] . " " . $record2["country_of_birth"];
    echo '<br>';
}

echo'<br>';
echo 'TOP 3 LONGEST RUNNING MOVIES AFTER 2000';
echo '<br>';
$sql3 = "SELECT *
         FROM movie
         WHERE release_year > 2000
         ORDER BY duration DESC";
$stmt3 = $conn->prepare($sql3);
$stmt3->execute();
$records3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

$i = 0;
foreach($records3 as $record3){
    echo $record3["movie_title"] . " " . $record3["movie_category"] . " " . $record3["duration"] . " " . $record3["company"] . " " . $record["release_year"];
    echo '<br>';
    $i++;
    if($i == 3){
        break;
    }
}

echo '<br>';
echo 'List of actors and actresses who have not won an academy award, ordered by last name (15 points)';
echo '<br>';

$sql4 = "SELECT *
         FROM celebrity
         LEFT JOIN oscar ON celebrity.celebrityId=oscar.celebrity_id
         WHERE oscar.celebrity_id IS NULL";
$stmt4 = $conn->prepare($sql4);
$stmt4->execute();
$records4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);
foreach($records4 as $record4){
    echo $record4["firstName"] . " " . $record4['lastName'];
    echo '<br>';
}

echo'<br>';
echo 'Number of movies per category and their average duration (10 points)';
echo '<br>';
$sql5 = "SELECT *
         FROM movie";
$stmt5 = $conn->prepare($sql5);
$stmt5->execute();
$records5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);


//check for Number of Movies per cateory and average duration
$romance_counter = 0;
$fantasy_counter = 0;
$drama_counter = 0;
$romance_minutes = 0;
$fantasy_minutes = 0;
$drama_minutes = 0;

foreach($records5 as $record5){
    $category  = $record5["movie_category"];
    if($category == 'Romance'){
        $romance_counter++;
        $romance_minutes += $record5["duration"];
    }
    else{
        if($category == 'Drama'){
            $drama_counter++;
            $drama_minutes += $record5["duration"];
        }
        else{
            $fantasy_counter++;
            $fantasy_minutes += $record5["duration"];
        }
    }
}

$avg_romance = $romance_minutes / $romance_counter;
$avg_drama = $drama_minutes / $drama_counter;
$avg_fantasy = $fantasy_minutes / $fantasy_counter;

echo "Category: Romance " . "Number of Movies: " . $romance_counter . " Average Duration: " . $avg_romance;
echo '<br>';
echo "Category: Drama " . "Number of Movies: " . $drama_counter . " Average Duration: " . $avg_drama;
echo '<br>';
echo "Category: Fantasy " . "Number of Movies: " . $fantasy_counter . " Average Duration: " . $avg_fantasy;
echo '<br>';
echo '<br>';

echo ' List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category. (15 points)';
echo '<br>';

$sql6 = "SELECT *
         FROM celebrity
        INNER JOIN oscar ON celebrity.celebrityId=oscar.celebrity_id
        INNER JOIN award_category ON oscar.award_cat_id=award_category.award_cat_id
        INNER JOIN movie ON movie.movieId=oscar.movieId
        ORDER BY award_year";
$stmt6 = $conn->prepare($sql6);
$stmt6->execute();
$records6 = $stmt6->fetchAll(PDO::FETCH_ASSOC);
foreach($records6 as $record6){
    echo $record6["firstName"] . " " . $record6["lastName"] . " " . $record6["movie_title"] . " " . $record6["award_category"] . " " . $record6["award_year"];
    echo '<br>';
}