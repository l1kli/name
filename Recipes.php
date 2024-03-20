<?php 
    include "components/header.php";
    $title = "Меню";
    include "components/banner.php";

    $sth = $dbh->prepare("SELECT * FROM `categories`");
    $sth->execute();
    $categories = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
    <nav id="menuVertical">
		<ul>
			<li><a href="#p1"><div></div><span>Блюда</span></a>
            	<ul>
                    <?php foreach ($categories as $key => $value) {?>
                        <li><a href="#p<?= $value['id'] ?>"><?= $value['category'] ?></a></li>
                    <?php } ?>
				</ul>
            </li>

			<li><a href="#p8"><div></div><span>Винная карта</span></a></li>

			<li><a href="#p9"><div></div><span>Алкоголь</span></a></li>

			<li><a href="#p10"><div></div><span>Напитки</span></a></li>
		</ul>
	</nav>
    <div class="bradcam_text text-center">
    <?php foreach ($categories as $key => $value) {
        $sth = $dbh->prepare("SELECT * FROM `products` WHERE `category_id` = '{$value['id']}'");
        $sth->execute();
        $products = $sth->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
            <br><br><h1 id="p<?= $value['id'] ?>"><?= $value['category'] ?>
            </h1>
        
        <div class="recepie_area">
            <div class="container">
                <div class="row">
                    <?php foreach ($products as $key => $product) {?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_recepie text-center">
                                <div class="recepie_thumb">
                                    <img src="img/recepie/<?= $product['img'] ?>" alt="">
                                </div>
                                <h3><?= $product['name'] ?></h3>
                                
                            
                                <a href="recipes_details.php?id=<?= $product['id'] ?>" class="line_btn">Перейти</a>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    <?php } ?>

        

<div class="bradcam_text text-center">
    <hr>                 
    <br><br><br><h1 id="p8">Винная карта
    </h1>
    
</div>
<br>
<p1 style="text-align: center;">Вино считается одним из самых древних алкогольных напитков. До нашего времени дошли уникальные рецепты изготовления винных напитков, <br>что в сочетании с современными технологиями позволяют создавать продукты с изысканным вкусом.<br>

    Винная карта ресторана «Береста» включает в себя широкий ассортимент элитных вин со всех стран мира. <br>У нас можно попробовать как редкие коллекционные вина, так и хорошо узнаваемые бренды.</p1>
    <br><br><br>

    <div class="bradcam_text text-center">
                       
        <br><br><br><h1>Винные миниатюры
        </h1> 
    </div>


    <pre>                  
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-lg-2">
                    
                    <p style="color:black; font-size: 20px;">
                        Абрау Дюрсо белое, полусладкое, Россия                                                                             690 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Sparkling Wine, White, demy-sweet, 375 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ле Маридель Шардоне, сухое, Поль Сапан                                                                             490 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> "Le Maridelle" Chardonnay, semi-dry, Paul Sapin, France, 187 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Шабли Сент Клер. Бургундия. САС Жен-Марк                                                                           3100 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Chablis Sainte Claire. Вourgogne. Jean-Marc Brocard (Domaine Sainte-Claire). Chablis AOC, 375 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ле Маридель Шардоне, полусладкое, Польша                                                                           490 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> "Le Maridelle" Chardonnay, semi-sweet, Paul Sapin, France, 187 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ле Маридель Розе, сухое, Париж, Франция                                                                             490 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> "Le Maridelle" Rose, semi-dry, Paul Sapin, France, 187 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ле Маридель Каберне Совиньон, сухое,  Франция                                                                        610 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> ""La Maridelle" Cabernet Sauvignon, semi-dry, Paul Sapin, France, 250 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ле Маридель Каберне Совиньон, полусладкое, Франция                                                                    490 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> "Le Maridelle" Cabernet Sauvignon, semi-sweet, Paul Sapin, France, 187 мл.

                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Абрау-Дюрсо Блан де Блан, Белое, брют                                                                                 2150 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Russian Sparkling Wine, (White, brut), 750 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Российское Шампанское Абрау-Дюрсо Виктор Дравиньи Белое, полусладкое                                          1650 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Russian Sparkling Wine (White, demy-sweet), 750 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ламбруско Бьянко Фиорино Д'Оро. Италия Белое, полусладкое                                                            1050 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Lambrusco Bianco. Italy, 750 мл.                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ламбруско Розато Фиорино Д'Оро. Италия Розовое, полусладкое                                                                                 1050 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Lambrusco Bianco. Italy, 750 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Фиестино брют. Каса Демонте. Италия                                                        1500 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Fiestino Brut, Casa Demonte. Italy, 750 мл.     </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Орвието классико Сальчето. Чевико. Умбрия. DOC                                                     2300 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Orvieto Classico Salceto. Cevico. Orvieto. Umbria. DOC, 750 мл.                 </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Пино Гриджио. Сант Орсола. Венето. DOC                                                      1300 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Pinot Grigio. Sant`Orsola. Delle Venezie DOC, 750 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Приара Пино Гриджио. Фриули. DOC                                                       2850 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Priara Pinot Grigio. Friuli. DOC, 750 мл.     </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Гави ди Гави. Фонтанафредда. Пьемонт. DOCG                                                        3900 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Gavi Li Gavi. Fontanafredda. DOCG, 750 мл.       </em>                                                                                        
                    </p>
            </div>
        </div>
    </div>
</pre>
<hr>
<div class="bradcam_text text-center">
                   
    <br><br><br><h1 id="p9">Алкоголь
    </h1>
    
</div>
<br>
<p1 style="text-align: center;">В алкогольном меню ресторана «Береста» представлен большой выбор коктейлей, пива, крепкого <br>алкоголя. У нас Вы найдете знакомые позиции или можете попробовать что-то новое.<br>

    <em>Алкоголь</em> – неотъемлемая часть любого праздника, необходимая для поддержания общего настроения гостей <br>и создания непринужденной обстановки. «Вишенкой на торте» Вашего мероприятия станут популярные<br>алкогольные напитки из нашего меню. Выбор будет зависеть от повода банкета, а также Ваших предпочтений.<br>Так, для свадебных торжеств чаще выбирают шампанское и белое вино, для юбилея или дня рождения – виски<br>и коньяк, для делового фуршета – легкие вина и коктейли.</p1>
    <br><br><br>

    <div class="bradcam_text text-center">
                       
        <br><br><br><h1>Алкогольное меню
        </h1> 
    </div>


    <pre>                  
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-lg-2">
                    
                    <p style="color:black; font-size: 20px;">
                        Мохито                                                                             500 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Белый ром, сок лайма, мята, сироп, содова, 300 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Мохито Клубничный                                                                             520 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Белый ром, сок лайма, мята, сироп, содовая, клубника, 300 мл.                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Маргарита Классическая                                                                         420 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Текила, цитрусовый ликер Triple Sec, лаймовый сок, 120 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Маргарита "Флирт"                                                                           450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Текила, кампари, спрайт, сироп маракуйя, 300 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Коктейль "Хуго"                                                                             490 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Ликер бузины, сироп бузины, игристое вино, сок лайма, содовая, мята, лайм, 350 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Пина Колада                                                                        610 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Ром светлый, сироп кокосовый, сок ананасовый, сливки, взбитые сливки, 300 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Клаусталер Ориджинал                                                                    400 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> Светлое фильтрованное, безалкогольное пиво, Германия, 330 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Харп, Россия, светлое пиво                                                                              400 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 450 мл.        </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Жигули Барное, светлое пиво                                         400 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 450 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ягермайстер                                                            3500 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 700 мл. </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Мартини Бьянко                                                                           3200 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 1000 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Камино Реал Бланко                                                    4200 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 700 мл.     </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Бакарди Карта Оро                                                    3700 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 700 мл.                 </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Вильям Лоусонс                                                      4300 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 1000 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Джек Дениэлс                                                       7900 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 1000 мл.     </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Джеймесон                                                        7200 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 1000 мл.       </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Мартель V.S.O.P.                                                        9100 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 700 мл.       </em>                                                                                        
                    </p>
            </div>
        </div>
    </div>
</pre>
<hr>
<div class="bradcam_text text-center">
                   
    <br><br><br><h1 id="p10">Напитки
    </h1>
    
</div>
<br>
<p1 style="text-align: center;">В ресторане «Береста» представлены безалкогольные напитки на любой вкус. При этом не важен повод, <br>по которому Вы решили к нам заглянуть, в меню всегда найдется что-то для Вас. Основной принцип нашей<br>

    работы – это гостеприимство, а, например, на Востоке чай испокон веков считается главным символом<br>радушия. Поэтому в нашем ресторане большой ассортимент классических чаев.<br>Если Вы планируете провести фуршет или банкет, то безалкогольные напитки органично дополнят меню<br>мероприятия. Наши сотрудники помогут подобрать правильные напитки в зависимости от тематики праздника.</p1>
    <br><br><br>

    <div class="bradcam_text text-center">
                       
        <br><br><br><h1>Меню напитков 
        </h1> 
    </div>


    <pre>                  
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-lg-2">
                    
                  
                    
                    <p style="color:black; font-size: 20px;">
                        Боржоми                                                                             220 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 330 мл.                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Кока-Кола                                                                             190 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 330 мл.                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Спрайт                                                                         170 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 330 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Соки в ассортименте                                                                           140 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 200 мл.

                    </em>                                                                                        
                    </p>
                    
                    <p style="color:black; font-size: 20px;">
                        Ванильный Молочный Коктейль                                                                             410 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 300 мл.</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Шоколадный Молочный Коктейль                                                                        410 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 300 мл.                 </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ристретто                                                                    280 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 20 мл.

                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Эспрессо                                                                              230 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 40 мл.        </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Американо                                         250 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 200 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Каппучино                                                            220 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> на выбор: молоко или кокосовое молоко, 200 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Латте                                                                           310 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> на выбор: молоко или кокосовое молоко, 250 мл</em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Ассам                                                    450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 400 мл.     </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Цейлон                                                    450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 400 мл.                 </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Эрл Грей                                                      450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 400 мл.
                    </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Сенча                                                       450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 400 мл.     </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Серебрянный жасмин                                                        450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 400 мл.       </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Молочный Улун                                                        450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 400 мл.       </em>                                                                                        
                    </p>
                    <p style="color:black; font-size: 20px;">
                        Чай Пино Колада                                                        450 <em>руб.</em> 
                       <em style="color:rgb(71, 71, 71); font-size: 15px;"> 400 мл.       </em>                                                                                        
                    </p>
            </div>
        </div>
    </div>
</pre>
<br>

<p1 style="text-align: center;"> <em>Если Вы решили заглянуть к нам на поздний завтрак, обед или ужин с друзьями, семьей или коллегами, бронируйте столик по телефону +7 (953) 390-20-23. <br>Или приезжайте лично, чтобы обсудить детали проведения мероприятия. Мы всегда рады Вас видеть!</em></p1>
    <br><br><br> 
            

    <?php 
    include "components/footer.php";
?>
