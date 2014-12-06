<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="/tmp/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/tmp/static/css/doc.css" rel="stylesheet" type="text/css" href="">
  <link href="/tmp/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">             

</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="/tmp/">Home</a>
              </li>
              
              <li class="">

              <a href="/tmp/topic/smartblue">Smart Blue</a>
              </li>
                  
              <li>
                <a href="#">Network Box</a>
              </li>
              <!--
              <li class="">
                <a href="#">Base CSS</a>
              </li>
              <li class="">
                <a href="#">Components</a>
              </li>
              <li class="">
                <a href="#">JavaScript</a>
              </li>
              <li class="">
                <a href="#">Customize</a>
              </li>
            -->
          </ul>
           <ul class="nav pull-right">
        <?php
        if($this->session->userdata('is_login')){
          ?>
          <li>  <a href="/tmp/auth/logout">LOG OUT</a></li>
          <?php
        } else {
          ?>
          <li>  <a href="/tmp/auth/login">LOG IN</a></li>
          <?php
        }
        ?>
      </ul>
        </div>
      </div>
    </div>
  </div>

  
<div class="modal">
<div class="modal-header">
  <h3>LOGIN</h3>
</div>
<form class="form-horizontal" action="/tmp/auth/authentication" method="POST">
<div class="modal-body">
<div class="control-group">
  <label class="control-label" for="inputEmail">ID</label>
  <div class="controls">
    <input type="text" id="id" name="id" placeholder="id" />
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="inputPassword">Password</label>
  <div class="controls">
    <input type="password" id="inputPassword" name="password" placeholder="Password" />
  </div>
</div>

  </div>
<div class="modal-footer">
  <input type="submit" class="btn btn-primary" value="LOGIN" />
</div>
</form>
</div>
          


    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/tmp/static/lib/bootstrap/js/bootstrap.min.js"></script>            

            </body>
        </html>
