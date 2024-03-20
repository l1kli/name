<?php
    include "components/header.php";
    if(!isset($_SESSION['admin'])){
      header("Location: index.php");
    }
    $title = "Панель администартора - бронирование";
    include "components/banner.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $dbh->exec("DELETE FROM `booking` WHERE `id` = $id");
    }
?>
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
  <div class="container">
      

      <div class="row">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ФИО</th>
      <th scope="col">Номер телефона</th>
      <th scope="col">Время</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sth = $dbh->prepare("SELECT * FROM `booking`");
        $sth->execute();
        $booking = $sth->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($booking as $val) {
                echo '
                <tr>
                <td>'.$val['id'].'</td>
                <td>'.$val['name'].'</td>
                <td>'.$val['number'].'</td>
                <td>'.$val['time'].'</td>
                <td><a href="/admin.php?id='.$val['id'].'">Удалить</a></td>
              </tr>      
                ';
            }
        ?>
  </tbody>
</table>

        
        </div>
 
        </div>
    </div>
  </section>
<?php 
    include "components/footer.php";
?>