ы<?php
session_start();

    if(isset($_POST['go'])) {
        if($_POST['password'] == 'admin') {
            $_SESSION['admin'] = $_POST['password'];
            header('Location: /admin.php');
        } else {
            echo '<script>alert("Пароль введён неверно");</script>';

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto');

html, body {
    height : 100%;
    padding: 0;
    margin: 0;
}

body{
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
}

.outer {
    display: table;
    width: 100%;
    height: 100%;
    text-align: center;
}
.middle {
    display: table-cell;
    vertical-align: middle;
}
.inner {
    text-align: center;
    width: auto;
    padding: 0 15px;
}

#range1 {
    background: url("img/vertical_cloth.png") repeat left top;
    height: 100%;
    min-height: 400px;
}

#range2 {
    background : #29475f;
    height: 100%;
    min-height: 400px;
}

#range3 {
    background: url("img/maxresdefault.jpg") no-repeat left top;
    height: 100%;
    min-height: 400px; 
}

#range4 {
    background: rgba(212,228,239,1);
    background: -moz-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(212,228,239,1)), color-stop(100%, rgba(134,174,204,1)));
    background: -webkit-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);
    background: -o-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);
    background: -ms-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);
    background: linear-gradient(to right, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d4e4ef', endColorstr='#86aecc', GradientType=1 );
    height: 100%;
    min-height: 400px; 
}

#range5 {
    background: rgba(77, 56, 75, 1);
    background: -moz-linear-gradient(left, rgba(77, 56, 75, 1) 0%, rgba(36, 54, 90, 1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(77, 56, 75, 1)), color-stop(100%, rgba(36, 54, 90, 1)));
    background: -webkit-linear-gradient(left, rgba(77, 56, 75, 1) 0%, rgba(36, 54, 90, 1) 100%);
    background: -o-linear-gradient(left, rgba(77, 56, 75, 1) 0%, rgba(36, 54, 90, 1) 100%);
    background: -ms-linear-gradient(left, rgba(77, 56, 75, 1) 0%, rgba(36, 54, 90, 1) 100%);
    background: linear-gradient(to right, rgba(77, 56, 75, 1) 0%, rgba(36, 54, 90, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d384b', endColorstr='#24365a', GradientType=1 );
    height: 100%;
    min-height: 400px; 
}

#range1 .login-wr {
    position: relative;
    margin: 0 auto;
    background: #ecf0f1;
    max-width: 350px;
    border-radius: 5px;
    border-top: 4px solid #e74c3c;
    box-shadow: 3px 3px 10px #333;
    padding: 15px;
}

#range1 h2 {
    text-align: center;
    font-weight: 200;
    font-size: 2em;
    margin-top: 10px;
    color: #34495e;
}

#range1 .form {
    padding-top: 20px;
    text-align: center;
}

#range1 input[type="text"], 
#range1 input[type="password"],
#range1 button {
    width: 80%;
    margin-bottom: 25px;
    height: 40px;
    border-radius: 5px;
    outline: 0;
    -moz-outline-style: none;
}
      
#range1 input[type="text"],
#range1 input[type="password"] {
    border: 1px solid #bbb;
    padding: 0 0 0 10px;
    font-size: 14px;
}

#range1 a {
    text-align: center;
    font-size: 12px;
    color: #3498db;
}
      
#range1 button {
    background: #e74c3c;
    border:none;
    color: white;
    font-size: 18px;
    font-weight: 200;
    cursor: pointer;
    transition: box-shadow .4s ease;
}

    
#range2 .login-wr {
    position: relative;
    margin: 0 auto;
    background: #fff;
    max-width: 350px;
    box-shadow: 3px 3px 10px #333;
    padding: 15px 15px 0 15px;
}

#range2 h2 {
    text-align: left;
    font-weight: 200;
    font-size: 1.6em;
    margin: 0 0 10px 0;
    padding: 0 0 10px 0;
    border-bottom: 1px solid #eeeeee;
    color: #474747;
}

#range2 .form {
    padding-top: 20px;
    text-align: center;
}

#range2 input[type="text"], 
#range2 input[type="password"],
#range2 button {
    margin-bottom: 25px;
    height: 40px;
    outline: 0;
    -moz-outline-style: none;
}
      
#range2 input[type="text"] {
    background: url("img/user.png") no-repeat left 10px center;    
}
#range2 input[type="password"] {
    background: url("img/pencil.png") no-repeat left 10px center;    
}

#range2 input[type="text"],
#range2 input[type="password"] {
    width: calc(80% - 45px);
    border: 1px solid #bbb;
    padding: 0 0 0 45px;
    font-size: 14px;
}

#range2 input[type="text"]:focus,
#range2 input[type="password"]:focus {
    border: 1px solid #2196f3;
}  
      
#range2 a {
    text-align: center;
    font-size: 12px;
    color: #3498db;
}
      
#range2 button {
    width: 80%;
    background: #2196f3;
    border: none;
    border-bottom: 5px solid #2184d7;
    color: white;
    font-size: 18px;
    font-weight: 200;
    cursor: pointer;
    transition: box-shadow .4s ease;
}

#range2 p {
	padding-bottom: 10px;
}

#range3 .login-wr {
    position: relative;
    margin: 0 auto;
    background: rgba(0, 0, 0, 0.7);
    max-width: 270px;
    box-shadow: 3px 3px 10px #333;
    padding: 15px 15px 0 15px;
}

#range3 #logo {
    height: 208px;
    background: url("img/if_football_172468.png") no-repeat center top 30px;
    text-align: left;
    font-weight: 200;
    font-size: 1.6em;
    margin: 0 0 10px 0;
    padding: 0 0 10px 0;
    color: #474747;
}

#range3 .form {
    padding-top: 20px;
    text-align: center;
}

