<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP App</title>
</head>
<body>
    <h1><?php
        print "My First PHP Page!";
    ?></h1>
    <?php
        $personal_info=array("name"=>"Sarvar Abdullaev",
                            "age"=>30,
                            "satisfaction"=>4.5);
     ?>
    <pre>
        <?php
            print "My name is {$personal_info["name"]}.\n I am {$personal_info["age"]} years old, in 2 years I will be "
            .($personal_info["age"]+2).".\n";
            print "My satisfaction from Internet Programming is {$personal_info["satisfaction"]}.\n";

            $x=4; $y=$x**2;
            print "The square of $x is $y\n";
        ?>
    </pre>
    <?php
        //creates files
        /*
        $ar=explode(",","Sarvar,Anvar,Bunyod,Hakim");
        $text=implode("\n", $ar);
        file_put_contents("names.txt", $text);
        */

        $ar=file("names.txt");
    ?>
    <ul>
        <?php foreach($ar as $a){?>
        <li><?= $a ?></li>
        <?php } ?>
    </ul>
    <?php
        $files=glob("*.txt");
     ?>
    <ul>
        <?php foreach($files as $f){?>
        <li><a href="<?= $f ?>"><?= $f ?></a></li>
        <?php } ?>
    </ul>

</body>
</html>































