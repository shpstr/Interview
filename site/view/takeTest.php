
<!doctype html> 
<html lang="en"> 
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
      <link href="/ACI-SITE/dist/css/bootstrap-slider.min.css" rel="stylesheet">
        <link href="ACI-SITE/dist/css/bootstrap-slider.css" rel="stylesheet">
        <script src="ACI-SITE/dist/js/bootstrap-slider.js"></script>
        <script src="/ACI-SITE/dist/js/bootstrap-slider.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="//www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet">
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->         
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <link rel="icon" href="../../favicon.ico"> 
        <title>ACI Dashboard</title>         
        <!-- Bootstrap core CSS -->         
        <link href="/ACI-SITE/dist/css/bootstrap.min.css" rel="stylesheet"> 
      
		
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->         
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="/ACI-SITE/dist/css/dashboard.css" rel="stylesheet"> 
        <!-- Just for debugging purposes. Dont actually copy these 2 lines! -->         
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->         
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>         
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->         
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->         
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
                    <img src="/ACI-SITE/dist/image/ACI-horiz-white-CMYK.png" alt="" width="280" height="47" /> 
                </div>                 
                <div id="navbar" class="navbar-collapse collapse"> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <li> 
                            <a>Hello there</a> 
                        </li>                         
                        <li> 
                            <a href="/ACI-SITE/site/signin/logout.php">Log Out</a> 
                        </li>                         
                    </ul>                     
                    <form class="navbar-form navbar-right"> 
                        <input type="text" class="form-control" placeholder="Search..."> 
                    </form>                     
                </div>                 
            </div>             
        </nav>         
         
                <!--Div start-->
                <body class="fuelux">
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="//www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet">
              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
              <script src="../script/additional.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script>
<script src="//cdn.jsdelivr.net/requirejs/2.1.11/require.js"></script>


                         <div class="wizard" data-initialize="wizard" id="myWizard" >
<div class="steps-container">
	<ul class="steps">
		<li data-step="1" data-name="campaign" class="active">
			<span class="badge">1</span>Category selection
			<span class="chevron"></span>
		</li>
		<li data-step="2">
			<span class="badge">2</span>Skill selection
			<span class="chevron"></span>
		</li>
        <li data-step="3" data-name="template">
			<span class="badge">3</span>Confirm selection
			<span class="chevron"></span>
		</li>
	</ul>
</div>
<div class="actions">
	<button type="button" class="btn btn-default btn-prev">
		<span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
	<button type="button" class="btn btn-primary btn-next" data-last="Complete">Next
		<span class="glyphicon glyphicon-arrow-right"></span>
	</button>
</div>
<div class="step-content">
	<div class="step-pane active sample-pane alert" data-step="1">
		<h4>Select Category</h4>
        
		<div class="col-md-3">
        
        <label class="btn categ">
        <span class="input-group-addon">
        <input type="checkbox" aria-label="...">
        </span>
        <img src="http://blog.newrelic.com/wp-content/uploads/java-logo.jpg" alt="JAVA" class="img-thumbnail img-check">
        <input type="checkbox" name="chk1" id="item1" value="java" class="hidden" autocomplete="off">
        </label></div>
		<div class="col-md-3">
        <label class="btn categ">
        <span class="input-group-addon">
        <input type="checkbox" aria-label="..."></span>
        <img src="https://ignite.apache.org/images/cpp.png" alt="..." class="img-thumbnail img-check">
        <input type="checkbox" name="chk2" id="item4" value="val2" class="hidden" autocomplete="off">
        </label></div>
		<div class="col-md-3">
        <label class="btn categ">
        <span class="input-group-addon">
        <input type="checkbox" aria-label="..."></span>
        <img src="https://cdn.fedoramagazine.org/wp-content/uploads/2015/11/Python_logo.png" alt="..." class="img-thumbnail img-check">
        <input type="checkbox" name="chk3" id="item4" value="val3" class="hidden" autocomplete="off">
        </label></div>
		<div class="col-md-3">
        <label class="btn categ" >
        <span class="input-group-addon" 	>
        <input type="checkbox" aria-label="KEKEKEE"></span>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Swift_logo_with_text.svg/2000px-Swift_logo_with_text.svg.png" alt="..." class="img-thumbnail img-check">
        <input type="checkbox" name="chk4" id="item4" value="val4" class="hidden" autocomplete="off">
        </label></div>


	</div>
	<div class="step-pane sample-pane bg-danger alert" data-step="2">
		<h4>Select Skill Level</h4>
        <script src="../dist/js/bootstrap-slider.js"></script>
		<link href="../dist/css/bootstrap-slider.css" rel="stylesheet">
        <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
<script>       // Instantiate a slider

// Without JQuery
var slider = new Slider("#ex1", {
	tooltip: 'always'
});
 </script>
 
	</div>
    <div class="step-pane sample-pane bg-info alert" data-step="3">
		<h4>Confirm Selections</h4>
		<p></p>
	</div>
</div>


</div>   
</body>
                  <!-- // Form^-->            
                            <!-- Form Name -->                                                          
                            <!-- Search input-->                             
                            <div class="form-group"> 
</div>                             
                            <!-- Button -->                             
                            <div class="form-group"> 
</div>                             
                        </fieldset>                         
                    </form>                     
                    <fieldset> 
                        <!-- Form Name -->                         
                        <form class="form-horizontal"> 
</form>                         
                </div>                 
                <!-- Bootstrap core JavaScript
    ================================================== -->                 
                <!-- Placed at the end of the document so the pages load faster -->                 
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                 
                <script>window.jQuery || document.write(<script src="../../assets/js/vendor/jquery.min.js")></script>                                                                                                                                                                                
            </script>             
            <script src="../../dist/js/bootstrap.min.js"></script>             
            <!-- Just to make our placeholder images work. Dont actually copy the next line! -->             
            <script src="../../assets/js/vendor/holder.min.js"></script>             
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->             
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>             
    </body>     
</html>