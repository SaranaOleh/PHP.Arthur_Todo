
<div class="card">
    <div class="cardTitle">
        <div class="cardPrev">
            <img src="<?= $dessert["url"] ?>" alt="">
        </div>
        <div class="cardIng">
            <p><?= $dessert["ing"] ?></p>
        </div>
    </div>
    <div class="cardDesc">
        <?= $dessert["recipe"] ?>
    </div>
    <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="back">Назад</a>
</div>
