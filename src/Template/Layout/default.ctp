<?php
$description = 'FeedLife';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->Html->script('jquery-2.1.4.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class='masthead-brand'>
                            <em>
                             <?= $this->Html->link('FEEDLife', '/users/login'); ?>
                            </em>
                        </h3>
                        <nav>
                            <ul class="nav masthead-nav">
                                <li>
                                    <a href="#">Feed</a>
                                </li>
                                <li>
                                    <a href="#">Requests</a>
                                </li>
                                <li>
                                    <a href="#">Account</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="inner cover">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
                <div class="mastfoot">
                    <div class="inner">
                        <? //add footer stuff here ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
