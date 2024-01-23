<?php defined('BASEPATH') OR exit('No direct script access allowed');

// $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'smtp.example.com', 
//     'smtp_port' => 465,
//     'smtp_user' => 'no-reply@example.com',
//     'smtp_pass' => '12345!',
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'text', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '4', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => TRUE
// );

$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'sandbox.smtp.mailtrap.io',
    'smtp_port' => 2525,
    'smtp_user' => '4105703595d7de',
    'smtp_pass' => 'b346ceff5a4b29',
    'crlf' => "\r\n",
    'newline' => "\r\n"
  );