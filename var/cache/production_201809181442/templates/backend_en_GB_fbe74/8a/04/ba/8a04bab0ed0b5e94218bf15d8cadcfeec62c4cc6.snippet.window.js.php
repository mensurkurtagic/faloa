<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:40
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\view\settings\window.js" */ ?>
<?php /*%%SmartyHeaderCode:28486455bc3b634ab3f01-20718063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a04bab0ed0b5e94218bf15d8cadcfeec62c4cc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\view\\settings\\window.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28486455bc3b634ab3f01-20718063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b634ab86f5_46664004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b634ab86f5_46664004')) {function content_5bc3b634ab86f5_46664004($_smarty_tpl) {?>/**
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

//

//

Ext.define('Shopware.apps.Theme.view.settings.Window', {
    extend: 'Shopware.window.Detail',
    alias: 'widget.theme-settings-window',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings_window','default'=>'System configuration','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_window','default'=>'System configuration','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System configuration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_window','default'=>'System configuration','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    height: 365,
    width: 344,
    modal: true
});

//

<?php }} ?>