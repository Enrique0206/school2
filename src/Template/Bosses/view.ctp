<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boss $boss
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Boss'), ['action' => 'edit', $boss->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Boss'), ['action' => 'delete', $boss->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boss->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bosses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boss'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="container-fluid">
	<div class="container">
		<h3><?= h($boss->name) ?></h3>
		<div class="row">
			<div class="col-md-4">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th scope="row"><?= __('Name') ?></th>
							<td><?= h($boss->name) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Phone') ?></th>
							<td><?= h($boss->phone) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Dni') ?></th>
							<td><?= h($boss->dni) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Id') ?></th>
							<td><?= $this->Number->format($boss->id) ?></td>
						</tr>
					</table>
				</div>
			</div>	
			<div class="col-md-4"></div>
			<div class="col-md-4" style="width: 100px; height: 100px; background:#cccccc; margin-left: 15px"><img src="">apoderado</div>
		</div>
	</div>		
	
    <div class="container-fluid">
        <h4><?= __('Relacion de estudiantes') ?></h4>
		<div class="table-responsive">
        <?php if (!empty($boss->students)): ?>		
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Dni') ?></th>
                <th scope="col"><?= __('Sexo') ?></th>
                <th scope="col"><?= __('Boss Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($boss->students as $students): ?>
            <tr>
                <td><?= h($students->id) ?></td>
                <td><?= h($students->name) ?></td>
                <td><?= h($students->code) ?></td>
                <td><?= h($students->address) ?></td>
                <td><?= h($students->dni) ?></td>
                <td><?= h($students->sexo) ?></td>
                <td><?= h($students->boss_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id], ['class' => 'btn btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                </td>
            </tr>		
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
		</div>
    </div>
	
	<div class="container" style="margin-top: 20px">
		<div class="row">			
			<div class="col-md-4">
				<?= $this->Html->link(__('regresar'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
