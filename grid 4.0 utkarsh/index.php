<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" media="screen and (min-width: 200px) and (max-width:800px)" href="mobile.css">
    </head>
    <body>
        <?php
            session_start();
        
            if(isset($_POST['submit'])){
                $num_of_rows = $_POST['num-of-rows'];
                $color1 = $_POST['color1'];
                $color2 = $_POST['color2'];
                $color3 = $_POST['color3'];
        
                $_SESSION['num-of-rows'] = $num_of_rows;
                $_SESSION['color1'] = $color1;
                $_SESSION['color2'] = $color2;
                $_SESSION['color3'] = $color3;

                //echo  $_SESSION['num-of-rows'];
                header("Location: grid.php");
            }
        ?>

        <div id="main">
      <div id="image"> 
        <div class="form">
          <form action="" method="post">
              Number of Rows and Columns <br> <br>
              <input name="num-of-rows" type="number" class="input-box"><br><br>
              Colour 1 <br>
              <input name="color1" type="text" class="input-box"><br><br>
              Colour 2 <br>
              <input name="color2" type="text" class="input-box"><br><br>
              Colour 3 <br>
              <input name="color3" type="text" class="input-box"><br><br>
              <button name="submit">Submit</button>
          </form>
      </div>
    </div>
    </body>
</html>
