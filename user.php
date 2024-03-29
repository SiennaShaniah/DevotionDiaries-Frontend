<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</head>

<body>

   
            <div class="sidebar">
                <div class="logo">
                    <a href="index.html">
                        <img src="Images/devlogo.png" alt="DevotionDiaries" style="max-height: 100%; max-width: 100%;">
                    </a>
                </div> 
                <nav class="nav nav-pills flex-column">
                    <ul class="menu">
                    <li class="nav-item active">
                        <a class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" href="#dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>       
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fas fa-user"></i>
                            <span>Profile</span>       
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="v-pills-todaysPrompt-tab" data-bs-toggle="pill" href="#todaysPrompt" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fas fa-calendar-day"></i>
                            <span>Daily Prompt</span>       
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="v-pills-JournalEntry-tab" data-bs-toggle="pill" href="#JournalEntry" role="tab" aria-controls="v-pills-newJournal" aria-selected="false">
                            <i class="fas fa-edit"></i>
                            <span>New Journal Entry</span>       
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" id="v-pills-viewJournal-tab" data-bs-toggle="pill" href="#viewJournal" role="tab" aria-controls="v-pills-viewJournal" aria-selected="false">
                            <i class="fas fa-eye"></i>
                            <span>View Journals</span>       
                        </a>
                    </li>
                    <li class="logout">
                        <a href="index.html" data-bs-toggle="pill" data-bs-target="#logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Log out</span>       
                        </a>
                    </li>
                </ul>
            </div>
            
         <!-- Tab Content -->
         <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Dashboard Tab Pane -->
                <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                    <div class="dashboard">
                        <div class="header--wrapper">
                            <div class="header--title">
                                <span id="welcome">Welcome To</span>
                                <h2>Your Dashboard</h2>
                            </div>
                        </div>
                        <div class="row my-5 align-items-center justify-content-center g-5" id="dashrow">
                            <div class="col-xl-4 col-lg-4 col-md-5">
                                <div class="card">
                                    <img src="/Images/bible.jpg" class="card-img-top" alt="Description of the image">
                                    <div class="card-body text-center py-4">
                                        <h4 class="card-title">Recent Journal Entries</h4>
                                        <a href="viewJournal" id="dashbtn" class="btn btn-primary">View Journal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-5">
                                <div class="card">
                                    <img src="/Images/bible01.jpg" class="card-img-top" alt="Description of the image">
                                    <div class="card-body text-center py-4">
                                        <h4 class="card-title">Prompt For Today</h4>
                                        <a href="newJournal" id="dashbtn" class="btn btn-primary">Make a Devo Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row my-5 align-items-center justify-content-center g-5" id="dashrow">
                            <div class="col-xl-4 col-lg-4 col-md-5">
                                <div class="card">
                                    <img src="/Images/bible02.jpg" class="card-img-top" alt="Description of the image">
                                    <div class="card-body text-center py-4">
                                        <h4 class="card-title">Bible</h4>
                                        <p>The Bible is a beacon of light in our daily lives, providing guidance, comfort, and inspiration.</p>
                                        <a href="https://www.bible.com/" id="dashbtn" class="btn btn-primary" target="_blank">Browse the Bible</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-5">
                                <div class="card">
                                    <img src="/Images/bible03.jpg" class="card-img-top" alt="Description of the image">
                                    <div class="card-body text-center py-4">
                                        <h4 class="card-title">Daily Devotionals</h4>
                                        <p>Daily devotionals offer a moment of pause in our fast-paced lives.</p>
                                        <a href="https://todaydevotional.com/" id="dashbtn"  class="btn btn-primary" target="_blank">Check Daily Devotions</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div> 
                </div>

                
<!-- Profile Tab Pane -->
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <div class="prof">
        <header class="header--wrapper">
            <h2 class="header--title">My Profile</h2>
        </header>
        <section class="user-profile container mt-4" id="userprof">
            <div class="row align-items-stretch">
                <!-- User Picture -->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="user-picture-wrapper mt-2 w-100">
                        <img src="Images/cross.jpg" alt="User Picture" class="img-fluid rounded" id="user-picture">
                    </div>
                </div>
                <!-- User Information and Details -->
                <div class="col-md-6 d-flex flex-column justify-content-between">
                    <div class="userbg">
                    <div class="user-details-wrapper rounded w-100">
                        <h2 class="yourInfo">Your Information:</h2>
                        <br>
                        <div id="userDetails">
                            <p>First Name  : <span id="userFirstName">John</span></p>
                            <p>Last Name   : <span id="userLastName">Doer</span></p>
                            <p>Email       : <span id="userEmail">john.doe@example.com</span></p>
                            <p>User Details: <span id="userDetails">Not provided yet.</span></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<br>
