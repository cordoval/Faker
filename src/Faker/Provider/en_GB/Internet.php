<?php

namespace Faker\Provider\en_GB;

require_once __DIR__ . '/../Internet.php';

class Internet extends \Faker\Provider\Internet
{
	protected static $safeEmailTld = array('org', 'com', 'net', 'co.uk');
	protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'gmail.co.uk', 'yahoo.co.uk', 'hotmail.co.uk');
	protected static $tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'co.uk');
}