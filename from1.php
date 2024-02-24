<?php
// 
session_start();
if (isset($_SESSION['islogin'])) {
    header("location:prt1.php");
}
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "log";
$message=$name=$u_email= $u_pass=$uc_pass="";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (isset($_POST["Register"])) {
    $name = $_POST["Y_Name"];
    $u_email = $_POST["u_email"];
    $u_pass = $_POST["u_pass"];
    $uc_pass = $_POST["uc_pass"];

    //email dubel chak
    $email_chak = "SELECT * FROM  lgg WHERE u_email='$u_email'";
    $email_query = mysqli_query($conn, $email_chak);
    $num_row = mysqli_num_rows($email_query);
    if ($num_row > 0) {
        $message = "email already exist";
    }
    else {
        if ($u_pass == $uc_pass) {
            $specialcharacter = preg_match('@[^/w]@', $u_pass);
            if (!$specialcharacter || strlen($u_pass) == 8 || strlen($u_pass) < 8) {
                $message = "special_character din";

            }
            else {
                $insert = "INSERT INTO lgg(Y_Name,u_email,U_password,uc_pass) VALUES('$name','$u_email','$u_pass','$uc_pass')";
                $query=mysqli_query($conn, $insert);
                if($query){
                    $message="rejester success";
                }else{
                    $message="rejester not success";
                }
            }


        }
        else {
            // $message='not';
            $message="passs not match";
        }

    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--  -->
</head>


<body>


    <!--  -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        loging
    </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <section class="vh-900 bg-image" style="">
                    <div class="mask d-flex align-items-center h-900 gradient-custom-3">
                        <div class="container h-900">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-29 col-lg-77 col-xl-60">
                                    <div class="card" style="border-radius: 105px;">
                                        <div class="card-body p-5">
                                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                            <form method="POST">

                                                <div class="form-outline mb-4">
                                                    <input type="text" name="Y_Name" id="form3Example1cg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="email" name="u_email" id="form3Example3cg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" name="u_pass" id="form3Example4cg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example4cg">Password</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" name="uc_pass" id="form3Example4cdg"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example4cdg">Repeat your
                                                        password</label>
                                                </div>


                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" name="Register"
                                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                                </div>

                                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                                        href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> -->

    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                <br><br>
                                <h1 style="color:red"> <?php echo $message ?></h1>

                                <form method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" name="Y_Name" value="<?php echo$name?>" id="form3Example1cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" name="u_email" value="<?php echo$u_email?>"id="form3Example3cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="u_pass" value="<?php echo$u_pass?>" id="form3Example4cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="uc_pass" value="<?php echo $uc_pass?>" id="form3Example4cdg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>


                                    <div class="d-flex justify-content-center">
                                        <button type="button " type="submit" name="Register"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted  mt-5 mb-0" type="submit" name="Register">Have
                                        already an account? <a href="log.php" class="fw-bold text-body"><u>Login here</u></a>
                                    </p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  -->

    <script src="js/index.js"></script>
</body>

</html>