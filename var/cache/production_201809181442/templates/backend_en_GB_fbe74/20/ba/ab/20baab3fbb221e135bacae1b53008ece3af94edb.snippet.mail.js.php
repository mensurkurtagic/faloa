<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:53
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\order\model\mail.js" */ ?>
<?php /*%%SmartyHeaderCode:19916149735bc3b4253efcc8-29624175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20baab3fbb221e135bacae1b53008ece3af94edb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\order\\model\\mail.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19916149735bc3b4253efcc8-29624175',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b4253fc150_54493367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b4253fc150_54493367')) {function content_5bc3b4253fc150_54493367($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The list model is a helper model to display the head data in a compact grid.
 */
//
Ext.define('Shopware.apps.Order.model.Mail', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'orderId', type: 'int' },
        { name: 'content', type: 'string' },
        { name: 'contentHtml', type: 'string' },
        { name: 'subject', type: 'string' },
        { name: 'to', type: 'string' },
        { name: 'fromMail', type: 'string' },
        { name: 'fromName', type: 'string' },
        { name: 'sent', type: 'boolean' },
        { name: 'isHtml', type: 'boolean' }
    ],

    associations: [
        {
            type: 'hasMany',
            model: 'Shopware.apps.Order.model.Receipt',
            name: 'getReceipt',
            associationKey: 'attachment'
        }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        /**
         * Set proxy type to ajax
         * @string
         */
        type: 'ajax',

        /**
         * Specific urls to call on CRUD action methods "create", "read", "update" and "destroy".
         * @object
         */
        api: {
            create: '<?php echo '/faloa/backend/Order/sendMail';?>',
            update: '<?php echo '/faloa/backend/Order/sendMail';?>'
        }
    }

});
//
<?php }} ?>