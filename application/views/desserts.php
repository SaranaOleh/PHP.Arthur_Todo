
<div class="recipes">
    <?php foreach ($desserts as $dessert): ?>
        <div class="blockRecipes">
           <div class="prevyu">
               <img src="<?= $dessert["url"] ?>" alt="">
           </div>
            <div class="describe">
                <a href="<?=URLROOT."food/desserts/".$dessert["id"]?>"><?= $dessert["name"] ?></a>
                <p class="desc"><?= $dessert["desc"] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    <a href="<?=URLROOT."food" ?>" class="back">Назад</a>
</div>