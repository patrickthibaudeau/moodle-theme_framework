<?php

namespace theme_framework;

class events
{
    public static function redirect_user_to_home_page() {
        global $CFG;
        $config = get_config('theme_framework');
        redirect($CFG->wwwroot . $config->redirect_url);
    }
}