
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Articles') ?></h3>
      <?= $this->Form->create('Some') ?>

      
        <?=
            $this->Form->input('search')
           
        ?>
    
    <?= $this->Form->button(__('Search')) ?>
    <?= $this->Form->end() ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('category name') ?></th>
        
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        
            <?php 
           
            foreach ($articles as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
         
                <td><?= h($user->name) ?></td>
                <td><?= h($user->body) ?></td>
                <td><?= h($user->quantity) ?></td>
                <td><?= "<br><a href = '".$this->Url->build(["controller" => "Categories","action"=>"index"])."'>". ($user->category->name)."</a>" ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
      
    </div>
</div>
