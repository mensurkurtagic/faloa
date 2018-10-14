<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:34:16
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\view\create\theme.js" */ ?>
<?php /*%%SmartyHeaderCode:12733035155bc3b658001354-73916087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf41857ed84874ae1257071c810ad21a33c4ebd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\view\\create\\theme.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12733035155bc3b658001354-73916087',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b65806ab28_25499760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b65806ab28_25499760')) {function content_5bc3b65806ab28_25499760($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.create.Theme', {

    extend: 'Shopware.model.Container',
    padding: 20,
    layout: 'anchor',

    configure: function() {
        var me = this;

        return {
            fieldSets: [
                {
                    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'theme_data','default'=>'Theme data','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'theme_data','default'=>'Theme data','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme data<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'theme_data','default'=>'Theme data','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    padding: 10,
                    layout: 'fit',
                    fields: {
                        parentId: me.createExtendCombo,
                        template: {
                            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Name','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            allowBlank: false,
                            vtype: 'alpha',
                            supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name_support','default'=>'Source code name','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name_support','default'=>'Source code name','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Source code and directory name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name_support','default'=>'Source code name','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                        },
                        name: {
                            allowBlank: false,
                            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'short_description','default'=>'Short description','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'short_description','default'=>'Short description','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Short description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'short_description','default'=>'Short description','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'short_description_support','default'=>'Readable name, displayed in listing','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'short_description_support','default'=>'Readable name, displayed in listing','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title that will appear within the theme manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'short_description_support','default'=>'Readable name, displayed in listing','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                        },
                        description: {
                            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'long_description','default'=>'Long description','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'long_description','default'=>'Long description','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Long description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'long_description','default'=>'Long description','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            xtype: 'textarea',
                            height: 120
                        },
                        author: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'author','default'=>'Author','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'author','default'=>'Author','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'author','default'=>'Author','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        license: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'license','default'=>'License','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'license','default'=>'License','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'license','default'=>'License','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    }
                }
            ]
        };
    },

    createExtendCombo: function() {
        var me = this;

        me.extendStore = Ext.create('Shopware.apps.Theme.store.Theme', {
            filters: [
                { property: 'version', value: 3 }
            ]
        }).load();

        me.extendCombo = Ext.create('Ext.form.field.ComboBox', {
            store: me.extendStore,
            labelWidth: 130,
            queryMode: 'local',
            editable: false,
            name: 'parentId',
            displayField: 'name',
            anchor: '100%',
            valueField: 'id',
            allowBlank: false,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'extension_of','default'=>'Extension of','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'extension_of','default'=>'Extension of','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Extension of<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'extension_of','default'=>'Extension of','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            supportText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'extension_of_support','default'=>'Select a theme as a building block','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'extension_of_support','default'=>'Select a theme as a building block','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select which theme to use as a basis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'extension_of_support','default'=>'Select a theme as a building block','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        return me.extendCombo;
    },

    createModelFieldSet: function() {
        var me = this,
            fieldSet = me.callParent(arguments);

        fieldSet.items.items[0].padding = 0;
        return fieldSet;
    }
});

//
<?php }} ?>