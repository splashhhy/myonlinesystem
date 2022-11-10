<?php include 'views/header.php';
include 'views/sidebar.php'; 
include 'models/connection.php';
;?>


<body>
<div >
        <div class="page-wrapper">
           
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Exam Upload</h3> </div>
            </div>
            <form class="" action="exam.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php

        





        include 'models/connection.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="file-upload-download/exam/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO examsetup(answerPaperPDF) values('$pdf')";
          $query=mysqli_query($conn,$sql);
        //////////////////////////////////////////////
        

        
        $targetDir = "file-upload-download/exam/";
        $fileName = basename($_FILES['pdf']['name']);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath);
        
        if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
            $allowTypes = array('pdf');
            if (in_array($fileType, $allowTypes)){
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    $insert ->query("INSERT into examsetup (moduleCode, examDate, answerPaperPDF) VALUES ('".$fileName."', NOW())");
                    if($insert) { 
                        $statusMsg = "The file".$fileName. " has been uploaded succesfully";
                    }else {
                        $statusMsg = "File upload failed, please try again";
                    }{
                        $statusMsg = "Sorry there was an error uploadig your file.";
                    }
                }else {
                    $statusMsg = "Sorry only PDF Files are allowed.";
                }
            }
            else {
                $statusMsg = 'Please select a file to upload.';
            }
        }
      }
      

  
            

          



        



         ?>


      

      </form>



</div>
</body>





<?php include 'views/head.php'; ?>
<?php include 'views/footer.php'; ?>

<link rel="stylesheet" href="css/popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
