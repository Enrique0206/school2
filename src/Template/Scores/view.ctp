<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Score $score
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Score'), ['action' => 'edit', $score->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Score'), ['action' => 'delete', $score->id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scores view large-9 medium-8 columns content">
    <h3><?= h($score->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Note1') ?></th>
            <td><?= h($score->note1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note2') ?></th>
            <td><?= h($score->note2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note3') ?></th>
            <td><?= h($score->note3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note4') ?></th>
            <td><?= h($score->note4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $score->has('student') ? $this->Html->link($score->student->name, ['controller' => 'Students', 'action' => 'view', $score->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $score->has('course') ? $this->Html->link($score->course->name, ['controller' => 'Courses', 'action' => 'view', $score->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($score->id) ?></td>
        </tr>
    </table>
</div>
