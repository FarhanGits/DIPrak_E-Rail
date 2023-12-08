<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Page</title>
    <link rel="stylesheet" href="{{ asset('style/singup.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="jumbopict"></div>
        <div class="login">
            <div class="signin">
                <h1>Create an account</h1>
                <p>Already have an account? <a href="/">Login</a></p>
            </div>

            <div class="form">
                <form action="/">
                    <label for="Username">Username</label>
                    <input type="text" name="Username" />
                    <label for="Username">Email Adress</label>
                    <input type="text" name="Username" />
                    <label for="Password">Your Password</label>
                    <input type="password" name="Password" />
                    <p>Use 8 more characters with a mix of letters,numbers, & symbols</p>
                </form>
                <div class="termsOfUse">
                    <p>
                        By creating an account, you aggre to our
                        <a href="">Terms of Use</a> and <a href="">Privacy Policy</a>
                    </p>
                </div>
                <div class="button">
                    <button>Create an account</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
