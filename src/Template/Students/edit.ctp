<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $student->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bosses'), ['controller' => 'Bosses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Boss'), ['controller' => 'Bosses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?></li>
    </ul>
</nav>-->

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?= $this->Form->create($student) ?>
			<fieldset>
				<legend><?= __('Editar estudiantes') ?></legend>
				<?php
					echo $this->Form->control('name', ['class' => 'form-control']);
					echo $this->Form->control('code', ['class' => 'form-control']);
					echo $this->Form->control('address', ['class' => 'form-control']);
					echo $this->Form->control('dni', ['class' => 'form-control']);
					echo $this->Form->control('sexo', ['class' => 'form-control']);
					echo $this->Form->control('boss_id', ['class' => 'form-control'], ['options' => $bosses]);
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