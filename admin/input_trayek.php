<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="../vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/new-article.css">
    <!-- datetime -->
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css" rel="stylesheet"></link>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container-fluid display-table">
      <div class="row display-table-row">
          <!-- side menu -->
          <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
            <h1 class="hidden-xs hidden-sm">Admin</h1>
            <!-- Koding didalam "ul untuk membuat bagian menu di disebelah kiri" -->
            <ul>
            <!-- class active memberi warna dan membuat tulisan paling atas menjadi berbeda dengan yng lain -->
            	<li class="link ">
            		<a href="index.html">
            			<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
            			<span class="hidden-xs hidden-sm">Dashboard</span>
            		</a>
            	</li>

            	<li class="link active">
            		<a href="#collapse-post" data-toggle="collapse" arial-controls="collapse-post">
            			<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            			<span class="hidden-xs hidden-sm">Form</span>
            			<span class="label label-success pull-right hidden-xs hidden-sm">20</span>
            		</a>
            		<ul class="collapse collapseable" id="collapse-post">
            			<li><a href="input_pemohon.php">Input Pemohon</a></li>
            			<li><a href="input_trayek.php">Input Trayek</a></li>
            			<li><a href="input_kendaraan.php">Input Kendaraan</a></li>
            			<li><a href="input_perpanjangan.php">Inut Perpanjangan</a></li>	
            		</ul>
            	</li>

            	<li class="link">
            		<a href="#collapse-comments" data-toggle="collapse" arial-controls="collapse-comments">
            			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            			<span class="hidden-xs hidden-sm">Laporan</span>
            		</a>
            		<ul class="collapse collapseable" id="collapse-comments">
            			<li>
            				<a href="approved.html">Laporan Pemohon
            					<span class="label label-success pull-right hidden-xs hidden-sm">10</span>
            				</a>
            			</li>	

            			<li>
            				<a href="approved.html">Laporan Trayek
            					<span class="label label-warning pull-right hidden-xs hidden-sm">10</span>
            				</a>
            			</li>

            			<li>
            				<a href="approved.html">Laporan Kendaraan
            					<span class="label label-warning pull-right hidden-xs hidden-sm">10</span>
            				</a>
            			</li>
     
     					<li>
            				<a href="approved.html">Laporan Perpanjangan
            					<span class="label label-warning pull-right hidden-xs hidden-sm">10</span>
            				</a>
            			</li>
     
            		</ul>
            	</li>

            	<li class="link">
            		<a href="commenters.html">
            			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            			<span class="hidden-xs hidden-sm">Comenters</span>
            		</a>
            	</li>

            	<li class="link">
            		<a href="tags.html">
            			<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
            			<span class="hidden-xs hidden-sm">Tags</span>
            		</a>
            	</li>
            	<!-- class setting-btn merubah warna pada bagian setting -->
            	<li class="link setting-btn">
            		<a href="setting.html">
            			<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            			<span class="hidden-xs hidden-sm">Setting</span>
            		</a>
            	</li>
            </ul>
          </div>
          <!-- main content area -->
          <div class="col-md-10 col-sm-11 display-table-cell valign-top">
            <div class="row">
              <header id="nav-header" class="clearfix">
                <div class="col-md-5">
                	<!-- dari code nav berfungsi untuk membuat tombol garis 3 buah untuk alternatif -->
                 <nav class="navbar-default pull-left">
                 	<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			      	</button>
                 </nav>
                  <input type="text" class="hidden-sm hidden-xs" id="header-search-field" placeholder="Search for smothing...">
                </div> 
                <div class="col-md-7">
                  <ul class="pull-right">
                    <li id="welcome" class="hidden-xs">Welcome to your administrator area</li>
                    <!-- memindahkan pemberitahuan ke kanan "class="fixed-width box"" -->
                  	<li class="fixed-width">
                  		<a href="#">
                  			<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                  			<span class="label label-warning">3</span>
                  		</a>
                  	</li>
                  		<!-- memindahkan pemberitahuan ke kanan "class="fixed-width box"" -->
                  		<li class="fixed-width">
                  		<a href="#">
                  			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                  			<span class="label label-message">3</span>
                  		</a>
                  	</li>

                  		<li>
                  		<a href="#" class="logout">
                  			<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                  			Log Out
                  		</a>
                  	</li>
                  </ul>
                </div>
              </header>         
            </div>

           
            <div id="content">
             <form  id="formKu" class="form-horizontal" >
            	<header>
            		<h2 class="page_title">Form Input Trayek</h2>
            	</header>

            	<div class="content-inner">
            		<div class="form-wrapper">
            			<form>
            				<div class="form-group">
            					<label class="sr-only">Kode Trayek</label>
            					<input type="text" name="kode_trayek" class="form-control" id="kode_trayek" placeholder="Kode Trayek">
            				</div>

            				<div class="form-group">
            					<label class="sr-only">Nama</label>
            					<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
            				</div>

            				
            				<div class="form-group">
            					<label class="sr-only">Lintasan</label>
            					<input type="text" name="lintasan" class="form-control" id="lintasan" placeholder="Lintasan">
            				</div>

            				<div class="form-group">
            					<label class="sr-only">Jarak</label>
            					<input type="text" name="jarak" class="form-control" id="jarak" placeholder="Jarak">
            				</div>

            				<div class="form-group">
                      <div class="input-group date" id="tanggal_berlaku">
                        <label class="sr-only">Tanggal Berlaku</label>
                        <input type="text" name="tanggal_berlaku" class="form-control" placeholder="Tanggal Berlaku"/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                      </div>

                    <input type="submit" name="btnSubmit" value="Simpan" class="btn btn-primary pull-right"/>
            			</form>
            		</div>
            	</div>
                   </form>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                var _url = " http://localhost/Trayek_Dishub/admin/input_trayek_slim.php/produk1";
                $("#formKu").submit(function(e){
                  $.ajax({
                    url: _url,
                    type: 'POST',
                    data: $("#formKu").serialize(),
                    async: false,
                    succsess:function(data){
                      alert(data);
                    }
                  });
                  e.preventDefault();
                }); 
              });
            </script>
       
            <div class="row">
            	<footer id="admin-footer" class="clearfix">
            		<div class="pull-left"><b>Copyright </b>&copy; Ari</div>
            		<div class="pull-right">Admin System</div>
            	</footer>
            </div>
          </div>
      </div>
    </div>

    		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js/default.js"></script>
     		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
      <script type="text/javascript">
         $(function () {
          $('#tanggal_berlaku').datetimepicker({
           format: 'DD-MM-YY',
          });
        });
         </script>
     		
  </body>
</html>