<html>
<body>    
    <?php
        $language = $_GET["language"];
        if(!isset($_COOKIE["lang"])){            
            setcookie("lang", $language, time()+100);
            
        }else{
            setcookie("lang", $language, time()+100);
            echo $language;
        }        
    ?>
</body>
</html>