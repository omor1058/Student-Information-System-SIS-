
<html>
<head>
		<link rel="stylesheet" type="text/css" href="search-data.css" />
<link rel="icon" href= "Screenshot_7.png">		
<title>STUDENT INFORMATION SEARCH</title>

</head>
<body>
<div style="background-image: url(&quot;profile-images/image20.jpg?_=6&quot;);" class="LR-bg-img LR-site-bg-image-container LR-site-show-on-bg-image"></div>
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
										<h1><span>S</span><span class = "l1">I</span><span class = "l2">S</span><small></br><font color = "#F24B2F">S</font>tudent <font color = "#F8F8F8">I</font>nformation <font color = "#CCD900">S</font>earch </small></h1>
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
		
<?php
error_reporting(E_ALL ^ E_NOTICE);

 require'db_conn.php';

 $sel=$_POST['sel'];
   $ty=$_POST['ty'];

if(isset($_POST['se']))
 {

  if($sel=="fname")
  {
  $q1=mysql_query("select* from sis where fname='$ty'");
  $result=mysql_query("SELECT count(*) as total from sis where fname='$ty'");
	$data=mysql_fetch_assoc($result);
	?>
	<center><div class = "result"><h2>Search Result Found :<?php echo $data['total'];  ?></h2></div></center>
	<?php
   while($rows=mysql_fetch_array($q1,MYSQL_ASSOC))
{
    $image = $rows['image'];
	$fn=$rows['fname'];
	$ln=$rows['lname'];
	$rn=$rows['rn'];
	$department=$rows['department'];
	$sub=$rows['dbms'];
	$cgp=$rows['cgp'];
    $dob=$rows['dob'];
	?>
	<center>
	<div style="background: none repeat scroll 0% 0% rgba(15, 240, 105, 0.87);" class="LR-box1">
	<div class = "info">
	<br/>
	Name :<?php echo $fn.' '.$ln;?></br>
	ID :<?php echo $rn;?></br>
	Department :<?php echo $department ?></br>
	CGPA :<?php echo $cgp ?></br>
	Date Of Birth : <?php echo $dob ?>
	</div>
	    <div class="profile-image"><img src="<?php echo $image; ?>" height = "100px" width = "100px"></div>

	</div>
	
	</br>
	</center>
 <?php
 }
 }

if($sel=="lname")
  {
$q1=mysql_query("select* from sis where lname='$ty'");
  $result=mysql_query("SELECT count(*) as total from sis where lname='$ty'");
	$data=mysql_fetch_assoc($result);
	?>
	<center><div class = "result"><h2>Search Result Found :<?php echo $data['total'];  ?></h2></div></center>
	<?php
   while($rows=mysql_fetch_array($q1,MYSQL_ASSOC))
{
	$image = $rows['image'];
    $fn=$rows['fname'];
	$ln=$rows['lname'];
	$rn=$rows['rn'];
	$department=$rows['department'];
	$sub=$rows['dbms'];
	$cgp=$rows['cgp'];
    $dob=$rows['dob'];
	?>
	<center>
		<div style="background: none repeat scroll 0% 0% rgba(15, 240, 105, 0.87);" class="LR-box1">
	<div class = "info">
	<br/>
	Name :<?php echo $fn.' '.$ln;?></br>
	ID :<?php echo $rn;?></br>
	Department :<?php echo $department ?></br>
	CGPA :<?php echo $cgp ?></br>
	Date Of Birth : <?php echo $dob ?>
	</div>
	    <div class="profile-image"><img src="<?php echo $image; ?>" height = "100px" width = "100px"></div>

	</div>
	
	</br>
	</center>
 <?php
 }
 }
 if($sel=="rn")
  {
$q2=mysql_query("select* from sis where rn='$ty'");
  $result=mysql_query("SELECT count(*) as total from sis where rn='$ty'");
	$data=mysql_fetch_assoc($result);
	?>
	<center><div class = "result"><h2>Search Result Found :<?php echo $data['total'];  ?></h2></div></center>
	<?php
 while($rows=mysql_fetch_array($q2,MYSQL_ASSOC))
{
    $image = $rows['image'];
	$fn=$rows['fname'];
	$ln=$rows['lname'];
	$rn=$rows['rn'];
	$department=$rows['department'];
	$sub=$rows['dbms'];
	$cgp=$rows['cgp'];
    $dob=$rows['dob'];
	?>
	<center>
		<div style="background: none repeat scroll 0% 0% rgba(15, 240, 105, 0.87);" class="LR-box1">
	<div class = "info">
	<br/>
	Name :<?php echo $fn.' '.$ln;?></br>
	ID :<?php echo $rn;?></br>
	Department :<?php echo $department ?></br>
	CGPA :<?php echo $cgp ?></br>
	Date Of Birth : <?php echo $dob ?>
	</div>
	    <div class="profile-image"><img src="<?php echo $image; ?>" height = "100px" width = "100px"></div>

	</div>
	
	</br>
	</center>
 <?php
 }
 }
if($sel=="department")
  {
$q3=mysql_query("select* from sis where department='$ty'");
  $result=mysql_query("SELECT count(*) as total from sis where department='$ty'");
	$data=mysql_fetch_assoc($result);
	?>
	<center><div class = "result"><h2>Search Result Found :<?php echo $data['total'];  ?></h2></div></center>
	<?php
  while($rows=mysql_fetch_array($q3,MYSQL_ASSOC))
{
    $image = $rows['image'];
	$fn=$rows['fname'];
	$ln=$rows['lname'];
	$rn=$rows['rn'];
	$department=$rows['department'];
	$sub=$rows['dbms'];
	$cgp=$rows['cgp'];
    $dob=$rows['dob'];
		?>
		<center>
		<div style="background: none repeat scroll 0% 0% rgba(15, 240, 105, 0.87);" class="LR-box1">
	<div class = "info">
	<br/>
	Name :<?php echo $fn.' '.$ln;?></br>
	ID :<?php echo $rn;?></br>
	Department :<?php echo $department ?></br>
	CGPA :<?php echo $cgp ?></br>
	Date Of Birth : <?php echo $dob ?>
	</div>
	    <div class="profile-image"><img src="<?php echo $image; ?>" height = "100px" width = "100px"></div>

	</div>
	
	</br>
	</center>
 <?php
 }
 }
if($sel=="subject")
  {
$q4=mysql_query("select* from sis where dbms='$ty'");
$result=mysql_query("SELECT count(*) as total from sis where dbms='$ty'");
$data=mysql_fetch_assoc($result);
?>
<div class = "result"><h2>Search Result Found :<?php echo $data['total'];  ?></h2></div>
<?php
while($rows=mysql_fetch_array($q4,MYSQL_ASSOC))
{
    $image = $rows['image'];
	$fn=$rows['fname'];
	$ln=$rows['lname'];
	$rn=$rows['rn'];
	$department=$rows['department'];
	$sub=$rows['dbms'];
	$cgp=$rows['cgp'];
    $dob=$rows['dob'];
			?>
	<center>
		<div style="background: none repeat scroll 0% 0% rgba(15, 240, 105, 0.87);" class="LR-box1">
	<div class = "info">
	<br/>
	Name :<?php echo $fn.' '.$ln;?></br>
	ID :<?php echo $rn;?></br>
	Department :<?php echo $department ?></br>
	CGPA :<?php echo $sub ?></br>
	Date Of Birth : <?php echo $dob ?>
	</div>
	    <div class="profile-image"><img src="<?php echo $image; ?>" height = "100px" width = "100px"></div>

	</div>
	
	</br>
	<center>
 <?php
 }
 
 }
if($sel=="cgp")
  {
$q5=mysql_query("select* from sis where cgp='$ty'");
	  $result=mysql_query("SELECT count(*) as total from sis where cgp='$ty'");
	$data=mysql_fetch_assoc($result);
	?>
	<center><div class = "result"><h2>Search Result Found :<?php echo $data['total'];  ?></h2></div></center>
	<?php
   while($rows=mysql_fetch_array($q5,MYSQL_ASSOC))
{
    $image = $rows['image'];
	$fn=$rows['fname'];
	$ln=$rows['lname'];
	$rn=$rows['rn'];
	$department=$rows['department'];
	$sub=$rows['dbms'];
	$cgp=$rows['cgp'];
    $dob=$rows['dob'];
			?>
	<center>
		<div style="background: none repeat scroll 0% 0% rgba(15, 240, 105, 0.87);" class="LR-box1">
	<div class = "info">
	<br/>
	Name :<?php echo $fn.' '.$ln;?></br>
	ID :<?php echo $rn;?></br>
	Department :<?php echo $department ?></br>
	CGPA :<?php echo $cgp ?></br>
	Date Of Birth : <?php echo $dob ?>
	</div>
	    <div class="profile-image"><img src="<?php echo $image; ?>" height = "100px" width = "100px"></div>

	</div>
	
	</br>
	</center>
 <?php
 }
 }
  if($data['total']==0) {
 ?>
	<center><div class = "result1"><h2>NO DATA FOUND</h2></div></center>
 <?php
 }
}



?>

