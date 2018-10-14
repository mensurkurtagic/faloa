<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:25:23
         compiled from "C:\xampp\htdocs\faloa\engine\Shopware\Plugins\Default\Backend\SwagUpdate\Views\backend\index\view\swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:6318996745bc3b443c4dd76-56076359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4217c381fcdaaf255225cda3e247fab618b1462' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\engine\\Shopware\\Plugins\\Default\\Backend\\SwagUpdate\\Views\\backend\\index\\view\\swag_update_menu.js',
      1 => 1537274534,
      2 => 'file',
    ),
    '7e19f18d4766e38f2b57c69c3f57ca03ff52fbc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\index\\store\\news.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6318996745bc3b443c4dd76-56076359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b443ca50e3_33708560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b443ca50e3_33708560')) {function content_5bc3b443ca50e3_33708560($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.store.News', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Index.model.News',
    remoteFilter: true,
    clearOnLoad: true,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/faloa/backend/widgets/getShopwareNews';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>