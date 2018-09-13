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
                            <div id="wowslider-container0">
                                <div class="ws_images">
                                    <ul>
                                        <li><img src="image/940379.jpg" alt="Mental Health Counseling" title="Mental Health Counseling" id="wows0_0" /></li>
                                        <li><a href="http://wowslider.net"><img src="motivational-hd-images.jpg" alt="image slider" title="Psychiatry, Psychology, Counseling, and Therapy" id="wows0_1"/></a></li>
                                        <li><img src="maxresdefault.jpg" alt="Counseling & Psychological Services" title="Counseling & Psychological Services" id="wows0_2" />
                                        </li>
                                        <li><img src="thumb-1920-168908.jpg" alt="Mental Health Counseling" title="Mental Health Counseling" id="wows0_0" /></li>

                                    </ul>
                                </div>
                                <!--
                            <div class="ws_bullets">
                                <div>
                                    <a href="#" title="Mental Health Counseling"><span><img src="image/940379.jpg" alt="Mental Health Counseling"/>1</span></a>
                                    <a href="#" title="Psychiatry, Psychology, Counseling, and Therapy"><span><img src="motivational-hd-images.jpg" alt="Psychiatry, Psychology, Counseling, and Therapy"/>2</span></a>
                                    <a href="#" title="Counseling & Psychological Services"><span><img src="maxresdefault.jpg" alt="Counseling & Psychological Services"/>3</span></a>
                                    <a href="#" title="Counseling & Psychological Services"><span><img src="thumb-1920-168908.jpg" alt="Counseling & Psychological Services"/>3</span></a>
                                </div>
                            </div>
-->
                                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css image gallery</a> by WOWSlider.com v8.8</div>
                                <div class="ws_shadow"></div>
                            </div>
                            <script type="text/javascript" src="engine0/wowslider.js"></script>
                            <script type="text/javascript" src="engine0/script.js"></script>
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
                    <div class="col-xs-12 col-sm-6 col-md-6 foot-widget" style="text-align: center;padding-top:100px;">
                        <address class="foot-address">
                            <div class="col-xs-12 no-pad"><i class="icon-globe address-icons"></i>18/F, Bir Uttam <br/>
                                Qazi Nuruzzaman Sarak,<br/>West Panthapath,Dhaka 1205
                            </div>
                            <div class="col-xs-12 no-pad">
                                <i class="icon-phone2 address-icons"></i>10616
                            </div>
                            <div class="col-xs-12 no-pad">
                                <i class="icon-mail address-icons"></i>loco@gmail.com
                            </div>
                        </address>
                    </div>

                    <!--Foot widget-->
                 
                    <!--Foot widget-->
                    <div class="col-xs-12 col-sm-6 col-md-6 foot-widget">
                        <div class="foot-widget-title" style="text-align: center">ABOUT LOCO</div>
                        <p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/n39sgqaVsZI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="container">

                    <div class="row final">
                       
                        <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom" style="padding-left: 57px;">
                            <p class="col-xs-12 col-md-12 no-pad">Copyright © 2018 loco Developed by debashish-raha-sakib-sadman</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
</body>

</html>
