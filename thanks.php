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
    $page = $_POST["page"];
    $message = $_POST["message"];
    $subject = $page." คุณ".$fname." ".$lname;
    $txt = "ชื่อ: ".$fname." ".$lname."
    เบอร์โทรศัพท์: ".$phone."
    เพศ: ".$gender."
    Email: ".$email."
    ที่อยู่: ".$address."
    จังหวัด: ".$province."
    ประเทศ: ".$country."
    ข้อความ: ".$message;
    $headers = "From:" . $email ." Name: ".$fname." ".$lname;

    mail($to,$subject,$txt, $headers);

    //echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";

    include("head.php");
?>
    <div class="rightCol right content clearfix inner thanksBox">
       <h1>ทางเราได้รับข้อมูลแล้ว</h1>
        <!--starts here-->
        <div class="thanksCon">
        <h2>ขอบคุณค่ะ ทางเราจะติดต่อกลับไปหาท่านค่ะ</h2>
        </div>
        <!--ends here-->
    </div>
    <!--rightCol-->
<?php
    include("foot.php");
?>
