<?php error_reporting(0); ?>
<?php include 'views/head.php';?>
<?php include 'views/header.php';?>
<?php include 'views/sidebar.php';

if(isset($_GET['id']))
?>

<?php //} ?>

        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Lectuerer</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Exam Department</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
               
                 <div class="card">
                            <div class="card-body">
                              <?php ?> 
                            <a href="add_teacher.php"><button class="btn btn-primary">Add Teacher</button></a>
                          <?php  ?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable"  class="table table-bordered table-striped"  >
                                        <thead>
                                            <tr>
                                              
                                                
                                                <th>Staff Number</th>
                                                <th>Name : </th>
                                                
                                                <th>Email : </th>
                                                
                                               
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    include 'models/connection.php';
                                    $sql = "SELECT * FROM `staffinfo`";
                                    $result = $conn->query($sql);
                                    $i=0;
                                   while($row = $result->fetch_assoc()) { 
                                    


                                     

                                      ?>
                                            <tr>
                                                
                                                <td><?php echo $row['staffNumber']; ?> </td>
                                               
                                                <td><?php echo $row['name']; ?></td>
                                                 <td><?php echo $row['email']; ?></td>
                                                 
                                                
                                                
            <?php } ?> 
                                              <?php  ?>


                                              <?php ?>
                                                
                                                
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>





                        
                       
               
             
<?php include 'views/footer.php';?>

<link rel="stylesheet" href="popup_style.css">
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