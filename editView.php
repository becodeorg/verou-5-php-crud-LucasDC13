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

<h1>Arcanum Archive - Add a book to your collection</h1>

<nav>
    <a href='index.php'>Home</a>
</nav>

<form action='?action=update' method='post'>
    <label for='title'>Title:</label>
    <input type='text' id='title' name='title' placeholder="Enter the book's title..." value='<?= $foundBook['Title']?>'></input>
    <br>
    <label for='system'>System:</label>
    <select id='system' name='system' value=<?= $foundBook['System']?>>
        <option <?= $foundBook['System'] === 'D&D 5e' ? 'Selected' : ''?>>D&D 5e</option>
        <option <?= $foundBook['System'] === 'Witcher RPG' ? 'Selected' : ''?>>Witcher RPG</option>
        <option <?= $foundBook['System'] === 'Avatar Legends' ? 'Selected' : ''?>>Avatar Legends</option>
        <option <?= $foundBook['System'] === 'Tiny Dungeon' ? 'Selected' : ''?>>Tiny Dungeon</option>
        <option <?= $foundBook['System'] === 'Pugmire' ? 'Selected' : ''?>>Pugmire</option>
    </select>
    <br>
    <label for='publisher'>Publisher:</label>
    <input type='text' id='publisher' name='publisher' placeholder="Enter the book's publisher..." value='<?= $foundBook['Publisher']?>'></input>
    <br>
    <label for='publishedYear'>Year published:</label>
    <input type='numeric' id='publishedYear' name='publishedYear' placeholder="Enter the book's publishing year..." value='<?= $foundBook['PublishedYear']?>'></input>
    <br>
    <label for='MSRP'>MSRP: €</label>
    <input type='numeric' id='MSRP' name='MSRP' placeholder='xx.yy' value='<?= $foundBook['MSRP']?>'></input>
    <br>
    <button name='submit' type='submit'>Update!</button>
</form>

</body>
</html>