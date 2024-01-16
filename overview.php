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

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= "Title: " . $card['name'] ?></li>
        <li><?= "For " . $card['system'] ?></li>
        <li><?= "Published by " . $card['publisher'] . " in " . $card['publishedYear']?></li>
        <li><?= "MSRP: €" . $card['msrp'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>