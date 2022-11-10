<?php session_start() ?>
<?php include('views/head.php');?>
<?php include('views/header.php');?>
<?php include('views/sidebar.php');?>
<link rel="stylesheet" href="css/animate.css">




 <?php
 include('models/connection.php');?>

        <div class="page-wrapper">
           
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Exam Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Exam Management</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-8" style="margin-left: 10%;">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST" action="examadder.php" name="userform" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Module</label>
                                                <div class="col-sm-9">
                                                    <select type="text" name="module_code" id="module_code" class="form-control"   placeholder="Class" required="">
                                                        <option value="">--Select Module--</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `moduleinfo`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {?>
                                                                    <option value="<?php echo $row["moduleCode"];?>">
                                                                        <?php echo $row['moduleCode'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else { 
                                                            echo "0 results";
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <?php ///////////////////////////////////////////////////////////// ?>

                                        <div class="row">
                    <div class="col-lg-8" style="margin-left: 10%;">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST" action="viewexam.php" name="userform" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Student</label>
                                                <div class="col-sm-9">
                                                    <select input type="text" name="student_number" id="student_number" class="form-control"   placeholder="Class" required="">
                                                        <option value="selected">--Select Student Number--</option>
                                                            <?php  
                                                            $c1 = "SELECT * FROM `studentinfo`";
                                                            $result = $conn->query($c1);

                                                            if ($result->num_rows > 0) {
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    $studentNo = $row["studentNumber"]
                                                                    ?>
                                                                    <option value="<?php echo $row["studentNumber"];?>">
                                                                        <?php echo $row['studentNumber'];?>
                                                                    </option>
                                                                    <?php
                                                                }
                                                            } else {
                                                            echo "$student";
                                                                
                                                            
                                                                if (isset($_POST['studentNumber']))
                                                                echo "studentNumber: ".$_POST['studentNumber'];
                                                                else{}
                                                            }



                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>







                                        <?php /////////////////////////////////////////////////////////////////////////////// ?>

                  
                <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Exam Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="exam_name" class="form-control" placeholder="Exam Name" id="exam_name" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Date</label>
                                                <div class="col-sm-9">
                                                  <input type="date" name="exam_date" class="form-control" placeholder=" Date" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Start Time</label>
                                                <div class="col-sm-9">
                                                  <input type="time" name="start_time" id="start_time" class="form-control" placeholder=" Start Time" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Upload Time</label>
                                                <div class="col-sm-9">
                                                  <input type="time" name="upload_time" id="upload_time" class="form-control" placeholder=" End Time" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <button  type="submit" name="submit" value="Upload" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                        <?php
                                        include('models/connection.php');
                                        

                                        
                                        
                                        if ( isset( $exam_date) || isset( $start_time ) || isset( $upload_time ) || isset( $student_number ) || isset( $module_code) ) {
                                            $exam_date = $mysqli->real_escape_string($_POST['exam_date']);
                                            $start_time = $mysqli->real_escape_string($_POST['start_time']);
                                            $upload_time = $mysqli->real_escape_string($_POST['upload_time']);
                                            $student_number = $mysqli->real_escape_string($_POST['student_number']);
                                            $module_code = $mysqli->real_escape_string($_POST['module_code']);                                        

                                            $query = "INSERT INTO examoutput (transactionID, startTime, uploadTime, studentNumber, moduleCode) VALUES ('{$exam_date}','{$start_time}','{$upload_time}','{$student_number}','{$module_code}')";
                                            $mysqli->query($query);
                                            $mysqli->close();
                                        }
                                        ?>
                                        
                        </div>
                    </div>
                  
                </div>
                
        
<?php include('views/footer.php');?>

<script type="text/javascript">
 $('#module_code').change(function(){
    $("#student_number").val('');
    $("#exam_name").children('option').hide();
    var moduleCode=$(this).val();
    $("#exam_date").children("option[student_number="+module_code+ "]").show();
    
  });
</script>