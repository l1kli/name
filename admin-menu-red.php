<?php
    include "components/header.php";
    if(!isset($_SESSION['admin']) || !isset($_GET['id'])){
        header("Location: admin-menu.php");
        exit;
    }
    if(isset($_POST['name'])){
        if(isset($_FILES['img'])){
            if(mb_substr($_FILES['img']['type'], 0, 5) == 'image'){
                $img = uniqid().".". mb_substr($_FILES['img']['type'], 6);
                move_uploaded_file($_FILES['img']['tmp_name'], "img/recepie/".$img);
                $sth = $dbh->prepare("UPDATE `products` SET 
                `name`=:name,
                `time`=:time,
                `category_id`=:category_id,
                `tags`=:tags,
                `small_des`=:small_des,
                `des`=:des,
                `img`=:img 
                WHERE `id`=:id
            ");
            $sth->execute([
                "id"=> $_POST['id'],
                "name" => $_POST['name'], 
                "time" => $_POST['time'], 
                "category_id" => $_POST['category_id'], 
                "tags" => $_POST['tags'], 
                
                "small_des" => $_POST['small_des'], 
                "des" => $_POST['des'], 
                "img" => $img, 
            ]);
        }else{
            $sth = $dbh->prepare("UPDATE `products` SET 
                `name`=:name,
                `time`=:time,
                `category_id`=:category_id,
                `tags`=:tags,
                `small_des`=:small_des,
                `des`=:des
                WHERE `id`=:id
            ");
            $sth->execute([
                "id"=> $_POST['id'],
                "name" => $_POST['name'], 
                "time" => $_POST['time'], 
                "category_id" => $_POST['category_id'], 
                "tags" => $_POST['tags'], 
                
                "small_des" => $_POST['small_des'], 
                "des" => $_POST['des'],
            ]);
        }
            
        
        }
        

        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    $sth = $dbh->prepare("SELECT `categories`.*, `products`.*
    FROM `categories` 
        LEFT JOIN `products` ON `products`.`category_id` = `categories`.`id`
        WHERE `products`.`id` = '{$_GET['id']}'");
    $sth->execute();
    $product = $sth->fetch(PDO::FETCH_ASSOC);
    $title = $product['name']." - редактирование";

    include "components/banner.php";



    $sth = $dbh->prepare("SELECT * FROM `categories`");
    $sth->execute();
    $categories = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      

        <div class="row">
            <div class="col-12">
            <h2 class="contact-title">Добавить блюдо</h2>
            </div>
            <div class="col-lg-12">
            <form class="form-contact contact_form" action=""  method="post" enctype="multipart/form-data">
            <input class="form-control" name="id" id="id" value="<?=  $product['id']?>"  type="hidden">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Название блюда</label>
                            <input class="form-control" name="name" id="name" value="<?=  $product['name']?>"  type="text" placeholder = 'Название блюда'>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="img">Изображение</label>
                            <input class="form-control" name="img" id="img"   type="file" placeholder = 'Изображение'>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="time">Время приготовления</label>
                            <input class="form-control" id="time" value="<?=  $product['time']?>" name="time" type="text" placeholder = 'Время приготовления'>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="category">Категория</label>
                            <select class="form-control" name="category_id" id="category">
                                <?php foreach ($categories as $key => $value) {?>
                                    <option <?= ($value['id'] == $product['category_id'])? 'selected': ''; ?> value="<?= $value['id'] ?>"><?= $value['category'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="tags">Тэги через заяпятую</label>
                            <input class="form-control" id="tags" value="<?=  $product['tags']?>" name="tags" type="text" placeholder = 'Тэги через заяпятую'>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="small_des">Краткое описание</label>
                            <textarea class="form-control" rows="3" id="small_des" name="small_des" placeholder = 'Краткое описание'><?=  $product['small_des']?></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="des">Полное описание</label>
                            <textarea class="form-control" rows="9" id="des"  name="des" placeholder = 'Полное описание'><?=  $product['des']?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                <button type="submit" name="go" class="button button-contactForm btn_4 boxed-btn">Обновить рецепт</button>
                </div>
            </form>
            </div>
    
        </div>
 
    </div>
    </div>
  </section>
<?php 
    include "components/footer.php";
?>