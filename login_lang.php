<?php

//////////////////////////////////////////////////////////////
//===========================================================
// dashboard_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('Hacking Attempt');

}

$l['no_username'] = '您没填用户名';
$l['no_password'] = '您没填密码';
$l['too_many_attempts'] = 'You have used up your failed login quota of '.$globals['login_attempts'].' failed attempts! <b>Please wait '.$globals['login_ban_time'].' minutes before trying again.</b> Don\'t forget that the password is case sensitive. Forgotten your password? Please try the <a href="'.$globals['index'].'act=login&sa=fpass">Forgot Password</a> utility.';

$l['<title>'] = '登录';
$l['sign_in'] = '登录';
$l['log_user'] = '邮箱或用户名';
$l['log_pass'] = '密码';
$l['login'] = '登录';
$l['sub_but'] = '登录';

$l['<title_fpass>'] = '忘记密码';
$l['pass_nomatch'] = '您输入的密码好像不太对的样子';
$l['forgotpass'] = '忘记密码';
$l['emailuser'] = '邮箱';
$l['enteremail'] = '请输入您的邮箱';
$l['sub_email'] = '提交';
$l['no_email'] = '您还没提交邮箱呢';
$l['invalidemail'] = '您提交的邮箱好像不太对的样子';
$l['mail_sub'] = '重置密码';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
https://{{node_ip}}:4083/index.php?act=login&sa=resetpass&key=&soft-1;

Please Note : Above link is valid for 24 hours only.

Regards,
'.$globals['sn'];
$l['mail_done'] = 'A mail has been sent with the details to reset your password';
$l['back_to_login'] = 'Back to Login';

$l['<title_reset>'] = 'Reset Password';
$l['resetpass'] = 'Reset Password';
$l['log_new_pass'] = 'New password'; 
$l['log_reppass'] = 'Confirm Password';
$l['changepass'] = 'Change Password';
$l['no_key'] = 'No Reset Key was submitted';
$l['invalidkey'] = 'You specified an invalid key';
$l['no_new'] = 'Please enter valid Password';
$l['no_reppass'] = 'Please enter confirm password';
$l['no_match'] = 'The passwords you gave do not match';
$l['keyexpire'] = 'Key is no longer valid';
$l['passchanged'] = 'Password Changed Successfully. Please proceed to <a href="'.$globals['index'].'act=login">Login</a>';
$l['forgot_pass'] = 'Forgot Password';

?>
