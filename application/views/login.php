<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Isa App</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .m-right {
        margin-right: 10px;
      }

      .m-left {
        margin-left: 3px;
      }

      .show {
        display: inline;
      }

      .hide {
        display: none;
      }

      .search {
        float: right;
      }

      .h-width {
        width: 50%;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="bg-secondary">

	<div class="container py-5">
	    <div class="row">
	        <div class="col-md-12">
	            <h2 class="text-center text-white mb-4">user : isa, password : 12345</h2>
	            <div class="row">
	                <div class="col-md-6 mx-auto">

	                    <!-- form card login -->
	                    <div class="card rounded-0">
	                        <div class="card-header">
	                            <h3 class="mb-0">Login</h3>
	                        </div>
	                        <div class="card-body">
	                            <form action="<?php echo base_url('index.php/LoginController/login'); ?>" class="form" id="formLogin" method="POST">
	                                <div class="form-group">
	                                    <label for="uname1">Username</label>
	                                    <input type="text" class="form-control form-control-lg rounded-0" required="" id="username" name="username" placeholder="Enter username">
	                                    <div class="invalid-feedback">Oops, you missed this one.</div>
	                                </div>
	                                <div class="form-group">
	                                    <label>Password</label>
	                                    <input type="password" class="form-control form-control-lg rounded-0" required="" id="password" name="password" placeholder="Enter pwd">
	                                    <div class="invalid-feedback">Enter your password too!</div>
	                                </div>
	                                
	                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" name="btnLogin">Login</button>
	                            </form>
	                        </div>
	                        <!--/card-block-->
	                    </div>
	                    <!-- /form card login -->

	                </div>


	            </div>
	            <!--/row-->

	        </div>
	        <!--/col-->
	    </div>
	    <!--/row-->
	</div>
	<!--/container-->


<!-- link to js -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- js -->
<script type="text/javascript">
	


</script>		


</body>
</html>
