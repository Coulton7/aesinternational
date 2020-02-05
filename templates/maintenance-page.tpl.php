<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!--IE7 conditional stylesheet-->
<!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/aesseal_classic/css/ie7-and-down.css" />

<![endif]-->

  <?php print $scripts; ?>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="/sites/all/themes/aesbs337/js/maintenance-counter.js"></script>
</head>

<body class="<?php print $classes; ?>">

  <div class="container-fluid bannercontainer">
	   <div class="row bannerimage">

		     <div class="row waveupper row-eq-height">
			        <div class="col-sm-2 col-xs-2 fullscreen">
                <a title="<?php print t('Home'); ?>" class="logo-link" href="<?php print $front_page; ?>"></a>
                <?php if ($logo): ?>
						    <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                  <img src="	" alt="<?php print t('Home'); ?> " class="textlogo img-adaptive" alt="image responsive"/>
                </a>
					      <?php endif; ?>
			        </div>

              <div class="col-sm-10 col-xs-10 fullscreen">
                <div id="name-and-slogan">
                <?php if (!empty($site_name)): ?>
                  <h1 id="site-name">
                    <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                  </h1>
                <?php endif; ?>

                <?php if (!empty($site_slogan)): ?>
                  <div id="site-slogan"><?php print $site_slogan; ?></div>
                <?php endif; ?>
                </div> <!-- /name-and-slogan -->
              </div>
         </div> <!-- /logo-title -->

         <?php if (!empty($header)): ?>
           <div id="header-region">
             <?php print $header; ?>
           </div>
         <?php endif; ?>

     </div>
   </div> <!-- /header -->

   <div class="container-fluid" class="clearfix">
     <div class="row">
       <div class="col-sm-10 col-lg-8 col-sm-offset-1 col-lg-offset-2">
          <div id="main" class="column">
            <div id="main-squeeze">
              <div id="content">
                <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php if (!empty($messages)): print $messages; endif; ?>
                <div id="content-content" class="clearfix">
                  <?php print $content; ?>
                </div> <!-- /content-content -->
              </div> <!-- /content -->
            </div>
          </div> <!-- /main-squeeze /main -->
        </div> <!-- /container -->
      </div>
   </div>

   <div id="footer-wrapper">
     <div id="footer">
      <?php if (!empty($footer)): print $footer; endif; ?>
     </div> <!-- /footer -->
   </div> <!-- /footer-wrapper -->

</body>
