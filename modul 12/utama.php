<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] == 'admin'){
        header('Location: admin.php');
      }
      if($_SESSION['level'] == 'petugas'){
        header('Location: petugas.php');
      }
    }
    else{
  ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body{
                font-family: sans-serif;
                background: #d5f0f3;
            }
            
            h1{
                text-align: center;
                /*ketebalan font*/
                font-weight: 300;
            }
            
            .tulisan_login{
                text-align: center;
                /*membuat semua huruf menjadi kapital*/
                text-transform: uppercase;
            }
            
            .kotak_login{
                width: 350px;
                background: white;
                /*meletakkan form ke tengah*/
                margin: 80px auto;
                padding: 30px 20px;
            }
            
            .kotak_login2{
                width: 250px;
                height: 250px;
                background: greenyellow;
                /*meletakkan form ke tengah*/
                margin: 80px auto;
                padding: 30px 20px;
            }

            label{
                font-size: 11pt;
            }
            
            .form_login{
                /*membuat lebar form penuh*/
                box-sizing : border-box;
                width: 100%;
                padding: 10px;
                font-size: 11pt;
                margin-bottom: 20px;
            }
            
            .tombol_login{
                background: #46de4b;
                color: white;
                font-size: 11pt;
                width: 100%;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
            }
            
            .link{
                color: #232323;
                text-decoration: none;
                font-size: 10pt;
            }
        </style>
    </head>
    <body>
    <div class="kotak_login">
            <p class="tulisan_login">Form Login</p>
    
            <form action="proses.php" method="post">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form_login" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form_login" id="exampleInputPassword1" name="password" required>
    
                <button type="submit" class="tombol_login" name="login">Login</button>
            </form>		
        </div>
        <div class="kotak_login2">
            <p>Akun Demo :</p>
            <p>Username : admin@12.com Password: OK123</p>
            <p>Username : petugas@12.com Password: 123OK</p>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>
<?php }?>