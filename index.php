<?php
include('includes/header.php');
include('includes/navbar.php');
?>

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Registered</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            
                                            <?php
                                            require 'adconfig.php';
                                            $query ="SELECT id FROM register ORDER BY id";
                                            $query_run =mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4>' .$row.'</h4>';
                                           
                                           ?>
                                         


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                TOTAL PROJECTS</div>
                                                <?php
                                            require 'config.php';
                                            $query ="SELECT id FROM crudd ORDER BY id";
                                            $query_run =mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo '<h4>' .$row.'</h4>';
                                           
                                           ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   

<table border="0.5" style=" display: flex; ">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Age</td>
    <td>Current Location</td>
    <td>House Location</td>
    <td>Image</td>
    <td>Action</td>
  </tr>

 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="garagaza";
// include "conn.php"; 
$myConnection= mysqli_connect("$servername","$username","$password", "garagaza") or die ("could not connect to mysql");
$records = "SELECT * FROM landlord"; // fetch data from database
$query = mysqli_query($myConnection, $records) or die(mysqli_error($myConnection));

while($data = mysqli_fetch_array($query, MYSQLI_ASSOC))

{
    

?> 
   <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['age']; ?></td>
    <td><?php echo $data['clocation']; ?></td>
    <td><?php echo $data['hlocation']; ?></td>
    <td><?php echo $data['image']; ?></td>|
    
 	
  
 <td > <a href="index.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2"
     onclick="return confirm('Do you want delete this record?');">Delete</a></td>|
    
</tr>
<?php
}
?>
</table>



                    

                        

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

 

    <?php
    include('includes/script.php');
    include('includes/footer.php');
    
    ?>

    
    

