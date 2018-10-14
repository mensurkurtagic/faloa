<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:40
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\view\detail\fields\percent_field.js" */ ?>
<?php /*%%SmartyHeaderCode:4352026935bc3b634962fc8-45263856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3f08dc65e9c39361712aa1bb0eb8b63b189728' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\view\\detail\\fields\\percent_field.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4352026935bc3b634962fc8-45263856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b634965929_75084133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b634965929_75084133')) {function content_5bc3b634965929_75084133($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.detail.fields.PercentField', {
    extend: 'Shopware.apps.Theme.view.detail.fields.Suffix',
    alias: 'widget.theme-percent-field',
    suffix: '%',
    fallbackValue: '0',
    elementStyle: 'text-align: right'
});

//

<?php }} ?>