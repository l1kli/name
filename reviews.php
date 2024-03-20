<?php
        include "components/header.php";
        $title = "Отзывы";
        include "components/banner.php";


    $sth = $dbh->prepare("SELECT * FROM `comments`");
    $sth->execute();
    $reviws = $sth->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $dbh->exec("DELETE FROM `comments` WHERE `id` = $id");
        header('Location: /reviews.php');
        }

    if(isset($_POST['go'])) {
        if(empty($_POST['name']) OR empty($_POST['text'])) {
            echo '<script>alert("Все поля обязательны для заполнения");</script>';
        } else {
        $sth = $dbh->prepare("INSERT INTO `comments` SET `name` = :name, `text` = :text");
        $sth->execute([
            'name' => $_POST['name'], 
            'text' => $_POST['text'],
        ]);
        echo '<script>alert("Ваш отзыв успешно опубликован");</script>';
        }
    }
?>
    <!-- customer_feedback_area  -->
    <div class="customer_feedback_area">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xl-9">
                    <div class="section_title text-center">
                        <h3>Отзывы клиентов
                        </h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
          <form class="form-contact contact_form"  method="post">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="text" cols="30" rows="9" placeholder = 'Введите сообщение'></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="name" type="text"  placeholder = 'Имя'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" name="go" class="button button-contactForm btn_4 boxed-btn">Отправить отзыв</button>
            </div>
          </form>
        </div>
            <div class="row">
                <div class="col-xl-6">
                    <?php

                        foreach ($reviws as $val) {
                            echo '
                            <div class="customer_meta">
                                <h3>'.$val['name'].'</h3>
                                <p>'.$val['text'].'</p>';
                                if(isset($_SESSION['admin'])) {
                                echo '<a href="/reviews.php?id='.$val['id'].'" style="margin-bottom:20px;">Удалить</a>';
                                }
                            echo '</div>  
                            ';
                        }
                    ?>
                                
                                         
                </div>
            </div>
        </div> <br><br><br><br><br>
<?php 
    include "components/footer.php";
?>