<?php
$config = array(
        'signup' => array(
                array(
                        'field' => 'first_name',
                        'label' => 'First Name',
                        'rules' => 'required|min_length[2]|max_length[50]'
                ),
                array(
                        'field' => 'last_name',
                        'label' => 'Last Name',
                        'rules' => 'required|min_length[2]|max_length[50]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[5]|max_length[50]'
                ),
                array(
                        'field' => 'passconf',
                        'label' => 'Password Confirmation',
                        'rules' => 'required|matches[password]|max_length[50]'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email|callback_email_check|max_length[100]'
                )
        ),
        'signin' => array(
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email|max_length[100]'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[5]|callback_password_check|max_length[50]'
                )
                
        )
);