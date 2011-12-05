    <?php
     
        $url = "http://www.suncoknitwear.com/";
        $valid = @fsockopen("$url", 80, $errno, $errstr, 30);
       
        $page = $_SERVER['PHP_SELF'];
     
        if (!$valid) {   hi    
                  
        } else {      
            <?php echo"hi123" ?>
        } 
     
    ?>
    

    
  

