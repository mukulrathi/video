<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VNIT</title>
<!-- Core CSS - Include with every page -->
<link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
<link href="assets/css/main-style.css" rel="stylesheet" />
</head>

<body class="body-Login-back">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center logo-margin "> </div>
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Get Marksheet</h3>
        </div>
        <div class="panel-body">
          <form action="marksheet.php" method="get" enctype="multipart/form-data" role="form">
            <fieldset>
              <div class="form-group">
                <input class="form-control" required placeholder="Roll No" name="roll_no" type="text" autofocus>
              </div>
              <div align="center"> 
                <!-- Change this to a button or input when using this as a form -->
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Core Scripts - Include with every page --> 
<script src="assets/plugins/jquery-1.10.2.js"></script> 
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script> 
<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
</body>
</html>
