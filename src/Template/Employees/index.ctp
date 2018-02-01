<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>-->

<div class="container-fluid">
    <h3><?= __('EMPLEADOS') ?></h3>
	<div class="table-responsive">		
		<table class="table">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('name') ?></th>
					<th scope="col"><?= $this->Paginator->sort('code') ?></th>
					<th scope="col"><?= $this->Paginator->sort('address') ?></th>
					<th scope="col"><?= $this->Paginator->sort('dni') ?></th>
					<th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($employees as $employee): ?>
				<tr>
					<td><?= $this->Number->format($employee->id) ?></td>
					<td><?= h($employee->name) ?></td>
					<td><?= h($employee->code) ?></td>
					<td><?= h($employee->address) ?></td>
					<td><?= h($employee->dni) ?></td>
					<td><?= h($employee->sexo) ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $employee->id], ['class' => 'btn btn-success']) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id], ['class' => 'btn btn-warning']) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
	
	<div style="list-style: none"><?= $this->Html->link(__('Nuevo Apoderado'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?></div>
	
</div>
