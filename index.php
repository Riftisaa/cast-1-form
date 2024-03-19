<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <nav class="navbar mathNavbar">
    <?php include 'header.php' ?>
   </nav>
    <div class="container-fluid containerx">
        <div class="containery">
            <div class="form_area">
                <p class="title">Lets Math</p>
                <form action="index2.php" method="post">
                    <div class="form_group">
                        <label class="sub_title" for="Number1">Add Number 1</label>
                        <input placeholder="Masukan Angka pertama" id="number1" name="number1" class="form_style" type="number">
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="Number2">Add Number 2</label>
                        <input placeholder="Masukan Angka Kedua" id="number2" name="number2" class="form_style" type="number">
                    </div>
                    <div class="form_group">
                        <label class="sub_title" for="Number 3">Number 3</label>
                        <input placeholder="Masukan Angka ketiga" id="number3" name="number3" class="form_style" type="number">
                    </div>
                    <div>
                        <button  type="submit" class="btn" name="submit">Calculate</button>
                    </div>
                    <div>
          
                    </div>
                
            </form></div></div>
    </div>


    <footer>
       <?php include 'footer.php' ?>
    </footer>


      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>