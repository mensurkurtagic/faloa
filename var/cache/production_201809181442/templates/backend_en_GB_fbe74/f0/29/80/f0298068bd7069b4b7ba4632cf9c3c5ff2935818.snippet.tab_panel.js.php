<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:40
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\view\detail\containers\tab_panel.js" */ ?>
<?php /*%%SmartyHeaderCode:13170518765bc3b6346777a5-52828164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0298068bd7069b4b7ba4632cf9c3c5ff2935818' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\view\\detail\\containers\\tab_panel.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13170518765bc3b6346777a5-52828164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b6346798f3_48250467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b6346798f3_48250467')) {function content_5bc3b6346798f3_48250467($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.detail.containers.TabPanel', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.theme-tab-panel',
    bodyStyle: 'background: #F9FAFA',
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    defaults: {
        flex: 1
    }
});
<?php }} ?>