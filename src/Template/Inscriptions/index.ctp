<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inscription[]|\Cake\Collection\CollectionInterface $inscriptions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inscription'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inscriptions index large-9 medium-8 columns content">
    <h3><?= __('Inscriptions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscriptions as $inscription): ?>
            <tr>
                <td><?= $this->Number->format($inscription->id) ?></td>
                <td><?= h($inscription->registration) ?></td>
                <td><?= $this->Number->format($inscription->cost) ?></td>
                <td><?= h($inscription->level) ?></td>
                <td><?= $inscription->has('grade') ? $this->Html->link($inscription->grade->id, ['controller' => 'Grades', 'action' => 'view', $inscription->grade->id]) : '' ?></td>
                <td><?= $inscription->has('student') ? $this->Html->link($inscription->student->name, ['controller' => 'Students', 'action' => 'view', $inscription->student->id]) : '' ?></td>
                <td><?= $inscription->has('employee') ? $this->Html->link($inscription->employee->name, ['controller' => 'Employees', 'action' => 'view', $inscription->employee->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inscription->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inscription->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inscription->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
</div>
