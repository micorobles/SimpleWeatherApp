<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="../../packages/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: block;
            align-items: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        a {
            text-decoration: none;
        }

        #forgotPassword:hover {
            /* color: red !important; */
            text-decoration: underline;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #3e3e3e;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body style="background-color:white">
    <section class="vh-100" style="background-color: #B4B4B8;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="background-color:#C7C8CC; padding: 30px 50px; border-radius: .5rem; margin-right: 8.33333333%;">
                    <form id="signUpForm">
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Sign Up</p>
                        </div>

                        <!-- Username input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="username" id="username" class="form-control form-control-lg fs-6" placeholder="Username" />
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg fs-6" placeholder="Email address" />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg fs-6" placeholder="Password" />
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem; width: 100%">Sign up</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Have an account? <a href="../../index.php" class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
                
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="../../assets/img/login_img.jpg" class="img-fluid" alt="Sample image">
                </div>
            </div>
        </div>

    </section>

    <script src="../../packages/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../packages/Jquery/jquery-3.7.1.min.js"></script>
    <script src="../../assets/js/register.js"></script>
    <script src="../../assets/js/ajax.js"></script>
</body>

</html>