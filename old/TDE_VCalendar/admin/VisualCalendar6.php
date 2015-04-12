<?php
error_reporting(7);session_start();
$user = 'webchair';
$pass = 'qp20wo39ei';
if ($_GET["logout"]=="true")
{
    $_SESSION["username"] = "";
    $_SESSION["password"] = "";
    echo "<script>document.location='index.php'</script>";
}
$_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
  
if (($_POST["username"] == $user) && ($_POST["password"] == $pass))
{
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
}   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Visual Calendar 6 Admin</title>
<style type="text/css">
<!--
body{
	margin : 0px 0px 0px 0px;
	font: 12px Arial, Helvetica, sans-serif;
	background-color : #787878;	
	color : #5C5C5C;
}
#container {
	text-align : center;
}

#div_body{
	width : 741px;
	
	min-height : 500px;
	height: auto !important;
	height:500px;
	
	background-color : #FFFFFF;
	clear : both;
	text-align : justify;
	margin : auto;
	padding: 16px;
}

#div_logo{
	width : 237px;
	height : 56px;
	background-image : url(../logo.gif);
	margin-bottom : 20px;
}

#div_page_list{
	width : 180px;
	background-color : #F9F9F9;
	border : solid 1px #F1F1F1;
	float : left;
	padding : 10px;
}

#container ul {
	padding-left : 0px;
	margin-left : 0px;
	list-style-type : none;
}

#container ul li {
	width : 180px;
	border-bottom:1px solid white;
	padding:2px;
}


#container ul a{
	color : #5C5C5C;
	text-decoration : none;
}

#container ul a:hover {
	color : #739E40;
}

#container #comments_container{
	margin-left:220px;
}

#container #div_footer{
	width : 741px;
	text-align :left;
	margin : auto;
	padding-top:10px;
}

#container #div_footer a{
	color : #FFFFFF;
	text-decoration : none;
}

.comment_item{
	background-color : #F9F9F9;
	border : solid 1px #F1F1F1;
	margin-bottom: 16px;
}

.comment_head{
	background-color : #F1F1F1;
	padding : 5px;
	font-weight:bold;
}

.action_anchor{
	color : #739E40;
	font-weight:normal;
	text-decoration:none;
}

.comment_head img{
	border : 0px;
}


.comment_body{
	padding : 5px;
}

.end{
	width : 100%;
	font : 1px;
	height : 1px;
	clear : both;
}
-->
</style>
</head>

<body>
<div id="container">
	<div id="div_body">		
		<?php
        if ( (($_POST["username"] == $user) && ($_POST["password"] == $pass)) || (($_SESSION["username"] == $user) && ($_SESSION["password"] == $pass)))
        {
        ?> 
        <div style="float:right"><a href="?logout=true" class="action_anchor">log out</a></div>		<div id="div_logo"></div>
        <script language='JavaScript' type='text/javascript' src='../admin.js'></script>
        <input name="selDay6"   type="hidden" id="selDay6"  onChange="changeDate('6')">
        <input name="selMonth6"  type="hidden" id="selMonth6" onChange="changeDate('6')">
        <input name="selYear6"   type="hidden" id="selYear6" onChange="changeDate('6')">
        <div id="containerVisualCalendar6">
        </div>
        
        <script type="text/javascript">initCalendar("6","ENG",true);</script>
        <?php
        }
        else
        {
        ?>
        <div id="div_logo"></div>
        <form action="#" method="post" name="form1">
        <table width="170" border="0" cellspacing="5" cellpadding="5">
          <tr>
            <td>UserName:</td>
            <td><input type="text" name="username"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Enter"></td>
          </tr>
        </table></form>
        <?php
        }    
		?>
		<div class="end"></div>
	</div>
	<div id="div_footer">
		<a href="http://www.topdreamweaverextensions.com" target="_blank">www.topdreamweaverextensions.com All right reserved</a>
	</div>
</div>
</body>
</html>