<?php //session_start();
    
      
        ?>


<link rel="stylesheet" href="popup_style.css">
<link rel="stylesheet" href="js/bootstrap.min.css">
<link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">

<link rel="stylesheet" href="css/lib/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<!--Banner starts here -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset lg-8">

                <h2 class="">Login</h2>

                <div class="card">
                    <div class="card-title">Login For Student and Staff</div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentaion">
                            <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" data-target="student" role="tab"
                                aria-controls="home" aria-selected="true">Student Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin" data-target="admin" role="tab"
                                aria-controls="profile" aria-selected="false">Lecturer and Exam Department Staff
                                Login</a>
                        </li>
                    </ul>




                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active " id="student" role="tabpanel" aria-labelledby="student-tab">
                            <br>
                            <form method="post" id="studentForm" action="studentDashboard.php">
                                <div class="form-group">
                                    <label for="stud-email">Student Email</label>
                                    <input class="form-control" type="text" name="stud_email" id="stud_email"
                                        placeholder="My Life Email (e.g. 12345678@mylife.unisa.ac.za)">
                                </div>
                                <div class="form-group">
                                    <label for="stud_pass">Student Password</label>
                                    <input class="form-control" type="password" name="stud_pass" id="stud_pass"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-secondary btn-lg">Login Student</button>

                                <br>
                                <div class="studResult"></div>
                            </form>
                        </div>
                        <br><br>
                        <div class="tab-pane show active" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                            <br>
                            <form method="post" id="adminForm" action="admin.php">
                                <div class="form-group">
                                    <label for="admin_email">Staff Email</label>
                                    <input class="form-control" type="text" name="admin_email" id="admin_email"
                                        placeholder="Staff Email">
                                </div>
                                <div class="form-group">
                                    <label for="admin_pass">Staff Password</label>
                                    <input class="form-control" type="password" name="admin_pass" id="admin_pass"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-secondary btn-lg">Login Staff</button>

                                <br>

                                <div class="adminResult"></div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	
    
 

</body>

</html>

