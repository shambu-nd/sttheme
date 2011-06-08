<?php
// $Id: page.tpl.php,v 1.12.2.10 2009/04/25 06:42:27 hswong3i Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head profile="http://gmpg.org/xfn/11">
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if lt IE 7]>
    <?php print phptemplate_get_ie_styles(); ?>
  <![endif]-->
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body class="<?php print $body_classes ?>">
<div id="header-region" class="clear-block"><?php print $header ?></div>
<div id="wrapper"><!-- begin wrapper -->
<div id="container" class="clear-block"><!-- begin container -->
  <div id="header"><!-- begin header -->
    <?php if ($logo): ?><div id="logo"><a href="<?php print $front_page ?>" title="<?php print $site_name ?>"><img src="<?php print $logo ?>" alt="<?php print $site_name ?>" /></a></div><?php endif; ?>
    <div id="slogan-floater"><!-- begin slogan-floater -->

      <?php if ($site_slogan): ?><div class='site-slogan'><?php print $site_slogan ?></div><?php endif; ?>
    </div><!-- end slogan-floater -->
  </div><!-- end header -->

 <?php if (isset($primary_links)) : ?><!-- begin primary_links -->
  <?php print theme('nice_menu_primary_links', 'down');  ?>
<?php endif; ?><!-- end primary_links -->

  <?php if ($search_box): ?><div id="search-region" class="clear-block"><?php print $search_box; ?>

<style>
.sec-ul {
  list-style-type:none;
}
.sec-menu {
  float:left;
/*  background:url("http://10.102.152.31/d6/sites/all/themes/internet_services/images/menu-collapsed.gif") no-repeat scroll 0 0.35em transparent; */
  background:none;
  padding-left: 0px;
  padding-right: 10px;
  margin:0;
}
.sec-menu a {
  text-decoration:none;
  color:#E0691A;
}
</style>
<div style="clear:both;"></div>
<div style="float:left;margin-left:10px;">
<ul class="sec-ul">
  <li class="sec-menu"><a href="">&nbsp;&nbsp;Wiki</a></li>
  <li class="sec-menu"><a href="">&nbsp;&nbsp;Wiki</a></li>
  <li class="sec-menu"><a href="">&nbsp;&nbsp;Wiki</a></li>
  <li class="sec-menu"><a href="">&nbsp;&nbsp;Wiki</a></li>
</ul>
</div>
<div style="clear:both;"></div>

</div><?php endif; ?>

  <?php if ($mission): print '<div id="mission">'. phptemplate_mission() .'</div>'; endif; ?>
  <?php if ($left) { ?>
    <div id="sidebar-left" class="sidebar"><!-- begin sidebar-left -->
      <?php print $left ?>
    </div><!-- end sidebar-left -->
  <?php } ?>

  <div id="center"><div id="squeeze"><!-- begin center -->
    <div id="breadcrumb"><?php print $breadcrumb ?></div>
    <?php if ($title): print '<h2 class="title'. ($tabs ? ' with-tabs' : '') .'">'. $title .'</h2>'; endif; ?>
    <?php if ($tabs): print '<div class="tabs">'. $tabs .'</div>'; endif; ?>
    <?php if ($show_messages && $messages): print $messages; endif; ?>
    <?php print $help ?>
    <div class="clear-block">
      <?php print $content ?>
    </div>
    <?php print $feed_icons ?>
  </div></div><!-- end center -->
  <?php if ($right) { ?>
    <div id="sidebar-right" class="sidebar"><!-- begin sidebar-right -->
      <?php print $right ?>
    </div><!-- end sidebar-right -->
  <?php } ?>
##########
hello
########
  <div id="footer"><!-- start footer -->
    <?php print $footer_message ?>
    <?php print $footer ?>
  </div><!-- end footer -->
</div><!-- end wrapper -->
</div><!-- end container -->
<?php print $closure ?>
</body>
</html>
