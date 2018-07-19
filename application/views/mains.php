
<div class="recipes">
    <?php foreach ($mains as $main): ?>
        <div class="blockRecipes">
           <div class="prevyu">
               <img src="<?= $main["url"] ?>" alt="">
           </div>
            <div class="describe">
                <a href="<?=URLROOT."food/mains/".$main["id"]?>"><?= $main["name"] ?></a>
                <p class="desc"><?= $main["desc"] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <a href="<?=URLROOT."food" ?>" class="back">Назад</a>
</div>