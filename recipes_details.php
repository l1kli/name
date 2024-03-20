<?php 
    include "components/header.php";
    if(!isset($_GET['id'])){
        header("Location: Recipes.php");
    }
    $sth = $dbh->prepare("SELECT `categories`.*, `products`.*
    FROM `categories` 
        LEFT JOIN `products` ON `products`.`category_id` = `categories`.`id`
        WHERE `products`.`id` = '{$_GET['id']}'");
    $sth->execute();
    $product = $sth->fetch(PDO::FETCH_ASSOC);
    $title = $product['name'];
    include "components/banner.php";

?>

    <div class="recepie_details_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="recepies_thumb">
                        <img src="img/recepie/<?=$product['img'] ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="recepies_info">
                        <h3><?=$product['name'] ?></h3>
                        <p><?=$product['small_des'] ?></p>
                        <div class="resepies_details">
                            <ul>
                                <li><p><strong>Время</strong> : <?=$product['time'] ?> </p></li>
                                <li><p><strong>Категория</strong> : <?=$product['category'] ?>  </p></li>
                                <li><p><strong>Тэги</strong> :  <?=$product['tags'] ?>  </p></li>
                            </ul>
                        </div>
                        <div class="links">
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                        </div>
                        <a href="admin-menu-red.php?id=<?= $product['id'] ?>" class="line_btn">Обновить</a>
                        <a href="admin-menu-delete.php?id=<?=$product['id'] ?>" class="line_btn">Удалить</a>
                    </div>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="recepies_text">
                        <p>
                            <?= $product['des'] ?> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recepie_area_start  -->
    <div class="recepie_area inc_padding">
        <div class="container">
            <div class="row">
                <?php  
                    $sth = $dbh->prepare("SELECT `categories`.*, `products`.*
                        FROM `categories` 
                            LEFT JOIN `products` ON `products`.`category_id` = `categories`.`id` 
                                WHERE `categories`.`id` = '{$product['category_id']}' AND `products`.`id` != '{$product['id']}' LIMIT 3");
                    $sth->execute();
                    $products = $sth->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($products as $key => $product) {?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_recepie text-center">
                            <div class="recepie_thumb">
                                <img src="img/recepie/<?=$product['img'] ?>" alt="">
                            </div>
                            <h3><?=$product['name'] ?></h3>
                            <span><?=$product['category'] ?></span>
                            <p>Время приготовлени: <?=$product['time'] ?></p>
                            <a href="?id=<?=$product['id'] ?>" class="line_btn">Смотреть блюдо</a>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php 
    include "components/footer.php";
?>