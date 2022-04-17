<?php

function check_already_login() {
    $CI =& get_instance();
    $user_session = $CI->session->userdata('userid');
    if($user_session) {
        redirect('dashboard','antonim/antonim','antonim/antonimcreate', 'antonim/antonimedit', 'sinonim/sinonimcreate', 'sinonim/sinonimedit', 
                 'sinonim/sinonim','baku/baku', 'baku/bakuedit', 'baku/bakucreate');
    }
}


function check_not_login() {
    $CI =& get_instance();
    $user_session = $CI->session->userdata('userid');
    if(!$user_session) {
        redirect('auth/login');
    }
}