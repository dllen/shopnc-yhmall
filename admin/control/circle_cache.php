<?php
/**
 * 圈子话题管理
 *
 * 
 *
 *
 * @copyright  Copyright (c) 2007-2013 ShopNC Inc. (http://www.cnnewyork.com)
 * @license    http://www.cnnewyork.com
 * @link       http://www.cnnewyork.com
 * @since      File available since Release v1.1
 */
defined('InShopNC') or exit('Access Invalid!');
class circle_cacheControl extends SystemControl{
	public function __construct(){
		parent::__construct();
	}
	public function indexOp(){
		H('circle_level',true);
		showMessage(L('nc_common_op_succ'), 'index.php?act=circle_setting');
	}
}