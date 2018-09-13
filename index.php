<?php include "indexBackend.php" ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
?>

<!DOCT.YPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/327project.css">
    <link rel="stylesheet" type="text/css" href="./css/posts.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Start WOWSlider.com HEAD section -->
    <!-- add to the <head> of your page -->
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="engine0/style.css" />
    <script type="text/javascript" src="engine0/jquery.js"></script>
    <script src="./js/jquery-3.3.1.min.js"></script>
    <!-- End WOWSlider.com HEAD section -->


</head>

<script type="text/javascript" src="js/TypingText.js">


</script>

<!-- JQuery Script to automatically refresh the page -->
<script>
    $(document).ready(function() {
        $("#existing-posts").load("./utils/getdata.php", {

        });
    });

</script>

<body class="ab">

    <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success">
        <h3>
            <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
    </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

    <form action="" method="post">
        <!-- header part start -->
        <div class="header">
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                                <img src="image/loco_icon.png" style="height:60px;">
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <!--
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" style="margin-left:695px;">
                                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>


                                <li><a href="#">Location</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Specialist</a></li>
                                <li><a href="javascript.html">Treatment</a></li>


                                <form class="navbar-form navbar-left">
                                    <button type="submit" class="btn btn-warning">log in</button>
                                </form>

                            </ul>
                        </div>
-->

                            <!-- Start WOWSlider.com BODY section -->
                            <!-- add to the <body> of your page -->


                            <script type="text/javascript">
                                //Specify the slider's width (in pixels)

                                var sliderwidth = "1297px"

                                //Specify the slider's height

                                var sliderheight = "400px"

                                //Specify the slider's slide speed (larger is faster 1-10)



                                var slidespeed = 6

                                //configure background color:

                                slidebgcolor = "#D6D3D6"



                                //Specify the slider's images

                                var leftrightslide = new Array()

                                var finalslide = ''



                                leftrightslide[1] = '<img src="images/11.jpg">'
                                leftrightslide[2] = '<img src="images/12.jpg"> </a>'
                                leftrightslide[6] = '<img src="images/13.jpg">'
                                leftrightslide[5] = '<img src="images/14.jpg">'
                                leftrightslide[0] = '<img src="images/15.jpg">'
                                leftrightslide[3] = '<img src="images/16.jpg">'
                                leftrightslide[4] = '<img src="images/17.jpg">'









                                //Specify gap between each image (use HTML):

                                var imagegap = " "



                                //Specify pixels gap between each slideshow rotation (use integer):

                                var slideshowgap = 5



                                ////NO NEED TO EDIT BELOW THIS LINE////////////



                                var copyspeed = slidespeed

                                leftrightslide = '<nobr>' + leftrightslide.join(imagegap) + '</nobr>'

                                var iedom = document.all || document.getElementById

                                if (iedom)

                                    document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">' + leftrightslide + '</span>')

                                var actualwidth = ''

                                var cross_slide, ns_slide



                                function fillup() {

                                    if (iedom) {

                                        cross_slide = document.getElementById ? document.getElementById("test2") : document.all.test2

                                        cross_slide2 = document.getElementById ? document.getElementById("test3") : document.all.test3

                                        cross_slide.innerHTML = cross_slide2.innerHTML = leftrightslide

                                        actualwidth = document.all ? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth

                                        cross_slide2.style.left = actualwidth + slideshowgap + "px"

                                    } else if (document.layers) {

                                        ns_slide = document.ns_slidemenu.document.ns_slidemenu2

                                        ns_slide2 = document.ns_slidemenu.document.ns_slidemenu3

                                        ns_slide.document.write(leftrightslide)

                                        ns_slide.document.close()

                                        actualwidth = ns_slide.document.width

                                        ns_slide2.left = actualwidth + slideshowgap

                                        ns_slide2.document.write(leftrightslide)

                                        ns_slide2.document.close()

                                    }

                                    lefttime = setInterval("slideleft()", 30)

                                }

                                window.onload = fillup



                                function slideleft() {

                                    if (iedom) {

                                        if (parseInt(cross_slide.style.left) > (actualwidth * (-1) + 8))

                                            cross_slide.style.left = parseInt(cross_slide.style.left) - copyspeed + "px"

                                        else

                                            cross_slide.style.left = parseInt(cross_slide2.style.left) + actualwidth + slideshowgap + "px"



                                        if (parseInt(cross_slide2.style.left) > (actualwidth * (-1) + 8))

                                            cross_slide2.style.left = parseInt(cross_slide2.style.left) - copyspeed + "px"

                                        else

                                            cross_slide2.style.left = parseInt(cross_slide.style.left) + actualwidth + slideshowgap + "px"



                                    } else if (document.layers) {

                                        if (ns_slide.left > (actualwidth * (-1) + 8))

                                            ns_slide.left -= copyspeed

                                        else

                                            ns_slide.left = ns_slide2.left + actualwidth + slideshowgap



                                        if (ns_slide2.left > (actualwidth * (-1) + 8))

                                            ns_slide2.left -= copyspeed

                                        else

                                            ns_slide2.left = ns_slide.left + actualwidth + slideshowgap

                                    }

                                }

                                if (iedom || document.layers) {
                                    with(document) {

                                        document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')

                                        if (iedom) {

                                            write('<div style="position:relative;width:' + sliderwidth + ';height:' + sliderheight + ';overflow:hidden">')

                                            write('<div style="position:absolute;width:' + sliderwidth + ';height:' + sliderheight + ';background-color:' + slidebgcolor + '" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')

                                            write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')

                                            write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')

                                            write('</div></div>')

                                        } else if (document.layers) {

                                            write('<ilayer width=' + sliderwidth + ' height=' + sliderheight + ' name="ns_slidemenu" bgColor=' + slidebgcolor + '>')

                                            write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')

                                            write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')

                                            write('</ilayer>')

                                        }

                                        document.write('</td></table>')

                                    }
                                }

                            </script>


                            <!-- End WOWSlider.com BODY section -->
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
        <!-- header part end -->




        <!-- about us post start -->
        <div class="about" style="background-color: white;height: 200px;">

            <h1 style="text-align: center;font-family:sans-serif;">About LOCO</h1>

            <div id="example1" style="font-family: monospace;text-align: center;color: #800000;font-size: 18px;"><b>Welcome to loco <a href="#">FAcebook!</a> 
