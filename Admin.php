<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar / Menu -->
        <div class="col-auto min-vh-100" id="sidebar">  
            <div class="logo">
            <a href="index.html">
                <img src="Images/devlogo.png" alt="DevotionDiaries" style="max-height: 100%; max-width: 100%;">
            </a>
            </div>            
            <!-- Nav tabs -->
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="nav-item">
                    <a class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-userManagement-tab" data-bs-toggle="pill" href="#userManagement" role="tab" aria-controls="userManagement" aria-selected="false">
                        <i class="fas fa-users-cog"></i> User Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="v-pills-prompt-tab" data-bs-toggle="pill" href="#uploadPrompt" role="tab" aria-controls="uploadPrompt" aria-selected="false">
                        <i class="fas fa-upload"></i> Upload Prompt
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-sign-out-alt"></i> Log Out
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="col">
            <!-- Tab Content -->
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Dashboard Tab Pane -->
                <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                    <!-- Dashboard Content Here -->
                    <div class="dashboard">
                        <div class="header--wrapper">
                            <div class="header--title">
                                <span>Welcome To</span>
                                <h2>Admin Dashboard</h2>
                            </div>
                        </div>
                        <div class="row my-5 align-items-center justify-content-center g-5" id="dashrow">
                            <div class="col-xl-6 col-lg-6" id="dashcol">
                                <div class="card" id="dashcard">
                                    <img src="/Images/bible.jpg" class="card-img-top" alt="Description of the image">
                                    <div class="card-body text-center py-4" id="dashcardBody">
                                        <h4 class="card-title">Number of Users</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        <a href="#userManagement" class="btn btn-primary" id="dashbtn">User Management</a>
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-xl-6 col-lg-6" id="dashcol">
                                <div class="card" id="dashcard">
                                    <img src="/Images/bible01.jpg" class="card-img-top" alt="Description of the image">
                                    <div class="card-body text-center py-4" id="dashcardBody">
                                        <h4 class="card-title">Prompt For Today</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        <a href="#uploadPrompt" class="btn btn-primary" id="dashbtn">Prompts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

                <!-- User Management Tab Pane -->
                <div class="tab-pane fade" id="userManagement" role="tabpanel" aria-labelledby="v-pills-userManagement-tab">
                    <!-- User Management Content Here -->
                    <div class="user-management">
                        <div class="header--wrapper">
                            <div class="header--title">
                                <h2>User Management</h2>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Search...">
                            <span class="search">
                                <i>
                                    <img src="Icons/search (1).png" alt="Search">
                                </i>
                            </span>
                        </div>
                        <br>
                        <div>
                            <a href="deleteAction" class="btn btn-primary" id="deleteBtn">Delete Item</a>
                        </div>
                        
                        <div class="container mt-5" id="usertable">
                            <h5>User Information</h5>
                            <div class="table-scroll">
                                <table class="table table-responsive table-bordered border-dark table-hover text-center table-scroll" id="userTableContainer"  >
    
                                    <tr class=" table-active text-White" id="head">
                                        <th class="tabheader">User Id</th>
                                        <th class="tabheader">Username</th>
                                        <th class="tabheader">Password</th>
                                        <th class="tabheader">Email</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Prompt Tab Pane -->
                <div class="tab-pane fade" id="uploadPrompt" role="tabpanel" aria-labelledby="v-pills-prompt-tab">
                    <!-- Upload Prompt Content Here -->
                    <div class="upload-prompt">
                        <div class="header--wrapper">
                            <div class="header--title">
                                <h2>Upload Prompt</h2>
                            </div>
                        </div>

                        <form action="connectAdmin.php" method="post">
  <div class="card">
    <div class="card-body">
      <!-- Form for uploading prompts -->
      <div class="mb-3">
        <label for="entryDate" class="form-label">Date:</label>
        <input type="date" class="form-control" id="entryDate" name="entryDate">
      </div>

      <div class="mb-3">
        <label for="promptTitle" class="form-label">Title</label>
        <textarea class="form-control" id="promptTitle" rows="1" name="promptTitle"></textarea>
      </div>

      <div class="mb-3">
        <label for="promptText" class="form-label">Prompt Text</label>
        <textarea class="form-control" id="promptText" rows="3" name="promptText"></textarea>
      </div>

      <div class="action-buttons">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="button" onclick="resetForm()" class="btn btn-secondary">Cancel</button>
      </div>
    </div> 
  </div>
</form>

<div class="container mt-5" id="prompttable">
    <h5>Recent Prompts</h5>
    <?php
    // Database connection parameters
    $host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'Devotion_Diaries';

    // Create database connection
    $mysqli = new mysqli($host, $db_user, $db_password, $db_name);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Query to fetch recent prompts from the database
    $query = "SELECT entryDate, promptTitle FROM prompts ORDER BY entryDate DESC";
    $result = $mysqli->query($query);
    ?>

    <div class="table-scroll">
        <table class="table table-responsive table-bordered border-dark table-hover text-center" id="userTableContainer">
            <thead>
                <tr class="table-active text-uppercase text-white" id="head">
                    <th class="tabheader">Date</th>
                    <th class="tabheader">Title</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are any results
                if ($result && $result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['entryDate']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['promptTitle']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No prompts found</td></tr>";
                }
                $mysqli->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="action-buttons text-center mt-3">
    <button type="button" class="btn btn-primary me-2" id="deletePromptBtn">Delete</button>
    <button type="button" class="btn btn-primary me-2" id="editPromptBtn">Edit</button>
    <button type="button" class="btn btn-primary me-2" id="updatePromptBtn">Update</button>
</div>


                    </div>

                </div>


<!--upload prompt Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="messageModalLabel">Submission Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if (isset($_SESSION['message'])) echo htmlspecialchars($_SESSION['message']); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>










                

            </div>
        </div>
    </div>
</div>

<!-- reset prompt  -->
<script>
function resetForm() {
  // This will reset all form values to their default values
  document.querySelector('form').reset();
}
</script>

<!-- upload prompt modal -->
<script>
  <?php if (isset($_SESSION['message'])): ?>
    $('#messageModal').modal('show');
    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
  <?php endif; ?>
</script>

<!-- for double clicks -->
<script>
$(document).ready(function(){
    $('form').submit(function(){
        $(this).find(':submit').attr('disabled','disabled');
    });
});
</script>


<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
