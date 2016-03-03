<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Navbar Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template 		-->
	<link href="../css/navbar.css" rel="stylesheet">

	<!-- GITHUB CSS AND JS             -->
	<link rel="stylesheet" type="text/css" href="../stylesheets/normalize.css" media="screen">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template 		-->
	<link href="../css/style.css"  rel="stylesheet"> 

</head>

<body>
	<!-- Static navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">3DS Scene</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.html">Inicio</a></li>
					<li class="active"><a href="guiaOTP.html">Obtención OTP</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guías<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="guiaOTP.html">Obtención OTP</a></li>
							<li><a href="guiaA9LH.html">Instalación Arm9loaderHax</a></li>
							<li><a href="#">Coldboot (Pronto!)</a></li>
							<li><a href="#">Downgrade (Pronto!)</a></li>
  							<!-- <li role="separator" class="divider"></li>
  							<li class="dropdown-header">Otras guías</li> -->
  						</ul>
  					</li>
  					<li class="dropdown">
  						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link útiles<span class="caret"></span></a>
  						<ul class="dropdown-menu">
  							<li><a href="#">Foros GBAtemp</a></li>
  							<li><a href="#">Grupo de Facebook</a></li>
  						</ul>
  					</li>
  				</ul>
  				<!-- <ul class="nav navbar-nav navbar-right">
  					<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
  					<li><a href="../navbar-static-top/">Static top</a></li>
  					<li><a href="../navbar-fixed-top/">Fixed top</a></li>
  				</ul> -->
  			</div><!--/.nav-collapse -->
  		</div><!--/.container-->
  	</nav>
  	<section class="page-header">
    <h1 class="project-name">Guía OTP</h1>
      <h2 class="project-tagline">Old 3DS / 2DS (con Spider Exploit)</h2>
      <a href="https://www.facebook.com/groups/wiiu3ds.scenelatinoamerica/" class="btn">Grupo de Facebook</a></li>
      <a href="https://github.com/knildark/OTP" class="btn">Ver versión Github</a>
    </section>
    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <section class="main-content">
        <h1><a id="OTP_Guide__Old_3DS__2DS_Without_Cubic_Ninja_0"></a>OTP Guide - Old 3DS / 2DS (Without Cubic Ninja)</h1>
        <p>This is a sub section of the main guide <a href="https://plailect.github.io/OTP/">here</a>. Please read that first before continuing here.</p>
        <p><strong>All regions are now available!</strong></p>
        <p><strong>The steps for 2DS are the same as on the old 3ds, except for that you must have gone through initial setup. Do not format a 2DS on a version below 6.0.0 or you will not be able to complete the setup process.</strong></p>
        <h2><a id="What_You_Need_8"></a>What You Need</h2>
        <ul>
          <li>The all-in-one pack for your region: (<a href="https://github.com/Plailect/OTP/archive/Old_3DS_Spider_U.zip">U</a> - <a href="https://github.com/Plailect/OTP/archive/Old_3DS_Spider_E.zip">E</a> - <a href="https://github.com/Plailect/OTP/archive/Old_3DS_Spider_J.zip">J</a>)</li>
          <li>This guide assumes you are familiar with 3DS homebrew.</li>
          <li>This guide assumes you are on sysNAND version 9.2</li>
          <li>This guide assumes you have a working emuNAND and CFW (such as <a href="https://github.com/mid-kid/CakesForeveryWan">CakesFW</a>, <a href="https://github.com/Reisyukaku/ReiNand">ReiNand</a>, or <a href="https://github.com/roxas75/rxTools">rxTools</a>).</li>
        </ul>
        <h2><a id="Instructions_15"></a>Instructions</h2>
        <h3><a id="Section_I__Prep_Work_16"></a>Section I - Prep Work</h3>
        <ol>
          <li>Download the all-in-one pack <code>.zip</code> for your region.</li>
          <li>Extract the <code>Old_3DS_Spider_[U/E/J]/</code> folder from the <code>.zip</code> to somewhere on your computer.</li>
          <li>Copy all files from <code>Old_3DS_Spider_[U/E/J]/Section_I/Copy_To_SD_Card/</code> to your SD card. Replace any existing files.</li>
          <li>From sysNAND, get into the Homebrew Launcher through the entrypoint of your choice.</li>
          <li>Open Decrypt9.</li>
          <li>Following the options on the main menu, backup your sysNAND and your emuNAND to <code>sysNAND.bin</code> and <code>emuNAND.bin</code> respectively.</li>
          <li>From Decrypt9’s main menu, select “XORpad Generator Options.”</li>
          <li>Follow the options to dump “CTRNAND Padgen” to <code>nand.fat16.xorpad</code>.</li>
          <li>Press (Select) on the main menu to eject your SD card.</li>
          <li>Put your SD card in your computer, then copy over <code>sysNAND.bin</code>, <code>emuNAND.bin</code>, and <code>nand.fat16.xorpad</code> from the root of your SD card to <code>Old_3DS_Spider_[U/E/J]/Section_I/Backup/</code>.</li>
          <li>Delete <code>sysNAND.bin</code>, <code>emuNAND.bin</code>, and <code>nand.fat16.xorpad</code> from the root of your SD card.</li>
          <li>Copy all files from your SD card into <code>Old_3DS_Spider_[U/E/J]/Section_I/Backup/SD_Backup</code> on your computer.</li>
        </ol>
        <p>(Yes I know you don’t need your xorpad, but it’s good practice to have a way to decrypt your backups!)</p>
        <h3><a id="Section_II__Downgrading_32"></a>Section II - Downgrading</h3>
        <ol>
          <li>Delete any existing <code>Updates</code> folder on your sdcard that may be leftover from a previous downgrade.</li>
          <li>Copy all files from <code>Old_3DS_Spider_[U/E/J]/Section_II/Copy_To_SD_Card/</code> to your SD card. Replace any existing files.</li>
          <li>Boot your 3DS into emuNAND using the CFW of your choice.</li>
          <li><strong>If you are on 2DS, make sure your wifi is on, you will not be able to toggle it in 2.1.</strong></li>
          <li>Using the CIA Manager of your choice of your choice, install TinyFormat.cia <strong>on emuNAND</strong>.</li>
          <li>Open TinyFormat <strong>on emuNAND</strong>.</li>
          <li>Press (Y) to format emuNAND.</li>
          <li>Reboot back into emuNAND and complete initial setup <em>without</em> linking NNID.</li>
          <li>Change your theme in emuNAND then reboot into sysNAND. If your sysNAND has also changed then your NANDs are linked and you must use TinyFormat again.</li>
          <li>Reboot into emuNAND.</li>
          <li>After reinstalling the CIA Manager of your choice, install SysUpdater.cia <strong>on emuNAND</strong>.</li>
          <li>Reboot into sysNAND, then get into the Homebrew Launcher through the entrypoint of your choice.</li>
          <li>Open Decrypt9.</li>
          <li>Following the options on the main menu, backup your emuNAND to <code>emuNAND.bin</code>.</li>
          <li>Press (Select) on the main menu to eject your SD card</li>
          <li>Put your SD card in your computer, then rename <code>emuNAND.bin</code> on the root of your SD card to <code>emuNAND_formatted.bin</code>.</li>
          <li>Copy <code>emuNAND_formatted.bin</code> from the root of your SD card to <code>Old_3DS_Spider_[U/E/J]/Section_I/Backup/</code></li>
          <li>Open sysUpdater <strong>on emuNAND</strong>.</li>
          <li>Press (Y) to downgrade emuNAND to v2.1.</li>
          <li>If you encounter an error at any point during the downgrade, restore your emuNAND backup to emuNAND by copying <code>Old_3DS_Spider_[U/E/J]/Section_I/Backup/emuNAND_formatted.bin</code> to the root of your SD card and restoring using decrypt9 through homebrew menu on sysNAND. Afterwards, you can retry the downgrade on emuNAND, restoring from backup whenever it fails, until it goes through successfully.</li>
          <li>If you still are having issues, some users have reported upgrading <strong>emuNAND</strong> to 10.5 then downgrading may work. This is because this update will remove any modified TWL_FIRM which sysUpdater has trouble dealing with.</li>
          <li>Once you have successfully downgraded emuNAND with no errors, reboot into sysNAND <strong>(No current CFW can boot a 2.1 emuNAND)</strong> and get into the Homebrew Launcher through the entrypoint of your choice.</li>
          <li>Open Decrypt9.</li>
          <li>Following the options on the main menu, backup your emuNAND to <code>emuNAND.bin</code>.</li>
          <li>Press (Select) on the main menu to eject your SD card, then rename <code>emuNAND.bin</code> to <code>sysNAND.bin</code> on the root of your SD card from your computer.</li>
          <li>Reinsert your SD card into your 3DS and press (B).</li>
          <li>Following the options on the main menu, restore your sysNAND from <code>sysNAND.bin</code>.</li>
          <li>Cross your fingers.</li>
          <li>Reboot.</li>
          <li>If there is a black screen on reboot, try deleting the <code>extdata</code> folder in <code>/Nintendo 3DS/XXX/XXX/</code> on your SD card or booting with the SD card out and reinserting it after boot.</li>
        </ol>
        <h3><a id="Section_III__Getting_the_OTP_64"></a>Section III - Getting the OTP</h3>
        <ol>
          <li>Copy all files from <code>Old_3DS_Spider_[U/E/J]/Section_III/Copy_To_SD_Card/</code> to your SD card. Replace any existing files.</li>
          <li>Go to <a href="http://dukesrg.github.io/2xrsa.html?arm11.bin">http://dukesrg.github.io/2xrsa.html?arm11.bin</a> on your 3ds.</li>
          <li>Wait for the flashes. You can power off after about ten seconds of flashing.</li>
          <li>Check for a file named <code>a9f.bin</code> on the SD card. If the exploit was successful then it should be <code>256 Bytes</code>.</li>
          <li>Remove your SD card and copy <code>a9f.bin</code> to your computer.</li>
          <li>Rename <code>a9f.bin</code> to <code>OTP.bin</code>.</li>
          <li>Backup <code>OTP.bin</code> somewhere safe.</li>
        </ol>
        <h3><a id="Section_IV__Restoring_the_System_73"></a>Section IV - Restoring the System</h3>
        <ol>
          <li>Copy all files from <code>Old_3DS_Spider_[U/E/J]/Section_IV/Copy_To_SD_Card/</code> to your SD card. Replace any existing files.</li>
          <li>Delete any sysNAND or emuNAND <code>.bin</code> files from the root of your SD card.</li>
          <li>Copy <code>sysNAND.bin</code> and <code>emuNAND.bin</code> from <code>Old_3DS_Spider_[U/E/J]/Section_I/Backup/</code> to the root of your SD card.</li>
          <li>Rename <code>sysNAND.bin</code> to <code>NAND.bin</code> on your SD card.</li>
          <li>Reinsert your SD card and go to <a href="http://dukesrg.github.io/2xrsa.html?arm11.bin">http://dukesrg.github.io/2xrsa.html?arm11.bin</a> on your 3ds.</li>
          <li>After Decrypt9 has loaded, follow the options on the main menu to restore your sysNAND and your emuNAND from <code>NAND.bin</code> and <code>emuNAND.bin</code> respectively.</li>
          <li>Shut down your 3DS and delete all files on the SD card using your computer. <em>(Do not format.)</em></li>
          <li>Copy all files from <code>Old_3DS_Spider_[U/E/J]/Section_I/Backup/SD_Backup</code> to your SD card.</li>
          <li>Reinsert the SD card and reboot!</li>
        </ol>

        <footer class="site-footer">
         <span class="site-footer-owner"><a href="https://github.com/knildark/OTP">Guía OTP</a> es mantenida por <a href="https://github.com/knildark">knildark</a>.</span>

         <span class="site-footer-credits">Esta página fue hecha usando <a href="https://github.com/jasonlong/cayman-theme">Cayman theme</a> de <a href="https://twitter.com/jasonlong">Jason Long</a>.</span>
       </footer>

     </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
