<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Score $score
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Scores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>-->

<div class="container">
	<div class="row">
		<div class="col-md-6">	
			<?= $this->Form->create($score) ?>
			<fieldset>
				<legend><?= __('Ingresar Nueva Nota') ?></legend>
				<?php
					echo $this->Form->control('note1', ['class' => 'form-control']);
					echo $this->Form->control('note2', ['class' => 'form-control']);
					echo $this->Form->control('note3', ['class' => 'form-control']);
					echo $this->Form->control('note4', ['class' => 'form-control']);
					echo $this->Form->control('student_id', ['class' => 'form-control'], ['options' => $students]);
					echo $this->Form->control('course_id', ['class' => 'form-control'], ['options' => $courses]);
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