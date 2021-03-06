<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?></li>
    </ul>
</nav>-->

<div class="container-fluid">
    <h3><?= __('ASIGNATURAS') ?></h3>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('name') ?></th>
					<th scope="col"><?= $this->Paginator->sort('grade_id') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($courses as $course): ?>
				<tr>
					<td><?= $this->Number->format($course->id) ?></td>
					<td><?= h($course->name) ?></td>
					<td><?= $course->has('grade') ? $this->Html->link($course->grade->section, ['controller' => 'Grades', 'action' => 'view', $course->grade->id]) : '' ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $course->id], ['class' => 'btn btn-success']) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $course->id], ['class' => 'btn btn-warning']) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?>
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
	
	<div style="list-style: none"><?= $this->Html->link(__('Nueva Asignatura'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?></div>
	
</div>

