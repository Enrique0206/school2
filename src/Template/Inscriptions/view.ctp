<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inscription $inscription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inscription'), ['action' => 'edit', $inscription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inscription'), ['action' => 'delete', $inscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inscription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inscription'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inscriptions view large-9 medium-8 columns content">
    <h3><?= h($inscription->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= h($inscription->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= $inscription->has('grade') ? $this->Html->link($inscription->grade->id, ['controller' => 'Grades', 'action' => 'view', $inscription->grade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $inscription->has('student') ? $this->Html->link($inscription->student->name, ['controller' => 'Students', 'action' => 'view', $inscription->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $inscription->has('employee') ? $this->Html->link($inscription->employee->name, ['controller' => 'Employees', 'action' => 'view', $inscription->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inscription->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($inscription->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registration') ?></th>
            <td><?= h($inscription->registration) ?></td>
        </tr>
    </table>
</div>
