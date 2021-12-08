<!doctype html>  
<html>  
    <head>  
        <meta charset="utf-8">  
        <title>Üçgen Çiz</title>  
    </head>   
    <body>  
        <h1>Başlık 1</h1>       
         <?php  
            function ucgen ($sayi) {
                $satirdaki = 0;
                while ($satirdaki < $sayi) {
                    for ($i = 0; $i <= $satirdaki; $i++) {
                        echo '*';
                    }
                    echo '<pre>';
                    $satirdaki++;
                }
            }
            ucgen(15);
        ?>    
    </body>  
</html>  