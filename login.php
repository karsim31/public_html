<HTML> <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <link rel="shortcut icon" href="favicon.ico"> <title>:::On-line Logbook Koas Pendidikan Dokter FK-UNDIP::</title> <!--</head>--> </head> <BODY> <?php error_reporting("E_ALL ^ E_NOTICE"); if ($_COOKIE["user_login"]=="" OR empty($_COOKIE["user_login"]) OR $_GET["st"]=="new") { ?> <div class="login-card" style="margin-top:30px;width:65%;"> <center> 	 <img src="images/undipsolid.png" style="width:15%;"><br/><br/> 	 <h4 style="text-shadow:1px 1px black;font-size:1.5em;margin:0"> 	 <font color=white>E-LOGBOOK KOAS PENDIDIKAN PROFESI DOKTER<br/> 							FAKULTAS KEDOKTERAN<br/>UNIVERSITAS DIPONEGORO<br/>TAHUN <?php include "config.php"; echo "$tahun"; ?></font></h4><br/> <h1 style="font-size:1.8em;font-family:Tahoma;color:#00FF00;font-weight:500;">LOGIN</h1></center> <br/> <center> <form action="#" method="POST" > 		 <input type="text" name="username" placeholder="Username" required="" style="background-color:#F0F8FF;width:350px"><br/> <input type="password" name="password" id="form-password" placeholder="Password" required="" style="background-color:#F0F8FF;width:350px"><br/> <font style=\"font-size:0.625em;color:white;text-shadow:1px 1px black;\"><input type="checkbox" name="remember" value="true"><i>Keep sign in <i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" id="form-checkbox"><i>Show password</i></font><br/><br/>	</form> </center> </div> <style> @import url(http://fonts.googleapis.com/css?family=Roboto:400,100); body 	{ 	 background-image: url('images/login_bg.jpg'); width: 100%; 	height: auto; background-repeat: no-repeat; } .line { border-bottom:1px solid #4d90fe;} .login-card { padding: 30px; margin: 10px auto 10px auto; border-radius: 20px; box-shadow: 1px 1px 20px #2F4F4F; overflow: hidden; opacity: 0.75; background-color: rgba(0,0,0,0.3); } .login-card h1 { font-weight: 100; text-align: center; font-size: 1.5em; } .login-card input[type=submit] { width: 42%; display: block; margin-bottom: 10px; position: relative; } .login-card input[type=text], input[type=password] { height: 44px; font-size: 1em; width: 42%; margin-bottom: 10px; -webkit-appearance: none; background: #fff; border: 1px solid #ddd; border-radius: 5px; padding: 0 8px; box-sizing: border-box; -moz-box-sizing: border-box; } .login-card input[type=text]:hover, input[type=password]:hover { border-color:#0099FF; /*color:#0099FF;*/ color:black; } .login { text-align: center; font-size: 0.8em; height: 36px; padding: 0 8px; /* border-radius: 3px; */ /* -webkit-user-select: none; user-select: none; */ } .login-submit { /* border: 1px solid #3079ed; */ border: 0px; color: #fff; text-shadow: 0 1px rgba(0,0,0,0.1); background-color:#006400; border-radius: 5px; } .login-submit:hover { /* border: 1px solid #2f5bb7; */ border: 0px; text-shadow: 0 1px rgba(0,0,0,0.3); background-color:#004400; } .login-card a { text-decoration: none; color: #666; font-weight: 400; text-align: center; display: inline-block; opacity: 1; transition: opacity ease 0.75s; } .login-card a:hover { opacity: 1; } .login-help { width: 100%; text-align: center; font-size: 12px; } </style> <?php } else { echo " 		<script> 			window.location.href=\"#"; 		</script> 		"; } ?> <script type="text/javascript" src="jquery.min.js"></script> <script type="text/javascript"> 	$(document).ready(function(){ 		$('#form-checkbox').click(function(){ 			if($(this).is(':checked')){ 				$('#form-password').attr('type','text'); 			}else{ 				$('#form-password').attr('type','password'); 			} 		}); 	}); </script> <!-- End Document ================================================== --> <!--</body></html>--> </BODY> </HTML>
