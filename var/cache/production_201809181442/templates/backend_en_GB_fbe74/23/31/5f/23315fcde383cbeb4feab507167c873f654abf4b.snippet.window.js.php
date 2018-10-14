<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:54
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\feedback\view\main\window.js" */ ?>
<?php /*%%SmartyHeaderCode:8008498345bc3b426d5a3d6-96877708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23315fcde383cbeb4feab507167c873f654abf4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\feedback\\view\\main\\window.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8008498345bc3b426d5a3d6-96877708',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b426ec3268_92887663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b426ec3268_92887663')) {function content_5bc3b426ec3268_92887663($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Feedback Main Window
 *
 * This file contains the business logic for the User Manager module. The module
 * handles the whole administration of the backend users.
 */
//
Ext.define('Shopware.apps.Feedback.view.main.Window', {
    extend: 'Enlight.app.Window',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title','default'=>'Feedback','namespace'=>'backend/feedback/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Feedback','namespace'=>'backend/feedback/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Feedback<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','default'=>'Feedback','namespace'=>'backend/feedback/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    alias: 'widget.feedback-main-window',
    border: false,
    layout: 'fit',
    autoShow: true,
    height: '90%',
    width: 1200,
    stateful: true,
    stateId: 'feedback-main-window',

    /**
     * Property which represents the iframe "src"-URL
     * @string
     */
    requestUrl: 'https://issues.shopware.com/#/?embedded=1',

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.items = [{
            xtype: 'container',
            // We need to hack the iframe to inject it into the Ext.window.Window
            html: '<ifr' + 'ame id="iframe-' + Ext.id() + '" border="0" src="'+ me.requestUrl +'"></ifr' + 'ame>',
            listeners: {
                'afterrender': function () {
                    this.getEl().dom.children[0].onload = function () {
                        me.setWidth(me.getWidth() + 1);
                    }
                }
            }
        }];
        me.callParent(arguments);
    }
});
//
<?php }} ?>