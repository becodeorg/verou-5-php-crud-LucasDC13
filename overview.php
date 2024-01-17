<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arcanum Archive - track your collection of TRPG books</title>
</head>
<body>

<h1>Arcanum Archive - track your collection of TRPG books</h1>

<form>
    <label for='title'>Title:</label>
    <input type='text' id='title' name='title' placeholder="Enter the book's title..."></input>
</form>


<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= "Title: " . $book['Book'] ?></li>
        <!-- <li><?= "For " . $book['System'] ?></li>
        <li><?= "Published by " . $book['Publisher'] . " in " . $book['PublishedYear']?></li>
        <li><?= "MSRP: €" . $book['MSRP'] ?></li> -->
    <?php endforeach; ?>
</ul>

</body>
</html>