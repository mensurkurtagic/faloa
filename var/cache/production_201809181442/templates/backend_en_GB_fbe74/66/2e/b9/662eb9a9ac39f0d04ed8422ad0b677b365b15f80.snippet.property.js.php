<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:58
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\article\store\property.js" */ ?>
<?php /*%%SmartyHeaderCode:1314486065bc3b42a537fb4-06132780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '662eb9a9ac39f0d04ed8422ad0b677b365b15f80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\article\\store\\property.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314486065bc3b42a537fb4-06132780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b42a544758_73526949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b42a544758_73526949')) {function content_5bc3b42a544758_73526949($_smarty_tpl) {?>/**
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
 * Shopware Store - Article Module
 */
//
Ext.define('Shopware.apps.Article.store.Property', {
    extend: 'Ext.data.Store',
    alias: 'widget.article-store-property',
    model: 'Shopware.apps.Article.model.Property',
    batch: true,
    autoLoad: false,
    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/faloa/backend/Article/getPropertyList';?>',
            update: '<?php echo '/faloa/backend/Article/setPropertyList/targetField/properties';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>