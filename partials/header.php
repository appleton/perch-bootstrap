<!DOCTYPE html>
<html lang="en" dir="ltr"<?php
if(isset($page_id))   { echo ' id="' . $page_id . '"'; }
if(isset($page_class)){ echo ' class="' . $page_class . '"'; }
?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Andrew Appleton - http://floatleft.com">
  <title><?php if(isset($page_title)){
                echo $page_title . ' | ';
              } ?>Website Title'</title>

  <link rel="shortcut icon" href="/favicon.ico">

  <!-- Full stylesheet for everything above IE6 -->
  <!--[if ! lte IE 6]><!-->
    <link rel="stylesheet" href="/css/style.css?v=1" media="screen">
  <!--<![endif]-->

  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if lte IE 8]>
    <link rel="stylesheet" href="/css/ie8.css" media="screen, projection">
  <![endif]-->

  <!--[if lte IE 7]>
    <link rel="stylesheet" href="/css/ie7.css" media="screen, projection">
  <![endif]-->

  <!--[if lte IE 6]>
    <link rel="stylesheet" href="/css/ie6.css" media="screen, projection">
  <![endif]-->
</head>
<body>
<!--[if lte IE 6]>
  <p id="ie6-message">
    This site is built with HTML5 and CSS3 &mdash; modern web technologies which
    allow all sorts of cool things. You are running a very old version of
    Internet Explorer so unfortunately you get a rather low-fidelity version of
    the site. Maybe it's time to update, or better yet download
    <a href="http://www.google.com/chrome">Google Chrome</a>,
    <a href="http://www.apple.com/safari/">Safari</a>,
    <a href="http://www.mozilla-europe.org/en/firefox/">Firefox</a> or
    <a href="http://www.opera.com/download/">Opera</a>.
  </p>
<![endif]-->
<header role="banner">

</header>