We are here to solve your deepest and darkest problems while keeping your privacy in discretion.</div>

<p id="example2" style="font-family: monospace; color: #330000;padding-left: 40px;text-align: center;">You can post your problems here and seek for solutions.<b> Also, you can help others solve their problems. <b><br/>We, here at loco aim to provide you a better life in the most advanced way possible.</p>

<script type="text/javascript">
//Define first typing example:
new TypingText(document.getElementById("example1"));

//Define second typing example (use "slashing" cursor at the end):
new TypingText(document.getElementById("example2"), 100, function(i){ var ar = new Array("\\", "|", "/", "-"); return " " + ar[i.length % ar.length]; });

//Type out examples:
TypingText.runAll();
</script>
</div>

<!-- about us post end -->
        
        

        <!--    catagory section start-->

        <input type="button" value="Short Films" onclick="window.location.href='shortFilms.html'" />
        <input type="button" value="Quotes" onclick="window.location.href='https://motivationping.com/quotes/'" />
        <input type="button" value="Real Life Stories" onclick="window.location.href='https://www.youtube.com/channel/UC0lBfbHiAQBUPDX41BrlRiQ'" />
        <input type="button" value="Songs" onclick="window.location.href='songs.html'" />
        <input type="button" value="Movies" onclick="window.location.href='https://www.imdb.com/list/ls069754038/'" />
        <input type="button" value="Interviews" onclick="window.location.href='interview.html'" />

        <!--    <input type="button" value="Log In" onclick="window.location.href='http://www.hyperlinkcode.com/button-links.php'" />-->

        <!--
    <button type="submit" class="btn btn-warning" style="color:white;margin-top: -13px;font-size: 22px;
    padding-top: 9px;padding-top: 9px;">log in</button>
