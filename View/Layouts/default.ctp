<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Integrations Tracker :: '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
echo $this->Html->css('/usermgmt/css/umstyle');
		echo $this->Html->css('style');

		echo $scripts_for_layout;
	?>
	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        $(function() {
          if ($.browser.msie && $.browser.version.substr(0,1)<7)
          {
			$('li').has('ul').mouseover(function(){
				$(this).children('ul').show();
				}).mouseout(function(){
				$(this).children('ul').hide();
				})
          }
        });        
    </script>
</head>
<body>
<div id="wrapper">
	<div id="wrapper2">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Smart Integration Tracker</a></h1>
			</div>
			<ul id="nav">
          <li><?php	echo h($user['User']['first_name']).' '.h($user['User']['last_name']); ?></li>
		<li><?php echo $this->Html->link(__("Change	Password",true),"/changePassword") ?></li>
		<li><?php echo $this->Html->link(__("Profile",true),"/myprofile") ?></li>
</ul>
		</div>
		<!-- end #header -->
		<div id="content">


						

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<!-- end #page -->
	</div>
</div>
<div id="footer-content">
	<div id="footer">
	<?php echo $this->element('sql_dump'); ?>
	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
