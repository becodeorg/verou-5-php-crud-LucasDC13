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

<nav>
    <a href='./index.php'>Home</a>
    <a href='?action=create'>Add a book</a>
</nav>

<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <p><?= "Title: <b><em>" . $book['Title'] . "</em></b>" ?></p>
            <p><?= "For " . $book['System'] ?></p>
            <p><?= "Published by " . $book['Publisher'] . " in " . $book['PublishedYear']?></p>
            <p><?= "MSRP: €" . $book['MSRP'] ?></p>
            <a href='?action=edit&id=<?= $book['ID']?>'>Edit details</a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>