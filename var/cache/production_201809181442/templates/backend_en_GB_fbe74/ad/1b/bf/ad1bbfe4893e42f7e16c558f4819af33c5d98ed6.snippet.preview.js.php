<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:55
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\product_stream\store\preview.js" */ ?>
<?php /*%%SmartyHeaderCode:2151315625bc3b427a361f5-48418879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad1bbfe4893e42f7e16c558f4819af33c5d98ed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\product_stream\\store\\preview.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2151315625bc3b427a361f5-48418879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b427a3c2a9_72017985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b427a3c2a9_72017985')) {function content_5bc3b427a3c2a9_72017985($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.store.Preview', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.ProductStream.model.Product',
    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/faloa/backend/ProductStream/loadPreview';?>'
        },
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
});
//<?php }} ?>