<?php
/* check.php
 * site availability check
 *
 * $Id$
 */
$i_name = strtolower($i_name);

$r = array(
    'domain' => "$i_name.".BASE_DOMAIN,
    'available' => sites\is_available($i_name)
);
header('Content-Type: application/json');
echo json_encode($r);