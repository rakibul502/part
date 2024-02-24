<?PHP

session_start();
if (isset($_SESSION['islogin'])) {
    header("location:prt1.php");
}

//Database Connection start
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "log";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (isset($_POST['Login'])) {
    // $em = $_POST['emaili'];
    $em = $_POST['emaili'];
    $pass = $_POST['psswordd'];
    $sel = "SELECT * FROM `lgg` WHERE u_email='$em' AND U_password='$pass'";
    $ex = mysqli_query($conn, $sel);
    $fat = mysqli_fetch_array($ex);
    if ($fat) {
        header("location:prt1.php");
        $_SESSION['islogin'] = $fat['u_email'];

    }
    else {
        echo "<script> alert ('plass try agin sir')</script> ";
    }
}
// if (isset($_POST['Login'])) {
//     $em = $_POST['emaili'];
//     $pass = $_POST['psswordd'];
//     $sel = "SELECT * FROM `from` 
//     WHERE email='$em' AND pass='$pass'";
//     $ex = mysqli_query($conn, $sel);
//     $fat = mysqli_fetch_array($ex);
//     if ($fat) {
//         header("location:log2.php");
//         $_SESSION['emaili']= $fat['email'];
//     }
//     else {
//         echo "<script> alert ('plass try agin sir')</script> ";
//     }

// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>
                            <form method="POST">
                                <div class="form-outline mb-4">
                                    <input name="emaili" type="email" id="typeEmailX-2" placeholder="Email"
                                        class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <input name="psswordd" type="password" id="typePasswordX-2" placeholder="Password"
                                        class="form-control form-control-lg" />
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit"
                                    name="Login">Login</button>

                                <hr class="my-4">
                            </form>
                            <button class="btn btn-primary"><a href="from1.php">create account</a> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>