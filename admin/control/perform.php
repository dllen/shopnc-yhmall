<?php
/**
 * 网站设置
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
class performControl extends SystemControl{
	public function __construct(){
		parent::__construct();
		Language::read('setting');
	}

	/**
	 * 性能优化
	 */
	public function performOp(){
		if ($_GET['type'] == 'clear'){
			$lang	= Language::getLangContent();
			$cache = Cache::getInstance(C('cache.type'));
			$cache->clear();
			showMessage($lang['nc_common_op_succ']);
		}
		Tpl::showpage('setting.perform_opt');
	}

}
