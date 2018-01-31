<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inscription $inscription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inscription->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inscriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($inscription) ?>
    <fieldset>
        <legend><?= __('Edit Inscription') ?></legend>
        <?php
            echo $this->Form->control('registration');
            echo $this->Form->control('cost');
            echo $this->Form->control('level');
            echo $this->Form->control('grade_id', ['options' => $grades]);
            echo $this->Form->control('student_id', ['options' => $students]);
            echo $this->Form->control('employee_id', ['options' => $employees]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
