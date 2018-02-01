<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>   

	<!--borramos los css de la base y cake y agregando helpers de bootstrap-->	
	<?= $this->Html->css('bootstrap.min')?>
	<?= $this->Html->css('bootstrap-theme.min')?>
	<?= $this->Html->css('estilo')?>	
	
	<?= $this->Html->script('jquery-3.2.1.min')?>
    <?= $this->Html->script('bootstrap.min')?>    
	
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
		<nav class="navbar">
			<div class="container">
				<!-- menu desplegable movil-->
				<div class="navbar-header">
				  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  	</button>
				  	<a class="navbar-brand" href="#"></a>
				</div>	
				<!-- menu desplegable movil-->
				<!--items menu-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><?= $this->Html->link(__('INICIO'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'items'])?></li>	
						<li><?= $this->Html->link('APODERADOS', ['controller' => 'Bosses', 'action' => 'index'], ['class' => 'items']) ?></li>						
					    <li><?= $this->Html->link('ESTUDIANTES', ['controller' => 'Students', 'action' => 'index'], ['class' => 'items']) ?></li>
						<li><?= $this->Html->link('ASIGNATURAS', ['controller' => 'Courses', 'action' => 'index'], ['class' => 'items']) ?></li>
						<li><?= $this->Html->link('EMPLEADOS', ['controller' => 'Employees', 'action' => 'index'], ['class' => 'items']) ?></li>
						<li><?= $this->Html->link('CALIFICACIONES', ['controller' => 'Scores', 'action' => 'index'], ['class' => 'items']) ?></li>
						<li><?= $this->Html->link('GRADO ESCOLAR', ['controller' => 'Grades', 'action' => 'index'], ['class' => 'items']) ?></li>
						<li><?= $this->Html->link('INSCRIPCIONES', ['controller' => 'Inscriptions', 'action' => 'index'], ['class' => 'items']) ?></li>
					  </ul>  

					  <ul class="nav navbar-nav navbar-right">
						  <li><a class="items"></a></li>					
					  </ul>
				</div>
				<!--items menu-->
			</div>
		</nav>
	<div class="container-fluid" style="height: 20px"></div>
		<div class="container">			
				<?= $this->Flash->render() ?>

				<?= $this->fetch('content') ?>
			</div>
	    </div>
</body>
</html>
