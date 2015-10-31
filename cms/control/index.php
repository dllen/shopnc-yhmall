<?php
/**
 * cms首页
 *
 *
 *
 * @copyright  Copyright (c) 2007-2013 ShopNC Inc. (http://www.cnnewyork.com)
 * @license    http://www.cnnewyork.com
 * @link       http://www.cnnewyork.com
 * @since      File available since Release v1.1
 */
defined('InShopNC') or exit('Access Invalid!');
class indexControl extends CMSHomeControl{

	public function __construct() {
		parent::__construct();
        Tpl::output('index_sign','index');
    }
	public function indexOp(){
        Tpl::showpage('index');
	}
}
