
<div class="card">
    <div class="cardTitle">
        <div class="cardPrev">
            <img src="<?= $main["url"] ?>" alt="">
        </div>
        <div class="cardIng">
            <p><?= $main["ing"] ?></p>
        </div>
    </div>
    <div class="cardDesc">
        <?= $main["recipe"] ?>
    </div>
    <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="back">Назад</a>
</div>
