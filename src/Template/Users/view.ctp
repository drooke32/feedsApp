<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Feed Requests'), ['controller' => 'FeedRequests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feed Request'), ['controller' => 'FeedRequests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Feeds'), ['controller' => 'Feeds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feed'), ['controller' => 'Feeds', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Verified') ?></h6>
            <p><?= $user->verified ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Feed Requests') ?></h4>
    <?php if (!empty($user->feed_requests)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Site Name') ?></th>
            <th><?= __('Url') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->feed_requests as $feedRequests): ?>
        <tr>
            <td><?= h($feedRequests->id) ?></td>
            <td><?= h($feedRequests->user_id) ?></td>
            <td><?= h($feedRequests->site_name) ?></td>
            <td><?= h($feedRequests->url) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'FeedRequests', 'action' => 'view', $feedRequests->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'FeedRequests', 'action' => 'edit', $feedRequests->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FeedRequests', 'action' => 'delete', $feedRequests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedRequests->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Feeds') ?></h4>
    <?php if (!empty($user->feeds)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Sitename') ?></th>
            <th><?= __('Url') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->feeds as $feeds): ?>
        <tr>
            <td><?= h($feeds->id) ?></td>
            <td><?= h($feeds->sitename) ?></td>
            <td><?= h($feeds->url) ?></td>
            <td><?= h($feeds->created) ?></td>
            <td><?= h($feeds->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Feeds', 'action' => 'view', $feeds->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Feeds', 'action' => 'edit', $feeds->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Feeds', 'action' => 'delete', $feeds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feeds->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
