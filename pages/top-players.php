<!DOCTYPE html>
<!--
  ~ Copyright (c) Develop Gravity and Lolmewn 2013. All Rights Reserved.
  -->

<html>
<head>
  <title>Fluid MC Stats - Top Players</title>
  <!-- TODO: Change title dynamicly and replace Fluid MC Stats with $site_name from config.php. -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <!-- TODO: Keep correct paths but local links to avoid XSS -->
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

  <!-- Mobile -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../index.html"><i class="fa fa-plus"></i> Fluid MC Stats</a>
    <!-- TODO: Change Fluid MC Stats to $site_name from config.php -->
    <!-- TODO: Change fa-plus to $fa_icon from config.php -->
  </div>
  <!-- /Mobile -->

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="../index.html"><i class="fa fa-home"></i> Home</a></li>
      <!-- TODO: Apply class active to li when page is current -->
      <li><a href="server-stats.html"><i class="fa fa-hdd-o"></i> Server Stats</a></li>
      <li class="active"><a href="top-players.html"><i class="fa fa-bar-chart-o"></i> Top Players</a></li>
      <li><a href="player-list.html"><i class="fa fa-list"></i> Player List</a></li>
    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Player Name">
      </div>
      <button type="submit" class="btn btn-default">Find <i class="fa fa-chevron-right"></i></button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-link"></i> Links <b
          class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Not setup...</a></li>
          <!-- TODO: Links from $custom_links configuration file need to go here. -->
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- /Navbar -->

<!-- Location -->
<div class="container content-container">
  <div class="hidden-sm">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <ol class="breadcrumb">
          <li><a href="../index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="active"><i class="fa fa-bar-chart-o"></i> Top Players</li>
          <!-- TODO: Apply class active to li when page is current -->
        </ol>
      </div>
    </div>
  </div>
  <!-- /Location -->

  <!-- Content -->
  <div class="row">
    <!-- Main Content -->
    <div class="col-md-6 col-md-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Top Players</h3>
        </div>
        <div class="panel-body">
          <!-- <div class="alert alert-danger">
              <p><strong><i class="fa fa-exclamation-triangle"></i> Fatal:</strong> Configuration was not
                  setup
                  correctly. Possibly you did not set Fluid MC Stats up?</p>
          </div> -->
          <!-- TODO: Make this error only visible when the config is incorrect or missing -->
          <p>These are users with current top rankings on the server.</p>

          <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
              <!-- TODO: Unit conversions + Plural wording + Rounding to nearest tenth for all units & words. -->
              <thead>
              <tr>
                <th>Rank</th>
                <th>Player</th>
                <th>Playtime</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <th>&num;1</th>
                <td><a href="player.html"><img src="http://mctar.polardrafting.com/Zachary_DuBois/16" class="img-circle avatar-list-icon"> Zachary_DuBois</a></td>
                <td>1Wk 1Dy 1H 11Mn 13S</td>
              </tr>
              <tr>
                <th>&num;2</th>
                <td><a href="player.html"><img src="http://mctar.polardrafting.com/Lolmewn/16" class="img-circle avatar-list-icon"> Lolmewn</a></td>
                <td>1Wk 0Dy 7H 34Mn 54S</td>
              </tr>
              <tr>
                <th>&num;3</th>
                <td><a href="player.html"><img src="http://mctar.polardrafting.com/SomeGuy/16" class="img-circle avatar-list-icon"> SomeGuy</a></td>
                <td>6Dy 2H 52Mn 21S</td>
              </tr>
              <tr>
                <th>&num;4</th>
                <td><a href="player.html"><img src="http://mctar.polardrafting.com/AnotherGuy/16" class="img-circle avatar-list-icon"> AnotherGuy</a></td>
                <td>4Dy 9H 29Mn 2S</td>
              </tr>
              <tr>
                <th>&num;5</th>
                <td><a href="player.html"><img src="http://mctar.polardrafting.com/ThisCoolDude/16" class="img-circle avatar-list-icon"> ThisCoolDude</a></td>
                <td>4Dy 11H 59Mn 11S</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="panel-footer">
          <em>Last Generated: 18-12-13 10:32pm EDT</em>
          <!-- TODO: Make caching and auto regeneration of this page to avoid the slowness. -->
        </div>
      </div>
    </div>
    <!-- /Main Content -->

    <!-- Sidebar -->
    <div class="col-md-3 col-md-offset-1">

      <!-- Server Status -->
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Server Status</h3>
          <!-- TODO: Change based on server status -->
        </div>
        <div class="panel-body">
          <h3 class="mc-unknown"><i class="fa fa-question-circle"></i> Unknown</h3>
          <hr>
          <p><strong>Name:</strong> Example server</p>
          <!-- TODO: Replace server name with $server_name from config.php -->

          <p><strong>IP:</strong> mc.example.com</p>
          <!-- TODO: Replace IP with $mc_server_disp_addr from config.php -->

          <p><strong>Players:</strong> ?/?</p> <!-- TODO: Dynamic player count -->

          <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                 aria-valuemax="100" style="width: 100%">
              <!-- TODO: Change value to reflect current online players -->
              <span class="sr-only">100% Complete</span>
            </div>
          </div>
        </div>
      </div>
      <!-- /Server Status -->

      <!-- Quick Links -->
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-link"></i> Quick Links</h3>
        </div>
        <div class="panel-body">
          <div class="list-group">
            <a href="../index.html" class="list-group-item"><i class="fa fa-home"></i> Home</a>
            <!-- TODO: Apply class active to li when page is current -->
            <a href="server-stats.html" class="list-group-item"><i class="fa fa-hdd-o"></i> Server Stats</a>
            <a href="top-players.html" class="list-group-item active"><i class="fa fa-bar-chart-o"></i> Top Players</a>
            <a href="player-list.html" class="list-group-item"><i class="fa fa-list"></i> Player List</a>
          </div>
          <div class="list-group">
            <a href="#" class="list-group-item">Not setup...</a>
            <!-- TODO: Links from $custom_links configuration file need to go here. -->
          </div>
        </div>
      </div>
      <!-- /Quick Links -->

    </div>
    <!-- /Sidebar -->

  </div>
  <!-- /Content -->

  <!-- Footer -->
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="well well-sm">
        <!-- TODO: User custom footer text will appear in 'Config defined text here' from config.php -->
        <p class="make-center">[Config defined text here] <i class="fa fa-info-circle"></i> Fluid MC Stats v0.0.1
          Pre-Alpha is &copy; Copyright <a href="http://developgravity.com/">Develop Gravity</a> and <a
            href="http://lolmewn.nl">Lolmewn</a>, 2013. All rights reserved.</p>
        <!-- DND: Keep this link here! This is copyrighted content -->
      </div>
    </div>
  </div>
</div>
<!-- /Footer -->

<!-- TODO: Keep correct paths but local links to avoid XSS -->
<script src="../js/jquery-2.0.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/highcharts.js"></script>
</body>
</html>
