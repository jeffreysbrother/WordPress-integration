
<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    if ($name == "" OR $email == "" OR $message == ""){
      $error_message = "Please specify a value for the NAME, EMAIL, and MESSAGE fields";
    }

    if (!isset($error_message)) {
      foreach( $_POST as $value ){
        if(stripos($value, 'Content-Type:') !== FALSE ){
          $error_message = "There was a problem with the information submitted.";
        }
      }
    }

    if (!isset($error_message) && $_POST["address"] != "") {
      $error_message = "Your form submission has an error. Please try again.";
    }

    require_once(ROOT_PATH . "inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && (!$mail->ValidateAddress($email) OR stripos($email, '.com') == FALSE)){
      $error_message = "Please specify a valid email address.";
    }

    if (!isset($error_message)) {
      $email_body = "";
      $email_body = $email_body . "Name: " . $name . "<br />";
      $email_body = $email_body . "Email: " . $email . "<br />";
      $email_body = $email_body . "Message: " . $message;

      $mail->SetFrom($email, $name);
      $address = "jeffreysbrother@gmail.com";
      $mail->AddAddress($address, "jeffreysbrother");
      $mail->Subject    = "jeffreysbrother: Contact Form Submission | " . $name;
      $mail->MsgHTML($email_body);

      if($mail->Send()){
          header("Location: " . BASE_URL . "contact/?status=thanks");
          exit;
      } else {
        $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
      }
    }
  }

?>

<?php

$pageTitle = "contact.php";
$pageDescription = "Contact me for music, photo, or video projects.";
$fbURL = "http://jeffreysbrother.com/contact.php";
get_header();
?>

  <?php
    if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
      <div class="spacer"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Thanks for the email!</h1>
          </div>
        </div>
      </div>
    <?php } else { ?>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <p class="lead text-center">A mild excitement overwhelms me when I imagine you contacting me!</p>

                <?php
                  if (isset($error_message)){
                    echo '<div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <p class="text-center bg-danger"><strong>' . $error_message . '</strong></p></div></div>';
                  }
                ?>

                <form class="form-horizontal" method="post" action="<?php echo BASE_URL; ?>contact/">
                  <fieldset>
                            <!-- <legend class="text-center header">//Contact</legend> -->
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-1 text-center">
                                </span>
                                <div class="col-md-8">
                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control" value="<?php if(isset($name)) { echo htmlspecialchars($name); } ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-1 text-center">
                                </span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Email" class="form-control" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-1 text-center">
                                </span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your message here." rows="7"><?php if (isset($message)) { echo htmlspecialchars($message); }?></textarea>
                                </div>
                            </div>

                            <div class="form-group" style="display: none;">
                                <span class="col-md-1 col-md-offset-1 text-center">
                                </span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="address" name="address" placeholder="Humans: please leave this field blank." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group last-paragraph">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                </form>
            </div>
          </div>
        </div>

  <?php } ?>

<?php get_footer(); ?>
