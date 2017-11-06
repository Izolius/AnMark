<?php
function script_tag($src){
    $CI =& get_instance();
    if (isset($src)){
        return '<script src="'.$CI->config->slash_item('base_url').$src.'" ></script>';
    }
    return '';
}
?>