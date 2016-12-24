<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Commenters</title>

		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/default.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
				            			<span class="hidden-xs hidden-sm">Home</span>
				            		</a>
				            	</li>

				            	<li class="link ">
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

				            	<li class="link active">
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
				            				<a href="unapproved.html">Laporan Trayek
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

				            	<li class="link ">
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
	            	<header class="clearfix">
	            		<div class="col-xs-5 col-sm-3 col-md-3">All Comenters</div>
	            		<div class="col-xs-7 col-sm-9 col-md-9">
	            			<button type="button" class="btn btn-xs btn-primary pull-right">Create New Article</button>
	            		</div>
	            	</header>

	            	<div class="content-inner">
	            		<table class="table table-hover">
	            			<thead>
							<th>Kode Trayek</th>
							<th>Nama</th>
							<th>Jarak</th>
							<th>Lintasan</th>
							<th>Tanggal Berlaku</th>
							<th>Actions</th>
						</thead>
						<tbody id="tabelKonten">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>				
						</tr>
						</tbody>
						</table>
					</div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
					<script type="text/javascript">
						$(document).ready(function(){
							var url = "http://localhost/Trayek_Dishub/admin/lihat_trayek_slim.php/semuaproduk";
							$.get(url,function(data){
								data = $.parseJSON(data);
								var _html = "";
								$.each(data,function(i,v){
									_html += "<tr>";
										_html += "<td>"+v.kode_trayek+"</td>";
										_html += "<td>"+v.nama+"</td>";
										_html += "<td>"+v.jarak+"</td>";
										_html += "<td>"+v.lintasan+"</td>";
										_html += "<td>"+v.tanggal_berlaku+"</td>";
										_html += "<td>"
										_html += "<a href='' class='btn btn-xs btn-warning'>Edit </a>";
										_html += "<a>|</a>";
										_html += "<a href='' class='btn btn-xs btn-danger' onclick='HapusData(\""+v.kode_trayek+"\")'> Delete</a>";
										_html += "</td>";
									_html += "</tr>";
								});
								$("#tabelKonten").html(_html);
							});
						});
						function HapusData(p){
							var _url = "http://localhost/Trayek_Dishub/admin/input_trayek_slim.php/produk/"+p;
							$.ajax({
								url: _url,
								type: "DELETE",
								async: false,
								success: function(data){
									alert(data);
								}
							});
						}
					</script>
							
	            			</tbody>
	            		</table>
	            	</div>
	            </div>

	            <div class="row">
	            	<footer id="admin-footer" class="clearfix">
	            		<div class="pull-left"><b>Copyright </b>&copy; Ari</div>
	            		<div class="pull-right">Admin System</div>
	            	</footer>
	            </div>
	          </div>
	      </div>
	    </div>

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>