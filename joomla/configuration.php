<?php
class JConfig {
	public $offline = '1';
	public $offline_message = 'Ce site est en maintenance.<br /> Merci de revenir ultérieurement.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'La Belle Equipe';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $dbtype = 'mysqli';
	public $host = 'localhost';
	public $user = 'root';
	public $password = '44300 Nantes';
	public $db = 'w3b';
	public $dbprefix = 'cmp1x_';
	public $live_site = '';
	public $secret = 'D8f9Hrw1B9Sgx5Da';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '127.0.0.1';
	public $ftp_port = '21';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailer = 'mail';
	public $mailfrom = 'w3b@kyldia-software.com';
	public $fromname = 'La Belle Equipe';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $log_path = '/var/www/htdocs/la-belle-equipe/joomla/logs';
	public $tmp_path = '/var/www/htdocs/la-belle-equipe/joomla/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
}