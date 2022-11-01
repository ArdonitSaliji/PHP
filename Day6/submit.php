<?php
$postedname = $postedemail = $postedcomment = $postedweb = $postedgender = "";
$postednameerr = $postedemailerr = $postedcommenterr = $postedweberr = $postedgendererr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['name']))
    {
      
        $postednameerr = "Name is requrired";
    }else
    {
        $postedname = test_input($_POST['name']); 
         if (!preg_match("/^[a-zA-Z-' ]*$/", $postedname)) {
            $nameErr = "Only letters and white space allowed";
          }
    }
    if(empty($_POST['email']))
    {
        $postedemailerr = "Email is required";
    }else {
        $postedemail = test_input($_POST['email']);
   
    }
    if(empty($_POST['website']))
    {
        $postedweberr = "Website is required";
    }else {
        $postedweb = test_input($_POST['website']);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$postedweb)) {
            $websiteErr = "Invalid URL";
          }
    }
    if(empty($_POST['comment'])){
        $postedcommenterr = "Comment is required";
    } else {
        $postedcomment = test_input($_POST['comment']);
    }
    if(empty($_POST['gender'])){
        $postedgendererr = "Gender is required";
    } else { 
$postedgender = test_input($_POST['gender']);
}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
.error {color: #FF0000;}
</style>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
Name:    <input type="text" name="name">
        <span class="error">* <?php echo $postednameerr; ?></span><br>
E-mail:  <input type="text" name="email">
<span class="error">* <?php echo $postedemailerr; ?></span><br>
website: <input type="text" name="website">
<span class="error">* <?php echo $postedweberr; ?></span><br>
Comment: <textarea name="comment" cols="40" rows="3"></textarea>
<span class="error">* <?php echo $postedcommenterr; ?></span><br>
Gender:  <input type="radio" name="gender" value="Male"> 
         <input type="radio" name="gender" value="Female">
         <span class="error">* <?php echo $postedgendererr; ?></span><br>
         <input type="submit" value="Submit">


</form>

<?php 
    $file = fopen('myFile.txt', 'w');
    $mytext = '';
    $reg['name'] = $postedname;
    $reg['email'] = $postedemail;
    $reg['website'] = $postedweb;
    $reg['comment'] = $postedcommenterr;

    foreach($reg as $x =>   $val) {
        $mytext .= $x.' '.$val;
    }   
    fwrite($file, $mytext);
    fclose($file);

    $myFile2 = fopen('myFile.txt', 'r');

?>
</body>
</html>