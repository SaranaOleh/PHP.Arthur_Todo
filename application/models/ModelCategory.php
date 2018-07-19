<?php

class ModelCategory extends Model
{
    private $dataSoups = [
        ["name"=>"Самый простой суп","url"=>MEDIA_URL."images/soupOne.jpg","id"=>1,"desc"=>"Рецепт простого супа для начинающих или для обладателей полупустого холодильника. Если у вас найдется пара картофелин, морковка, лук и кусочек капусты, то голодными вы не останетесь.","recipe"=>"<p>Подготовить ингредиенты для нашего простого супчика.</p><p>Картофель почистить, помыть и нарезать кубиками.</p><p>Лук очистить и помыть, мелко нашинковать.</p><p>Рецепт простого супа можно дополнить морковью - нарезанную или тертую морковь варить вместе с картошкой и луком.</p><p>Залить овощи водой(1,5 л), добавить немного растительного масла и варить до полуготовности картофеля.</p><p>Капусту нашинковать соломкой. Чем тоньше нашинковать капусту, тем вкуснее будет суп.</p><p>Капусту бросить в суп.</p><p>Зелень помыть и мелко нарезать.</p><p>
        По готовности картофеля снять суп с огня (сдвинуть на край плиты) и добавить нашинкованную зелень. Посолить.
        В самый простой суп можно добавить пару ложек соевого соуса вместо соли.</p><p>Самый простой суп готов.
        Приятного аппетита!</p>","ing"=>"Картофель - 2-3 шт.<br>Лук репчатый - 1 шт.<br>Морковь (по желанию) - 1 шт.<br>Масло растительное - 1-2 ст. ложки<br>Капуста белокочанная - 300-400г<br>Зелень - 1 пучок<br>Соль - 0,5 ст. ложки<br>Соус соевый (по желанию) - 1-2 ст. ложки"],
        
        ["name"=>"Суп «Харчо»","url"=>MEDIA_URL."images/soupTwo.jpg","id"=>2,"desc"=>"Суп харчо, рецепт с курицей. Вкусный, ароматный, острый. Вообще-то это суп из говядины, но грузины довольно часто готовят суп харчо и из курицы.","recipe"=>"<p>Как приготовить суп харчо:</p><p>Курицу промойте и порежьте на порционные кусочки.</p><p>Залейте курицу 2,5 л кипящей водой и варите до готовности (30-40 минут) на среднем огне под крышкой.</p><p>Промойте рис.</p><p>Выложите в бульон промытый рис. Когда он начнет набухать (через 10-15 минут), посолите суп.</p><p>Очистите, вымойте и мелко порежьте лук и морковь.</p><p>Чеснок очистите от кожицы, мелко порежьте.</p><p>В сковороде разогрейте сливочное масло.</p><p>Обжарьте овощи на среднем огне, помешивая 2-3 минуты.</p><p>Перед окончанием жарки добавьте томатную пасту.</p><p>И хорошо перемешайте.</p><p>Чеснок переложите в сковороду к овощам. Тушите овощи вместе около 5–7 минут на самом маленьком огне, помешивая.</p><p>Переложите овощи в суп.</p><p>Отдельно приготовьте заправку для супа харчо. Очистите и порежьте чеснок, затем немного подавите его. Вымойте и нарежьте зелень.</p><p>Чеснок смешайте с мелко порубленной зеленью укропа и базилика.</p><p>Наш суп харчо готов. При подаче посыпать заправкой.Приятного аппетита!</p>","ing"=>"Курица бройлерная - 1 шт.<br>Рис - 0,5 стакана<br>Чеснок - 1 головка<br>Масло сливочное - 50 г<br>Лук репчатый - 1 шт.<br>Морковь - 1 шт.<br>Томат-паста - 2	ст. ложки<br>Зелень - 50-60 г<br>Соль - 1 ст. ложка"],
        
        ["name"=>"Суп крестьянский","url"=>MEDIA_URL."images/soupThree.jpg","id"=>3,"desc"=>"Предлагаем вам включить в обеденное меню крестьянский суп. Нетрудно догадаться, что такое называние первое блюдо получило благодаря использованию простых и доступных ингредиентов. Наш вариант - это крестьянский суп на курином бульоне. Кушанье получается сытным и наваристым","recipe"=>"<p>Подготавливаем в указанном количестве ингредиенты, которые нужны для приготовления крестьянского супа. Варить суп будем в кастрюле объемом 2,5-3 л.</p><p>Половинку курицы разрезаем на части. Переправляем их в кастрюлю. Заливаем водой, варим около 30-40 минут. Отварные куриные части из кастрюли извлекаем, а получившийся бульон процеживаем.</p><p>Промываем под проточной водой картофельные клубни. Очищаем их, а затем нарезаем в форме брусочков. Измельченный картофель перекладываем в куриный бульон.</p><p>Очень тщательно промываем пшено. Крупу предварительно перебираем, извлекаем черные зернышки, если таковые имеются. Промытое пшено отправляем в кастрюлю к картофелю</p><p>Ингредиенты доводим до кипения, прикрываем кастрюлю крышкой. Варим суп примерно 15 минут. В конце готовки приправляем крестьянский суп солью по вкусу.</p><p>Остуженное куриное мясо отделяем от костей. Перекладываем мясной ингредиент в суп.</p><p>Промываем и обсушиваем бумажным полотенцем свежую зелень. Мелко рубим ее. Переправляем зелень в суп. Варим суп крестьянский еще минуты 2-3.</p><p>Сытный и аппетитный суп крестьянский с курицей готов! Приятной трапезы!</p>","ing"=>"Курица - 0,5 шт.<br>Пшено - 100 г<br>Картофель - 4-5 шт.<br>Зелень свежая - 4-5 веточек<br>Соль - по вкусу"]
    ];
    
    private $dataMains = [
        ["name"=>"Жаркое из свинины с картошкой","url"=>MEDIA_URL."images/mainOne.jpg","id"=>"1","desc"=>"В выходной день на обед предложу жаркое из свинины с картошкой. Есть повод встретиться всей семьей за обеденным столом:)","recipe"=>"<p>Лук очистить, вымыть, нарезать тонкими полукольцами.</p><p>Мясо вымыть, нарезать порционными кусочками.</p><p>Разогреть сковороду, налить растительное масло. Выложить в горячее масло подготовленный лук. Жарить на среднем огне, помешивая, 2-3 минуты.</p><p>В сковороду выложить мясо. Жарить все вместе, помешивая, 7-10 минут.</p><p>Помидоры вымыть, ошпарить кипятком, очистить от кожуры, натереть на терке.</p><p>К мясу добавить помидоры (или томат), тушить все вместе 5 минут.</p><p>Очистить и вымыть картофель. Нарезать на кусочки, если большого размера.</p><p>Вскипятить чайник. Картофель выложить в казанок. Добавить мясо. Залить все кипятком так, чтобы вода не полностью закрывала продукты. Поставить казанок на огонь, довести до кипения. Посолить, поперчить по вкусу. Перемешать</p><p>Убавить огонь до самого маленького, накрыть крышкой. Тушить жаркое до готовности (около 30-40 минут).</p><p>Чеснок очистить и раздавить в чесночнице. Добавить в казанок лавровый лист и чеснок (или аджику). Перемешать, дать покипеть 5 минут. Снять с огня. Дать настояться 10 минут под крышкой.</p><p>Жаркое из свинины с картошкой готово.Приятного аппетита!</p>","ing"=>"Свинина - 500 г<br>Картофель - 1 кг<br>Лук репчатый - 1-2 шт.<br>Помидоры свежие - 2-3 шт<br>или томат-паста - 1 ст. ложка<br>Чеснок (по желанию) - 2 зубчика<br>или аджика (по желанию) - 1 ч. ложка<br>Растительное масло - 3 ст. ложки<br>Лавровый лист - 1 шт.<br>Соль - по вкусу<br>Перец - по вкусу"],
        
        ["name"=>"Гречка с курицей в духовке","url"=>MEDIA_URL."images/mainTwo.jpg","id"=>"2","desc"=>"Это блюдо подойдет и к праздничному столу, и на самый обычный ужин. Оценят и спортсмены, и гурманы. Секрет вкуса в том, что гречка готовится вместе с мясом и напитывается его соками.","recipe"=>"<p>Первым делом нужно тщательно промыть гречку и высыпать в отдельную миску. Вскипятить воду и залить гречку минут на 10 примерно. Туда же добавить соли и приправ (я брала так называемую 'вкусную соль').Далее нужно промыть под проточной водой куриные ножки, обсушить и на эти 10 минут замариновать в соли, перце и любой любимой приправе. Духовку ставим на 180 градусов и ждем, пока разогреется.Половинку луковицы режем тонкими полукольцами, а чеснок - мелкими кубиками. Вуа-ля! Предварительный этап окончен!</p><p>Берем форму, в нее заливаем растительное масло. Если масло сливочное, то его в последний момент кладем маленькими кусочками сверху всего блюда. Высыпаем в форму лук и чеснок, гречку вместе с водой и перемешиваем, распределяя равномерно ингредиенты. Выкладываем ножки последним слоем.Берем фольгу, блестящей стороной внутрь накрываем наше блюдо так, чтобы воздух не циркулировал - это нам нужно для приготовления в собственном соку.</p><p>В разогретую духовку ставим нашу форму по центру на 1 час. Минут за 20 финиша нужно убрать фольгу, чтобы появился вкусный золотистый оттенок.Приятного аппетита!Ваш Поваренок Лиза!)))</p>","ing"=>"Гречневая крупа - 1,5 стакана<br>Части курицы (ножки, бедрышки, крылья, грудки - на выбор) - примерно 600 г<br>Лук репчатый, средний - 0,5 шт.<br>Чеснок - 3 зубчика<br>Масло подсолнечное - 1,5 ст. ложки<br>(можно сливочное масло - грамм 30)<br>Соль<br>Перец<br>Вода (кипяток) - 2,5 стакана"],
        
        ["name"=>"Макароны с мясом","url"=>MEDIA_URL."images/mainThree.jpg","id"=>"3","desc"=>"Такое простое блюдо, макароны с мясом, можно приготовить абсолютно по-разному. Так вот мой вариант - сочно, насыщенно и сытно.","recipe"=>"<p>Нашинкованный лук и нарезанную кубиками морковь обжарить.</p><p>Добавить мясо, на сильном огне, постоянно помешивая, обжарить. Слегка посолить. Убавить огонь, закрыть крышкой и чуть потушить 10-15 минут</p><p>Параллельно сварить макароны обычным способом.</p><p>В мясо добавить помидор, кетчуп, воду, соль, специи и тушить ещё 15-20 минут (мясо станет мягким).</p><p>Добавить макароны, зелень, хорошо перемешать.</p><p>Выключить огонь и убрать Макароны с мясом с плиты.<br>Приятного аппетита!</p>","ing"=>"Макароны - 150 г<br>Мясо без костей (свинина) - 300 г<br>Лук - 1 средний<br>Морковь - 1 небольшая<br>Помидор - 1 небольшой<br>Кетчуп (томатная паста) - 1,5 ст.л.<br>Вода - 50 мл<br>Свежая зелень<br>Соль приправы по вкусу"]
    ];
    
    private $dataDesserts = [
        ["name"=>"Классический чизкейк","url"=>MEDIA_URL."images/dessertOne.jpg","id"=>"1","desc"=>"Рецепт классического чизкейка можно использовать как основу для приготовления разновидностей этого лакомства","recipe"=>"<p>Предварительно разогреть духовку до 180 градусов. Смазать маслом разъемную форму для торта. Блендером хорошо измельчить печенье. Добавить растаявшее масло, сахар и соль, перемешать. Выложить полученную массу в форму, придавливая пальцами, равномерно распределить по дну и краям. Выпекать 12-15 минут. Охладить на решетке. Огонь снизить до 150 градусов.</p><p>В чайнике вскипятить воду. Подготовить начинку. Миксером на средней скорости взбить сливочный сыр. Постепенно добавить сахар, лимонную цедру и сок, соль. Затем вбить по одному яйца и добавить сметану.</p><p>Форму с коржом завернуть в фольгу. Вылить начинку. Поставить в противень с высокими бортиками, налить в противень кипяток таким образом, чтобы вода доходила до 1/2 высоты наполненной формы. Выпекать около 1 часа 45 минут до готовности. Вынуть форму из воды, охладить при комнатной температуре 20 минут. Острием ножа провести по стенкам, аккуратно отсоединить бортики формы. Оставить при комнатной температуре до полного охлаждения. Оставить в холодильнике на ночь.</p>","ing"=>"Для коржа:<br>Масло сливочное (растопленное) - 5 ст. л.<br>Крекеры - 200 г<br>Сахар - 1/4 стакана<br>Соль - 1/4 ч. л.<br>Для начинки:<br>Сливочный сыр (комнатной температуры) - 1 кг<br>Лимонная цедра - 1 ч. л.<br>Лимонный сок - 1 ст. л.<br>Соль - 1/2 ч. л.<br>Яйца крупные - 4 шт.<br>Сметана - 1 стакан<br>Сахар - 1 стакан или по вкусу"],
        
        ["name"=>"Шоколадный пудинг из манки","url"=>MEDIA_URL."images/dessertTwo.jpg","id"=>"2","desc"=>"На основе манной каши готовится этот вкуснейший десерт. При желании пудинг шоколадный можно полить сиропом, украсить фруктами.","recipe"=>"<p>Молоко налить в кастрюлю и поставить на огонь</p>
        <p>Шоколад натереть на крупной терке. Добавить в молоко шоколад, сахарный песок, масло и щепотку соли. Помешивая, довести до кипения. Постепенно, тонкой струйкой всыпать манку. Постоянно мешать и варить на маленьком огне 10 минут.<br><br>Форму ополоснуть холодной водой и выложить в нее пудинг. Когда остынет, поставить в холодильник (на 1,5-2 часа).</p><p>Готовый пудинг выложить на тарелку. Пудинг шоколадный можно украсить рисунком через трафарет, посыпав какао или растворимым кофе, или посыпать тертым шоколадом.</p><p>Готовый пудинг шоколадный в разрезе. Приятного аппетита!</p>","ing"=>"Молоко - 2 стакана (500 мл)<br>Сахар - 0,5 стакана (100 г)<br>Молочный шоколад - 0,5 плитки (50 г)<br>Сливочное масло - 1 чайная ложка (10 г)<br>Манная крупа - 0,5 стакана (100 г)<br>Соль - 1 щепотка"],
        
        ["name"=>"Хрустящие бананы с начинкой","url"=>MEDIA_URL."images/dessertThree.jpg","id"=>"3","desc"=>"Такой десерт Вы, наверное, ещё не пробовали. Готовятся хрустящие бананы с шоколадной пастой быстро и просто, буквально из нескольких ингредиентов.","recipe"=>"<p>Помещаем в блендер печенье и делаем из него крошку.</p><p>Бананы желательно выбирать зрелые, поровнее и подлиннее. Не очищая кожуры, отрезаем кончики и режем банан на три части.</p><p>Узким ножом проделываем сквозное отверстие в каждой части.</p><p>Выкладываем в кондитерский мешок шоколадную пасту (или любую другую начинку) и заполняем ей бананы.</p><p>Очищаем каждый кусочек, обваливаем в муке, яйце и печенье</p><p>Обжариваем бананы в кипящем масле. Делать это надо очень быстро, чтобы обжарилась только панировка, а банан не успел стать мягким.</p><p>Выкладываем хрустящие бананы с шоколадом на салфетку, чтобы лишнее масло стекло. Посыпаем сахарной пудрой.</p><p>Приятного аппетита!</p>","ing"=>"Бананы - 4 шт.<br>Паста шоколадная - 150-200 г<br>Печенье - 5 шт.<br>Яйцо - 1 шт.<br>Мука<br>Масло растительное (для жарки)"]
    ];
    
    public function getAllFromCategory($category){
        $cat = "data".ucfirst($category);
        return $this->$cat;
    }

    public function getByIdFromCategory($category,$id){
        $cat = "data".ucfirst($category);
        foreach ($this->$cat as $elem)
            if($elem["id"]==$id) return $elem;
        return NULL;
    }
}