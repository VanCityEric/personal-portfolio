<?php 
include 'includes/header.php';

$message_sent = 1;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo="eric@helloimeric.ca";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    $result = mail($mailTo, $subject, $txt, $headers);
    header("Location: success.php");
    $message_sent = 2;
}
 
include 'includes/landing.php';
include 'includes/about.php';
include 'includes/projects.php';
include 'includes/contact.php';
include 'includes/footer.php';
include 'includes/success.php';
?>
<script src="scripts-v4.js"></script>
