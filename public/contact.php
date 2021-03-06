<?php require_once("../resources/config.php");

include "../resources/templates/front/header.php";


if (isset($_POST['submit'])) {

    $to         = "kartproject2002@gmail.com";
    $subject    = wordwrap($_POST['subject'], 70);
    $body       = $_POST['message'];
    $from       = $_POST['email'];
    $header     = "From: " . $from;
    mail($to, $from, "$subject", $body, $header);
}


?>


<!-- Contact Section -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contact Us <span class="glyphicon glyphicon-phone-alt"></span></h2>
            <h3 class="section-subheading">
                <?php display_message(); ?>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" method="post">
                <?php send_message(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Enter your name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Enter your email_Id" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Enter subject" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Type your message here..." id="message" style="width: 550px;height: 134px;" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <button name="submit" type="submit" class="btn btn-info">Send Message <span class="glyphicon glyphicon-ok"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container -->

<?php include "../resources/templates/front/footer.php"; ?>