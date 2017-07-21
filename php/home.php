
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Soumyadeep Roy">
    <link rel="icon" href="./res/favicon.ico" type="image/x-icon">

    <title>Imaging Viewer's Assistant</title>


    <link href="./lib/bootstrap.min.css" rel="stylesheet">
    <link href="./lib/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="./lib/navbar-fixed-top.css" rel="stylesheet">
    <script src="./lib/jquery.min.js"></script>
	<script src="./lib/bootstrap.min.js"></script>
	<script src="./js/clipboard.js"></script>
	<script src="./js/launch_viewer.js"></script>
	<script src="./js/pageControl.js"></script>			
	<link href="./css/tableStickyHeader.css" rel="stylesheet">
	<link href="./css/custom.css" rel="stylesheet">
  </head>

  <body>

    <!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> 
						<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" rel="home" href="#" title="Imaging Viewer's Portal">
       			 <img style="max-width:100px; margin-top:-8px;" src="./res/logo.png"><span>Imaging Viewer's Portal</span>
    			</a>
				<!-- <a class="navbar-brand" href="/Imaging_Portal/">Imaging Viewer's Portal</a> -->
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><input type="text" id="docTitle" class="form-control inputField" placeholder="Doc Title"></li>
					<li><input type="text" id="userName" class="form-control inputField" placeholder="Username"></li>
					<li><input type="text" id="locale" class="form-control inputField" placeholder="locale"></li>
					<li onClick="openHelp();"><a>Help</a></li>
					<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li onClick="openGeneral();"><a>General Document</a></li>
                        <li onClick="openSpecial();"><a>Special Document</a></li>
                      </ul>
                    </li>
				</ul>
				<!-- <div class="btn-group customButton">
                  <button type="button" class="btn btn-success" id="generalBtn" onClick="openGeneral();">General Document</button>
                  <button type="button" class="btn btn-primary" id="specialBtn" onClick="openSpecial();">Special Document</button>
                </div>
                -->
			</div>
		</div>
	</nav>

	<div class="container" style="padding-top: 60px; padding-bottom: 60px">
	
	<div id="msghide">
        <h1>Small display</h1> 
        <p>I don't support magnifying glass.</p> 
  	</div>
  	
  	
      <div class="input-group hidden-xs hidden-sm " style="padding-bottom: 10px">
          <input type="text" class="form-control" id="insUrl" placeholder="For custom instance, place URL here. Ex - http://host:port/AppName">
          <input type="text" class="form-control" id="docUrl" placeholder="Place document URL here">
          <span class="input-group-btn">
            <button class="btn btn-success" type="button" onclick="launchCustom();">Go!</button>
          </span>
    	</div>
  
	<table class="table table-fixed table-all" id="generalTable">
		<thead>
			<tr>
				<th class="hidden-xs hidden-sm col-lg-1 col-md-1">ID</th>
				<th class="hidden-xs col-sm-2 col-lg-2 col-md-2">Document Type</th>
				<th class="hidden-xs col-sm-3 col-lg-3 col-md-3">Content Type</th>
				<th class="hidden-xs col-sm-7 col-lg-6 col-md-6">Operations</th>
			</tr>
		</thead>
		<tbody>
			<?php include '.\php\populate_tableGen.php';
			  $table = new tableCreater();
			  //$table->insertRow();
			  $table->readTable($dbObj->con);
			?>
		</tbody>
	</table>
	
	<table class="table table-fixed table-all" id="specialTable" style="display: none;">
		<thead>
			<tr>
				<th class="hidden-xs hidden-sm col-lg-1 col-md-1">ID</th>
				<th class="hidden-xs col-sm-2 col-lg-2 col-md-2">Document Type</th>
				<th class="hidden-xs col-sm-3 col-lg-3 col-md-3">Content Type</th>
				<th class="hidden-xs col-sm-7 col-lg-6 col-md-6">Operations</th>
			</tr>
		</thead>
		<tbody>
			<?php include '.\php\populate_tableSpl.php';
			 $table = new SpltableCreater();
			 $table->readTable($dbObj->con);
			?>
		</tbody>
	</table>	
	
			
	</div>
	
	<div class="container" id="helpDiv">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Welcome to Imaging</h1>
        <p>To open documents using BravaView, click  <button type='button' class='btn btn-primary btn-stl'>BVSS 16.x</button></p>
        <p>To open documents using WebViewer, click  <button type='button' class='btn btn-warning btn-hidden-xs  btn-stl'>WebViewer 16.0</button></p>
        <p>To Copy the links to the clipboard, click <button type='button' class='btn btn-danger  btn-stl'>Copy Link</button></p>
        <p>Fill the Doc Title, Username and locale fields to use custom data. Else dummy data will be used.</p>
      </div>

    </div>
    
    
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="./lib/jquery.min.js"><\/script>')</script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src=".\lib\ie10-viewport-bug-workaround.js"></script>
    
    <script>
    	mediaStyle();
	</script>
    
  </body>
</html>
