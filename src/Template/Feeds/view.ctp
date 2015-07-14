<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Feed'), ['action' => 'edit', $feed->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feed'), ['action' => 'delete', $feed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feed->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feeds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feed'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Favourites'), ['controller' => 'UsersFavourites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Favourite'), ['controller' => 'UsersFavourites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="feeds view large-10 medium-9 columns">
    <h2><?= h($feed->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Sitename') ?></h6>
            <p><?= h($feed->sitename) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($feed->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($feed->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($feed->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Url') ?></h6>
            <?= $this->Text->autoParagraph(h($feed->url)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users Favourites') ?></h4>
    <?php if (!empty($feed->users_favourites)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Feed Id') ?></th>
            <th><?= __('Post Xml') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($feed->users_favourites as $usersFavourites): ?>
        <tr>
            <td><?= h($usersFavourites->id) ?></td>
            <td><?= h($usersFavourites->user_id) ?></td>
            <td><?= h($usersFavourites->feed_id) ?></td>
            <td><?= h($usersFavourites->post_xml) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'UsersFavourites', 'action' => 'view', $usersFavourites->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'UsersFavourites', 'action' => 'edit', $usersFavourites->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersFavourites', 'action' => 'delete', $usersFavourites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersFavourites->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($feed->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Verified') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($feed->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->username) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->verified) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
