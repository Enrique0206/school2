<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bosses'), ['controller' => 'Bosses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boss'), ['controller' => 'Bosses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?> </li>
    </ul>
</nav>-->

<div class="container-fluid">
	<div class="container">
		<h3><?= h($student->name) ?></h3>
		<div class="row">
			<div class="col-md-4">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th scope="row"><?= __('Name') ?></th>
							<td><?= h($student->name) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Code') ?></th>
							<td><?= h($student->code) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Address') ?></th>
							<td><?= h($student->address) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Dni') ?></th>
							<td><?= h($student->dni) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Sexo') ?></th>
							<td><?= h($student->sexo) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Boss') ?></th>
							<td><?= $student->has('boss') ? $this->Html->link($student->boss->name, ['controller' => 'Bosses', 'action' => 'view', $student->boss->id]) : '' ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Id') ?></th>
							<td><?= $this->Number->format($student->id) ?></td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4" style="width: 100px; height: 100px; background:#cccccc; margin-left: 15px"><img src="">alumno</div>
			
		</div>
	</div>	
		
    <div class="container-fluid">
        <h4><?= __('Alumno por Tutor') ?></h4>
		<div class="table-responsive">
        <?php if (!empty($student->inscriptions)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Registration') ?></th>
                <th scope="col"><?= __('Cost') ?></th>
                <th scope="col"><?= __('Level') ?></th>
                <th scope="col"><?= __('Grade Id') ?></th>
                <!--<th scope="col"><?= __('Student Id') ?></th>-->
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->inscriptions as $inscriptions): ?>
            <tr>
                <td><?= h($inscriptions->id) ?></td>
                <td><?= h($inscriptions->registration) ?></td>
                <td><?= h($inscriptions->cost) ?></td>
                <td><?= h($inscriptions->level) ?></td>
                <td><?= h($inscriptions->grade_id) ?></td>
                <!--<td><?= h($inscriptions->student_id) ?></td>-->
                <td><?= h($inscriptions->employee_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Inscriptions', 'action' => 'view', $inscriptions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Inscriptions', 'action' => 'edit', $inscriptions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inscriptions', 'action' => 'delete', $inscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inscriptions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
		</div>
    </div>
	
    <div class="container-fluid">
        <h4><?= __('Relacion de notas') ?></h4>
		<div class="table-responsive">
        <?php if (!empty($student->scores)): ?>
			<table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Note1') ?></th>
                <th scope="col"><?= __('Note2') ?></th>
                <th scope="col"><?= __('Note3') ?></th>
                <th scope="col"><?= __('Note4') ?></th>
                <!--<th scope="col"><?= __('Student Id') ?></th>-->
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->scores as $scores): ?>
            <tr>
                <td><?= h($scores->id) ?></td>
                <td><?= h($scores->note1) ?></td>
                <td><?= h($scores->note2) ?></td>
                <td><?= h($scores->note3) ?></td>
                <td><?= h($scores->note4) ?></td>
                <!--<td><?= h($scores->student_id) ?></td>-->
                <td><?= h($scores->course_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Scores', 'action' => 'view', $scores->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Scores', 'action' => 'edit', $scores->id], ['class' => 'btn btn-warning']) ?>
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
