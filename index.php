<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="packages/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        * {
            padding: 0;
            margin: 0;
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

<body>
    <section class="vh-100" >
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/img/login_img.jpg"
                        class="img-fluid" alt="Sample image">
                </div>
                <!-- start form div -->
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 p-5" style="border: 1px solid #ccc; background-color: #EEEEEE; box-shadow: rgb(221, 219, 216) 0 0 10px;">
                    <form id="loginForm">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg fs-6"
                                placeholder="Email address" />
                            <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg fs-6"
                                placeholder="Password" />
                            <!-- <label class="form-label" for="form3Example4">Password</label> -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="rememberMe" />
                                <!-- <label class="form-check-label" for="form2Example3"> -->
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" id="forgotPassword" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-lg fs-6"
                                style="padding-left: 2.5rem; padding-right: 2.5rem; width: 100%;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
                <!-- end form div -->
            </div>
        </div>

    </section>

    <script src="packages/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="packages/Jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/ajax.js"></script>
</body>

</html>