
<div class="card">
    <div class="cardTitle">
        <div class="cardPrev">
            <img src="<?= $soup["url"] ?>" alt="">
        </div>
        <div class="cardIng">
            <p><?= $soup["ing"] ?></p>
        </div>
    </div>
    <div class="cardDesc">
        <?= $soup["recipe"] ?>
    </div>
    <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="back">Назад</a>
</div>
