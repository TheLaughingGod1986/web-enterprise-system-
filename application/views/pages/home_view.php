<?php
if ($this->session->logged_in) {

 echo "Welcome back", $this->session->name;
}

else {
    echo form_open('Login_cntrl/login');

    echo form_label('E-mail:');
    echo form_error('email');
    echo form_input(array('id' => 'email', 'name' => 'email', 'placeholder' => 'example@gre.ac.uk'));

    echo form_label('Password:');
    echo form_error('password');
    echo form_input(array('id' => 'password', 'name' => 'password', 'placeholder' => 'password'));

    echo form_submit(array('id' => 'submit', 'value' => 'Login'));
    echo form_close();
}



