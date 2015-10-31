<?php
/**
 * 商品与属性对应
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

class goods_attr_indexModel extends Model {
    public function __construct() {
        parent::__construct('goods_attr_index');
    }
    
    /**
     * 对应列表
     * 
     * @param array $condition
     * @param string $field
     * @return array
     */
    public function getGoodsAttrIndexList($condition, $field = '*') {
        return $this->where($condition)->field($field)->select();
    }
}