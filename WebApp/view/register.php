<!DOCTYPE HTML>

<header>
<link rel="stylesheet" type="text/css" href="login.css">
     <meta charset ="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   <!-- <script type="text/javascript" src="./password.js"></script>
    <script>
        
        function validation(){
        console.log('function');
        if(passwordChecker() && NumAndWordRep() && userNameAsPass() && newValPassPoilcy() && submitForm() && checkEmail()){
            return true;
        } else{
            return false;
        }
        }
 
    </script>-->
</header>
<div class="container">
	<div class="row centered-form">
		<div class="col-md-6 col-md-offset-3 boxStyle" style="padding-right: 0px!important;padding-left: 0px!important;">
		   <div class="panel-body" style="padding-right: 4px!important;padding-left: 4px!important;">
                 <form method="post" name="challenge"  class="form-horizontal" role="register" action="login.php" onsubmit="return validation();" AUTOCOMPLETE = "off" >
				<fieldset class="landscape_nomargin" style="min-width: 0;padding:    .35em .625em .75em!important;margin:0 2px;border: 2px solid silver!important;margin-bottom: 10em;">
			<legend style="border-bottom: none;width: inherit;!important;padding:inherit;" class="legend">Registration Form</legend>
		
			<div class="form-group">
						 <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="text-align: right!important;">
						 <span style="color: red">*</span> <span style="font-size: 8pt;">mandatory fields</span>
						 </div>
						</div>	
			 <div class="form-group" style="margin-bottom: 0px;">
                    <div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message10" style=" font-size: 10pt;padding-left: 0px;"></div>                      

                    </div>				
         <div class="form-group">
                     <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
                       <div class="col-sm-3 col-md-3 col-lg-4 col-xs-10 mobileLabel" style="padding-top: 7px; text-align: right;">
                           <span style="color: red">*</span>
                            Your Email:</div>
                        
						<div class="col-sm-7 col-md-7 col-lg-6 col-xs-9 input-group mobilePad" style="font-weight:600;">
						
						<input style="border-radius: 4px!important;" type="email"  class="form-control" name="yourEmail" id="yourEmail">                   
                                         
                        </div>
                       <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
                    </div> 
                    
             <div class="form-group">
                    	  <div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div>
                    	  <div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad"  data-toggle="collapse" data-target="#passPolicy" style="font-weight: bold;font-size: 10pt;padding-left: 0px;color: black;cursor: pointer;text-decoration: underline;">Check Password Policy<span class="caret"></span>
                    	  </div>  
                    	 </div>
             <div class="form-group" style="margin-bottom: 0px;!important">
                    	    <div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div>
                    	  <div id="passPolicy" class="col-sm-8 col-md-8 col-lg-7 col-xs-10 collapse mobilePad" style="padding-right: 17px;">
                       <ul type="disc" style="padding-left: 0px;">
                    	  <li>Your Password must have minimum 6 characters.</li>
                    	   <li>Your Password must contain at least one number, one uppercase, lowercase & special character.</li>
                    	  <li>Your Password must not contain your Username.</li>
                    	  <li>Your Password must not contain Character or Number repetition.</li>
                    
                    	  </ul> 
                    	  </div>
                    	</div>   
        <div class="form-group " style="margin-bottom: 5px;">
                     <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
                       <div class="col-sm-3 col-md-3 col-lg-4 col-xs-10 mobileLabel" style=" padding-top: 7px;text-align: right;">
                           <span style="color: red">*</span>
                          Your Password:</div>
                        
						<div class="col-sm-7 col-md-7 col-lg-6 col-xs-9 input-group mobilePad">
						
						<input type="password" onkeyup="passwordChecker()" name="regpassword" id="password" class="form-control"><span class="input-group-btn"><button class="btn btn-defaultCUST" id="view_button3" style=" height: 34px;padding-left: 7px;" type="button"><span class="glyphicon glyphicon-eye-open" ></span>                   
                             </button></span>                    
                                      
                        </div>
                         <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
                        
                    </div>  
                 <div class="form-group" style="margin-bottom: 5px;">
                    <div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message8" style=" font-size: 10pt;padding-left: 0px;"></div>                      

                    		 <div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message" style=" font-size: 10pt;"></div>
							<div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message2" style=" font-size: 10pt;"></div>
							<div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message3" style=" font-size: 10pt;"></div>
							<div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message4" style=" font-size: 10pt;"></div>
							<div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message5" style=" font-size: 10pt;"></div> 
							<div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message6" style=" font-size: 10pt;padding-left: 0px;"></div>
							<div class="col-sm-4 col-md-4 col-lg-5 col-xs-1"></div><div class="col-sm-8 col-md-8 col-lg-7 col-xs-10 mobilePad" id="message7" style=" font-size: 10pt;padding-left: 0px;"></div>                      
       
                    </div>
                  <div class="form-group">
                     <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
                       <div class="col-sm-3 col-md-3 col-lg-4 col-xs-10 mobileLabel" style=" padding-top: 7px;text-align: right;">
                           <span style="color: red">*</span>
                          Confirm Your Password:</div>
                        
						<div class="col-sm-7 col-md-7 col-lg-6 col-xs-9 input-group mobilePad">
						
						<input type="password" name="verifypassword" id="verifypassword" class="form-control"><span class="input-group-btn"><button class="btn btn-defaultCUST" id="view_button4" style=" height: 34px;padding-left: 7px;" type="button"><span class="glyphicon glyphicon-eye-open"></span>                  
                             </button></span>                     
                                         
                        </div>
                       <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
                    </div>	
         <div class="form-group">
                     <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" id="message1" style="font-weight: bold; text-align: center;font-size: 10pt;">
						</div>
						 </div>	            
        <div class="form-group">
									<div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
									<div class="col-sm-11 col-md-11 col-lg-11 col-xs-10" style="text-align:center;">
										<button id="valuser" type="submit"
											class="btn btn-success" >
											Submit</button>
									</div>

									<div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
								</div>   
		
				</form>
                </div>
		    </div>
		    
	</div>
</div>
<!-- <header>
<link rel="stylesheet" type="text/css" href="./login.css">
</header>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading" >
			    		<h3 class="panel-title"  ><font color="white">Aptaris Registration</font></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="register">
                             <div class="logo">
                                 <a href="https://goaptaris.com/"><img src="https://goaptaris.com/wp-content/themes/aptaris/images/logo.png" class="img-responsive" alt="" ></a></div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			<div align="center">
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
                            </div>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
</div> -->