#!/usr/bin/env php
<?php
/*
 * This file is part of the {{ }} package.
 *
 * (c) Yo-An Lin <cornelius.howl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
$data = parse_ini_file('package.ini',true);
var_dump( $data );
echo "ok\n";
