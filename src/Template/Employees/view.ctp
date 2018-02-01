<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="container-fluid">
	<div class="container">
    <h3><?= h($employee->name) ?></h3>
	<div class="row">
			<div class="col-md-4">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th scope="row"><?= __('Name') ?></th>
							<td><?= h($employee->name) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Code') ?></th>
							<td><?= h($employee->code) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Address') ?></th>
							<td><?= h($employee->address) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Dni') ?></th>
							<td><?= h($employee->dni) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Sexo') ?></th>
							<td><?= h($employee->sexo) ?></td>
						</tr>
						<tr>
							<th scope="row"><?= __('Id') ?></th>
							<td><?= $this->Number->format($employee->id) ?></td>
						</tr>
					</table>
				</div>
			</div>	
			<div class="col-md-4"></div>
			<div class="col-md-4" style="width: 100px; height: 100px; background:#cccccc; margin-left: 15px"><img src="">apoderado</div>	
		</div>
	</div>				
					
    <div class="container-fluid">
        <h4><?= __('Relacion de inscritos') ?></h4>
		<div class="table-responsive">
        <?php if (!empty($employee->inscriptions)): ?>
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
            <?php foreach ($employee->inscriptions as $inscriptions): ?>
            <tr>
                <td><?= h($inscriptions->id) ?></td>
                <td><?= h($inscriptions->registration) ?></td>
                <td><?= h($inscriptions->cost) ?></td>
                <td><?= h($inscriptions->level) ?></td>
                <td><?= h($inscriptions->grade_id) ?></td>
                <td><?= h($inscriptions->student_id) ?></td>
                <td><?= h($inscriptions->employee_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Inscriptions', 'action' => 'view', $inscriptions->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Inscriptions', 'action' => 'edit', $inscriptions->id], ['class' => 'btn btn-warning']) ?>
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
