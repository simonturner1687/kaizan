<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Are your lottery numbers really lucky? If you played every single lottery with the same numbers how much would you have won? "/>
    <meta property="og:locale" content="en_gb" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Would you have ever won a jackpot with your lottery numbers?" />
    <meta property="og:description" content=" Are your lottery numbers really lucky? If you played every single lottery with the same numbers, how much would you have won?" />
    <meta property="og:url" content="http://www.mrgamez.com/lottery-calculator/" />
    <meta property="og:site_name" content="Would You Have Ever Won The Lottery ?" />
    <meta property="article:publisher" content="https://www.facebook.com/mrgamezdotcom" />
    <meta property="og:image" content="http://www.mrgamez.com/lottery-calculator/img/opengraph.jpg" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@mrgamezdotcom"/>
    <meta name="twitter:domain" content="http://www.mrgamez.com/"/>
    <meta name="twitter:creator" content="@mrgamezdotcom"/>
    <meta name="twitter:title" content=" Would you have ever won a jackpot with your lottery numbers?">
    <meta name="twitter:description" content=" Are your lottery numbers really lucky? If you played every single lottery with the same numbers, how much would you have won?">
    <meta name="twitter:image" content="http://www.mrgamez.com/lottery-calculator/img/opengraph.jpg">
    
    <title>Lotto Results</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/tooltipster.css">
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
                    <span class="sep"></span>
                    <section id="section-two">
                        <h2>
                            <strong>Enter your lucky numbers</strong>
                        </h2>
                        <form id="LottoNumbers" method="post" novalidate="novalidate">
                            <ul class="list-inline numbers clearfix">
                                <li>
                                    <input type="number" class="form-control tooltipstered" name="number1" aria-required="true">
                                </li>
                                <li>
                                    <input type="number" class="form-control tooltipstered" name="number2" aria-required="true">
                                </li>
                                <li>
                                    <input type="number" class="form-control tooltipstered" name="number3" aria-required="true">
                                </li>
                                <li>
                                    <input type="number" class="form-control tooltipstered" name="number4" aria-required="true">
                                </li>
                                <li>
                                    <input type="number" class="form-control tooltipstered" name="number5" aria-required="true">
                                </li>
                                <li>
                                    <input type="number" class="form-control tooltipstered" name="number6" aria-required="true">
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-primary" name="button">Show me the money</button>
                        </form>
                    </section>
                </div>
                <div id="loader" style="display:none;">
                    <span class="sep"></span>
                    <section id="section-four">
                        <h2><strong>Calculating</strong></h2>
                        <div class="loader">54%</div>
                        <div class="row">
                            <div class="col-sm-9 col-centered">
                                <p>This might take a couple of minutes, we are looking over the past 20 years to find if you would have been as rich as kim kardashian's backside</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="response"></div>
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
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>