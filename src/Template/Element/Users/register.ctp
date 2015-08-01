<?= $this->Html->script('Users/register'); ?>
<?= $this->Html->css('Users/register'); ?>
<?= $this->Form->create(null, ['id' => 'regForm']) ?>
    <?= $this->Form->input('email', ['class' => 'form-control', 'id'=>'regEmail', 'type'=>'text', 'placeholder'=>'Email', 'label' => false, 
        'templates' => ['inputContainer'=>'<div class="form-group form-group-lg"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span> {{content}} </div><span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span><span class="help-block hidden">Invalid email format.</span></div>']
        ]); ?>
    <?= $this->Form->input('username', ['class' => 'form-control', 'id'=>'regUsername', 'type'=>'text', 'placeholder'=>'Username', 'label' => false, 
        'templates' => ['inputContainer'=>'<div class="form-group form-group-lg"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> {{content}} </div><span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span><span class="help-block hidden">Username must not be empty.</span></div>']
        ]); ?>
    <?= $this->Form->input('password', ['class' => 'form-control', 'id'=>'regPassword1', 'type'=>'password', 'minlength'=>'8', 'placeholder'=>'Password','label' => false,
        'templates' => ['inputContainer'=>'<div class="form-group form-group-lg"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span> {{content}} </div><span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span><span class="help-block hidden">Password must be at least 8 characters.</span></div>']
        ]); ?>
    <?= $this->Form->input('confirm_password', ['class' => 'form-control', 'id'=>'regPassword2', 'type'=>'password', 'minlength'=>'8', 'placeholder'=>'Confirm Password','label' => false,
        'templates' => ['inputContainer'=>'<div class="form-group form-group-lg"><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span> {{content}}</div><span class="glyphicon glyphicon-remove form-control-feedback hidden" aria-hidden="true"></span><span class="help-block hidden">Passwords must match.</span></div>']
        ]); ?>
    <?= $this->Form->button('<span class="fa fa-spinner fa-pulse hidden"></span> Register', ['type'=>'submit', 'class'=>'btn btn-lg btn-primary pull-right', 'id' => 'regSubmit']); ?>
<?= $this->Form->end() ?>