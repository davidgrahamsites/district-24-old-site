<?php
error_reporting(7);
if ($handle = opendir('.')) {
    $f = array();
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) { 
        $f[] = $file;
    }

    /* This is the WRONG way to loop over the directory. */
    while ($file = readdir($handle)) { 
        $f[] = $file;
    }    
    closedir($handle); 
}
$content = "";
for ($i=0;$i<count($f);$i++)
{
    
    if (substr(strtoupper($f[$i]),0,strlen("VISUALCALENDAR")) == "VISUALCALENDAR")
    {
        $content .= '<a href="'.$f[$i].'">'.substr($f[$i],0,strlen($f[$i])-4).'</a><br />';
    }    
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Visual Calendar Admin</title>
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

h1{
	font-size:15px;
	padding : 5px;
	
}
h3{
	font-size:12px;
	font-weight:normal;
}
a{
	color : #739E40;
	font-weight:normal;
	text-decoration:none;
}
-->
</style>
</head>

<body>
<div id="container">
	<div id="div_body">
		<div id="div_logo"></div>

		<h1>Visual Calendar Admin</h1>
<h3>Select the calendar to admin...</h3>
<?php echo $content;?>
		<div class="end"></div>
	</div>
	<div id="div_footer">
		<a href="http://www.topdreamweaverextensions.com" target="_blank">www.topdreamweaverextensions.com All right reserved</a>
	</div>
</div>
</body>
</html>