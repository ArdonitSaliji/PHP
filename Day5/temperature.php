<?php
    if(isset($_POST['submit'])) {
        $temperature = $_POST['temperature'];
        $units = $_POST['units'];
    if($units == 'C') {
        $result = $temperature * 9/5 + 32;
    } else {
        $result = ($temperature - 32) * 9/5 ;
    }
    echo 'The converted temperature is ' . $result;
    
    }

?>  