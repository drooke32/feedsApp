<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersFeed->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersFeed->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Feeds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feeds'), ['controller' => 'Feeds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feed'), ['controller' => 'Feeds', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="usersFeeds form large-10 medium-9 columns">
    <?= $this->Form->create($usersFeed) ?>
    <fieldset>
        <legend><?= __('Edit Users Feed') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
