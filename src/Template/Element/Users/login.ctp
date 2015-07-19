<?= $this->Form->create(null, ['action' => 'login']) ?>
    <?= $this->Form->input('email', ['class' => 'form-control', 'type'=>'email', 'placeholder'=>'Email', 'label' => false, 
            'templates' => ['inputContainer'=>'<div class="form-group form-group-lg">{{content}}</div>']
        ]); ?>
    <?= $this->Form->input('password', ['class' => 'form-control', 'type'=>'password', 'placeholder'=>'Password','label' => false,
        'templates' => ['inputContainer'=>'<div class="form-group form-group-lg">{{content}}</div>']
        ]); ?>
    <?= $this->Form->button('Login', ['type'=>'submit', 'class'=>'btn btn-lg btn-primary pull-right']) ?>
<?= $this->Form->end() ?>
