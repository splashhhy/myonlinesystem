<?php error_reporting(0); ?>
<?php include('views/head.php')  ?>

<?php include('views/studentsidebar.php') ?>     
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
              
                  <h3 class="text-primary">Student Board</h3></div>

                  <h4 class="text-primary">Completed Exams By Students</h4>
              
          </div>
          <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th class="opacity-0">vide</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Student Number</th>
                            
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                                      <tbody>
                                     <?php include 'models/connection.php';
                                   
                                  
                                  
                                  {

                                 

                               
                                   $sql="SELECT * FROM `studentinfo`";
                                   $result=$conn->query($sql);
                                   
                                   $value=$result->fetch_assoc();
                                   $_POST=$result->fetch_assoc();
                                   $_row=$result->fetch_assoc();
                                   $_GET=$result->fetch_assoc();
                                   

                                   


                                   
                                   ?>
                                   
                                          <tr>
                                            <td></td>
                                            
                                            <td><?php echo $value["studentName"];?></td>
                                            <td><?php echo $value["studentEmail"];?></td>
                                              
                                            <td><?php echo $value["studentNumber"];?></td>
                                              
                                              
                                            
                                          </tr>
                                    <?php } ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  
      </div>
          
<?php include('views/footer.php');?>