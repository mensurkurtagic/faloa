<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:55
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\feedback\view\preview\window.js" */ ?>
<?php /*%%SmartyHeaderCode:5782098555bc3b4271ebd33-98667077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '217784cc48232459d4463642eb4e16fe92ea84fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\feedback\\view\\preview\\window.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5782098555bc3b4271ebd33-98667077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHOPWARE_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b427257a14_98041879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b427257a14_98041879')) {function content_5bc3b427257a14_98041879($_smarty_tpl) {?>/**
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
 * Shopware UI - Feedback preview Window
 *
 * This file contains the business logic for the User Manager module. The module
 * handles the whole administration of the backend users.
 */
//
Ext.define('Shopware.apps.Feedback.view.preview.Window', {
    extend: 'Enlight.app.Window',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Feedback for preview version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    alias: 'widget.feedback-preview-window',
    border: false,
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    autoShow: true,
    height: 550,
    width: 500,
    resizable: false,
    maximizable: false,
    stateful: true,
    stateId: 'feedback-preview-window',

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.addEvents(
            'feedback-show-issue-tracker'
        );

        me.imageComponent = Ext.create('Ext.Img', {
            height: 177,
            src: Ext.String.format(
                '<?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/beta-feedback-thankyou-[0].png", "fullPath" => false), $_smarty_tpl); ?>',
                Ext.userLanguage !== 'de' ? 'en' : Ext.userLanguage
            )
        });

        me.textComponent = Ext.create('Ext.container.Container', {
            padding: 20,
            flex: 1,
            autoScroll: true,
            style: 'background-color: #ffffff;',
            html: Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'info_text','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'info_text','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<p><strong>Your feedback is important.</strong></p><p>We are pleased that you are using the Shopware [0] in advance of the final release.</p><p>As an open company, the continuous exchange with our large Community is an extremely important piece of our development. We want to develop our software for the people who us it – it’s all about you! For this reason, we ask that you send us any potential bugs or suggestions for improvement as we gear up for the final release.</p><p>You can easily send us your feedback in our <a href="https://issues.shopware.com/#/" target="_blank">Shopware Issue Tracker</a>. Alternatively, you can also send feedback now or under „Send Feedback”.</p><p>Thank you for your continuous support,</p><p>Your Shopware team</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'info_text','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php echo $_smarty_tpl->tpl_vars['SHOPWARE_VERSION']->value;?>
'),
            styleHtmlContent: true
        });

        me.items = [me.imageComponent, me.textComponent];

        me.checkbox = Ext.create('Ext.form.field.Checkbox', {
            padding: '0 0 0 5px',
            itemId: 'disablePreviewFeedback',
            width: 150,
            boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do not show again<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        me.cancelButton = Ext.create('Ext.button.Button', {
            cls: 'secondary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'cancel','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'cancel','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'cancel','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function() {
                me.close();
            }
        });

        me.issueTrackerButton = Ext.create('Ext.button.Button', {
            cls: 'primary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'open_issuetracker','namespace'=>'backend/feedback/view/preview')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'open_issuetracker','namespace'=>'backend/feedback/view/preview'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Open Issuetracker<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'open_issuetracker','namespace'=>'backend/feedback/view/preview'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function() {
                me.fireEvent('feedback-show-issue-tracker', me);
            }
        });

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            items:[me.checkbox, '->', me.cancelButton, me.issueTrackerButton]
        }];

        me.callParent(arguments);
    }
});
//
<?php }} ?>