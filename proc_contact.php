<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Include PHPMailer
    require_once('./PHPMailer/PHPMailerAutoload.php');

    // Sanitize inputs
    $name = trim($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
                alert('Invalid Email Address.');
                window.location.href = 'index';
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

    // Insert into contacts table
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
    $stmt->execute();
    $stmt->close();

    try {
        $mail = new PHPMailer(true);

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'mail.techbyfrancis.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'portfolio@techbyfrancis.com';
        $mail->Password = 'TECHbyfrancis101$$';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // ----------------------------
        // 1️⃣ Email to client
        // ----------------------------
        $mail->setFrom('portfolio@techbyfrancis.com', 'Space Terminal');
        $mail->addAddress($email); // Client email

        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Confirmation';
        $mail->Body = "Hello $name,<br><br>Thank you for reaching out!<br>
                          We have received your message:<br><br>
                          <strong>Subject:</strong> $subject<br>
                          <strong>Message:</strong> $message<br><br>
                          Our team will get back to you shortly.<br><br>
                          Best regards,<br>Space Terminal";

        $mail->send();

        // ----------------------------
        // 2️⃣ Email to company
        // ----------------------------
        $mail->clearAddresses(); // Clear previous recipient
        $mail->addAddress('francisnwankwo1972@gmail.com'); // Company email
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "New contact form submission:<br><br>
                          <strong>Name:</strong> $name<br>
                          <strong>Email:</strong> $email<br>
                          <strong>Phone:</strong> $phone<br>
                          <strong>Subject:</strong> $subject<br>
                          <strong>Message:</strong> $message<br><br>
                          Regards,<br>Space Terminal Notification System";

        $mail->send();

        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href = 'index';
              </script>";

    } catch (Exception $e) {
        echo "<script>
                alert('Message saved, but email could not be sent. Mailer Error: {$mail->ErrorInfo}');
                window.location.href = 'index';
              </script>";
    }

} else {
    echo "<script>
            alert('No data submitted.');
            window.location.href = 'index';
          </script>";
}
?>