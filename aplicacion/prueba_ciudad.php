<?php

            $json = file_get_contents('https://nominatim.openstreetmap.org/search.php?q=calle+holanda%2C41500&format=jsonv2',true);
            $obj = json_decode($json);
            echo $obj->lat;
            echo $obj->lon;
            echo $obj->display_name;
            
            
?>
