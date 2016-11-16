<?php
require_once(dirname(__FILE__) . "/../connectDB/config.php");
require_once(dirname(__FILE__) . "/../connectDB/dbConnect.php");

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>ACI Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="/ACI-SITE/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/ACI-SITE/dist/css/dashboard.css" rel="stylesheet">

  </head>

  <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="/ACI-SITE/dist/image/ACI-horiz-white-CMYK.png" alt=""  width="280" height="47"/>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a>Hello there </a></li>
			
            <li><a href="/ACI-SITE/site/signin/logout.php">Log Out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li><a href="/ACI-SITE/site/view/CreateAccount.php">Create Account</a></li>
            <li class="active"><a href="/ACI-SITE/site/view/Question.php">Question Options</a><span class="sr-only">(current)</span></li>
            <li ><a href="/ACI-SITE/site/view/AssignTest.php">Test Options</a></li>
            </ul>
</div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <form class="form-horizontal">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Modify existing question</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="searchinput">Search ID</label>
  <div class="col-md-4">
    <input id="searchinput" name="searchinput" placeholder="enter existing ID" class="form-control input-md" type="search">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-default">Find</button>
  </div>
</div>

</fieldset>
</form>

<fieldset>

<!-- Form Name -->
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add Question</legend>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Question Text</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Skill Level Selection</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Beginner</option>
      <option value="2">Medium</option>
      <option value="3">Great</option>
      <option value="4">Master</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Category</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Java</option>
      <option value="2">C++</option>
      <option value="3">C</option>
      <option value="4">Swift</option>
      <option value="5">Other</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Question Type</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Single choise</option>
      <option value="2">Multiple choise</option>
      <option value="3">Text</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Possible answers</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add Row</button>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script>window.jQuery || document.write(<script src="../../assets/js/vendor/jquery.min.js"></script>)</script>-->
    <script src="/ACI-SITE/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>
