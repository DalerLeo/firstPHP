<?php
    $title="My First PHP page";
    /*
    $guest_names=explode(",","Sarvar,Ravshan,Aziz,Jamshid");
    $guest_ages=array(34,32,13,45);


    $guests=array();
    for($i=0;$i<count($guest_names);$i++) {
        $guests[]=array("name"=>$guest_names[$i], "age"=>$guest_ages[$i]);
    }

    $text="";
    foreach($guests as $g){
        $text.=$g["name"] . "," . $g["age"] . "\n";
    }

    file_put_contents("guests.txt", $text); */

    $guests=array();
    if(file_exists("texts/guests.txt")){
        $guest_lines=file("texts/guests.txt");
        foreach($guest_lines as $g) {
            list($name, $age)=explode(",", $g);
            $guests[]=array("name"=>$name, "age"=>$age);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1> <!-- <?= $title ?> <==> <?php print $title ?> -->
    <h2>List of Guests</h2>
    <ol>
        <?php foreach($guests as $g) { ?>
        <li><?= $g["name"] ?> - <?= $g["age"] ?> years old</li>
        <?php } ?>
    </ol>

    <h2>Text Files</h2>
    <ul>
    <?php foreach(glob("texts/*.txt") as $f) { ?>
        <li><a href="<?= $f ?>"><?= basename($f) ?></a></li>
    <?php } ?>
    </ul>

</body>
</html>
