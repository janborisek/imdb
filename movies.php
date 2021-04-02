<html>
    <head>
        <title>Vaja Php</title>
    </head>
    <body>
        <h1>Dobrodošli na strani MOVIES</h1>

        <?php
            
            $b = 110;

            if(isset($_GET['vrednost'])){
                $a = $_GET['vrednost'];
            }
            else{
                $a=0;
            }
            echo $a;

            $a++;

            echo '<a href="index.php?id='.$a.'">INDEX</a>';

        ?>

        

    </body>
</html>