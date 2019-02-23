<?php
    $nemeCode = $_GET['name']; //ส่งค่าแบบ GET http://localhost/phptest/page1.php?name=Suwich&country=Thailand
    $countryCode = $_GET['country'];

    // echo 'Hi '.$nemeCode;
    // echo 'From '.$countryCode;

?>
<div>
    <h1>Profile</h1>       
    HI <b><?php echo $nemeCode; ?></b>
    From <u> <?php echo $countryCode; ?> </u>
</div>