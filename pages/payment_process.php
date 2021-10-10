<?php
// 950-980-7428
// NXeSrwn5mfpjY%jp!Yu2
    session_start();
    include '../components/database.php';
    if(isset($_POST['donation_amount']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $amount = $_POST['donation_amount'];
        $payment_status = "Pending";
        mysqli_query($con,"INSERT INTO donation(name,email_id,phone_number,amount,payment_status) VALUES('$name','$email','$phone','$amount','$payment_status')");
        $_SESSION['OID']=mysqli_insert_id($con);
    }
    if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
        $payment_id=$_POST['payment_id'];
        mysqli_query($con,"update donation set payment_status='Complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");

        $html="<h2>Thank You $name For Donation</h2><br><a href='http://localhost/pruthvi/Payment_Gatway_Integration/pages/ThankYou.php?id=$payment_id'>Donload Payment Recipt Here</a>";
	
        include('../smtp/PHPMailerAutoload.php');
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="pruthvirajrajput305@gmail.com";
        $mail->Password="Pruthvi@7384";
        $mail->SetFrom("pruthvirajrajput305@gmail.com");
        $mail->addAddress($email);
        $mail->IsHTML(true);
        $mail->Subject="New Contact Us";
        $mail->Body=$html;
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        if($mail->send()){
            echo "Mail send";
        }else{
            echo "Error occur";
        }
        }

?>
