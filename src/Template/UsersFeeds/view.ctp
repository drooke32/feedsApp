<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Users Feed'), ['action' => 'edit', $usersFeed->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Feed'), ['action' => 'delete', $usersFeed->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersFeed->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Feeds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Feed'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Feeds'), ['controller' => 'Feeds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feed'), ['controller' => 'Feeds', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="usersFeeds view large-10 medium-9 columns">
    <h2><?= h($usersFeed->user_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $usersFeed->has('user') ? $this->Html->link($usersFeed->user->id, ['controller' => 'Users', 'action' => 'view', $usersFeed->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Feed') ?></h6>
            <p><?= $usersFeed->has('feed') ? $this->Html->link($usersFeed->feed->id, ['controller' => 'Feeds', 'action' => 'view', $usersFeed->feed->id]) : '' ?></p>
        </div>
    </div>
</div>
