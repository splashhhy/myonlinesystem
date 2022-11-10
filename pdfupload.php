<?php 
if (!isset($_POST["submit"])) { ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
   To: <input type="text" name="send_to"><br>
   From: <input type="text" name="sender_email"><br>
   Title: <input type="text" name="title"><br>
   content: <textarea rows="10" cols="25" name="content"></textarea><br>
   <input type="submit" name="submit" value="Send Email">
  </form>
<?php
} else {
  if (isset($_POST["send_to"])) {
    $send_to = $_POST["send_to"];
    $sender_email = $_POST["sender_email"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    if ( mail($send_to, $title, $content, $sender_email)) {
      echo("Successfully sended email to $send_to..."); } 
    else { 
      echo("Failed: Sending Email ...");
    }
  }
}
?>s