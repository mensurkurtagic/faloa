<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:52
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\article_list\model\operator.js" */ ?>
<?php /*%%SmartyHeaderCode:3618841985bc3b424b45052-31664689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b74349748ca9514e96f486bdf3aba82a541700fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\article_list\\model\\operator.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3618841985bc3b424b45052-31664689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b424b4a524_47628108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b424b4a524_47628108')) {function content_5bc3b424b4a524_47628108($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Model - Operator model
 *
 * Represents a single operator o be applied to a given filter
 */
//
Ext.define('Shopware.apps.ArticleList.model.Operator', {
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
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' }
    ]
});
//
<?php }} ?>