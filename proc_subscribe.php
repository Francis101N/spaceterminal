<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {

  // Sanitize and validate email
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
                alert('Invalid Email Address.');
                window.location.href = 'index.php';
              </script>";
    exit;
  }

  include 'connect.php'; // This should define $conn as your mysqli connection
  if (!$conn) {
    echo "<script>
                alert('Could not connect to the database.');
                window.location.href = 'index.php';
              </script>";
    exit;
  }

  // Insert subscriber email
  $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->close();

  // Optional: Save email to file as backup
  $file = 'subscribers.txt';
  file_put_contents($file, $email . PHP_EOL, FILE_APPEND | LOCK_EX);

  // ----------------------------
  // 2️⃣ Send emails using PHPMailer
  // ----------------------------
  require_once('./PHPMailer/PHPMailerAutoload.php');
  $mail = new PHPMailer(true);

  try {
    // Common SMTP settings
    $mail->isSMTP();
    $mail->Host = 'mail.techbyfrancis.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'portfolio@techbyfrancis.com';
    $mail->Password = 'TECHbyfrancis101$$';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // ----------------------------
    // Email to subscriber
    // ----------------------------
    $mail->setFrom('portfolio@techbyfrancis.com', 'Space Terminal Notification');
    $mail->addAddress($email); // Subscriber email
    $mail->isHTML(true);
    $mail->Subject = 'Subscription Confirmation';
    $mail->Body = "Hello!<br><br>Thank you for subscribing to our newsletter.<br><br>Best regards,<br>Space Terminal";
    $mail->send();

    // ----------------------------
    // Email to company
    // ----------------------------
    $mail->clearAddresses(); // Clear previous recipient
    $mail->addAddress('francisnwankwo1972@gmail.com'); // Company email
    $mail->Subject = 'New Newsletter Subscription';
    $mail->Body = "A new subscriber has signed up for the newsletter.<br><br>
                       <strong>Email:</strong> $email<br><br>
                       Regards,<br>Space Terminal Notification System";
    $mail->send();

    // ----------------------------
    // Success alert & redirect
    // ----------------------------
    echo "<script>
                alert('Thank you! Your email has been subscribed and confirmation sent.');
                window.location.href = 'index.php';
              </script>";

  } catch (Exception $e) {
    echo "<script>
                alert('Subscription saved, but email could not be sent. Mailer Error: {$mail->ErrorInfo}');
                window.location.href = 'index.php';
              </script>";
  }

} else {
  echo "<script>
            alert('No email submitted.');
            window.location.href = 'index.php';
          </script>";
}
?>