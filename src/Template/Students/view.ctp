<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
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
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->name) ?></h3>
    <table class="vertical-table">
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
    <div class="related">
        <h4><?= __('Related Inscriptions') ?></h4>
        <?php if (!empty($student->inscriptions)): ?>
        <table cellpadding="0" cellspacing="0">
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
            <?php foreach ($student->inscriptions as $inscriptions): ?>
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
    <div class="related">
        <h4><?= __('Related Scores') ?></h4>
        <?php if (!empty($student->scores)): ?>
        <table cellpadding="0" cellspacing="0">
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
            <?php foreach ($student->scores as $scores): ?>
            <tr>
                <td><?= h($scores->id) ?></td>
                <td><?= h($scores->note1) ?></td>
                <td><?= h($scores->note2) ?></td>
                <td><?= h($scores->note3) ?></td>
                <td><?= h($scores->note4) ?></td>
                <td><?= h($scores->student_id) ?></td>
                <td><?= h($scores->course_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Scores', 'action' => 'view', $scores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Scores', 'action' => 'edit', $scores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Scores', 'action' => 'delete', $scores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
