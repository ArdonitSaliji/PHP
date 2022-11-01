<?php 

if(isset($_POST['submit'])) {
    $cardNumber = $_POST['cardNumber'];  
    function is_valid_card($number) {
        $cardNumber = $_POST['cardNumber'];  
        $cardNumber = preg_replace('/\D/', '', $cardNumber);
        $cardNumber_length=strlen($cardNumber);
        $parity=$cardNumber_length % 2;
        $total=0;
    for ($i=0; $i<$cardNumber_length; $i++) {
        $digit=$cardNumber[$i];
    if ($i % 2 == $parity) {
        $digit*=2;
    if ($digit > 9) {
        $digit-=9;
    }
    }
        $total+=$digit;
    }
    ($total % 10 == 0) ? $result = 'Your card is valid' : $result = 'Your card is not valid';
        echo $result;
    }
        is_valid_card($cardNumber);
}
?>

