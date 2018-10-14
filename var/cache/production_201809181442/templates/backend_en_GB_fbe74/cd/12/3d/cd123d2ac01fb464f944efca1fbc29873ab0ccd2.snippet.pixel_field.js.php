<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:40
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\view\detail\fields\pixel_field.js" */ ?>
<?php /*%%SmartyHeaderCode:9867682185bc3b6347750a8-15884976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd123d2ac01fb464f944efca1fbc29873ab0ccd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\view\\detail\\fields\\pixel_field.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9867682185bc3b6347750a8-15884976',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b634777762_82287783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b634777762_82287783')) {function content_5bc3b634777762_82287783($_smarty_tpl) {?>/**
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
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.view.detail.fields.PixelField', {
    extend: 'Shopware.apps.Theme.view.detail.fields.Suffix',

    alias: 'widget.theme-pixel-field',

    suffix: 'px',
    fallbackValue: '0',
    elementStyle: 'text-align: right'
});

//

<?php }} ?>