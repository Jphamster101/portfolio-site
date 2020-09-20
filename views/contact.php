<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';
    
    $email = getenv('SMTP_GMAIL_EMAIL');
    $password = getenv('SMTP_GMAIL_PW');

// https://accounts.google.com/b/0/DisplayUnlockCaptcha

    $mail = new PHPMailer(TRUE);

    // $message_sent = FALSE;
    // if(isset($_POST['email']) && $_POST['email'] != '') {
    //     $name = $_POST['name'];
    //     $company = $_POST['company'];
    //     $visitor_email = $_POST['email'];
    //     $phone_number = $_POST['phone'];
    //     $message = $_POST['message'];

    //     if ($company == '') {
    //         $company = "[NULL]";
    //     }

    //     $email_body = "Hello Johnny,<br>This email is to notify you that someone has submitted a contact request on your portfolio site.<br><br>";
    //     $email_body .= "<b>".$name. "</b> from <b>" .$company. "</b> would like to reach out to you.<br>";
    //     $email_body .= "This was ".$name. "'s message to you: <br><br> '<em>".$message. "</em>'<br><br>";
    //     $email_body .= "You can reach " .$name. " at this email address ".$visitor_email. " or at this phone number ".$phone_number. "<br>";
        

    //     $mail->setFrom($email, $name);
    //     $mail->addAddress($email, 'Johnny');
    //     $mail->Subject = 'PORTFOLIO Form Submission from '.$name;
    //     $mail->Body = $email_body;

    //     /* SMTP parameters. */

    //     /* Use SMTP. */
    //     $mail->isSMTP();

    //     /* Set authentication. */
    //     $mail->SMTPAuth = true;

    //     // $mail->AuthType = 'LOGIN';
    //     $mail->SMTPSecure = 'ssl';

    //     /* Google (Gmail) SMTP server. */
    //     $mail->Host = 'smtp.gmail.com';

    //     /* SMTP port. */
    //     $mail->Port = 465;

    //     $mail->IsHTML(true);

    //     /* SMTP authentication username. */
    //     $mail->Username = $email;
        
    //     /* SMTP authentication password. */
    //     $mail->Password = $password;
        
    //     /* Finally send the mail. */
    //     $mail->send();
    //     $message_sent = TRUE;
    // }

try {
   
   $mail->setFrom($email, 'Darth Vader');
   $mail->addAddress($email, 'Emperor');
   $mail->Subject = 'FSOCIETY';
   $mail->Body = 'There is a great disturbance in the Force.';
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = TRUE;
//    $mail->AuthType = 'LOGIN';
   $mail->SMTPSecure = 'ssl';
   $mail->Username = $email;
   $mail->Password = $password;
   $mail->Port = 465;
   
   /* Enable SMTP debug output. */
   $mail->SMTPDebug = 4;
   
   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
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