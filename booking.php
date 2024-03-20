<?php
    include "components/header.php";
    $title = "Бронирование";
    include "components/banner.php";

    if(isset($_POST['go'])) {
        if(empty($_POST['name']) OR empty($_POST['number']) OR empty($_POST['time'])) {
            echo '<script>alert("Все поля обязательны для заполнения");</script>';
        } else {
        $sth = $dbh->prepare("INSERT INTO `booking` SET `name` = :name, `number` = :number, `time` = :time");
        $sth->execute([
            'name' => $_POST['name'], 
            'number' => $_POST['number'],
            'time' => $_POST['time']
        ]);
        echo '<script>alert("Заявка на бронирование успешно отправлена, ожидайте звонок");</script>';
        }
    }
?>
    <!-- /bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Бронирование</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form"  method="post">
            <div class="row">
              
            
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="name"  type="text" placeholder = 'ФИО'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="number" type="text" placeholder = 'Номер телефона'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="time" type="text" placeholder = 'Укажите время'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" name="go" class="button button-contactForm btn_4 boxed-btn">Забронировать</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
                <h3>Россия, г.Омск.</h3>
              <p>ул. Газетный переулок, 9</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+79533902023</h3>
              <p>Часы приема 09:00-23:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>beresta.chingiz@mail.ru</h3>
              <p>Отправьте нам свой запрос </p>
              <p>в любое время!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    include "components/footer.php";
?>