<?php include 'config.php' ?>
<!DOCTYPE html>
<head>
   <link rel="stylesheet"  href="1.css">
    <link rel="stylesheet" href="2.css">
	<link rel="shortcut icon" href="../../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="1.js"></script>
    <script src="index.js"></script>
    <script src="2.js"></script>
		<script type="text/javascript" src="functions/script.js"></script>
 <style>
    .sha{
	font-size: 0.7em;
	
	}
    </style>
</head>
<body>
<div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-fixed-page1">
<div data-role="header" data-theme="a" data-position="fixed">
        <h1>Student Profile</h1>
       
    </div><!-- /header -->
			
    <div data-role="content" class="jqm-content">

  
        <ul data-role="listview"  data-theme="e" data-inset="true">
    <li data-theme="a" >Personal Information</li> 
    <li><a href="#pangalawa">First Name </br> 	<font class="sha">
	
	<?php
		$edit = mysql_query("select student from rstudents where student='".student($_SESSION['student'],'student')."'");
		while($row = mysql_fetch_array($edit)){
			echo "<input name=name type=text id=name class=name size=130 value='".student($_SESSION['student'],'student')."'>";  
			} 
			?>
</font></a></li> 
	<li><a href="#pangalawa">Middle Name </br>  <font class="sha">Lagrimas</font></a></li>
	<li><a href="#pangalawa">Last Name </br>  <font class="sha">Manuel</font></a></li>
</ul>
      <ul data-role="listview"  data-theme="e" data-inset="true">
    <li data-theme="a" >Personal Information</li> 
    <li><a href="#pangalawa">First Name </br> 	<font class="sha">Sharmaine</font></a></li> 
	<li><a href="#pangalawa">Middle Name </br>  <font class="sha">Lagrimas</font></a></li>
	<li><a href="#pangalawa">Last Name </br>  <font class="sha">Manuel</font></a></li>
</ul>
		
	</div><!-- /content
	-->

</div><!-- /page -->

<div data-role="page" class="jqm-demos ui-responsive-panel" id="pangalawa">
<div data-role="header" data-theme="b" data-position="fixed">
        <h1>ELECTROGRAM</h1>
       
    </div><!-- /header -->
			
    <div data-role="content" >


	<h2>CALCULATE</h2>

            <label for="username">Previous:</label>
            <input type="text" name="username" id="username" value="" data-clear-btn="true" data-mini="true">

            <label for="password">Present:</label>
            <input type="password" data-ajax="false"  name="password" id="password" value="" data-clear-btn="true" autocomplete="off" >

			  <label for="password">AMOUNT:</label>
            <input type="password" data-ajax="false"  name="password" id="password" value="" data-clear-btn="true" autocomplete="off"  >

            <div class="ui-grid-a">
                <div class="ui-block-a"><button data-rel="close" data-role="button" data-theme="c" >Cancel</a></div>
                <div class="ui-block-b"><button id="login" data-theme="e" data-rel="close" data-role="button" >CALCULAE</button></div>
			</div>
        </form>
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>