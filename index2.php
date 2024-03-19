<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <nav class="navbar mathNavbar">
   <?php include 'header.php' ?>
   </nav>

  
   

    
    <div class="container-fluid containerx">
      <div class="containery">
          <div class="cardx">
           
            <div class="row cardRow">
              <div class="col-sm-12 cardIsi">
              <form action="index.php" method="post">
                <h1>menghitung</h1>
                <h2>Standar Deviasi</h2>
                <img src="/math%20website/assets/img/rumus.png" alt="">
                <?php
                


                if (isset($_POST['submit'])) {
        
                 $Angka1 = $_POST['number1'];
                 $Angka2 = $_POST['number2'];
                 $Angka3 = $_POST['number3'];
                 $avg = ($Angka1 + $Angka2 + $Angka3) / 3;
                     $varians = (pow($Angka1 - $avg,2) + pow($Angka2 - $avg,2) + pow($Angka3 - $avg,2)) / 3;
                     $hasil = sqrt($varians);
                     echo "<h2>Standar Deviasi nya adalah <strong> $hasil </h2>";

             
                  }else {
                   echo "<p style='color: red'>*Error:* Semua input harus diisi dengan angka!</p>";
             
                 }
             
                ?>
                 <div>
                        <button class="btn">back</button>
                    </div>
              </form>
              </div>
             
            </div>
              
          
           
          </div>
        </div>
    </div>

    <footer>
    <?php include 'footer.php' ?>
    </footer>


      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
