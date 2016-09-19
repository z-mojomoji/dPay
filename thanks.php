<?php
    $to = "deepay2559@gmail.com";
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $province = $_POST["province"];
    $country = $_POST["country"];
    $subject = "มีผู้สนใจตู้ คุณ".$fname." ".$lname;
    $txt = "ชื่อ: ".$fname." ".$lname."
    เบอร์โทรศัพท์: ".$phone."
    เพศ: ".$gender."
    Email: ".$email."
    ที่อยู่: ".$address."
    จังหวัด: ".$province."
    ประเทศ: ".$country;
    $headers = "From:" . $email ." Name: ".$fname." ".$lname;

    mail($to,$subject,$txt, $headers);

    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";

    include("head.php");
?>
    <div class="rightCol right content clearfix inner">
        <!--starts here-->
        <h2>ขอบคุณค่ะ ทางเราจะติดต่อกลับไปหาท่านนะคะ</h2>
        <!--ends here-->
    </div>
    <!--rightCol-->
<?php
    include("foot.php");
?>