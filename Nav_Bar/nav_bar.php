<?php echo'
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="Nav_Bar/css/default.css" />
		<link rel="stylesheet" type="text/css" href="Nav_Bar/css/component.css" />
		<script src="Nav_Bar/js/modernizr.custom.js"></script>
		<div class="nav" style="background:rgba(236, 236, 236, 1);">
			<ul id="cbp-tm-menu" class="cbp-tm-menu">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="#">IEEE</a>
					<ul class="cbp-tm-submenu">
						<li><a href="about_ieee.php" class="cbp-tm-icon-archive">About IEEE</a></li>
						<li><a href="join_ieee.php" class="cbp-tm-icon-cog">Why Join IEEE</a></li>
					</ul>
				</li>
				<li>
					<a href="hkn.php">IEEE-HKN</a>
				</li>			
				<li>
					<a href="WIE.php">WIE</a>
				</li>
				<li>
					<a href="#">Publications</a>
					<ul class="cbp-tm-submenu">
						<li><a href="http://pratibimb.bvpieee.org" class="cbp-tm-icon-archive">Pratibimb</a></li>
						<li><a href="#" class="cbp-tm-icon-cog">Cognizance</a></li>
						<li><a href="report.php" class="cbp-tm-icon-location">Reports</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Executive Committee</a>
					<ul class="cbp-tm-submenu">
						<li><a href="branch_couns.php" class="cbp-tm-icon-archive">Branch Counsellor</a></li>
						<li><a href="team.php" class="cbp-tm-icon-cog">The BVPIEEE Team</a></li>
					</ul>
				</li>	
				<li>
					<a href="#">SIGs</a>
					<ul class="cbp-tm-submenu">
						<li><a href="Drishti.php" class="cbp-tm-icon-archive">Drishti</a></li>
						<li><a href="Code_x.php" class="cbp-tm-icon-cog">Code-X</a></li>
						<li><a href="Robotix_United.php" class="cbp-tm-icon-location">Robotix-United</a></li>
						<li><a href="GAMMA.php" class="cbp-tm-icon-archive">GAMMA</a></li>
						<li><a href="E-Cell.php" class="cbp-tm-icon-cog">E-Cell</a></li>
						<li><a href="Quiz_Club.php" class="cbp-tm-icon-archive">BVCOE Quiz Club</a></li>
					</ul>
				</li>
				<li>
					<a href="gallery_home.php">Gallery</a>
				</li>
				<li>
					<a href="contact_us.php">Contact Us</a>
				</li>
			</ul>
		</div>
		<script src="Nav_Bar/js/cbpTooltipMenu.min.js"></script>
		<script>
			var menu = new cbpTooltipMenu( document.getElementById( "cbp-tm-menu" ) );
		</script>
	'	;?>