<?php
/* s.php
 * PHP session server controller, debugger
 *
 * $Id$
 */
if (isset($i_reset)) {
    sess($i_reset, null);
}
if (!isset($i_debug)) {
    header('Location: /');
    exit;
}

header('Content-type: text/plain');
print_r($_SESSION);
function request_k(&$item, $key) {
    if (substr($key, 0, 5) == 'HTTP_') return;
    if (substr($key, 0, 7) == 'REMOTE_') return;
    if (substr($key, 0, 8) == 'REQUEST_') return;
    if (substr($key, 0, 7) == 'SCRIPT_') return;
    $item = '';
}
array_walk($_SERVER, request_k);
ksort($_SERVER);
print_r(array_filter($_SERVER));