<br>
    <!-- Edit Profile Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- Form on the left -->
            <h2 class="yourInfo">Edit Profile</h2>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="user-details-wrapper rounded w-100 editform">
                    <form id="profileForm">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label for="selfDescription">About Me</label>
                            <textarea class="form-control" id="selfDescription" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnupdate">Update Profile</button>
                    </form>
                </div>
            </div>
            
            <!-- User Picture for Edit Profile Section -->
            <div class="col-md-6 d-flex align-items-stretch" id="edpic">
                <div class="user-picture-wrapper">
                    <img src="Images/bible06.jpg" alt="User Picture" class="img-fluid rounded" id="user-picture">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Today's prompt tab -->

<div class="tab-pane fade" id="todaysPrompt" role="tabpanel" aria-labelledby="v-pills-todaysPrompt-tab">
    <div class="todaysPrompt">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Daily Prompt</h2>
            </div>
        </div>

        <section class="user-profile container mt-4" id="userprof">  

               <div class="col-md-6 d-flex align-items-stretch">
                    <div class="user-picture-wrapper w-100">
                        <img src="/Images/bible01.jpg" alt="User Picture" class="img-fluid rounded" id="user-picture">
                    </div>

                
                <!-- User Details -->
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="user-details-wrapper p-3 rounded w-100">
                        <h2 class="header--title">Today's Prompt</h2>
                        <hr>
                        <div id="userDetails">
                        <p>Date   : <span id="date">No Date</span></p>
                        <p>Title  : <span id="title">No Title</span></p>
                        <p>Prompt : <span id="prompt">No Content</span></p>
                    </div>
                    </div>
                </div>
            <!-- </div> -->
        </section>
    </div>
</div>


  <!-- (Make a Devo pages)-->
  <div class="tab-pane fade" id="JournalEntry" role="tabpanel" aria-labelledby="v-pills-JournalEntry-tab">
    <div id="devoPages" >
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg"> <!-- Added shadow for depth -->
                <div id="headdevo" class="card-header">
                    <h1 class="text-center mb-0">Create A Devo Page</h1>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="entryTitle" class="form-label">Devotional Title:</label>
                            <input type="text" class="form-control" id="entryTitle" placeholder="Enter Entry Title">
                        </div>
                
                        <!-- Date Input -->
                        <div class="mb-3">
                            <label for="entryDate" class="form-label">Date:</label>
                            <input type="date" class="form-control" id="entryDate">
                        </div>

                        <div class="mb-3">
                            <label for="entryLabel" class="form-label">Label:</label>
                            <input type="text" class="form-control" id="entryLabel" placeholder="Enter Entry Label">
                        </div>
                
                        <div class="mb-3">
                            <label for="entryContent" class="form-label">Content:</label>
                            <textarea class="form-control" id="entryContent" rows="10" placeholder="Write your journal entry here..."></textarea>
                        </div>
                
                        <div class="action-buttons text-center mt-3" id="devobtn">
                            <button type="button" class="btn btn-primary btn-md" id="btnSaveEntry">Save</button>
                            <button type="button" id="upbtn" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
 </div>
