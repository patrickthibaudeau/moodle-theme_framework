<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// A description shown in the admin theme selector.
$string['choosereadme'] = 'Theme framework is a child theme of Boost.';
// The name of our plugin.
$string['pluginname'] = 'Framework';
// We need to include a lang string for each block region.
$string['region-side-pre'] = 'Right';
$string['configtitle'] = 'Configuration';
$string['generalsettings'] = 'General';
$string['redirect_url'] = 'Redirect URL';
$string['redirect_url_desc'] = 'Enter the path where users should be redirected when they log in or click on the home link. Path must always start with forward slash. ex /path/to/your/plugin';
