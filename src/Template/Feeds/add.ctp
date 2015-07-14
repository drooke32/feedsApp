<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Feeds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users Favourites'), ['controller' => 'UsersFavourites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Favourite'), ['controller' => 'UsersFavourites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="feeds form large-10 medium-9 columns">
    <?= $this->Form->create($feed) ?>
    <fieldset>
        <legend><?= __('Add Feed') ?></legend>
        <?php
            echo $this->Form->input('sitename');
            echo $this->Form->input('url');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