</div>
</div>




 

                <!-- View Journals Tab Pane -->
                <div class="tab-pane fade" id="viewJournal" role="tabpanel" aria-labelledby="v-pills-viewJournal-tab">
                    <div class="view-journal-container">
                    <div class="viewjournal">
                        <div class="header--wrapper">
                            <div class="header--title">
                                <h2>View Journal Entries</h2>
                            </div>
                        </div>
                        <div class="container">
                            <!-- Journal Entries Grid -->
                            <div class="row">
                                <!-- Journal Entry 1 -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body d-flex justify-content-between">
                                            <div>
                                                <!-- Group all content except the icon -->
                                                <h5 class="card-title">Devotional Title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">3 days ago</h6>
                                                <p class="card-text">Label</p>
                                                <small class="text-muted">Date</small>
                                            </div>
                                            <!-- View Icon aligned to the right -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#viewEntryModal" data-entry-id="1" class="view-entry-icon ms-auto">
                                                <img src="Icons/eye (1).png" alt="View" style="width: 24px; height: 24px;">
                                            </a>
                                        </div>
                                                                              
                                    </div>
                                </div>
                                <!-- Journal Entry 2 (repeat similar blocks for other entries) -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body d-flex justify-content-between">
                                            <div>
                                                <!-- Group all content except the icon -->
                                                <h5 class="card-title">Devotional Title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">3 days ago</h6>
                                                <p class="card-text">Label</p>
                                                <small class="text-muted">Date</small>
                                            </div>
                                            <!-- View Icon aligned to the right -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#viewEntryModal" data-entry-id="1" class="view-entry-icon ms-auto">
                                                <img src="Icons/eye (1).png" alt="View" style="width: 24px; height: 24px;">
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body d-flex justify-content-between">
                                            <div>
                                                <!-- Group all content except the icon -->
                                                <h5 class="card-title">Devotional Title</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">3 days ago</h6>
                                                <p class="card-text">Label</p>
                                                <small class="text-muted">Date</small>
                                            </div>
                                            <!-- View Icon aligned to the right -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#viewEntryModal" data-entry-id="1" class="view-entry-icon ms-auto">
                                                <img src="Icons/eye (1).png" alt="View" style="width: 24px; height: 24px;">
                                            </a>
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Repeat for more entries as needed, following the pattern above -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


              <!-- Modal -->
              <div class="modal fade" id="viewEntryModal" tabindex="-1" aria-labelledby="viewEntryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg"> <!-- Use modal-lg for larger modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewEntryModalLabel">Your Devotional</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Dynamic content goes here -->
                <form id="editJournalForm">
                    <div class="mb-3">
                        <label for="modalEntryTitle" class="form-label">Devotional Title:</label>
                        <input type="text" class="form-control" id="modalEntryTitle">
                    </div>
                    
                    <div class="mb-3">
                        <label for="modalEntryDate" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="modalEntryDate">
                    </div>

                    <div class="mb-3">
                        <label for="modalEntryLabel" class="form-label">Label:</label>
                        <input type="text" class="form-control" id="modalEntryLabel">
                    </div>
            
                    <div class="mb-3">
                        <label for="modalEntryContent" class="form-label">Content:</label>
                        <textarea class="form-control" id="modalEntryContent" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer" id="modalbtn" >
                <button type="button" class="btn btn-primary" id="modalbtn1" id="updateEntry">Update Entry</button>
                <button type="button" class="btn btn-primary" id="modalbtn1" id="deleteEntry">Delete Entry</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="modalbtn1">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myTabs = new bootstrap.Tab(document.getElementById('v-pills-dashboard-tab'));
        myTabs.show();  // Activate the first tab

        // Initialize other tabs as needed
        var profileTab = new bootstrap.Tab(document.getElementById('v-pills-profile-tab'));
        var todaysPromptTab = new bootstrap.Tab(document.getElementById('v-pills-todaysPrompt-tab'));
        var journalEntryTab = new bootstrap.Tab(document.getElementById('v-pills-JournalEntry-tab'));
        var viewJournalTab = new bootstrap.Tab(document.getElementById('v-pills-viewJournal-tab'));

        // Show or activate the tabs based on your requirements
        profileTab.show();
        todaysPromptTab.show();
        journalEntryTab.show();
        viewJournalTab.show();
    });
</script>

   
                <script>
                    document.addEventListener('DOMContentLoaded', (event) => {
                        // Listen for click events on elements with the 'view-entry-icon' class
                        document.querySelectorAll('.view-entry-icon').forEach(item => {
                            item.addEventListener('click', event => {
                                // Prevent the default anchor click behavior
                                event.preventDefault();
            
                                // Retrieve the entry ID
                                const entryId = item.getAttribute('data-entry-id');
            
                                // Here you would fetch the entry details based on the entryId
                                // For demonstration, we'll just set a static content
                                const entryContent = `Content for entry ID ${entryId}`;
            
                                // Set the content in the modal body
                                document.querySelector('#viewEntryModal .modal-body').textContent = entryContent;
            
                                // Now the modal will be shown automatically because of the data-bs-toggle and data-bs-target attributes
                            });
                        });
                    });
                </script>
    
 

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>
</html>
