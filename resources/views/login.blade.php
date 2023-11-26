<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('style/login.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="jumbopict"></div>
        <div class="login">
            <div class="signin">
                <h1>Sign in</h1>
            </div>
            <div class="continuewith">
                <a href="" class="google choose">
                    <img src="{{ asset('img/assets/google.png') }}" alt="" />
                    <p>Continue With Google</p>
                </a>
                <a href="" class="twitter choose">
                    <img src="{{ asset('img/assets/twitter.png') }}" alt="" />
                    <p>Continue With Twitter</p>
                </a>
            </div>
            <div class="or">
                <div class="line"></div>
                <p>OR</p>
                <div class="line"></div>
            </div>
            <div class="form">
                <form action="">
                    <label for="Username">Username or Email Addres</label>
                    <input type="text" name="Username" />
                    <label for="Password">Your Password</label>
                    <input type="password" name="Password" />
                    <a href="" class="forget">Forget Your Password</a>
                </form>
            </div>

            <div class="button">
                <a href="/home"><button>Sign In</button></a>
                <p>Don't have an account? <a href="/signup">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>

</html>
