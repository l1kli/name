<?php
    include "components/header.php";
    if(!isset($_SESSION['admin'])){
        header("Location: index.php");
      }
    $title = "Панель администартора - бронирование";
    include "components/banner.php";

?>
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      

        <div class="quick-links center-align">
            <h3>Здравствуй, Админ. Чем займешься сегодня?</h3>
            <div class="row">
                <a href="admin-menu.php" class="boxed-btn3 m-3">Редактировать меню</a>
                <a href="admin-booking.php" class="boxed-btn3 m-3">Просмотр брони</a>
            </div>
        </div>
 
    </div>
    </div>
  </section>
<?php 
    include "components/footer.php";
?>