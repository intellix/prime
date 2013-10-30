<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Prime 3.3/master</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Errorception -->
		<script>
			(function(_,e,rr,s){_errs=[s];var c=_.onerror;_.onerror=function(){var a=arguments;_errs.push(a);
			c&&c.apply(this,a)};var b=function(){var c=e.createElement(rr),b=e.getElementsByTagName(rr)[0];
			c.src="//beacon.errorception.com/"+s+".js";c.async=!0;b.parentNode.insertBefore(c,b)};
			_.addEventListener?_.addEventListener("load",b,!1):_.attachEvent("onload",b)})
			(window,document,"script","526135e8db03cad121000085");
    	</script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="/media/Prime/js/lib/html5shiv.js"></script>
			<script src="/media/Prime/js/lib/respond.min.js"></script>
		<![endif]-->

		<link href="/media/Prime/css/bootstrap.css" rel="stylesheet">
		<link href="/media/Prime/css/bootstrap-tree.css" rel="stylesheet">
		<link href="/media/Prime/css/todc-bootstrap.css" rel="stylesheet">
		<link href="/media/Prime/css/font-awesome.css" rel="stylesheet">
		<link href="/media/Prime/css/select2.css" rel="stylesheet">
		<link href="/media/Prime/css/prime.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-default navbar-fullscreen">
			<?=HTML::anchor('Prime', HTML::image('media/Prime/img/logo.png', ['alt' => '']), ['class' => 'navbar-brand pull-left']);?>
			<ul class="nav navbar-nav">
				<li><?=HTML::anchor('Prime/Page', '<i class="icon-edit"></i> '.__('Content')); ?></li>
				<li class="dropdown">
					<?=HTML::anchor('#', '<i class="icon-folder-close"></i> '.__('Modules').' <b class="caret"></b>', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown']); ?>
					<ul class="dropdown-menu">
						<li><?=HTML::anchor('Prime/Module/Fieldset', '<i class="icon-list-alt"></i> '.__('Fieldsets')); ?></li>
					</ul>
				</li>
				<li><?=HTML::anchor('Prime/Explorer', '<i class="icon-th"></i> '.__('Explorer'));?></li>
				<li class="dropdown">
					<?=HTML::anchor('#', '<i class="icon-wrench"></i> '.__('System').' <b class="caret"></b>', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown']);?>
					<ul class="dropdown-menu">
						<li><?=HTML::anchor('Prime/Log', '<i class="icon-tasks"></i> '.__('Event Log'));?></li>
						<li><?=HTML::anchor('Prime/User', '<i class="icon-group"></i> '.__('Users'));?></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown">
					<?php $avatar = HTML::image('http://www.gravatar.com/avatar/'.md5(strtolower(trim($user->email))).'?s=24', array('alt' => 'Profile photo')); ?>
					<?=HTML::anchor('#', $user->email.' '."\n".$avatar."\n".'<span class="caret"></span>', ['class' => 'dropdown-toggle nav-user', 'data-toggle' => 'dropdown']);?>
					<ul class="dropdown-menu">
						<li><?=HTML::anchor('Prime/Account', '<i class="icon-user"></i> '.__('Profile'));?></li>
						<li><?=HTML::anchor('Prime/Account/Logout', '<i class="icon-off"></i> '.__('Sign out'));?></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="fullscreen<?=(empty($left) ? NULL : ' with-panel-left');?><?=(empty($right) ? NULL : ' with-panel-right');?>" data-controller="<?=UTF8::strtolower($r->controller());?>">
			<div class="panel-left well well-small scrollable">
<?=isset($left) ? $left : NULL;?>

			</div>
			<div class="panel-center">
<?=isset($view) ? $view : NULL;?>

			</div>
			<div class="panel-right well well-small scrollable">
<?=isset($right) ? $right : NULL;?>

			</div>
		</div>
		<script data-main="/media/Prime/js/prime.js" src="/media/Prime/js/lib/require.js"></script>
	</body>
</html>