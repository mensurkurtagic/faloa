<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:56
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\order\view\mail\form.js" */ ?>
<?php /*%%SmartyHeaderCode:11198596655bc3b428145ee3-50576357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb517a17cd80a8afc33e47b4a5db815ec9cb5d47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\order\\view\\mail\\form.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11198596655bc3b428145ee3-50576357',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b42815de86_39368939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b42815de86_39368939')) {function content_5bc3b42815de86_39368939($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order batch window
 */
//
Ext.define('Shopware.apps.Order.view.mail.Form', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     *
     * @type { String }
     */
    extend: 'Ext.form.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     *
     * @type { String }
     */
    alias: 'widget.order-mail-form',

    /**
     * An optional extra CSS class that will be added to this component's Element.
     */
    cls: Ext.baseCSSPrefix + 'batch-mail-panel',

    /**
     * Component layout definition
     *
     * @type { Object }
     */
    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    /**
     * A shortcut for setting a padding style on the body element. The value can either be a number to be applied to all sides, or a normal css string describing padding.
     *
     * @type { Number }
     */
    bodyPadding: 10,

    /**
     * Whether or not the form panel should have a border.
     *
     * @type { Boolean }
     */
    border: false,

    /**
     * Contains all snippets for the view component
     *
     * @type { Object }
     */
    snippets: {
        subject: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'subject','default'=>'Subject','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'subject','default'=>'Subject','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Subject<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'subject','default'=>'Subject','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        to: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'to','default'=>'To','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'to','default'=>'To','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'to','default'=>'To','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        button: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button','default'=>'Send mail','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button','default'=>'Send mail','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Send mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button','default'=>'Send mail','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        mailTemplate: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'mail_template','default'=>'Mail template','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mail_template','default'=>'Mail template','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mail template<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mail_template','default'=>'Mail template','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Constructor parameters
     */
    order: null,
    preSelectedAttachment: null,
    documentTypeStore: null,
    listStore: null,

    /**
     * Store whether the user has changed the values of the form
     *
     * @type { boolean }
     */
    modified: false,

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     */
    initComponent: function() {
        var me = this;

        me.registerEvents();
        me.createStores();

        me.items = me.getFormItems();
        me.dockedItems = me.getToolbar();

        me.callParent(arguments);

        if (me.mail) {
            me.loadRecord(me.mail);
        }
    },

    /**
     * Registers the custom component events.
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the "generate documents" button which is
             * displayed within the form field set.
             *
             * @event sendMail
             * @param { Ext.form.Panel } - This component
             */
            'sendMail'
        );
    },

    /**
     * @override
     */
    afterRender: function() {
        this.callParent(arguments);

        // Select the correct mail template for the clicked document
        this.mailTemplateStore.load({
            callback: function () {
                if (this.preSelectedAttachment) {
                    var documentType = this.documentTypeStore.getById(this.preSelectedAttachment.get('typeId'));
                    this.mailTemplateComboBox.selectTemplateByDocumentType(documentType);
                }
            },
            scope: this
        });
    },

    /**
     * Creates the stores used in this component
     */
    createStores: function() {
        // The mail template store should only contain mail templates that are made for documents (mailtype = 4), so
        // add a filter here.
        this.mailTemplateStore = Ext.create('Shopware.apps.Order.store.MailTemplate', {
            filters: [{
                property: 'mailtype',
                value: 4
            }]
        });
    },

    /**
     * Creates and returns the toolbar which contains the send mail button.
     *
     * @returns { Ext.toolbar.Toolbar }
     */
    getToolbar: function() {
        var me = this;

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: [
                '->',
                {
                    xtype: 'button',
                    cls: 'primary',
                    text: me.snippets.button,
                    handler: function() {
                        me.fireEvent('sendMail', me);
                        me.fireEvent('afterSendMail', me.attachmentGrid.getStore());
                    }
                }
            ]
        });
    },

    /**
     * Creates and returns an array of the form elements to send a mail.
     *
     * @returns { Array }
     */
    getFormItems: function() {
        var me = this;

        var fields = [
            {
                xtype: 'textfield',
                name: 'to',
                fieldLabel: me.snippets.to
            },
            {
                xtype: 'textfield',
                name: 'subject',
                fieldLabel: me.snippets.subject,
                listeners: {
                    change: function () {
                        me.modified = true;
                    }
                }
            },
            this.createTextContentEditor(),
            this.createHtmlContentEditor()
        ];

        if (!this.mail) {
            fields = Ext.Array.insert(fields, 0, [this.createMailTemplateComboBox()]);
        }

        me.attachmentGrid = Ext.create('Shopware.apps.Order.view.mail.Attachment', {
            preSelectedAttachment: me.preSelectedAttachment,
            order: me.order,
            record: me.order,
            documentTypeStore: this.documentTypeStore,
            listStore: this.listStore
        });

        // adds at last the attachment panel
        fields.push(me.attachmentGrid);

        return fields;
    },

    /**
     * Create the combo box for the selection of the mail template
     *
     * @return { Ext.form.field.ComboBox }
     */
    createMailTemplateComboBox: function () {
        this.mailTemplateComboBox = Ext.create('Ext.form.field.ComboBox', {
            name: 'mailTemplateName',
            fieldLabel: this.snippets.mailTemplate,
            store: this.mailTemplateStore,
            displayField: 'displayName',
            valueField: 'name',
            listeners: {
                change: function(comboBox, newValue, oldValue) {
                    this.fireEvent('changeMailTemplateComboBox', this, comboBox, newValue, oldValue);
                },
                scope: this
            },
            selectTemplateByDocumentType: function (documentType) {
                var templateName = 'sORDERDOCUMENTS';
                if (documentType) {
                    var mailTemplate = this.getStore().findRecord('name', 'document_' + documentType.get('key'), 0, false, false, true);
                    if (mailTemplate) {
                        templateName = mailTemplate.get('name');
                    }
                }
                this.setValue(templateName);
            }
        });

        return this.mailTemplateComboBox;
    },


    /**
     * Create the text field for text emails
     *
     * @return { Ext.form.field.Text }
     */
    createTextContentEditor: function () {
        this.textContentTextField = Ext.create('Ext.form.field.TextArea', {
            name: 'content',
            minHeight: 90,
            flex: 1,
            listeners: {
                change: function () {
                    this.modified = true;
                },
                scope: this
            }
        });

        return this.textContentTextField;
    },

    /**
     * Create the tinyMCE editor field for html emails
     *
     * @return { Ext.form.field.Text }
     */
    createHtmlContentEditor: function () {
        this.htmlContentTextField = Ext.create('Shopware.form.field.TinyMCE', {
            name: 'contentHtml',
            minHeight: 90,
            flex: 1,
            disabled: true,
            hidden: true,
            listeners: {
                // Attaching a change event on tinymce directy
                afterrendereditor: function (editor, tinymce) {
                    var me = this;
                    tinymce.onChange.add(function() {
                        me.modified = true;
                    });
                },
                scope: this
            }
        });

        return this.htmlContentTextField;
    },

    /**
     * @override
     * @param { Shopware.apps.Order.model.Mail } mailTemplateRecord
     */
    loadRecord: function (mailTemplateRecord) {
        this.callParent(arguments);

        this.modified = false;

        // Show the correct text/html editor dependent on the type of the email
        var isHtml = mailTemplateRecord.get('isHtml');
        this.htmlContentTextField.setVisible(isHtml);
        this.htmlContentTextField.setDisabled(!isHtml);
        this.textContentTextField.setVisible(!isHtml);
        this.textContentTextField.setDisabled(isHtml);
    }
});
//
<?php }} ?>