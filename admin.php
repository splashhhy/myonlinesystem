<?php 

//session
//session_start();

/// require the model and db connection
require ("models/connection.php");
require ("models/db_functions.php");



?>

<?php include('views/sidebar.php'); ?>
<?php include('views/header.php'); ?>
<?php include('views/head.php');  ?>


<?php include ('models/connection.php'); ?>

  <html>
    <head>
        <script type="text/javascript" src="js/fetchnDisp.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <style type="text/css">
            table{
                border: 1px solid;
                border-collapse: collapse;
                padding: 10px;
            }
            th, td, tr{
                border: 1px solid;
            }
        </style>

       

       
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h2 class="text-primary">Dashboard</h2> 
                    <h3 class="text-primary">Reports</h3> </div> 
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
                    </ol>
                </div>
            </div>
</head>
<body>
            
            <div class="container-fluid">
                
        
                      <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-bag f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $sql="SELECT COUNT(*) FROM `staffinfo`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Lecturers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-comment f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $sql="SELECT COUNT(*) FROM `studentinfo`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-vector f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $sql="SELECT COUNT(*) FROM `moduleinfo`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Modules</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-location-pin f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $sql="SELECT COUNT(*) FROM `examoutput`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                    <h2 class="color-white"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Exams</p>
                                </div>
                            </div>
                        </div>
                    </div>

                
            </div>
             <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                
                    <h3 class="text-primary">MIS Daily Report</h3></div>
                    <br><br>
                    <div class="container" style="width:800px;">
            <div class="wrapper" style="width:960px;">
            </div>
            <?php 
            $con = mysqli_connect("localhost","root","","onlineexaminationsystem");
            $sql = "SELECT DISTINCT studentNumber FROM examoutput";
            $res = mysqli_query($con, $sql);
?>

            <body>
            Select Student:
            <select id="studentNumber" onchange="selectstudentNumber()">
                <?php while( $rows = mysqli_fetch_array($res)){
                    ?>
                    <option value="<?php echo $rows['studentNumber'] ?> "><?php echo $rows['studentNumber']    ?> </option>
                <?php
                }
        ?>

    </select>
<br><br>
    <table>
        <thead>
            <th style="width: 30%"> Transaction ID </th>
            <th style="width: 30%"> Start Time </th>
            <th style="width: 30%"> Upload Time </th>
            <th style="width: 40%"> Module Code </th>

        </thead>
        <tbody id="ans">

        </tbody>

    </table>
    <br><br>
    
                
    

</body>
<html>
</div>
</div>


<body>
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">MIS Weekly Report</h3></div>
    <br><br>
<div class="container" style="width:800px;">
<div class="wrapper" style="width:960px;">
<?php 
            $con = mysqli_connect("localhost","root","","onlineexaminationsystem");
            $sql = "SELECT DISTINCT examDate FROM examsetup";
            $res = mysqli_query($con, $sql);
?>

Select Date:
    <select id="date" onchange="selectdate()">
        <?php while( $rows = mysqli_fetch_array($res)){
            ?>
            <option value="<?php echo $rows['examDate'] ?> "><?php echo $rows['examDate']    ?> </option>
        <?php
        }
        ?>

    </select>
<br><br>
    <table>
        <thead>
            <th> Module Code </th>
            <th> Answer Paper PDF </th>
            

        </thead>
        <tbody id="dates">

        </tbody>

    </table>
    </body>
</div>
    </div>








































        






























            
            
            
            


            
   

    

            
            


        
        
            
            
    <?php include('views/footer.php');?>