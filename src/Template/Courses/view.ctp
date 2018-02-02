<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?> </li>
    </ul>
</nav>-->

<div class="container-fluid">
	<div class="container">
		<h3><?= h($course->name) ?></h3>
		<div class="row">
			<div class="col-md-4">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th scope="row"><?= __('Name') ?></th>
							<td><?= h($course->name) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Grade') ?></th>
							<td><?= $course->has('grade') ? $this->Html->link($course->grade->id, ['controller' => 'Grades', 'action' => 'view', $course->grade->id]) : '' ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Id') ?></th>
							<td><?= $this->Number->format($course->id) ?></td>
						</tr>
					</table>
				</div>
			</div>	
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>			
		</div>
	</div>	
			
	
    <div class="container-fluid">
        <h4><?= __('Relacion de Notas') ?></h4>
		<div class="table-responsive">
        <?php if (!empty($course->scores)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Note1') ?></th>
                <th scope="col"><?= __('Note2') ?></th>
                <th scope="col"><?= __('Note3') ?></th>
                <th scope="col"><?= __('Note4') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->scores as $scores): ?>
            <tr>
                <td><?= h($scores->id) ?></td>
                <td><?= h($scores->note1) ?></td>
                <td><?= h($scores->note2) ?></td>
                <td><?= h($scores->note3) ?></td>
                <td><?= h($scores->note4) ?></td>
                <td><?= h($scores->student_id) ?></td>
                <td><?= h($scores->course_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Scores', 'action' => 'view', $scores->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Scores', 'action' => 'edit', $scores->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Scores', 'action' => 'delete', $scores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scores->id)]) ?>
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
