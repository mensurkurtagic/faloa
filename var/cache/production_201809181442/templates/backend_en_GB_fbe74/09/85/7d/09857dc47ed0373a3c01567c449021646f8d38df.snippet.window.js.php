<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:40
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\view\detail\window.js" */ ?>
<?php /*%%SmartyHeaderCode:10437622145bc3b634405a26-76407820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09857dc47ed0373a3c01567c449021646f8d38df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\view\\detail\\window.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10437622145bc3b634405a26-76407820',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b634418137_73229388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b634418137_73229388')) {function content_5bc3b634418137_73229388($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.detail.Window', {
    extend: 'Enlight.app.Window',
    alias: 'widget.theme-detail-window',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'detail_window','default'=>'Theme details','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail_window','default'=>'Theme details','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme configuration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'detail_window','default'=>'Theme details','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    height: 600,
    width: 1080,
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    defaults: {
        flex: 1
    },
    cls: 'theme-config-window',

    initComponent: function() {
        var me = this;

        me.items = [ me.createFormPanel() ];
        me.dockedItems = [ me.createToolbar() ];

        me.callParent(arguments);
    },

    /**
     * Creates the form panel for the window.
     * @returns { Ext.form.Panel }
     */
    createFormPanel: function() {
        var me = this;

        if (me.theme.get('themeInfo')) {
            me.createThemeInfoTab();
        }

        me.formPanel = Ext.create('Ext.form.Panel', {
            layout: 'fit',
            items: me.configLayout
        });

        return me.formPanel;
    },

    /**
     * If the theme has the folder "themeInfo" and a language html file like "en_EN.html"
     * then add a theme info tab to the layout items to display the passed
     * HTML content in the container.
     */
    createThemeInfoTab: function() {
        var me = this;

        me.configLayout[0].items.splice(0, 0, {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info_tab_title','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info_tab_title','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme Info<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info_tab_title','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            html: me.theme.get('themeInfo'),
            bodyPadding: 0,
            xtype: 'theme-tab'
        });
    },

    /**
     * Creates the window toolbar.
     *
     * @returns { Ext.toolbar.Toolbar }
     */
    createToolbar: function () {
        var me = this;

        me.toolbar = Ext.create('Ext.toolbar.Toolbar', {
            items: me.createToolbarItems(),
            dock: 'bottom'
        });

        return me.toolbar;
    },

    /**
     * Creates all toolbar elements.
     *
     * @returns { Array }
     */
    createToolbarItems: function() {
        var me = this, items = [];

        if (me.theme.get('hasConfigSet')) {
            items.push(me.createConfigSetButton());
        }

        items.push({ xtype: 'tbfill' });

        items.push(me.createCancelButton());

        items.push(me.createSaveButton());

        return items;
    },


    createConfigSetButton: function () {
        var me = this;

        me.cancelButton = Ext.create('Ext.button.Button', {
            cls: 'secondary',
            name: 'cancel-button',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'config_sets','default'=>'Config sets','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'config_sets','default'=>'Config sets','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configuration sets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'config_sets','default'=>'Config sets','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function () {
                me.fireEvent('load-config-sets', me, me.theme);
            }
        });
        return me.cancelButton;
    },


    /**
     * Creates the cancel button which will be displayed
     * in the bottom toolbar of the detail window.
     * The button handler will be raised to the internal
     * function me.onCancel
     *
     * @return Ext.button.Button
     */
    createCancelButton: function () {
        var me = this;

        me.cancelButton = Ext.create('Ext.button.Button', {
            cls: 'secondary',
            name: 'cancel-button',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function () {
                me.destroy();
            }
        });
        return me.cancelButton;
    },

    /**
     * Creates the save button which will be displayed
     * in the bottom toolbar of the detail window.
     * The button handler will be raised to the internal
     * function me.onSave
     *
     * @return Ext.button.Button
     */
    createSaveButton: function () {
        var me = this;

        me.saveButton = Ext.create('Ext.button.Button', {
            cls: 'primary',
            name: 'detail-save-button',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'save','default'=>'Save','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function () {
                me.fireEvent(
                    'saveConfig',
                    me.theme,
                    me.shop,
                    me.formPanel,
                    me
                );
            }
        });
        return me.saveButton;
    }

});

//
<?php }} ?>