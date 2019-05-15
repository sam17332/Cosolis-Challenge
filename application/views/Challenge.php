<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->helper('form');
?>
<!--<form action="http://localhost:8888/Cosolis/" method="post" accept-charset="utf-8">
< form_open("/Cosolis")?>
-->
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Challenge Cosolis</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- Tabs style -->
  <link rel="stylesheet" href="assets/css/tabs.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a  class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Coso</b>lis</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a  class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="assets/dist/img/avatar04.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Rodrigo Samayoa</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="assets/dist/img/avatar04.png" class="img-circle" alt="User Image">
                <p>
                  Rodrigo Samayoa
                </p>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rodrigo Samayoa</p>
          <!-- Status -->
          <a><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Cosolis Challenge 2019</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a ><i class="fa fa-link"></i> <span>Challenge</span></a></li>
      </ul>
    </section>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        Challenge
      </h2>
    </section> 
    <!-- Main content -->
    <section class="content container-fluid">
      <!-- Content -->
      <div style="background-color:white;color:black;">
        <div class="tab">
          <button class="tablinks" onclick="openTab(event, 'cat1')" id="defaultOpen">JUGADOR</button>
          <button class="tablinks" onclick="openTab(event, 'cat2')">PARTIDOS</button>
        </div>
        <form method="post" action="index.php/Welcome/recibir" >
        <!--<form method="post" action="/Cosolis" action="index.php/Welcome/recibir" >-->
          <div id="cat1" class="tabcontent">
          <br>
          <div class="form-group col-lg-8">
            <label>Nombres:</label> 
            <input type="text" name="nombres" size="41" placeholder="Ingrese sus nombres">
          </div>
            <br>
            <br>
            <div class="form-group col-lg-8">
              <label>Apellidos:</label> 
              <input type="text" name="apellidos" size="41" placeholder="Ingrese sus apellidos">
            </div>
            <br>
            <br>
            <div class="form-group col-lg-8">
              <label>Apodo:</label>
              <input type="text" name="apodo" size="44" placeholder="Ingrese su apodo">
            </div>
            <br>
            <br>
            <div class="form-group col-lg-8">
              <label>Fecha de nacimiento:</label>
              <input type="date" name="fecha" size="28" placeholder="AAAA-MM-DD">
            </div>
            <br>
            <br>
            <div class="form-group col-lg-8">
              <label>Talla de camiseta:</label>
              <input type="text" name="talla" size="32" placeholder="Talla de camiseta(S, M, L, XL)">
            </div>
            <div class="clearfix"></div>
            <input type="submit" class="btn btn-primary" name="" value="Enviar">
          </div>
        </form>
        
        <form method="post" action="index.php/Welcome/recibir1">
          <div id="cat2" class="tabcontent">
            <br>      
            <div class="form-group col-lg-8">
              <label>Fecha del partido:</label>
              <input type="date" name="fechaP" size="12" placeholder="AAAA-MM-DD">
            </div>
            <br>
            <div class="form-group col-lg-8">
              <label>Hora de inicio:</label>
              <input type="time" name="horaI" size="16" placeholder="HH:MM">
            </div>
            <br>
            <div class="form-group col-lg-8">
              <label>Hora de finalización:</label>
              <input type="time" name="horaF" size="10" placeholder="HH:MM">
            </div>
            <br>
            <div class="form-group col-lg-8">
            <input type="radio" name="resultado" value="1"> Se gano <br>
            <input type="radio" name="resultado" value="0"> Se perdio
            </div>
            <br>
            <div class="clearfix"></div>
            <input type="submit" class="btn btn-primary" name="" value="Enviar">
          </div>
        </form>
      </div>
    </section>
  </div>
</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

<script>
          function openTab(evt, tabName)
          {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
          }
          document.getElementById("defaultOpen").click();
</script>

</body>
</html>

