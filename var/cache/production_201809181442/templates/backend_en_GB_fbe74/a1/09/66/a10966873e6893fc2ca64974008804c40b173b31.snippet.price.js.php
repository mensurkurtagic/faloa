<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:50
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\article\model\price.js" */ ?>
<?php /*%%SmartyHeaderCode:2395485185bc3b4225d54e0-39849872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a10966873e6893fc2ca64974008804c40b173b31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\article\\model\\price.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2395485185bc3b4225d54e0-39849872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b4225da8a4_01487960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b4225da8a4_01487960')) {function content_5bc3b4225da8a4_01487960($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Article
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Price', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'from', type: 'int' },
        { name: 'to', type: 'string' },
        { name: 'price', type: 'float' },
        { name: 'pseudoPrice', type: 'float' },
        { name: 'percent', type: 'float' },
        { name: 'cloned', type: 'boolean', defaultValue: false },
        { name: 'customerGroupKey', type: 'string' }
    ],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Base.model.CustomerGroup', name: 'getCustomerGroup', associationKey: 'customerGroup'}
    ]

});
//
<?php }} ?>