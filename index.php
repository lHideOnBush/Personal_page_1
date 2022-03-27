<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <h1>Hello world</h1>
    </div>
    <?php
        $num=10;
        for ($i=0; $i < $num ; $i++) { 
            # code...
            ?> 
            <div class="">
                <h2><?php echo $i ?></h2>
            </div>
            <?php
        }   
    ?>

    <div class="">
        <h1>---------------------------------------------
    </div>
 
        <div class="">
            <?php
                $num=60;
                for ($i=0; $i < $num ; $i+=10) { 
                    # code...
                    ?> 
                    <div class="">
                        <h2><?php echo $i ?>frederick</h2>
                    </div>
                    <?php
                }   
            ?>
    <div class="">
        <h1>---------------------------------------------
    </div>         
        <?php
            $input =5;
            if ($input > 3){
            ?>
            <div class="">
                <h1>NotB</h1>
            </div>
            <?php
        } else {
            ?>
            <div class="">

            </div>  
            <h1>NotA</h1>
            </div>
            <?php
            } 
        ?>
        <div class="">
            <h1>---------------------------------------------
        </div>
            
<?php
    $total = 0;
    for($i=0; $i<=10; $i++)
    {
        $sum = $total + $i;
    }
    $average = $sum / 5;
    echo "Average : $average"."\n";
?>

</body>
</html>