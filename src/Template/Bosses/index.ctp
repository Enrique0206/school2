<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boss[]|\Cake\Collection\CollectionInterface $bosses
 */
?>

<div class="container-fluid">
    <h3><?= __('APODERADOS') ?></h3>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('name') ?></th>
					<th scope="col"><?= $this->Paginator->sort('phone') ?></th>
					<th scope="col"><?= $this->Paginator->sort('dni') ?></th>
					<th scope="col" class="actions"><?= __('Action') ?></th>
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
						<?= $this->Html->link(__('Ver'), ['action' => 'view', $boss->id], ['class' => 'btn btn-success']) ?>
						<?= $this->Html->link(__('Editar'), ['action' => 'edit', $boss->id], ['class' => 'btn btn-warning']) ?>
						<?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $boss->id],['confirm' => __('Are you sure you want to delete # {0}?', $boss->id)]) ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
		
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
	          
	<div style="list-style: none"><?= $this->Html->link(__('Nuevo Apoderado'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?></div>    
	
</div>
