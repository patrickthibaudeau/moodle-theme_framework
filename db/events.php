<?php
$observers = array(
    array(
        'eventname'   => '\core\event\dashboard_viewed',
        'callback'    => '\theme_framework\events::redirect_user_to_home_page',
        'priority'    => 9999,
        'internal'    => false,
    ),
);