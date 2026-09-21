<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle($next)
    {
        $lava = lava_instance();

        if (!isset($lava->properties['session'])) {
            $lava->call->library('session');
        }

        $session = $lava->session;

        if (!$session || !$session->userdata('logged_in')) {
            redirect('login');
            return;
        }

        return $next();
    }
}
