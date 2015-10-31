<?php
/**
 * 支付宝返回地址
 *
 * 
 * @copyright  Copyright (c) 2007-2013 ShopNC Inc. (http://www.cnnewyork.com)
 * @license    http://www.cnnewyork.com
 * @link       http://www.cnnewyork.com
 * @since      File available since Release v1.1
 */
$_GET['act']	= 'payment';
$_GET['op']		= 'return';
$_GET['payment_code'] = 'alipay';
require_once(dirname(__FILE__).'/../../../index.php');
?>