#range3 input[type="text"], 
#range3 input[type="password"],
#range3 button {
    margin-bottom: 25px;
    height: 40px;
    outline: 0;
    -moz-outline-style: none;
}
      
#range3 input[type="text"] {
    background: url("img/user2.png") no-repeat left 10px center;    
}
#range3 input[type="password"] {
    background: url("img/pencil2.png") no-repeat left 10px center;    
}

#range3 input[type="text"],
#range3 input[type="password"] {
    width: calc(80% - 50px);
    border: none;
    border-bottom: 1px solid #666;
    padding: 0 0 0 50px;
    font-size: 14px;
}

#range3 input[type="text"]:focus,
#range3 input[type="password"]:focus {
    border-bottom: 1px solid #ccc;
    color: #eee;
}  
    
#range3 a {
    text-align: center;
    font-size: 12px;
    color: #eee;
}
      
#range3 button {
    width: 80%;
    background: none;
    border:none;
    border: 1px solid #666;
    color: white;
    font-size: 18px;
    font-weight: 200;
    cursor: pointer;
    transition: box-shadow .4s ease;
}

#range3 *::-webkit-input-placeholder {
    color: #666;
}

#range3 *:-moz-placeholder {
    color: #666;
}

#range3 *::-moz-placeholder {
    color: #666;
}

#range3 *:-ms-input-placeholder {
    color: #666; 
}

#range3 p {
	padding-bottom: 10px;
}

#range4 .login-wr {
    position: relative;
    margin: 0 auto;
    background: rgba(0, 0, 0, 0.7);
    max-width: 270px;
    box-shadow: 3px 3px 10px #333;
    padding: 0 15px 0 15px;
}

#range4 #logo {
    height: 208px;
    background: url("img/if_Settings-5_379427.png") no-repeat center top;
    text-align: left;
    font-weight: 200;
    font-size: 1.6em;
    margin: 0 0 40px 0;
    padding: 0 0 10px 0;
    color: #474747;
}

#range4 .form {
    padding-top: 20px;
    text-align: center;
}

#range4 input[type="text"], 
#range4 input[type="password"],
#range4 button {
    margin-bottom: 25px;
    height: 40px;
    outline: 0;
    -moz-outline-style: none;
}
      
#range4 input[type="text"] {
    background: url("img/user2.png") no-repeat left 10px center;    
}

#range4 input[type="password"] {
    background: url("img/pencil2.png") no-repeat left 10px center;    
}

#range4 input[type="text"],
#range4 input[type="password"] {
    width: calc(80% - 50px);
    border: none;
    border-bottom: 1px solid #666;
    padding: 0 0 0 50px;
    font-size: 14px;
}

#range4 input[type="text"]:focus,
#range4 input[type="password"]:focus {
    border-bottom: 1px solid #ccc;
    color: #eee;
}  
    
#range4 a {
    text-align: center;
    font-size: 12px;
    color: #eee;
} 

#range4 p {
    padding-bottom: 10px;
}
           
#range4 button {
    width: 80%;  
    background: #fa5655;
    border:none;
    color: white;
    font-size: 18px;
    font-weight: 200;
    cursor: pointer;
    transition: box-shadow .4s ease;
}

#range4 *::-webkit-input-placeholder {
    color: #ccc;
}

#range4 *:-moz-placeholder {
    color: #ccc;
}

#range4 *::-moz-placeholder {
    color: #ccc;
}

#range4 *:-ms-input-placeholder {
    color: #ccc; 
}

#range5 .login-wr {
    position: relative;
    margin: 0 auto;
    max-width: 270px;
    padding: 0 15px 0 15px;
}

#range5 h2 {
    font-weight: 200;
    font-size: 1.6em;
    margin: 0;
    padding: 0;
    color: #eee;
}

#range5 .form {
    padding-top: 20px;
    text-align: center;
}

#range5 input[type="text"], 
#range5 input[type="password"],
#range5 button {
    margin-bottom: 25px;
    height: 40px;
    outline: 0;
    -moz-outline-style: none;
}
      
#range5 input[type="text"] {
    background: url("img/user2.png") no-repeat left 10px center;    
}

#range5 input[type="password"] {
    background: url("img/pencil2.png") no-repeat left 10px center;    
}

#range5 input[type="text"],
#range5 input[type="password"] {
    width: calc(80% - 50px);
    border: none;
    border-bottom: 1px solid #666;
    padding: 0 0 0 50px;
    font-size: 14px;
}

#range5 input[type="text"]:focus,
#range5 input[type="password"]:focus {
    border-bottom: 1px solid #ccc;
    color: #eee;
}  
    
#range5 a {
    text-align: center;
    font-size: 12px;
    color: #eee;
}  

#range5 p{
    padding-bottom: 10px;
}
      
#range5 button {
    width: 80%;  
    background: none;
    border:none;
    border: 1px solid #666;
    color: white;
    font-size: 18px;
    font-weight: 200;
    cursor: pointer;
    transition: box-shadow .4s ease;
}

#range5 *::-webkit-input-placeholder {
    color: #ccc;
}

#range5 *:-moz-placeholder {
    color: #ccc;
}

#range5 *::-moz-placeholder {
    color: #ccc;
}

#range5 *:-ms-input-placeholder {
    color: #ccc; 
}

    </style>
</head>
<body>




<div id="range5">

<div class="outer">
  <div class="middle">
    <div class="inner">
        <form method="POST">
        <div class="login-wr">
          <h2>Вход в панель администратора</h2>
          <div class="form">
            <input type="password" name="password" placeholder="Пароль">
            <button type="submit" name="go"> Вход </button>
          </div>
        </div>
        </form>
    </div>
  </div>
</div>

</div>
</body>
</html>