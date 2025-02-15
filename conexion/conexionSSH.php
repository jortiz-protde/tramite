<?php
/**
 * Created by PhpStorm.
 * User: anthonywainer
 * Date: 19/11/2018
 * Time: 10:34
 */

$host  = "192.168.1.88";
$port = 2222;
$port_ngnix = 81;
$ftp_user_name = "anthonywainerNO";
$ftp_user_pass = "apci2018";
$rutaUpload = '/opt/stdd/files/';

$sftp = new SFTPConnection($host, $port);
$sftp->login($ftp_user_name, $ftp_user_pass);