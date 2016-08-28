<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Koleksi Video pembalajaran SMK Tarbiyatul Islam Kawunganten ditampilkan dalam galery yang dapat diputar secara langsung dengan teknologi HTML5">
    <meta name="author" content="Samsul Ma'arif">

    <title>Koleksi Video Pembelajaran SMKTIKA</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

		<!-- Modal - Informasi -->
		<div class="modal fade" id="informasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-informasi" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel-informasi"><strong>FYI....</strong></h4>
			  </div>
			  <div class="modal-body">
			  <p class="tengah">Sebagai informasi, jika video dalam daftar berikut tidak dapat diputar, pastikan bahwa browser yang Anda gunakan dapat memutar video dengan teknologi <strong>HTML5. Google Chrome, Mozilla Firefox</strong> versi terbaru umumnya dapat memutarnya.</p> 
			  <p>Sangat tidak disarankan (atau bahkan <strong>DILARANG</strong>) menggunakan browser kuno semacam <strong>Internet Explorer</strong> atau <strong>Microsoft Edge</strong>.</p>
			  <p>Anda diperbolehkan mengunduh video tersebut untuk diputar secara luring di laptop/komputer. Demikian, harap maklum.</p>
			  <p class="tengah"><strong>- Admin -</strong></p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
			  </div>
			</div>
		  </div>
		</div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">@smktika</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://smktika.id">Portal</a>
                    </li>
                    <li>
                        <a href="http://ebook.smktika.id">eBook</a>
                    </li>
                    <li>
                        <a onClick="$('#informasi').modal('show')">Info</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header text-center">Video Pembelajaran</h1>
            </div>
			<?php
			$dir = "videos";
			// Open a known directory, and proceed to read its contents
			// Kode ini terinspirasi dari : https://github.com/krishams/html5-video-auto/
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($file = readdir($dh)) !== false) {
						
						echo "<div class='col-lg-3 col-md-4 col-xs-6 thumb text-center'>";
						echo "<video class='thumbnail' width='250' height='200' src='$dir/$file' controls='controls' controls='fullscreen'>";
						echo "your browser does not support the video tag";
						echo "</video>";
						echo "Filename: $file<br>";
						
						echo "<a class='btn btn-primary' href='$dir/$file'>Download</a>";
						echo "</div>";
						
					}
					closedir($dh);
				}
			}
			?>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SMK Tarbiyatul Islam Kawunganten 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
