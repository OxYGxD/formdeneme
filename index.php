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
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>İletişim Formu</title>

  <style>
    /* İletişim Formu stillendirmesi */
    form {
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-size: 16px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Responsive stillendirmeler */
    @media screen and (max-width: 768px) {
      form {
        max-width: 80%;
      }
    }

    @media screen and (max-width: 480px) {
      form {
        max-width: 90%;
      }
    }

    @media screen and (max-width: 360px) {
      input[type="submit"] {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
  <form action="index.php" method="post">
    <label for="name">Adınız Soyadınız:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">E-posta Adresiniz:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Telefon Numaranız:</label>
    <input type="tel" id="phone" name="phone">

    <label for="message">Mesajınız:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <input type="submit" value="Gönder">
  </form>
</body>

</html>

