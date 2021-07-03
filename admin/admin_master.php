<?php
ob_start();
session_start();
$admin_id = $_SESSION['admin_id'];
if ($admin_id == NULL) {
	header('location:index.php');
}

require '../classes/super_admin.php';
$ob_sub_admin = new Super_admin();

if (isset($_GET['status'])) {
	if ($_GET['status'] == 'logout') {
		$ob_sub_admin->logout();
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="../assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/admin_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../assets/admin_assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../assets/admin_assets/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="../assets/admin_assets/img/favicon.ico">
	<!-- end: Favicon -->


	<script>
		function check_delete() {
			var check = confirm('Are you sure?');
			if (check) {
				return true;
			} else {
				return false;
			}
		}
	</script>

</head>

<body>
	<!-- start: Header -->
	<?php include('./includes/header.php'); ?>
	<!-- end: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<?php include('./includes/sidebar_menu.php'); ?>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">

				<?php
				if (isset($pages)) {
					if ($pages == 'category') {
						include './pages/category_content.php';
					} elseif ($pages == 'manage_category') {
						include './pages/manage_category_content.php';
					} elseif ($pages == 'edit_category') {
						include './pages/edit_category_content.php';
					} elseif ($pages == 'manufacturer') {
						include './pages/manufacturer_content.php';
					} elseif ($pages == 'manage_manufacture') {
						include './pages/manage_manufacture_content.php';
					} elseif ($pages == 'edit_manufacture') {
						include './pages/edit_manufacture_content.php';
					} elseif ($pages == 'add_product') {
						include './pages/add_product_content.php';
					} elseif ($pages == 'manage_product') {
						include './pages/manage_product_content.php';
					} elseif ($pages == 'view_product') {
						include './pages/view_product_content.php';
					} elseif ($pages == 'edit_product') {
						include './pages/edit_product_content.php';
					} elseif ($pages == 'manage_order') {
						include './pages/manage_order_content.php';
					} elseif ($pages == 'view_order') {
						include './pages/view_order_content.php';
					} elseif ($pages == 'edit_order') {
						include './pages/edit_order_content.php';
					}
				} else {
					include './pages/home_content.php';
				}


				?>

			</div>
			<!--/.fluid-container-->

			<!-- end: Content -->
		</div>
		<!--/#content.span10-->
	</div>
	<!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>
	<?php include('./includes/footer.php'); ?>

	<!-- start: JavaScript-->

	<script src="../assets/admin_assets/js/jquery-1.9.1.min.js"></script>
	<script src="../assets/admin_assets/js/jquery-migrate-1.0.0.min.js"></script>

	<script src="../assets/admin_assets/js/jquery-ui-1.10.0.custom.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.ui.touch-punch.js"></script>

	<script src="../assets/admin_assets/js/modernizr.js"></script>

	<script src="../assets/admin_assets/js/bootstrap.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.cookie.js"></script>

	<script src='../assets/admin_assets/js/fullcalendar.min.js'></script>

	<script src='../assets/admin_assets/js/jquery.dataTables.min.js'></script>

	<script src="../assets/admin_assets/js/excanvas.js"></script>
	<script src="../assets/admin_assets/js/jquery.flot.js"></script>
	<script src="../assets/admin_assets/js/jquery.flot.pie.js"></script>
	<script src="../assets/admin_assets/js/jquery.flot.stack.js"></script>
	<script src="../assets/admin_assets/js/jquery.flot.resize.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.chosen.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.uniform.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.cleditor.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.noty.js"></script>

	<script src="../assets/admin_assets/js/jquery.elfinder.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.raty.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.iphone.toggle.js"></script>

	<script src="../assets/admin_assets/js/jquery.uploadify-3.1.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.gritter.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.imagesloaded.js"></script>

	<script src="../assets/admin_assets/js/jquery.masonry.min.js"></script>

	<script src="../assets/admin_assets/js/jquery.knob.modified.js"></script>

	<script src="../assets/admin_assets/js/jquery.sparkline.min.js"></script>

	<script src="../assets/admin_assets/js/counter.js"></script>

	<script src="../assets/admin_assets/js/retina.js"></script>

	<script src="../assets/admin_assets/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>

</html>