<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid ">
      <!-- Introduction section -->
            <div class="row intro py-1 aj">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                 <br>
                  <!-- <h3>Welcome to</h3> -->
                  <img src="img/JR.png" width="200" height="200" class="d-inline-block align-top image" alt="">
                  <br><br>
                  <h1>JOEKIN BANK</h1>
                  <p >
                    <h5 class="font-italic ">&quot;<strong> Good Banking is produced not by good laws, but by good bankers.</strong>&quot;</h5>
                  </p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/online.svg" class="img-fluid pt-2" width="250" height="250">
              </div>
            </div>
            <br>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.svg" class="img-fluid pt-2" width="420" height="420">
                    <br>
                    <br>
                    <a href="createuser.php"><button class="button">Add a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.svg" class="img-fluid pt-2" width="420" height="420">
                    <br>
                    <br>
                    <a href="transfermoney.php"><button class="button">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.svg" class="img-fluid pt-2" width="420" height="420">
                    <br>
                    <br>
                    <a href="transactionhistory.php"><button class="button">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2 bg-dark text-white border border-dark">
        <p>&copy 2021. Created by <b>JR PVT.LTD</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>