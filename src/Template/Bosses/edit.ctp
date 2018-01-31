<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boss $boss
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $boss->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $boss->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bosses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?= $this->Form->create($boss) ?>
			<fieldset>
				<legend><?= __('Editar Apoderado') ?></legend>
				<?php
					echo $this->Form->control('name', ['class' => 'form-control']);
					echo $this->Form->control('phone', ['class' => 'form-control']);
					echo $this->Form->control('dni', ['class' => 'form-control']);
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