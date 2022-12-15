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
    <link rel="stylesheet" href="css/flowers.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="js/script.js"></script>
    <title>Crimson Cross Florists! flowers</title>
</head>
<body>
    <div class = "container-fluid">
                                                            <!-- Header Section -->
        <?php require_once("header.php"); ?>
        
                                                            <!-- Welcome Section -->
        <section class = "section welcome-section">
            <div class = "container jumbotron fade-in">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class = "page-title">Crimson <span style="color:blue">Flowers</span></h1>
                        <p class = "text">
                            Flowers give us happiness with their positive vibes, make us feel relieved, help us reach a meditative state of mind when we mdell them
                        </p>
                        <div class = "flowerNav">
                            <a href = "#pages">
                            <label class = "btn btn-danger" onclick="loadSlide('natural')">Natural</label>
                            <label class = "btn btn-danger" onclick="loadSlide('artificial')">Artificial</label>
                            <label class = "btn btn-danger" onclick="loadSlide('dry')">Dry</label>
                            <label class = "btn btn-danger" onclick="loadSlide('others')">Others</label>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class = "image-1">
                            <img src = "images/flowers/flower_gallery/natural1.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container section"><h1 id = "pages"></h1></div>


        <div class = "content-holder">
            <section class = "section natural">
                <h1 class = "h1 container" style="margin-bottom: 2%;">
                    Natural Flowers 
                    <span class="next-container" onclick = "showNext('natural', 'artificial')">
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                    </span>
                </h1>
                <div class="container-fluid">
                    <div class="row">
                        <div style = "height:500px; padding:0;" class="col-md-6 main-flower">
                        <div class = "inner">
                                <img src="images/flowers/flower_gallery/2.jpg" alt="" srcset="">
                        </div>
                        </div>
                        <div style = "height:500px; padding:0;" class="col-md-6">
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/1.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/3.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/4.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px ; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/5.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class = "section artificial">
                <h1 class = "h1 container" style="margin-bottom: 2%;">
                    Artificial Flowers
                    <span class="next-container" onclick = "showNext('artificial', 'dry')">
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                    </span>
                </h1>
                <div class="container-fluid">
                    <div class="row">
                        <div style = "height:500px; padding:0;" class="col-md-6 main-flower">
                        <div class = "inner">
                                <img src="images/flowers/flower_gallery/7.jpg" alt="" srcset="">
                        </div>
                        </div>
                        <div style = "height:500px; padding:0;" class="col-md-6">
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/6.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/8.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/9.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px ; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/10.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class = "section dry">
                <h1 class = "h1 container" style="margin-bottom: 2%;">
                    Dry Flowers
                    <span class="next-container" onclick = "showNext('dry', 'others')">
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                    </span>
                </h1>
                <div class="container-fluid">
                    <div class="row">
                        <div style = "height:500px; padding:0;" class="col-md-6 main-flower">
                        <div class = "inner">
                                <img src="images/flowers/flower_gallery/7.jpg" alt="" srcset="">
                        </div>
                        </div>
                        <div style = "height:500px; padding:0;" class="col-md-6">
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/6.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/8.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/9.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px ; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/10.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class = "section others">
                <h1 class = "h1 container" style="margin-bottom: 2%;">
                    Other Flowers
                    <span class="next-container" onclick = "showNext('others', 'natural')">
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                        <span class = 'next'><i class = "fas fa-chevron-right"></i></span>
                    </span>
                </h1>
                <div class="container-fluid">
                    <div class="row">
                        <div style = "height:500px; padding:0;" class="col-md-6 main-flower">
                        <div class = "inner">
                                <img src="images/flowers/flower_gallery/7.jpg" alt="" srcset="">
                        </div>
                        </div>
                        <div style = "height:500px; padding:0;" class="col-md-6">
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/6.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/8.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div style = "height:250px; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/9.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div style = "height:250px ; padding:0;" class="col-md-6">
                                    <div class = "inner">
                                        <img src="images/flowers/flower_gallery/10.jpg" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>    
    </div>
</body>
</html>