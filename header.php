<head>
  <title><?php echo $page_name ?> - Onpon's Shelf</title>
  <meta name="description" content="onpon4's games, apps, and other works." />
  <meta name="keywords" content="onpon4, onpon, games, apps, free" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>

<body>
  <div id="main">

    <header>
      <div id="strapline">
        <div id="welcome_slogan">
          <h3>Onpon's <span>Shelf</span></h3>
        </div><!--close welcome_slogan-->
      </div><!--close strapline-->      
      <nav>
        <div id="menubar">
          <ul id="nav">
            <li<?php if($page == 'Home'){echo ' class="current"';} ?>><a href="/">Home</a></li>
            <li<?php if($page == 'About'){echo ' class="current"';} ?>><a href="/about/">About</a></li>
            <li<?php if($page == 'Games'){echo ' class="current"';} ?>><a href="/games/">Games</a></li>
            <li<?php if($page == 'Apps'){echo ' class="current"';} ?>><a href="/apps/">Apps</a></li>
            <li<?php if($page == 'Other'){echo ' class="current"';} ?>><a href="/other/">Other Works</a></li>
            <li<?php if($page == 'Contact'){echo ' class="current"';} ?>><a href="/contact/">Contact</a></li>
            <li<?php if($page == 'Links'){echo ' class="current"';} ?>><a href="/links/">Links</a></li>
          </ul>
        </div><!--close menubar-->
      </nav>
    </header>
    <div id="site_content">
      <div class="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>About</h2>
            <p>I'm onpon4, a programmer and free/libre software advocate.</p>
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Email: <a href="mailto:onpon4@riseup.net">onpon4@riseup.net</a></p>
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
      </div><!--close sidebar_container-->

      <div id="content">
