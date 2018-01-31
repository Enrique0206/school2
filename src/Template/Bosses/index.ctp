<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boss[]|\Cake\Collection\CollectionInterface $bosses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Boss'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bosses index large-9 medium-8 columns content">
    <h3><?= __('Bosses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bosses as $boss): ?>
            <tr>
                <td><?= $this->Number->format($boss->id) ?></td>
                <td><?= h($boss->name) ?></td>
                <td><?= h($boss->phone) ?></td>
                <td><?= h($boss->dni) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $boss->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $boss->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $boss->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boss->id)]) ?>
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