-->
        <a href="login.php" style="
    background-color: azure;
    font-size: 33px;
    font-family: monospace;
">  Log In  </a>




        <!-- section end -->


        <!-- comment section start -->

        <section class="comment">
            <div class="row" style="  background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);   /*background-color: cadetblue*/;height: 376px;    margin-left: 40px;
    margin-right: 40px;">
                <h1 style="    color: navy;font-style: italic;text-align: center;">Write a Post</h1>
                <textarea name="message" placeholder="Write Post Here" style="height: 192px;
               margin-left: 132px;
               width: 1003px;"></textarea>

                <input type="submit" value="posts" style="color: cyan;
        background-color: darkblue;
        margin-top: 32px;
        margin-left: 42%;" />
            </div>

            <!-- shows existing posts from database on page load or upon submission of new post -->
            <div id="existing-posts">

            </div>

        </section>

        <!-- comment section start -->
        <!--    catagory section end-->
        <!--    background image section start-->
        <h1 style="font-size: 49px;
    color: white;
    text-align: center;">Team Member</h1>
        <div class="container-fluid jhoom">
            <!--    background image section end-->
            <!--team member start-->
            <div class="row idoits">

                <!--       1st picture-->
                <div class="col-xm-6 col-sm-6 col-md-3 colum1">
                    <div class="images1">
                        <img src="team/sakib.png">
                    </div>
                    <div class="some1">
                        <h3 style="background-color: black;
                        width: 220px;
                        text-align: center;
                        border-radius: 5px;
                        border-style: dashed;">sakib Ahmed</h3>
                    </div>
                </div>

                <!--          --2nd picture------->
                <div class="col-xm-6 col-sm-6 col-md-3 colum1">
                    <div class="images1">
                        <img src="team/raha.png">
                    </div>
                    <div class="some1">
                        <h3 style="background-color: black;
                        width: 260px;
                        text-align: center;
                        border-radius: 5px;
                        border-style: dashed;">Mayamin Hamid Raha</h3>
                    </div>
                </div>

                <!--        -----------3rd picture------------>
                <div class="col-xm-6 col-sm-6 col-md-3 colum1">
                    <div class="images1">
                        <img src="team/debashish.png">
                    </div>
                    <div class="some1">
                        <h3 style="background-color: black;
                        width: 220px;
                        text-align: center;
                        border-radius: 5px;
                        border-style: dashed;">Debashish Paul</h3>
                    </div>
                </div>

                <div class="col-xm-6 col-sm-6 col-md-3 colum1">
                    <div class="images1">
                        <img src="team/sadman.png">
                    </div>
                    <div class="some1">
                        <h3 style="background-color: black;
                        width: 220px;
                        text-align: center;
                        border-radius: 5px;
                        border-style: dashed;">Shadman S. Khan</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--team member end-->


        <!--    footer part start-->
        <!--    footer part end-->
        <section class="complete-footer">


            <div class="container">
                <div class="row">
                    <!--Foot widget-->
                   

                    <!--Foot widget-->
                 
                    <!--Foot widget-->
                    <div class="col-xs-12 col-sm-12 col-md-12 foot-widget">
                        <div class="foot-widget-title" style="text-align: center">ABOUT LOCO</div>
                        <p style="padding-left: 300px;">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/n39sgqaVsZI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="container">

                    <div class="row final">
                       
                        <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom" style="padding-left: 57px;">
                            <p class="col-xs-12 col-md-12 no-pad">Copyright © 2018 loco Developed by debashish-raha-sakib-shadman</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
</body>

</html>
