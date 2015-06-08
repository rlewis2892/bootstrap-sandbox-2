<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once("lib/head-utils.html"); ?>
		<title>Bootstrap Sandbox</title>
	</head>
	<body>

		<!--header include-->
		<?php require_once("lib/header.html"); ?>

		<main>
			<div class="container">

				<div class="row">
					<div class="col-xs-12">

						<div id="page-1" class="page">
							<div class="alert alert-success">
								This is page one.
							</div>
						</div>

						<div id="page-2" class="page">
							<div class="alert alert-info">
								This is page two.
							</div>
						</div>

						<div id="page-3" class="page">
							<div class="alert alert-warning">
								This is page three.
							</div>
						</div>

						<div class="page-nav">
							<nav>
								<ul class="pagination">
									<li>
										<a href="#" aria-label="Previous" id="prev-lnk" class="pager-lnk">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<li class="active"><a href="#" id="pg-1-lnk" class="pager-lnk" data-target="page-1">1</a></li>
									<li><a href="#" id="pg-2-lnk" class="pager-lnk" data-target="page-2">2</a></li>
									<li><a href="#" id="pg-3-lnk" class="pager-lnk" data-target="page-3">3</a></li>
									<li>
										<a href="#" aria-label="Next" id="nxt-lnk">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>

					</div>
				</div>

			</div>
		</main>

		<!--footer include-->
		<?php /*require_once("lib/footer.html"); */?>

	</body>
</html>