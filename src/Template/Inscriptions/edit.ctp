<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inscription $inscription
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inscription->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>-->

<div class="container">
	<div class="row">
		<div class="col-md-6">	
			<?= $this->Form->create($inscription) ?>
			<fieldset>
				<legend><?= __('Editar Inscripcion') ?></legend>
				<?php
					echo $this->Form->control('registration', ['class' => 'form-control']);
					echo $this->Form->control('cost', ['class' => 'form-control']);
					echo $this->Form->control('level', ['class' => 'form-control']);
					echo $this->Form->control('grade_id', ['class' => 'form-control'], ['options' => $grades]);
					echo $this->Form->control('student_id', ['class' => 'form-control'], ['options' => $students]);
					echo $this->Form->control('employee_id', ['class' => 'form-control'], ['options' => $employees]);
				?>
			</fieldset>
		</div>
	</div> 	
</div>

<div class="container" style="margin-top: 20px">
	<div class="row">
		<div class="col-md-4">
			<?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success'], ['action' => 'index']) ?>
			<?= $this->Form->end() ?>
		</div>		
		<div class="col-md-4">
			<?= $this->Html->link(__('regresar'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>