<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Score[]|\Cake\Collection\CollectionInterface $scores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Score'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="container-fluid">
    <h3><?= __('CALIFICACIONES') ?></h3>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('note1') ?></th>
					<th scope="col"><?= $this->Paginator->sort('note2') ?></th>
					<th scope="col"><?= $this->Paginator->sort('note3') ?></th>
					<th scope="col"><?= $this->Paginator->sort('note4') ?></th>
					<th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('course_id') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($scores as $score): ?>
				<tr>
					<td><?= $this->Number->format($score->id) ?></td>
					<td><?= h($score->note1) ?></td>
					<td><?= h($score->note2) ?></td>
					<td><?= h($score->note3) ?></td>
					<td><?= h($score->note4) ?></td>
					<td><?= $score->has('student') ? $this->Html->link($score->student->name, ['controller' => 'Students', 'action' => 'view', $score->student->id]) : '' ?></td>
					<td><?= $score->has('course') ? $this->Html->link($score->course->name, ['controller' => 'Courses', 'action' => 'view', $score->course->id]) : '' ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $score->id], ['class' => 'btn btn-success']) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $score->id], ['class' => 'btn btn-warning']) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $score->id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->id)]) ?>
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
	
	<div style="list-style: none"><?= $this->Html->link(__('Nueva Calificacion'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?></div> 
</div>
