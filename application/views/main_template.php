<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?=$home_title?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv='expires' content='-1' />
    <meta http-equiv= 'pragma' content='no-cache' />
    <meta name='robots' content='all' />

    <link rel="shortcut icon" href="<?=base_url()?>/img/favicon.ico" type="image/x-ico; charset=binary" />
    <link rel="icon" href="<?=base_url()?>/img/favicon.ico" type="image/x-ico; charset=binary" />

    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>css/style.css" media="all" rel="stylesheet"/>
    <link href="<?=base_url()?>css/theme.bootstrap.css" media="all" rel="stylesheet"/>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url()?>"><?=$header_title?></a>
          </div>
          <div class="collapse navbar-collapse">
            <?=$navigation?>
          </div><!--/.nav-collapse -->
        </div>
      </div>


      <div class="container">
        <?=$main_content?>
      </div>
    </div><!--/.wrap -->

    <div id="footer">
      <div class="container">
        <?=$footer?>
      </div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.tablesorter.widgets.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/functions.js"></script>
  </body>
</html>