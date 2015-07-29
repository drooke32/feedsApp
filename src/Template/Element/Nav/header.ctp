<?php
$user = $this->request->session()->read('Auth.User');
$homeDest = !empty($user) ? '/feeds/index' : '/users/login';
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php if (!empty($user)): ?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php endif; ?>
            <?= $this->Html->link('TheFEEDLife', $homeDest, ['class'=>'navbar-brand']); ?>
        </div>
        <?php if (!empty($user)): ?>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="nav navbar-nav">
                <li><?= $this->Html->link('Feed', '#', ['class'=>'navbar-link']); ?></li>
                <li><?= $this->Html->link('Requests', '#', ['class'=>'navbar-link']); ?></li>
                <li><?= $this->Html->link('Account', '#', ['class'=>'navbar-link']); ?></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><?= $this->Html->link('Logout', '/users/logout', ['class'=>'navbar-link']); ?></li>
                <li><h4 class="navbar-text"><?= $user['username']; ?></h4></li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</nav>