
<html>
<head>
		<link rel="stylesheet" type="text/css" href="signin.css" />
<link rel="icon" href= "Screenshot_7.png">		
<title>STUDENT INFORMATION SEARCH</title>

</head>
<body>
<div style="background-image: url(&quot;slide/image20.jpg?_=6&quot;);" class="LR-bg-img LR-site-bg-image-container LR-site-show-on-bg-image"></div>
<div style="margin-left: auto; margin-right: auto;" class="LR-box-wrapper">	
			<div style="background: none repeat scroll 0% 0% rgba(0, 0, 0, 0);" class="LR-box">
				<div class="LR-box-container LR-clearfix">
					<div class="LR-box-inner">
						<div class="LR-sign-up">
							<h2 class="LR-site-tagline montserrat">
									</h2>
							<span class="LR-sign-up-label"></span>
							<div class="LR-sign-up-container LR-extra-fields">
								
								<div class="LR-sign-up-container-inner LR-clearfix">
								<form action = "search-data.php" method = "POST" >
								<div class="logo">
										<h1><span>S</span><span class = "l1">I</span><span class = "l2">S</span><small></br><font color = "#F24B2F">Student</font> <font color = "#AE8D8D">Information</font> <font color = "#CCD900">Search </font></small></h1>
									  </div>
										<select name='sel'>       <option >-----Select Any One-----</option>

									   <option value='fname'>FIRST NAME</option>
									   <option value='lname'>LAST NAME</option>
									   <option value='rn'>ROLL NO</option>
									   <option value='subject'>DBMS</option>
									   <option value='department'>DEPARTMENT</option>
									   <option value='cgp'>CGPA</option>
										<input type="text" class="LR-sign-up-input signup-email" placeholder="Name/Roll/CGPA" name = "ty" value = "">
										
									<div class = "finish">
									<input name="se"  value="SEARCH" class="LR-sign-up-submit" type="submit">
									</div>
									</div>
								</div><!-- .sign-up-container-inner -->
							</div><!-- .sign-up-container -->
						</div><!-- .sign-up -->			
					</div><!-- .box-inner -->	
					
		</body>
		
		</html>
		