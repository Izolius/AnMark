<?php

function currentUser(){
    $CI =& get_instance();
    return $CI->session->userdata('user');
}
