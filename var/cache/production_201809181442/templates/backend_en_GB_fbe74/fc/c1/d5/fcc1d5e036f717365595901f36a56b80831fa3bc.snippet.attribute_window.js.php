<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:55
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\product_stream\view\condition_list\field\attribute_window.js" */ ?>
<?php /*%%SmartyHeaderCode:2842572695bc3b4271348e6-21984032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc1d5e036f717365595901f36a56b80831fa3bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\product_stream\\view\\condition_list\\field\\attribute_window.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2842572695bc3b4271348e6-21984032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b42713f095_63381880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b42713f095_63381880')) {function content_5bc3b42713f095_63381880($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.AttributeWindow', {
    extend: 'Ext.window.Window',
    modal: true,
    bodyPadding: 10,
    width: 400,

    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    applyCallback: function(field) { },

    initComponent: function() {
        var me = this;

        me.items = me.createItems();
        me.dockedItems = [me.createToolbar()];
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;

        var store = Ext.create('Shopware.apps.ProductStream.store.Attribute');

        me.attributeCombo = Ext.create('Ext.form.field.ComboBox', {
            name: 'attribute',
            labelWidth: 180,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'select_product_attribute','default'=>'Select product attribute','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'select_product_attribute','default'=>'Select product attribute','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select product attribute<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'select_product_attribute','default'=>'Select product attribute','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            pageSize: 20,
            store: store,
            valueField: 'column',
            allowBlank: false,
            displayField: 'label'
        });

        me.notice = Ext.create('Ext.container.Container', {
            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute'/'input_text','default'=>'Please choose a product attribute','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'input_text','default'=>'Please choose a product attribute','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please choose a product attribute<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'input_text','default'=>'Please choose a product attribute','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            height: 40
        });

        return [me.notice, me.attributeCombo];
    },

    createToolbar: function() {
        var me = this;
        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: ['->', {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'apply','default'=>'Apply','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'apply','default'=>'Apply','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'apply','default'=>'Apply','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'primary',
                handler: function() {
                    if (me.attributeCombo.getValue()) {
                        me.applyCallback(me.attributeCombo.getValue());
                        me.destroy();
                    }
                }
            }]
        });
    }
});
//<?php }} ?>