<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grids</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php ob_start(); ?>
        <?php session_start(); ?>
        <?php
            //echo $_SESSION['num-of-rows'];
            $num_of_rows = $_SESSION['num-of-rows'];
            $color1 = $_SESSION['color1'];
            $color2 = $_SESSION['color2'];
            $color3 = $_SESSION['color3'];
            if($_SESSION['num-of-rows'] == "")
            {
                header("Location: index.php");
            } 
            // echo $num_of_rows;
            $color_codes = array($color1, $color2, $color3);
            //print_r($color_codes);
        ?>
        <div  class="flex">
            <?php
                $temp = strval(75/$num_of_rows);
                $temp = $temp."%";
                for($j=0; $j<$num_of_rows; $j++)
                {
                    for($i=0; $i<$num_of_rows; $i++)
                    {
                        if(count($color_codes)!=0){
                            $random_color = $color_codes[array_rand($color_codes)];
                            echo '<div class="box" style="--radius: ', $temp, ';background-color: ', $random_color, ';"></div>';
                        }
                    }
                    echo '<div class="break"></div>';
                }
                ?>
        </div>
    </body>
</html>