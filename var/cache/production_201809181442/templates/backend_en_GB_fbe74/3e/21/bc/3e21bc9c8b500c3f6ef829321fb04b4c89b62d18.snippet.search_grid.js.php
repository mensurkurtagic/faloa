<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:52
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\product_stream\view\search_grid.js" */ ?>
<?php /*%%SmartyHeaderCode:5202056645bc3b424b66090-35670947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e21bc9c8b500c3f6ef829321fb04b4c89b62d18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\product_stream\\view\\search_grid.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5202056645bc3b424b66090-35670947',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b424cd6d76_90433236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b424cd6d76_90433236')) {function content_5bc3b424cd6d76_90433236($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.SearchGrid', {
    extend: 'Ext.form.FieldContainer',
    layout: { type: 'vbox', align: 'stretch' },
    border: false,
    cls: 'product-stream-search-grid',

    /**
     * @required
     */
    searchStore: null,

    /**
     * @required
     */
    store: null,

    initComponent: function() {
        this.items = this.createItems();
        this.callParent(arguments);
    },

    createItems: function() {
        return [
            this.createSearchField(),
            this.createGrid()
        ];
    },

    createSearchField: function() {
        var me = this;

        me.searchField = Ext.create('Shopware.form.field.Search', {
            store: me.searchStore,
            displayField: 'name',
            valueField: 'id',
            multiSelect: true,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search','default'=>'Search','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            pageSize: me.searchStore.pageSize,
            listeners: {
                select: function (combo, records) {
                    me.onSelectItem(combo, records);
                }
            }
        });
        return me.searchField;
    },

    createGrid: function() {
        this.grid = Ext.create('Ext.grid.Panel', {
            flex: 1,
            store: this.store,
            dockedItems: [this.createPagingBar()],
            columns: this.createColumns()
        });
        return this.grid;
    },

    createColumns: function() {
        var columns = this.createDisplayColumns();
        columns.push(this.createActionColumn());
        return columns;
    },

    createDisplayColumns: function() {
        return [{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            sortable: false,
            dataIndex: 'name',
            flex: 1
        }];
    },

    createActionColumn: function() {
        return {
            xtype: 'actioncolumn',
            width: 25,
            sortable: false,
            items: this.createActionItems()
        };
    },

    createActionItems: function() {
        var me = this;
        return [{
            iconCls: 'sprite-minus-circle-frame',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                me.removeRecord(record);
            }
        }];
    },

    createPagingBar: function() {
        var me = this;
        me.pagingbar = Ext.create('Ext.toolbar.Paging', {
            store: me.store,
            dock: 'bottom'
        });
        return me.pagingbar;
    },

    onSelectItem: function (combo, records) {
        var me = this, inStore;

        Ext.each(records, function (record) {
            inStore = me.store.getById(record.get('id'));
            if (inStore === null) {
                me.addRecord(record);
            }
        });
        combo.setValue('');
    },

    addRecord: function(record) {
        this.store.add(record);
    },

    removeRecord: function(record) {
        this.store.remove(record);
    }
});
//<?php }} ?>