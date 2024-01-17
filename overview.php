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
    <br>
    <label for='system'>System:</label>
    <select id='system' name='system'>
        <option>D&D 5e</option>
        <option>Witcher RPG</option>
        <option>Avatar Legends</option>
        <option>Tiny Dungeon</option>
        <option>Pugmire</option>
    </select>
    <br>
    <label for='publisher'>Publisher:</label>
    <input type='text' id='publisher' name='publisher' placeholder="Enter the book's publisher..."></input>
    <br>
    <label for='publishedYear'>Year published:</label>
    <input type='numeric' id='publishedYear' name='publishedYear' placeholder="Enter the book's publishing year..."></input>
    <br>
    <label for='MSRP'>MSRP: €</label>
    <input type='numeric' id='MSRP' name='MSRP' placeholder='xx.yy'></input>
</form>


<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <p><?= "Title: <b><em>" . $book['Title'] . "</em></b>" ?></p>
            <p><?= "For " . $book['System'] ?></p>
            <p><?= "Published by " . $book['Publisher'] . " in " . $book['PublishedYear']?></p>
            <p><?= "MSRP: €" . $book['MSRP'] ?></p>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>