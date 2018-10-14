<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:53
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\product_stream\view\condition_list\condition\attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:2537785565bc3b425be3cc9-11706597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e98e555eb1dab273b89c10b1a027a1e43fac32ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\product_stream\\view\\condition_list\\condition\\attribute.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2537785565bc3b425be3cc9-11706597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b425bea355_89550820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b425bea355_89550820')) {function content_5bc3b425bea355_89550820($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.condition_list.condition.Attribute', {
    extend: 'ProductStream.filter.AbstractCondition',

    getName: function() {
        return 'Shopware\\Bundle\\SearchBundle\\Condition\\ProductAttributeCondition';
    },

    getLabel: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute_condition','default'=>'Attribute condition','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute_condition','default'=>'Attribute condition','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Attribute condition<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute_condition','default'=>'Attribute condition','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    isSingleton: function() {
        return true;
    },

    create: function(callback, container, conditions) {
        var me = this;

        Ext.create('Shopware.apps.ProductStream.view.condition_list.field.AttributeWindow', {
            subApp: me.subApp,
            applyCallback: function(attribute) {
                var field = me.createField(attribute);
                callback(field);
                me.updateTitle(container, attribute);
            }
        }).show();
    },

    load: function(key, value, container) {
        if (key.indexOf(this.getName()) < 0) {
            return;
        }

        var field = this.createField(value.field);
        field.setValue(value);

        this.updateTitle(container, value.field);
        container.fixToggleTool();

        return field;
    },

    createField: function(attribute) {
        return Ext.create('Shopware.apps.ProductStream.view.condition_list.field.Attribute', {
            name: 'condition.' + this.getName() + '|' + attribute,
            attributeField: attribute
        });
    },

    updateTitle: function(container, name) {
        container.setTitle(this.getLabel() + ': ' + name);
    }
});
//<?php }} ?>