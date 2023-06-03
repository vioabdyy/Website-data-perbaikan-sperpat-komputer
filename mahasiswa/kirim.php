    <?php
  
        $tujuan=$_POST['tujuan'];
        $subjek=$_POST['subjek'];
        $pesan=$_POST['pesan'];

        include "classes/class.phpmailer.php";
        $mail = new PHPMailer; 
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = "smtp.gmail.com"; //host email
        $mail->SMTPDebug = 1;
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "fansyahdwi204@gmail.com"; //user email
        $mail->Password = "dcsqwqhojfmbijyk"; //password email 
        $mail->SetFrom("fansyahdwi204@gmail.com","Reporting Kerusakan"); //set email pengirim
        $mail->Subject = $subjek; //subyek email
        $mail->AddAddress($tujuan);  // email tujuan
        $mail->MsgHTML($pesan); //pesan


        if($mail->Send()){
          echo "<script>alert('Kirim Pesan Sukses')</script>";
          echo "<meta http-equiv='refresh' content='0; url=laporan.php'>";
        }else
          echo "<script>alert('GAGAL')</script>";
          echo "<meta http-equiv='refresh' content='0; url=laporan.php'>";
    ?>

<!-- Elseif Channel -->