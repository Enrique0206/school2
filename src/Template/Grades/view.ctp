<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grade'), ['action' => 'edit', $grade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grade'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>-->

<div class="container-fluid">
	<div class="container">
		<h3><?= h($grade->id) ?></h3>
		<div class="row">
			<div class="col-md-4">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th scope="row"><?= __('Section') ?></th>
							<td><?= h($grade->section) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Level') ?></th>
							<td><?= h($grade->level) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Id') ?></th>
							<td><?= $this->Number->format($grade->id) ?></td>
						</tr>
					</table>
				</div>	
			</div>		
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>			
		</div>
	</div>		
	
    <div class="container-fluid">
        <h4><?= __('Relacion de Asignaturas') ?></h4>
		<div class="table-responsive">
        <?php if (!empty($grade->courses)): ?>
			<table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Grade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grade->courses as $courses): ?>
            <tr>
                <td><?= h($courses->id) ?></td>
                <td><?= h($courses->name) ?></td>
                <td><?= h($courses->grade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
		</div>
    </div>
	
    <div class="container-fluid">		
        <h4><?= __('Relacion de Inscritos') ?></h4>
		<div class="table-responsive">
        <?php if (!empty($grade->inscriptions)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Registration') ?></th>
                <th scope="col"><?= __('Cost') ?></th>
                <th scope="col"><?= __('Level') ?></th>
                <th scope="col"><?= __('Grade Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grade->inscriptions as $inscriptions): ?>
            <tr>
                <td><?= h($inscriptions->id) ?></td>
                <td><?= h($inscriptions->registration) ?></td>
                <td><?= h($inscriptions->cost) ?></td>
                <td><?= h($inscriptions->level) ?></td>
                <td><?= h($inscriptions->grade_id) ?></td>
                <td><?= h($inscriptions->student_id) ?></td>
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
