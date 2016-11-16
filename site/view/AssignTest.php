<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


@session_start();

require_once(dirname(__FILE__) . "/../obiecte/User.php");
require_once(dirname(__FILE__) . "/../obiecte/Skill.php");
require_once(dirname(__FILE__) . "/../obiecte/Category.php");

$objUser = new User();
$objSkill = new Skill();
$objCategory = new Category();

if (!$objUser->usersAvailable()){
    header("Location: ../index.php");
    exit();
}
else{
    
    $allSkills = $objSkill->getAllSkill();
    $allCategory = $objCategory->getAllCategory();
    
}


?>
<html lang="en"> 
    <head>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
        <script src="/http://code.jquery.com/ui/1.10.2/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <script>
         $(function(){
             $("#candidate").autocomplete({
                 source: 'search.php'
             });
         });
  
        </script>
        <!-- Finish -->
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        
        <title>ACI Dashboard</title>         
               
        <link href="/ACI-SITE/dist/css/bootstrap.min.css" rel="stylesheet"> 
        
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
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-sm-3 col-md-2 sidebar"> 
                    <ul class="nav nav-sidebar"> 
                        <li class="active">
                            <a href="/ACI-SITE/site/view/CreateAccount.php">Assign test</a>
                            <span class="sr-only">(current)</span>
                        </li>                         
                                         
                        <li>
                            <a href="/ACI-SITE/site/view/AssignTest.php"></a>
                        </li>                         
                    </ul>                     
                </div>                 
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
                    <form class="form-horizontal"> 
                        <form class="form-horizontal"> 
                            <fieldset> 
                                
                               <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Assign test</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="first_name">Name</label>  
  <div class="col-md-4">
      <input type="text" name="candidate" id="candidate" class="form-control" autocomplete="on" placeholder="Candidate Name" onclick="function(this);">
  </div>
</div>
<script type="text/javascript" src="/ACI-SITE/dist/js/jquery-3.1.1.min.js"></script>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="categorie">Category</label>
  <div class="col-md-4">
  
      <select id="categorie" onchange="$.post('getSkills.php',{categ: $('#categorie').val()},function(response){   $('#skilluri').val(response);   });" name="categorie" class="form-control">
      <?php foreach($allCategory as $category){
    ?>
                    <option name="<?php echo $category['name'];?>"value="<?php echo $category['name'];?>"><?php echo $category['name'];
                    
                            }
?>
                        </option>
    </select>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="skilluri">Skills</label>
  <div class="col-md-4">
       <!-- aici ce am copiat in notepad -->
    <textarea id="skilluri" name="skilluri" class="form-control" multiple="multiple" rows="5">
     

      
    </textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="intrebari">Number of questions</label>  
  <div class="col-md-4">
  <input id="intrebari" name="intrebari" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="timp">Time</label>  
  <div class="col-md-4">
  <input id="timp" name="timp" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="asign"></label>
  <div class="col-md-4">
    <button id="asign" name="asign" class="btn btn-default">Assign Test</button>
  </div>
</div>

</fieldset>
</form>
                         
                </div>                               
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                 
                <script src="../../dist/js/bootstrap.min.js"></script>                               
    </body>  
  
</html>