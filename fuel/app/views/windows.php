
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    
    <?php echo Asset::css(array('Bootstrap.css','main.css','gridster.css')); ?>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300' rel='stylesheet' type='text/css'>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container">

      <div id="header" class="row">
        <div class="span3">
          <h1>Initialize... </h1>
        </div>
        <div class="span3 offset6">
          <div id="personal">
            <?php echo Asset::img('thumbnail.jpg', array('id' => 'mypic')); ?>
           
            <div id="name">
            <h2>Timothy</h2>
            <h4>Smith</h4>
            </div>

          </div>
        </div>
      </div>

      <div  class="row">
        <div class="gridster span12">
            <ul>
                <li data-row="1" data-col="1" data-sizex="1" data-sizey="1"></li>
                <li data-row="2" data-col="1" data-sizex="1" data-sizey="1"></li>
                <li data-row="3" data-col="1" data-sizex="1" data-sizey="1"></li>

                <li data-row="1" data-col="2" data-sizex="2" data-sizey="1"></li>
                <li data-row="2" data-col="2" data-sizex="2" data-sizey="2"> Blog Blog Blog</li>

                <li data-row="1" data-col="4" data-sizex="1" data-sizey="1"></li>
                <li data-row="2" data-col="4" data-sizex="2" data-sizey="1"></li>
                <li data-row="3" data-col="4" data-sizex="1" data-sizey="1"></li>

                <li data-row="1" data-col="5" data-sizex="1" data-sizey="1"></li>
                <li data-row="3" data-col="5" data-sizex="1" data-sizey="1"></li>

                <li data-row="1" data-col="6" data-sizex="1" data-sizey="1"></li>
                <li data-row="2" data-col="6" data-sizex="1" data-sizey="2"></li>
            </ul>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->
      <!-- Example row of columns -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <?php echo Asset::js(array('//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js','gridster.js','main.js')); ?>

  </body>
</html>
