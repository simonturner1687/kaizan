<?php
include 'view/v_lotto.php';

$ball_1 = @$_POST['ball_1'];
$ball_2 = @$_POST['ball_2'];
$ball_3 = @$_POST['ball_3'];
$ball_4 = @$_POST['ball_4'];
$ball_5 = @$_POST['ball_5'];
$ball_6 = @$_POST['ball_6'];

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Are your lottery numbers really lucky? If you played every single lottery with the same numbers how much would you have won? "/>
    
    <title>Lotto Results</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div id="wrapper">

        <header id="header" class="clearfix">
            <div class="container-fluid">

            </div>
        </header>

        <div class="container">
            <div id="ticket">
                <header><img src="img/logo.png"></header>
                <section id="section-one">
                    <h2>Discover when you would have won the lottery and how much you would have won</h2>
                </section>
                <div id="main">

                    <?php 

                    $lotto = display_lotto($ball_1, $ball_2, $ball_3, $ball_4, $ball_5, $ball_6);
                    
                    ?>

                </div>

            <span class="sep"></span> 

            </div>
        </div>

        <footer id="footer">
            <div class="container">
                <a href="#"></a>
            </div>
        </footer>

        <span class="plane"><img src="img/airplane.png"></span>
        <span class="boat"><img src="img/boat.png"></span>
        <span class="jet"><img src="img/jet.png"></span>

        <div class="modal fade" id="embedModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <h2>Embed this on your website</h2>
                <textarea class="form-control">&lt;a href="http://www.mrgamez.com/lottery-calculator/" target="_blank"&gt;&lt;img src="http://www.mrgamez.com/lottery-calculator/img/embed.jpg" width="500" height="263"/&gt; &lt;/a&gt;&lt;br /&gt;&lt;span style="font-size: 12px;"&gt;&lt;a href="http://www.mrgamez.com/lottery-calculator/"&gt;View Interactive Version&lt;/a&gt; (via &lt;a href="http://www.mrgamez.com/"&gt;MrGamez Casino Games&lt;/a&gt;).&lt;/span&gt;</textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="shareModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <h2>Share it with your friends!</h2>
                <div class="social-share"></div>
              </div>
            </div>
          </div>
        </div>

    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.min.js"></script>

  </body>
</html>