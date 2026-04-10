<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basics</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <?php
    $books = [ "The Power of positive thinking",
        "The Magic of Big Thinking",
        "Little Man"
    ] ;

    ?>
    <h1> Recommended Books </h1>
    <ul>
        <?php
        foreach ($books as $book):
         echo "<li> $book</li>";


        ?>
        <?php endforeach; ?>
        <li> I am going to be good at php </li>
    </ul>



</body>
</html>
