<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= MEDIA_URL ?>css/food.css">
</head>
<body>
<header>
    <p class="logo">Готовим вместе</p>
    <a href="<?= URLROOT ?>" class="home">На главную</a>
</header>
<?= $view ?>
<footer>
    <p class="redirect">Больше рецептов по <a href="http://rus-sky.com/history/library/vol.14/vol.14.5.htm">ссылке</a></p>
</footer>
<script src="js/script.js"></script>
</body>
</html>