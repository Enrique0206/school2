<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $student->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bosses'), ['controller' => 'Bosses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Boss'), ['controller' => 'Bosses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inscription'), ['controller' => 'Inscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scores'), ['controller' => 'Scores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Score'), ['controller' => 'Scores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students form large-9 medium-8 columns content">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Edit Student') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('code');
            echo $this->Form->control('address');
            echo $this->Form->control('dni');
            echo $this->Form->control('sexo');
            echo $this->Form->control('boss_id', ['options' => $bosses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
