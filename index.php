<?php
include_once __DIR__ . '/models/Movies.php';

$ritorno_al_futuro = new Movies(
    'Ritorno Al Futuro',
    'Il diciottenne Marty ha come amico un bislacco scienziato che ha inventato una macchina per viaggiare nel tempo.',
    '18 ottobre 1985',
    'Michael J. Fox, Christopher Lloyd, Lea Thompson, Crispin Glover'
);

$pulp_fiction = new Movies(
    'Pulp Fiction',
    'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
    'English',
    'John Travolta, Uma Thurman, Samuel L. Jackson'
);

$the_dark_knight = new Movies(
    'The Dark Knight',
    'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
    'English',
    'Christian Bale, Heath Ledge, Aaron Eckhart'
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1><?= $ritorno_al_futuro->nome ?></h1>
    <ul>
        <?php $ritorno_al_futuro->stampaTutto() ?>
    </ul>
    <br>
    <h1><?= $the_dark_knight->nome ?></h1>
    <ul>
        <?php $the_dark_knight->stampaTutto() ?>
    </ul>

</body>

</html>