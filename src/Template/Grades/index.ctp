<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade[]|\Cake\Collection\CollectionInterface $grades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="container-fluid">
    <h3><?= __('Grado Escolar') ?></h3>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('section') ?></th>
					<th scope="col"><?= $this->Paginator->sort('level') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($grades as $grade): ?>
				<tr>
					<td><?= $this->Number->format($grade->id) ?></td>
					<td><?= h($grade->section) ?></td>
					<td><?= h($grade->level) ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $grade->id], ['class' => 'btn btn-success']) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $grade->id], ['class' => 'btn btn-warning']) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id)]) ?>
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
	
	<div style="list-style: none"><?= $this->Html->link(__('New Grade'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?></div>
	
</div>
