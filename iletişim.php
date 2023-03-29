<?php
if($_POST){
    $to_email = "oguzhansezgin0@gmail.com"; // Burada, iletişim mesajının gönderileceği e-posta adresini belirleyebilirsiniz.
    $subject = "İletişim Formu Mesajı";
    $message = "İsim: " . $_POST['name'] . "\nE-posta: " . $_POST['email'] . "\nTelefon: " . $_POST['phone'] . "\nMesaj: " . $_POST['message'];
    $headers = "From: webmaster@example.com"; // Burada, mesajın kimden gönderildiği bilgisini belirleyebilirsiniz.
    mail($to_email,$subject,$message,$headers);
    echo "Mesajınız gönderildi!"; // Burada, gönderim işlemi tamamlandıktan sonra gösterilecek mesajı belirleyebilirsiniz.
}
?>
