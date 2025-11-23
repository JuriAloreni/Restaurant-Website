<?php
include 'db.php';

// إعداد البريد الإلكتروني
function sendConfirmationEmail($toEmail, $customerName) {
    $subject = "Reservation Confirmation - Marina Luxe";
    $message = "Hello $customerName,\n\nYour reservation has been successfully received!\nWe look forward to serving you.\n\nThank you,\nMarina Luxe Restaurant";
    $headers = "From: no-reply@marinaluxe.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    return mail($toEmail, $subject, $message, $headers);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $guests = intval($_POST['guests']);
    $date = $_POST['date'];
    $time = $_POST['time'];

    // حفظ الحجز في قاعدة البيانات
    $result = add_reservation($conn, $name, $email, $guests, $date, $time);

    if ($result['success']) {
        // إرسال بريد تأكيد
        $emailSent = sendConfirmationEmail($email, $name);

        echo "<div style='text-align:center; color:green; font-size:20px; margin-top:20px;'>";
        echo "✅ Reservation confirmed for <b>$name</b><br>";
        echo "Guests: $guests<br>Date: $date at $time<br>";
        echo $emailSent ? "A confirmation email has been sent to <b>$email</b>" : "Email could not be sent.";
        echo "</div>";
    } else {
        echo "<div style='text-align:center; color:red;'>Error: ".$result['error']."</div>";
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation Page - Marina Luxe</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #fff; margin: 0; padding: 0; }
        .header { text-align: center; background-color: rgba(238,205,205,0.7); padding: 3%; color: rgb(138,69,69); font-size: 35px; margin-top: 20px; }
        form { background-color: rgba(238,205,205,0.5); width: 400px; margin: 30px auto; padding: 25px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        label { display: block; margin: 10px 0 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; border-radius: 6px; border: 1px solid #ccc; }
        input[type="submit"] { background-color: rgb(138,69,69); color: white; font-size: 16px; border: none; cursor: pointer; margin-top: 15px; }
        input[type="submit"]:hover { background-color: rgb(100,50,50); }
        nav { text-align: center; margin: 20px; }
        nav a { text-decoration: none; color: rgb(138,69,69); font-weight: bold; margin: 0 10px; }
        hr { border: none; height: 2px; background-color: pink; }
    </style>
</head>
<body>
    <div class="header">Reservation Page</div>
    <nav>
        <a href="index.html">Home</a> |
        <a href="menu.php">Menu</a> |
        <a href="order.php">Orders</a>
    </nav>
    <hr><hr>

    <form method="POST" action="">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="guests" min="1" required>

        <label for="date">Reservation Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Reservation Time:</label>
        <input type="time" id="time" name="time" required>

        <input type="submit" value="Confirm Reservation">
    </form>
</body>
</html>
<?php } ?>

