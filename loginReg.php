
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="stylelucid.css">
    <title>LogIn|SignUp</title>
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">



</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
           
            <a href="index.php" class="nav-link">DevotionDiaries</a>
        </div>
    </nav>
    
    

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
        <form action="connect.php" method="post">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" name="email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password" name="password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#" id="forgot-password">Forgot password?</a></label>
                </div>
            </div>
            </form>
        </div>




        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
        
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>

            <form action="connect.php" method="post">
            <div class="two-forms">
           
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname" name="firstname" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname" name="lastname" required>
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" name="email" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" name="password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Confirm Password" name="confirm_password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register" name="register">
            </div>
            </form>
            </div>
           
 </div>  


    <div id="forgotContainer" class="forgot-container center" >
    <form action="connect.php" method="post">
        <div class="forgot-form">
            <div class="forgot-container" id="forgot">
                <div class="top">
                    <span><a href="#" onclick="login()">Back to Login</a></span>
                    <header>Reset Password</header>
                </div>
                <!-- Email Input Box -->
                <div class="input-box">
                    <input type="email" class="input-field" placeholder="Your Email" name="email" required>
                    <i class="bx bx-envelope"></i>
                </div>
                <!-- Submit Button -->
                <div class="input-box">
                    <input type="submit" class="submit" value="Send Reset Link">
                </div>
            </div>
        </div>
    </form>
</div>














<script>
var a = document.getElementById("loginBtn");
var b = document.getElementById("registerBtn");
var x = document.getElementById("login");
var y = document.getElementById("register");
var forgotContainer = document.getElementById("forgotContainer");

function login() {
    x.style.left = "4px";
    y.style.right = "-520px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
    forgotContainer.style.left = "-500px"; // Close the forgot password container
    enableLoginForm();
}

function register() {
    x.style.left = "-510px";
    y.style.right = "5px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
    forgotContainer.style.left = "-500px"; // Close the forgot password container
    enableLoginForm();
}

function enableLoginForm() {
    // Enable input fields and buttons in the login form
    document.getElementById("login").querySelectorAll("input, button").forEach(function(element) {
        element.removeAttribute("disabled");
    });
}

document.getElementById('forgot-password').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.login-container').style.transition = 'all 0.5s';
    document.querySelector('.login-container').style.left = '-510px';
    document.querySelector('.forgot-container').style.transition = 'all 0.5s';
    document.querySelector('.forgot-container').style.left = '50%';
    forgotContainer.style.left = '80%';
    forgotContainer.style.top = '30%';
    forgotContainer.style.transform = 'translate(-40%, -30%)';
    
    // Disable input fields and buttons in the login form when showing forgot password
    document.getElementById("login").querySelectorAll("input, button").forEach(function(element) {
        element.setAttribute("disabled", "disabled");
    });
});

document.getElementById('forgot').addEventListener('click', function(e) {
    e.preventDefault();
    forgotContainer.style.left = '-500px'; // Close the forgot password container
    login(); // Go back to login
});

// Prevent clicking on the input fields in the forgot password form from triggering the login form
document.getElementById('forgot').querySelectorAll("input").forEach(function(element) {
    element.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});
</script>



<!-- At the end of your body -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>




