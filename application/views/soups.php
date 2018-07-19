
<div class="recipes">
    <?php foreach ($soups as $soup): ?>
        <div class="blockRecipes">
           <div class="prevyu">
               <img src="<?= $soup["url"] ?>" alt="">
           </div>
            <div class="describe">
                <a href="<?=URLROOT."food/soups/".$soup["id"]?>"><?= $soup["name"] ?></a>
                <p class="desc"><?= $soup["desc"] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <a href="<?=URLROOT."food" ?>" class="back">Назад</a>
</div>


