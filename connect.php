<?php
//FOR REGISTRATION

session_start();

// Database configuration settings
$host = 'localhost';
$db_user = 'root'; // Your database username
$db_password = ''; // Your database password
$db_name = 'Devotion_Diaries'; // Your database name

// Create connection
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validate the input
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Please fill in all fields.";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert into the database
        $sql = "INSERT INTO userregistration (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";

        // Prepare statement
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);

            // Execute the statement
            if ($stmt->execute()) {
                // Set session variable upon successful registration
                $_SESSION['registration_success'] = true;

                // Redirect to the same page or to a login page
                header("Location: loginReg.php"); // Adjust the redirect location as needed
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
            $stmt->close();
        }
    }
    // Close connection
    $mysqli->close();
}
?>



<?php
//FOR LOGIN
session_start(); // Start the session at the beginning

// Database configuration settings
$host = 'localhost';
$db_user = 'root'; // Your database username
$db_password = ''; // Your database password
$db_name = 'Devotion_Diaries'; // Your database name

// Create connection
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT id, firstname, password FROM userregistration WHERE email = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $email);

        // Execute the statement
        $stmt->execute();
        $stmt->store_result();

        // Check if the email exists in the database
        if ($stmt->num_rows == 1) {
            // Bind the result variables
            $stmt->bind_result($id, $firstname, $hashed_password);
            $stmt->fetch();

            // Verify the password with the hashed password in the database
            if (password_verify($password, $hashed_password)) {
                // Password is correct, so start a new session
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['firstname'] = $firstname;

                // Redirect user to the user page
                header("location: user.php");
                exit;
            } else {
                // Password is not valid, display an error message
                echo "Invalid password.";
            }
        } else {
            // Email doesn't exist, display an error message
            echo "No account found with that email.";
        }
        $stmt->close();
    }
}
$mysqli->close();
?>


<?php
//for remember me
session_start();
$host = 'localhost';
$db_user = 'root'; // Your database username
$db_password = ''; // Your database password
$db_name = 'Devotion_Diaries'; // Your database name

// Create connection
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// Function to store token in database
function storeRememberToken($userId, $token, $mysqli) {
    $sql = "UPDATE users SET remember_token = ? WHERE id = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("si", $token, $userId);
        $stmt->execute();
        $stmt->close();
    }
}

// Check for a valid login submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $sql = "SELECT id, email, password FROM usersRememberMe WHERE email = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $email, $hashed_password);
            $stmt->fetch();
            if (password_verify($password, $hashed_password)) {
                // Successful login
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                
                // Remember Me functionality
                if (isset($_POST['remember_me'])) {
                    $rememberToken = bin2hex(random_bytes(16)); // Generate a secure token
                    storeRememberToken($id, $rememberToken, $mysqli); // Store the token in the database
                    
                    // Set a cookie with the token, set to expire in 30 days
                    setcookie('remember_me', $rememberToken, time() + (86400 * 30), "/");
                }
                
                // Redirect to user dashboard or homepage
                header("Location: user.php");
                exit;
            } else {
                // Handle incorrect password
                echo "Incorrect password.";
            }
        } else {
            // Handle user not found
            echo "No account found with that email.";
        }
        $stmt->close();
    }
}

// Auto-login with Remember Me cookie
if (!isset($_SESSION['loggedin']) && isset($_COOKIE['remember_me'])) {
    $rememberToken = $_COOKIE['remember_me'];
    $sql = "SELECT id, email FROM usersRememberMe WHERE remember_token = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $rememberToken);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $email);
            $stmt->fetch();
            
            // Log the user in
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            
            // Redirect to user dashboard or homepage
            header("Location: user.php");
            exit;
        }
        $stmt->close();
    }
}

$mysqli->close();
?>


<?php
//FORGOT PASSWORD
session_start();
$host = 'localhost';
$db_user = 'root'; 
$db_password = ''; 
$db_name = 'Devotion_Diaries'; 

$mysqli = new mysqli($host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

session_start();

// Check if the form was submitted and the email POST variable is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $userEmail = trim($_POST['email']); // User's email who requested the reset link

    // Prepare the email details
    $to = 'devotiondiaries12345@gmail.com'; // The email address to send to
    $subject = 'Password Reset Request'; // Subject of the email
    $message = "A password reset request was received from $userEmail. Please follow the procedure to reset the password."; // Message body
    $headers = "From: no-reply@yourdomain.com\r\n"; // Headers, adjust the from address
    $headers .= "Reply-To: $userEmail\r\n"; // Reply address

    if(mail($to, $subject, $message, $headers)) {
        // If email sent successfully, set a session variable to trigger the success modal
        $_SESSION['modal'] = 'success';
    } else {
        // If email sending failed, set a session variable to trigger the error modal
        $_SESSION['modal'] = 'error';
    }
    
    header("Location: loginReg.php#forgotContainer");
    exit;
} else {
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Success Modal -->
<div id="successModal" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Password reset link sent successfully. Please check your email.</p>
  </div>
</div>

    <!-- Error Modal -->
<div id="errorModal" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Failed to send the email. Please try again.</p>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modalType = "<?php echo isset($_SESSION['modal']) ? $_SESSION['modal'] : ''; ?>";
    let modal;

    if (modalType === 'success') {
        modal = document.getElementById('successModal');
    } else if (modalType === 'error') {
        modal = document.getElementById('errorModal');
    }

    if (modal) {
        modal.style.display = 'block';

        // When the user clicks on <span> (x), close the modal
        modal.querySelector('.close').onclick = function() {
            modal.style.display = 'none';
        }

        // Clear the session variable after showing the modal
        <?php unset($_SESSION['modal']); ?>
    }
});
</script>


</body>
</html>


