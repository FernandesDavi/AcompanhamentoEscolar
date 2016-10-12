<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-Frame-Options" content="deny">
		<base href="<?php $this->eprint($this->ROOT_URL); ?>" />
		<title><?php $this->eprint($this->title); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="BANCOTCCDAVI" />
		<meta name="author" content="phreeze builder | phreeze.com" />

		<!-- Le styles -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="styles/style.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" />
		<!--[if IE 7]>
		<link rel="stylesheet" href="bootstrap/css/font-awesome-ie7.min.css">
		<![endif]-->
		<link href="bootstrap/css/datepicker.css" rel="stylesheet" />
		<link href="bootstrap/css/timepicker.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-combobox.css" rel="stylesheet" />
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

		<script type="text/javascript" src="scripts/libs/LAB.min.js"></script>
		<script type="text/javascript">
			$LAB.script("//code.jquery.com/jquery-1.8.2.min.js").wait()
				.script("bootstrap/js/bootstrap.min.js")
				.script("bootstrap/js/bootstrap-datepicker.js")
				.script("bootstrap/js/bootstrap-timepicker.js")
				.script("bootstrap/js/bootstrap-combobox.js")
				.script("scripts/libs/underscore-min.js").wait()
				.script("scripts/libs/underscore.date.min.js")
				.script("scripts/libs/backbone-min.js")
				.script("scripts/app.js")
				.script("scripts/model.js").wait()
				.script("scripts/view.js").wait()
		</script>

	</head>

	<body>

			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="./">IFSPai</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li <?php if ($this->nav=='alunos') { echo 'class="active"'; } ?>><a href="./alunos">Aluno</a></li>
								<li <?php if ($this->nav=='atribuicaos') { echo 'class="active"'; } ?>><a href="./atribuicaos">Atribuição</a></li>
								<li <?php if ($this->nav=='calendarios') { echo 'class="active"'; } ?>><a href="./calendarios">Calendario</a></li>
								<li <?php if ($this->nav=='disciplinas') { echo 'class="active"'; } ?>><a href="./disciplinas">Disciplina</a></li>
							</ul>
							<ul class="nav">
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
								<ul class="dropdown-menu">
								<li <?php if ($this->nav=='frequencias') { echo 'class="active"'; } ?>><a href="./frequencias">Frequencia</a></li>
								<li <?php if ($this->nav=='logsises') { echo 'class="active"'; } ?>><a href="./logsises">Log do Sistema</a></li>
								<li <?php if ($this->nav=='notases') { echo 'class="active"'; } ?>><a href="./notases">Nota</a></li>
								<li <?php if ($this->nav=='observacoeses') { echo 'class="active"'; } ?>><a href="./observacoeses">Observações</a></li>
								<li <?php if ($this->nav=='professors') { echo 'class="active"'; } ?>><a href="./professors">Professor</a></li>
								<li <?php if ($this->nav=='responsavels') { echo 'class="active"'; } ?>><a href="./responsavels">Responsavel</a></li>
								<li <?php if ($this->nav=='sugestoeses') { echo 'class="active"'; } ?>><a href="./sugestoeses">Sugestão</a></li>
								<li <?php if ($this->nav=='turmas') { echo 'class="active"'; } ?>><a href="./turmas">Turmas</a></li>
								</ul>
								</li>
							</ul>
						
						</div><!--/.nav-collapse -->
					</div>
				</div>
			</div>