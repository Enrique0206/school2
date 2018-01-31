<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boss $boss
 */
?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?= $this->Form->create($boss) ?>
			<fieldset>
				<legend><h2><?= __('Ingresar Nuevo Apoderado ') ?></h2></legend>
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
			<?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success'], ['action' => 'index']) ?>
			<?= $this->Form->end() ?>
		</div>		
		<div class="col-md-4">
			<?= $this->Html->link(__('regresar'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
