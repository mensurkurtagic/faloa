<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:50
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\article\model\unit.js" */ ?>
<?php /*%%SmartyHeaderCode:3918322185bc3b42241f690-94389852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf7a70769b7346e010e6d54c6db5cd1d03955fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\article\\model\\unit.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3918322185bc3b42241f690-94389852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b4224237e7_91577352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b4224237e7_91577352')) {function content_5bc3b4224237e7_91577352($_smarty_tpl) {?>/**
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
 * @subpackage Unit
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Article.model.Unit', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
     fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' }
     ]

});
//

<?php }} ?>