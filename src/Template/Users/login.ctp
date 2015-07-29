<div class="jumbotron">
    <h2 class='text-center'><em>Not everyone chooses TheFEEDLife...</em></h2>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <ul class='nav nav-pills nav-justified' role='tablist'>
            <li role='presentation' class='active'>
                <a href='#login' aria-controls='login' role='tab' data-toggle='pill'>Login</a>
            </li>
            <li role='presentation'>
                <a href='#register' aria-controls='register' role='tab' data-toggle='pill'>Register</a>
            </li>
        </ul>
        <div class='tab-content'>

            <? //login form ?>
            <div role='tabpanel' class='tab-pane fade in active' id='login'>
                <div class='well well-lg'>
                    <?= $this->element('Users/login'); ?>
                </div>
            </div>

            <? //register form ?>
            <div role='tabpanel' class='tab-pane fade' id='register'>
                <div class='well well-lg'>
                    <?= $this->element('Users/register'); ?>
                </div>
            </div>
        </div>
    </div>
</div>