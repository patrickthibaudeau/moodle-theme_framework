<?php

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// We will add callbacks here as we add features to our theme.
function load_all_redirects() {
    redirect_to_home();
}

function redirect_to_home() {
    global $CFG;
    $config = get_config('theme_framework');
    if ($config->redirect_url) {
    $current_url = $_SERVER['REQUEST_URI'];
// If user clicked home page link
    if ($current_url == '/?redirect=0') {
        redirect($CFG->wwwroot . $config->redirect_url);
    }
    }
}