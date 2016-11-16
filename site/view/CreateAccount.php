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
                            <a>Hello there,</a>
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
                            <a href="/ACI-SITE/site/view/CreateAccount.php">Create Account</a>
                            <span class="sr-only">(current)</span>
                        </li>                         
                        <li>
                            <a href="/ACI-SITE/site/view/Question.php">Question Options</a>
                        </li>                         
                        <li>
                            <a href="/ACI-SITE/site/view/AssignTest.php">Test Options</a>
                        </li>                         
                    </ul>                     
                </div>                 
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
                    <form class="form-horizontal"> 
                        <form class="form-horizontal"> 
                            <fieldset> 
                                <?php
if (isset($_POST['username'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$mail = $_POST['mail'];
		$role_id = $_POST['role_id'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$mail = stripslashes($email);
		$mail = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		$first_name = stripslashes($first_name);
		$first_name =mysql_real_escape_string($first_name);
		$last_name = stripslashes($last_name);
		$last_name =mysql_real_escape_string($last_name);
		$role_id = stripslashes($role_id);
		$role_id =mysql_real_escape_string($role_id);
		
		
        $query = "INSERT INTO 'user'('id', 'username', 'password', 'first_name', 'last_name', 'mail', 'role_id', 'cv') VALUES (NULL,'$username' ,'$password','$first_name','$last_name','$mail','$role_id', NULL))";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
?> 
                                <!-- Form Name -->                                 
                                <form class="form-horizontal" name="register" action="" method="post"> 
                                    <fieldset> 
                                        <!-- Form Name -->                                         
                                        <legend>Create Account</legend>                                         
                                        <!-- Text input-->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="textinput">Username</label>                                             
                                            <div class="col-md-4"> 
                                                <input id="textinput" name="username" placeholder="" class="form-control input-md" type="text"> 
                                            </div>                                             
                                        </div>                                         
                                        <!-- Text input-->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="textinput">First name</label>                                             
                                            <div class="col-md-4"> 
                                                <input id="textinput" name="first_name" placeholder="" class="form-control input-md" type="text"> 
                                            </div>                                             
                                        </div>                                         
                                        <!-- Text input-->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="textinput">Last name</label>                                             
                                            <div class="col-md-4"> 
                                                <input id="textinput" name="last_name" placeholder="" class="form-control input-md" type="text"> 
                                            </div>                                             
                                        </div>                                         
                                        <!-- Text input-->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="textinput">E-mail</label>                                             
                                            <div class="col-md-4"> 
                                                <input id="textinput" name="mail" placeholder="" class="form-control input-md" type="text"> 
                                            </div>                                             
                                        </div>                                         
                                        <!-- Password input-->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="passwordinput">Password </label>                                             
                                            <div class="col-md-4"> 
                                                <input id="passwordinput" name="password" placeholder="" class="form-control input-md" type="password"> 
                                            </div>                                             
                                        </div>                                         
                                        <!-- Password input-->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="passwordinput">Confirm Password </label>                                             
                                            <div class="col-md-4"> 
                                                <input id="passwordinput" name="confirmpw" placeholder="" class="form-control input-md" type="password"> 
                                            </div>                                             
                                        </div>                                         
                                        <!-- Select Basic -->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="selectbasic">Select Role</label>                                             
                                            <div class="col-md-4"> 
                                                <select id="selectbasic" name="role_id" class="form-control"> 
                                                    <option value="1">Administrator</option>                                                     
                                                    <option value="2">Manager</option>                                                     
                                                    <option value="3">Candidate</option>                                                     
                                                </select>                                                 
                                            </div>                                             
                                        </div>                                         
                                        <!-- File Button -->                                         
                                        <div class="form-group"> 
                                            <label class="col-md-4 control-label" for="filebutton">CV</label>                                             
                                            <div class="col-md-4"> 
                                                <input id="filebutton" name="filebutton" class="input-file" type="file"> 
                                            </div>                                             
                                        </div>                                         
                                        <label class="col-md-4 control-label" for="register"></label>                                         
                                        <div class="col-md-4"> 
                                            <button id="register" name="register" class="btn btn-default">Create Account</button>                                                                                          
                                        </div>                                         
                                    </fieldset>                                     
                                </form>                                 
                </div>                 
                             
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                 
                              
                <script src="/ACI-SITE/dist/js/bootstrap.min.js"></script>                 
                              
    </body>     
</html>
