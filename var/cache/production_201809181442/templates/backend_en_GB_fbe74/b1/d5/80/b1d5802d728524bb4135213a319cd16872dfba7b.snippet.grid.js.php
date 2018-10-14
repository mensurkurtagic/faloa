<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:54
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\product_stream\view\condition_list\field\grid.js" */ ?>
<?php /*%%SmartyHeaderCode:18513918435bc3b426759cc1-11037594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d5802d728524bb4135213a319cd16872dfba7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\product_stream\\view\\condition_list\\field\\grid.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18513918435bc3b426759cc1-11037594',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b426760fc4_65538676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b426760fc4_65538676')) {function content_5bc3b426760fc4_65538676($_smarty_tpl) {?>/**
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
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.Grid', {
    extend: 'Shopware.apps.ProductStream.view.SearchGrid',
    alias: 'widget.product-stream-field-grid',
    mixins: [ 'Ext.form.field.Base' ],
    minHeight: 90,
    maxHeight: 150,
    allowBlank: false,
    validateOnChange: false,
    idsName: 'ids',

    validate: function() {
        if (this.allowBlank) {
            return true;
        }
        var ids = this.getSelectedIds();
        var valid = !Ext.isEmpty(ids);

        if (!valid) {
            Shopware.Notification.createGrowlMessage(
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'validation_title','default'=>'Validation','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'validation_title','default'=>'Validation','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Validation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'validation_title','default'=>'Validation','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                this.getErrorMessage()
            );
        }

        return valid;
    },

    getErrorMessage: function() {
        return 'Grid is empty';
    },

    createPagingBar: function() {
        return null;
    },

    getValue: function() {
        return this.getSelectedIds();
    },

    setValue: function(value) {
        var me = this;

        me.store.load({
            params: { ids: Ext.JSON.encode(value[me.idsName]) }
        })
    },

    getSubmitData: function() {
        var value = {};

        value[this.name] = { };
        value[this.name][this.idsName] = this.getSelectedIds();
        return value;
    },

    getSelectedIds: function() {
        var ids = [], me = this;

        me.store.each(function(item) {
            ids.push(item.get('id'));
        });
        return ids;
    }
});
//<?php }} ?>