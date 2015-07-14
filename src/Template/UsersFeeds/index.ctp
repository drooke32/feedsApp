<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Users Feed'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feeds'), ['controller' => 'Feeds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feed'), ['controller' => 'Feeds', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="usersFeeds index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('feed_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($usersFeeds as $usersFeed): ?>
        <tr>
            <td>
                <?= $usersFeed->has('user') ? $this->Html->link($usersFeed->user->id, ['controller' => 'Users', 'action' => 'view', $usersFeed->user->id]) : '' ?>
            </td>
            <td>
                <?= $usersFeed->has('feed') ? $this->Html->link($usersFeed->feed->id, ['controller' => 'Feeds', 'action' => 'view', $usersFeed->feed->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $usersFeed->user_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersFeed->user_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersFeed->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersFeed->user_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
