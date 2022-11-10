<?php //session_start(); ?>
<?php error_reporting(0); ?>
<?php include('views/head.php');?>
<?php include('views/header.php');?>
<?php include('views/sidebar.php');

if(isset($_GET['id']))
{ ?>

<link rel="stylesheet" href="css/animate.css">
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h1>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="del_exam.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="view_exam.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>




        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Exam</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="addexam.php">Home</a></li>
                        <li class="breadcrumb-item active">Exam Management</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">             
                 <div class="card">
                            <div class="card-body">
                            <a href="addexam.php"><button class="btn btn-primary">Add Exam</button></a>
                                    <table id="myTable" action="exam.php"  class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                  <th>Transaction ID<br></th>
                                                  <th>Start Time</th>
                                                  <th>Upload Time</th>
                                                  <th>Student Number</th>
                                                  <th>Module Code</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    include 'models/connection.php';
                                    $sql = "SELECT * FROM `examoutput`";
                                    $result = $conn->query($sql);
                                    $i=0;
                                   while($row = $result->fetch_assoc()) {
                                     
                                      ?>
                                      
                                            <tr>
                                                <td><?php echo $row["transactionID"];?><br><br> </td>
                                                <td>
                                                  <?php echo $row["startTime"]; ?> <br><br> 
                                                </td>
                                                <td>
                                                <?php echo $row["uploadTime"]; ?><br><br>  </td>
                                                </td>
                                                <td><?php echo $row["studentNumber"]; ?> <br><br> </td>
                                                <td><?php echo $row["moduleCode"]; ?>  <br><br> </td>
                                                
                                               
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                   </table>
                                    
                                   </form>
                                </div>
                            </div>
                        </div>
               
                

<?php include('views/footer.php');?>

