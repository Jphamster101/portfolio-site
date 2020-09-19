<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';

    // $dotenv = Dotenv\Dotenv::createImmutable('../');
    // $dotenv->load();
    $password = getenv('SMTP_GMAIL_PW');


    // https://accounts.google.com/b/0/DisplayUnlockCaptcha

    $mail = new PHPMailer(TRUE);

    $message_sent = FALSE;
    if(isset($_POST['email']) && $_POST['email'] != '') {
        $name = $_POST['name'];
        $company = $_POST['company'];
        $visitor_email = $_POST['email'];
        $phone_number = $_POST['phone'];
        $message = $_POST['message'];

        $email_body = "User name: ".$name. "\n";
        $email_body .= "User Email: " .$visitor_email. "\n";
        $email_body .= "User Phone Number: " .$phone_number. "\n";
        $email_body .= "User Message: ".$message. "\n";
        

        $mail->setFrom('phamj1998@gmail.com', 'Darth Vader');
        $mail->addAddress('phamj1998@gmail.com', 'Emperor');
        $mail->Subject = 'New Form Submission';
        $mail->Body = $email_body;

        /* SMTP parameters. */

        /* Use SMTP. */
        $mail->isSMTP();

        /* Google (Gmail) SMTP server. */
        $mail->Host = 'smtp.gmail.com';

        /* SMTP port. */
        $mail->Port = 587;

        /* Set authentication. */
        $mail->SMTPAuth = TRUE;
        $mail->AuthType = 'LOGIN';
        $mail->SMTPSecure = 'tls';
    
    /* SMTP authentication username. */
    $mail->Username = 'phamj1998@gmail.com';
    
    /* SMTP authentication password. */
    $mail->Password = $password;
    
    /* Finally send the mail. */
    $mail->send();
    $message_sent = TRUE;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Page</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/contact_form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
    
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navbar-links">
                <ul>
                    <li><a class="link home-link" href="/views/index.html">Home</a></li>
                    <li><a class="link about-link" href="/views/about.html">About</a></li>
                    <li><a class="link project-link" href="/views/projects.html">Projects</a></li>
                    <li style=background-color:#e5e5e5><a style="color: #000;" class="link contact-link" href="/views/contact.php">Contact</a></li>
                </ul>
            </div>     
        </nav>
        <div class="container">
            <main>
                <?php
                    if ($message_sent):
                ?>
                <h3 style="margin: 2em">Thanks, I'll be in touch</h3>

                <?php
                    else:
                ?>
                <h1 class="contact-heading">Contact Me</h1>
                <div class="contact-section">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="name">Johnny Pham</li>
                            <li class="address">518 Kirkwood Avenue</li>
                            <li class="phone-number">(319) 290-4542</li>
                            <li class="email">phamj1998@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact-form">
                        <form id="cf" method="POST" action="contact.php">
                            <p>
                                <label>Name:</label>
                                <input type="text" name="name" required>
                            </p>
                            <p>
                                <label>Company:</label>
                                <input type="text" name="company" class="form-control">
                            </p>
                            <p>
                                <label>Email Address:</label>
                                <input type="email" name="email" class="form-control">
                            </p>
                            <p>
                                <label>Phone Number:</label>
                                <input type="text" name="phone" class="form-control" required>
                            </p>
                            <p class="full">
                                <label>Message:</label>
                                <textarea class="form-control" name="message" id="" rows="5"></textarea>
                            </p>
                            <p class="full">
                                <button type="submit">GO</button>
                            </p>
                        </form>
                    </div>
                </div>
                <?php
                    endif;
                ?>
            </main>
        </div>
        <footer class="footer">
            &copy; 2020 Johnny Pham
        </footer>
    </div>
    <script src="../script.js"></script>
</body>
</html>