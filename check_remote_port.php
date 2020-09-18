<?php
/**
 * check remote port
 * Create by L.C.J
 */
$host = '192.168.0.57';
$port = 22;

// timeout : 2sec
$connection = @fsockopen($host, $port, $errno, $errstr, 2);
if (is_resource($connection)) {
    echo $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.';
    fclose($connection);
} else {
    echo $host . ':' . $port . ' is not responding.';
}
