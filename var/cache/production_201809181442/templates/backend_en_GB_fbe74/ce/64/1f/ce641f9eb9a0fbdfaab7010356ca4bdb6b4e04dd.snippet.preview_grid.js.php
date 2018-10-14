<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:53
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\product_stream\view\condition_list\preview_grid.js" */ ?>
<?php /*%%SmartyHeaderCode:8136155115bc3b425716215-27682309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce641f9eb9a0fbdfaab7010356ca4bdb6b4e04dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\product_stream\\view\\condition_list\\preview_grid.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8136155115bc3b425716215-27682309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b425730838_17071053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b425730838_17071053')) {function content_5bc3b425730838_17071053($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.condition_list.PreviewGrid', {
    extend: 'Ext.grid.Panel',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'preview','default'=>'Preview','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'preview','default'=>'Preview','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'preview','default'=>'Preview','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    alias: 'widget.product-stream-preview-grid',

    initComponent: function() {
        var me = this;

        me.store = Ext.create('Shopware.apps.ProductStream.store.Preview');

        me.pagingbar = Ext.create('Ext.toolbar.Paging', {
            store: me.store,
            dock: 'bottom',
            displayInfo: true,
            doRefresh: function() {
                me.fireEvent('load-preview');
            }
        });
        me.toolbar = me.createToolbar();

        me.columns = me.createColumns();
        me.dockedItems = [me.toolbar, me.pagingbar];
        me.callParent(arguments);
    },

    createToolbar: function() {
        var me = this;

        me.customerGroupStore = Ext.create('Shopware.store.Search', {
            configure: function() {
                return { entity: 'Shopware\\Models\\Customer\\Group' }
            },
            fields: ['key', 'name']
        }).load();

        me.currencyStore = Ext.create('Shopware.store.Search', {
            configure: function() {
                return { entity: 'Shopware\\Models\\Shop\\Currency' }
            },
            fields: ['id', 'currency']
        }).load();

        me.currencyCombo = Ext.create('Ext.form.field.ComboBox', {
            displayField: 'currency',
            valueField: 'id',
            store: me.currencyStore,
            value: 1,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'currency','default'=>'Currency','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'currency','default'=>'Currency','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Currency<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'currency','default'=>'Currency','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            forceSelection: true,
            name: 'currency',
            labelWidth: 100
        });
        me.customerCombo = Ext.create('Ext.form.field.ComboBox', {
            displayField: 'name',
            valueField: 'key',
            store: me.customerGroupStore,
            value: 'EK',
            name: 'customerGroup',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'customer_group','default'=>'Customer group','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_group','default'=>'Customer group','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_group','default'=>'Customer group','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            forceSelection: true,
            labelWidth: 100
        });
        me.shopCombo = Ext.create('Ext.form.field.ComboBox', {
            store: Ext.create('Shopware.apps.Base.store.ShopLanguage').load(),
            displayField: 'name',
            valueField: 'id',
            name: 'shop',
            forceSelection: true,
            value: 1,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shop','default'=>'Shop','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shop','default'=>'Shop','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shop','default'=>'Shop','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            labelWidth: 100
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'top',
            items: [me.shopCombo, me.currencyCombo, me.customerCombo]
        });
    },

    createColumns: function() {
        return [{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'number','default'=>'Number','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'number','default'=>'Number','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'number','default'=>'Number','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            width: 110,
            dataIndex: 'number'
        },{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1,
            dataIndex: 'name'
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'stock','default'=>'Stock','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'stock','default'=>'Stock','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stock<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'stock','default'=>'Stock','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            width: 60,
            dataIndex: 'stock'
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'price','default'=>'Price','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price','default'=>'Price','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Price<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price','default'=>'Price','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'cheapestPrice',
            renderer: this.priceRenderer
        }];
    },

    priceRenderer: function(value) {
        var me = this;

        if (!Ext.isObject(value)) {
            return '';
        }

        if (!value.hasOwnProperty('calculatedPrice')) {
            return '';
        }

        return value.calculatedPrice;
    }
});
//<?php }} ?>