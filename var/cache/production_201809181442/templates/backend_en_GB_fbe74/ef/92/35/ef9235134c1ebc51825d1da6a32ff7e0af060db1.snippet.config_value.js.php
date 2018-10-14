<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:39
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\model\config_value.js" */ ?>
<?php /*%%SmartyHeaderCode:19851911965bc3b633a78516-48878303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef9235134c1ebc51825d1da6a32ff7e0af060db1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\model\\config_value.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19851911965bc3b633a78516-48878303',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b633a7ba38_71507771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b633a7ba38_71507771')) {function content_5bc3b633a7ba38_71507771($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.model.ConfigValue', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'elementName', type: 'string' },
        { name: 'elementId', type: 'int' },
        { name: 'shopId', type: 'int' },
        { name: 'value' }
    ]
});

//
<?php }} ?>