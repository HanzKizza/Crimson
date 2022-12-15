<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="js/script.js"></script>
    <title>Crimson Cross Florists</title>
</head>
<body>

                                                         <!-- Header Section -->
    <?php require_once("header.php"); ?>

                                                         <!-- Welcome Section -->
    <section class = "section welcome-section">
        <div class = "container jumbotron fade-in">
            <div class="row">
                <div class="col-md-6">
                    <h1 style = "font-family:cursive">Make Your <span style="color:blue">World</span> Colorfull</h1>
                    <p class = "text text-muted">Where Flowers are our inspiration to create memories. Whatever the occation, our flowers will make it beautiful and Memorable</p>
                    <div class="">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <ul class="nav navbar-left" id = "myNav2">
                                <li><a href="#">Flowers</a></li>
                                <li><a href="#">Pots</a></li>
                                <li><a href="#">Stands</a></li>
                                <li><a href="#">Compound Designs</a></li>
                                <li><a href="#">Gifts, Pictures, Msc</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                </div>
                <div class="col-md-6">
                    <div class = "image-1">
                        <img src = "images/landingpage/eight.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class = "section">
        <div class="container">
            <h3 class = "text-danger">Crimson Flowers</h3>
            <div class="row flowers">
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/flowers/natural1.jpg');"></div>
                    <h5 class = "text-center text-danger">Natural Flowers </h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card"  style="background-image: url('images/flowers/artificial1.jpg');"></div>
                    <h5 class = "text-center text-danger" >Artificial Flowers</h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card"></div>
                    <h5 class = "text-center text-danger">Dry Flowers</h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card" style = "background-image: url('images/flowers/others.png');">See more...</div>
                    <h5 class = "text-center text-danger">Others</h5>
                </div>
            </div>
        </div>
    </section>


    <section class = "section">
        <div class="container">
            <h3 class = "text-danger">Crimson Pots</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/pots/plastic.jpg');"></div>
                    <h5 class = "text-center text-danger">Plastic Pots</h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/pots/concrete.jpg');"></div>
                    <h5 class = "text-center text-danger">Concrete Pots</h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/pots/ceramic.jpg');"></div>
                    <h5 class = "text-center text-danger">Ceramic Pots</h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/pots/others.jpg');">See more...</div>
                    <h5 class = "text-center text-danger">Others</h5>
                </div>
            </div>
        </div>
    </section>


    <section class = "section">
        <div class="container">
            <h3 class = "text-danger">Crimson Flower Stands and Hangings</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/stands/1.jpg');"></div>
                    <h5 class = "text-center text-danger"></h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/stands/2.jpg');"></div>
                    <h5 class = "text-center text-danger"></h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/stands/3.jpg');"></div>
                    <h5 class = "text-center text-danger"></h5>
                </div>
                <div class="col-md-3">
                    <div class="flower-card" style="background-image: url('images/stands/4.jpg');">See more...</div>
                    <h5 class = "text-center text-danger">Others</h5>
                </div>
            </div>
        </div>
    </section>


    <section class = "section">
        <div class="container">
            <h3 class = "text-danger">Compound Designing</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="flower-card" style="background-image: url('images/compound/1.jpg');"></div>
                </div>
                <div class="col-md-6">
                    <div class="flower-card" style="background-image: url('images/compound/3.jpg');"></div>
                </div>
            </div>
        </div>
    </section>

    <section class = "section">
        <div class="container">
            <h3 class = "text-danger">Gifts, Picture, and Other Miscellaneous objects</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="flower-card"></div>
                    <h5 class = "text text-center">Gifts</h5>
                </div>
                <div class="col-md-4">
                    <div class="flower-card"></div>
                    <h5 class = "text text-center">Picture</h5>
                </div>
                <div class="col-md-4">
                    <div class="flower-card">See more...</div>
                    <h5 class = "text text-center">Other, Msc</h5>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div><h5 class = "text-right text-danger">Copyright <i class = "fa fa-copyright"></i>crimsonflorists</h5></div>
    </section>
</body>
</html>