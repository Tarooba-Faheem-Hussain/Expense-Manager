<!DOCTYPE html>
<html>

<head>
    <title>Expense Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./styles/custom.css">
    <script type="text/javascript" src="./scripts/custom.js"></script>

    <style>
        body {
            background-color: #589ED9;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 30px;
            text-align: center;
        }



        #header h1 {
            font-size: 32px;
            color: white;
            margin-top: 10px;
        }

        #loginform .containerfields {
            background-color: white;
            border-radius: 10px;
        }

        #loginform .containerfields input {
            font-family: 'Open Sans', sans-serif;
            width: 100%;
            border: none;
            font-size: 17px;
            padding: 0px;
            margin: 0px;
            outline: none;
            padding-top: 18px;
            padding-bottom: 18px;
            text-indent: 20px;
            border-radius: 10px;
        }

        #loginform .containerfields input[type="password"] {
            border-top: 1px solid #ccc;
            border-radius: 0px;
            -webkit-border-bottom-right-radius: 6px;
            -webkit-border-bottom-left-radius: 6px;
            -moz-border-radius-bottomright: 6px;
            -moz-border-radius-bottomleft: 6px;
            border-bottom-right-radius: 6px;
            border-bottom-left-radius: 6px;
        }

        #loginform button[type="submit"] {
            display: block;
            width: 100%;
            border: none;
            background-color: #2186D4;
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-top: 10px;
            padding: 14px 0px;
            border-radius: 6px;
        }

        #loginform button[type="submit"] {
           
            cursor: pointer;
        }

        #loginform button[type="submit"]:hover {
            background-color: lightskyblue;
            cursor: pointer;
        }

        #footer p {
            color: white;
            font-size: 19px;
        }

        #footer p a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>

</head>
<data-spy="scroll" data-target="#navbarSupportedContent">

    <body>
        <!-- navbar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" id="stickynavbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- navbar -->

        <form name="myForm" action="login.php" onsubmit=" return validateForm() " method="post">

            <div class="container">
                <h1>Welcome</h1>

                <div id="loginform">

                    <div class="containerfields">
                        <input type="email" placeholder="Email Address" name="email" required value="">
                        <input type="password" placeholder="Enter Password" name="psw" required value="">
                    </div>

                    <button type="submit" class="btn btn-primary">LogIn</button>
                </div>

        </form>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small stylish-color-dark pt-4 text-light fixed-bottom">

            <div class="footer-copyright text-center py-3">© 2021 Copyright</div>

        </footer>
        <!-- Footer -->
    </body>

</html>