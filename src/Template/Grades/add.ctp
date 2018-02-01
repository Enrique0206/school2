<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?= $this->Form->create($grade) ?>
			<fieldset>
				<legend><?= __('Add Grade') ?></legend>
				<?php
					echo $this->Form->control('section', ['class' => 'form-control']);
					echo $this->Form->control('level', ['class' => 'form-control']);
				?>
			</fieldset>
		</div>		
	</div>	    
</div>

<div class="container" style="margin-top: 20px">
	<div class="row">
		<div class="col-md-4">
			<?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success'], ['action' => 'index']) ?>
			<?= $this->Form->end() ?>
		</div>		
		<div class="col-md-4">
			<?= $this->Html->link(__('regresar'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>