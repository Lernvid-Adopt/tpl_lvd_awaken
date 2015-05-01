<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $this->params->get('colorVariation'); ?>.css" rel="stylesheet" type="text/css" media="all" />
	  <!--[if IE 7]>
	  <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
   <!--[if lt IE 7]>
	  <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
   <![endif]-->
	<?php
		$contentwidth='';
		$colorVariation='';
		if($this->countModules("position-7")&&!$this->countModules("position-8")){ $contentwidth="left";}
		if($this->countModules("position-8")&&!$this->countModules("position-7")){ $contentwidth="right";}
		if($this->countModules("position-7")&&$this->countModules("position-8")) {$contentwidth="middle"; }
		$app = &JFactory::getApplication();
		$leftcolWidth = ($this->params->get('leftcolWidth'));
		$rightcolWidth = ($this->params->get('rightcolWidth'));
	?>

	<!-- math the width of the 3 columns -->
	<style type="text/css">
		#sidebar_left {width: <?php echo $leftcolWidth;?>%;}
		#sidebar_right {width: <?php echo $rightcolWidth;?>%;}
		#content_outmiddle {width: <?php echo 98 - $rightcolWidth - $leftcolWidth;?>%;}
		#content_outright {width: <?php echo 99 - $rightcolWidth;?>%;}
		#content_outleft {width: <?php echo 99 - $leftcolWidth;?>%;}
	</style>
	
	<?php if (($this->params->get('useJavascript')) !=0) : ?>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript">
			var jq = jQuery.noConflict(); 	
		</script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/effects.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/<?php echo htmlspecialchars($this->params->get('colorVariation')); ?>.js"></script>
	<?php endif;?>
</head>

<body>
<div id="bg_up">
	<div id="wrapper">
		<div id="oben">
			<?php if($this->countModules('position-0')) : ?>
				<div id="search">
					<div id="search_inner">
			             <jdoc:include type="modules" name="position-0" />
					</div>
				</div>
			<?php endif; ?>
			<?php if($this->countModules('position-1')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="position-1" />
				</div>
			<?php endif; ?>
		</div>		
		<div id="header_container">
			<div id="header">
				<?php if($this->countModules('header')) : ?>
			             <div id="headermod">
			             	<jdoc:include type="modules" name="header" />
			             </div>
				<?php endif; ?>
				<div id="logo">
					<?php if (($this->params->get('showimgLogo')) !=0) : ?>				
						<a class="imglogo" href="index.php"><img alt="Logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo/<?php echo  $this->params->get('imgLogo');?>"/></a>
					<?php endif;?>
					<?php if (($this->params->get('showtextLogo')) !=0) : ?>				
						<a style="color:#<?php echo  $this->params->get('logoColor');?>;" class="logo" href="index.php"><?php echo  $this->params->get('textLogo');?></a>
					<?php endif;?>
					<?php if (($this->params->get('showSlogan')) !=0) : ?>				
						<div style="color:#<?php echo  $this->params->get('sloganColor');?>;" class="slogan"><?php echo  $this->params->get('slogan');?></div>
					<?php endif;?>
				</div>	
			</div>
		</div>
		<div id="container">
			<div id="content_up">
				<div id="content_up_left">
					<?php if($this->countModules('position-2')) : ?>
						<div id="breadcrumbs">
			            	<jdoc:include type="modules" name="position-2" />
					    </div>
					<?php endif; ?>
					<div id="content_up_right">
					</div>
				</div>
			</div>
			<?php if($this->countModules('slider')) : ?>
				<div id="slider">
					<jdoc:include type="modules" name="slider" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('user5 or user6 or user6')) : ?>
				<div id="user_modules1">
						<?php if($this->countModules('user5')) : ?>
							<div id="user5">
								<jdoc:include type="modules" name="user5" style="xhtml" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user6')) : ?>
							<div id="user6">
								<jdoc:include type="modules" name="user6" style="xhtml" />
							</div>
						<?php endif; ?>				
						<?php if($this->countModules('user7')) : ?>
							<div id="user7">
								<jdoc:include type="modules" name="user7" style="xhtml" />
							</div>
						<?php endif; ?>				
				<div class="clr"></div>
				</div>
			<?php endif; ?>				
			<?php if($this->countModules('position-7')) : ?>
				<div id="sidebar_left">
		             <jdoc:include type="modules" name="position-7" style="rounded" />
				</div>
			<?php endif; ?>		
		    <div id="content_out<?php echo $contentwidth; ?>">
				<?php if($this->countModules('top')) : ?>
					<div id="top">
			             <jdoc:include type="modules" name="top" style="xhtml" />
					</div>
					<div class="clr"></div>
				<?php endif; ?>		
				<div id="content">
					<jdoc:include type="message" />						
					<jdoc:include type="component" />
				</div>
			</div>
			<?php if($this->countModules('position-8')) : ?>
				<div id="sidebar_right">
		             <jdoc:include type="modules" name="position-8" style="rounded" />
				</div>
			<?php endif; ?>		
			<div class="clr"></div>
			<div id="content_down">
				<div id="content_down_left">
				</div>
			</div>	
			<div id="container2">
				<?php if($this->countModules('user1 or user2')) : ?>
					<div id="user_modules2">
							<?php if($this->countModules('user1')) : ?>
								<div id="user1">
									<jdoc:include type="modules" name="user1" style="xhtml" />
								</div>
							<?php endif; ?>				
							<?php if($this->countModules('user2')) : ?>
								<div id="user2">
									<jdoc:include type="modules" name="user2" style="xhtml" />
								</div>
							<?php endif; ?>				
							<div class="clr"></div>
					</div>
				<?php endif; ?>				
				<div class="clr"></div>
				<div id="footer">
					<div id="copyright_info">
						<p>| Copyright <strong><?php echo $app->getCfg('sitename'); ?></strong> | <a href="http://www.lernvid.com" target="_blank" title="Templates">Template by LernVid.com</a> |</p>
					</div>
					<a id="gotop" title="press to go to top" href="#">&uarr;</a>
					<?php if($this->countModules('footer')) : ?>
						<jdoc:include type="modules" name="footer" />
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div id="mirror"></div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>