<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connectio
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    $shirts = ($_POST['shirts']);
    $D_T = ($_POST['D_T']);
    $new_p = ($_POST['new_p']);
    $old_p = ($_POST['old_p']);
    //img
    $img = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $upload = move_uploaded_file($tempname, 'u/' . $img);

    $query = "INSERT INTO card (shirts, D_T,new_p,old_p,img) VALUES ('$shirts', '$D_T','$new_p','$old_p','$img')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "ok sir ";
        header("Location: prod.php");

    } else {
        echo "Error: ";
    }






}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product ecommerce category page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        crossorigin="anonymous">
    <link rel="stylesheet" href="cs.css">
</head>


<body>


<!--  -->
    <!-- <div class="container mt-100">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                        <div class="inner">
                            <div class="main-img"><img src="https://i.imgur.com/O0GMYuw.jpg" alt="Category"></div>
                            <div class="thumblist"><img src="https://i.imgur.com/ILEU18M.jpg" alt="Category"><img
                                    src="https://i.imgur.com/2kePJmX.jpg" alt="Category"></div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Laptops</h4>
                        <p class="text-muted">Starting from $499</p><a class="btn btn-outline-primary btn-sm" href="#"
                            data-abc="true">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php
    $query = "SELECT * FROM card";
    $retval = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($retval)) { ?>
    <div class="container mt-5 mb-5 ">
        <div class="d-flex ">
            <div class="col-md-11">
                <div class="row p-2 bg-white border rounded ">
                    <div class="col-md-3 mt-1 "><img class="img-fluid " src="./u/<?php echo $row['img']; ?>"></div>
                    <div class="col-md-6 mt-1">
                        <h5>
                            <?php echo $row["shirts"]; ?>
                        </h5>

                        <div class="d-flex flex-row ">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light
                                weight</span><span class="dot"></span><span>Best finish<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For
                                men</span><span class="dot"></span><span>Casual<br></span></div>
                        <p class="text-justify text-truncate para mb-0">
                            <?php echo $row["D_T"]; ?><br><br>
                        </p> 
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1 ">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$
                                <?php echo $row["new_p"]; ?>
                            </h4><span class="strike-text">$
                                <?php echo $row["old_p"]; ?>
                            </span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm"
                                type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2"
                                type="button">Add to wishlist</button></div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <?php

    }

    ?>
</body>

</html>