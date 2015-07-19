<?= $this->Form->create(null, ['action' => 'add']) ?>
    <?= $this->Form->input('email', ['class' => 'form-control', 'type'=>'email', 'placeholder'=>'Email', 'label' => false, 
            'templates' => ['inputContainer'=>'<div class="form-group form-group-lg">{{content}}</div>']
        ]); ?>
    <?= $this->Form->input('username', ['class' => 'form-control', 'type'=>'text', 'placeholder'=>'Username', 'label' => false, 
            'templates' => ['inputContainer'=>'<div class="form-group form-group-lg">{{content}}</div>']
        ]); ?>
    <?= $this->Form->input('password', ['class' => 'form-control', 'type'=>'password', 'placeholder'=>'Password','label' => false,
        'templates' => ['inputContainer'=>'<div class="form-group form-group-lg">{{content}}</div>']
        ]); ?>
    <?= $this->Form->input('confirm_password', ['class' => 'form-control', 'type'=>'password', 'placeholder'=>'Confirm Password','label' => false,
        'templates' => ['inputContainer'=>'<div class="form-group form-group-lg">{{content}}</div>']
        ]); ?>
    <?= $this->Form->button('Register', ['type'=>'submit', 'class'=>'btn btn-lg btn-primary pull-right']) ?>
<?= $this->Form->end() ?>