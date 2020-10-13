<?php 

function tnatheme_globals() {
    global $pre_path;
    global $pre_crumbs;
    if (isset($_SERVER['HTTP_X_NGINX_PROXY'])) {
        $pre_crumbs = array(
            'About us' => '/about/',
            'Commercial opportunities' => '/about/commercial-opportunities/'
        );
        $pre_path = '/about/commercial-opportunities';
    } elseif (substr($_SERVER['REMOTE_ADDR'], 0, 3) === '10.') {
        $pre_path = '';
        $pre_crumbs = array(
            'Commercial opportunities' => '/'
        );
    } else {
        $pre_crumbs = array(
            'About us' => '/about/',
            'Commercial opportunities' => '/about/commercial-opportunities/'
        );
        $pre_path = '/about/commercial-opportunities';
    }
}
tnatheme_globals();
