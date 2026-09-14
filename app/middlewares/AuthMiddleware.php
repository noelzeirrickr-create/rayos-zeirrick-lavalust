<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle(Closure $next)
    {
        $LAVA = lava_instance();

        if (!$LAVA->session->userdata('authenticated')) {
            $LAVA->response->redirect(site_url('login'));
            return;
        }

        return $next();
    }
}