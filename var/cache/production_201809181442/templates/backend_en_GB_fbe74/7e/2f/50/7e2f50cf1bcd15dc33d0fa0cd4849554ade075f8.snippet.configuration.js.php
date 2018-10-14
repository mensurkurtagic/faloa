<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:53
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\order\model\configuration.js" */ ?>
<?php /*%%SmartyHeaderCode:11824837055bc3b42522db05-82691308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e2f50cf1bcd15dc33d0fa0cd4849554ade075f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\order\\model\\configuration.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11824837055bc3b42522db05-82691308',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b425236f43_39037916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b425236f43_39037916')) {function content_5bc3b425236f43_39037916($_smarty_tpl) {?>/**
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
 * The document model contains the configuration for the document creation. It
 * will be used in the order detail page document tab and in the detail controller.
 */
//
Ext.define('Shopware.apps.Order.model.Configuration', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'orderId', type:'int' },

        // todo dateFields needs type 'date', but if used the dates in the created documents are formatted improperly
        { name: 'deliveryDate' },
        { name: 'displayDate' },
        { name: 'vatId', type:'string' },
        { name: 'invoiceNumber', type:'string' },
        { name: 'documentType', type:'int' },
        { name: 'docComment', type:'string' },
        { name: 'voucher', type:'int', useNull: true },
        { name: 'taxFree', type:'int' }
    ],
    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */

        api:{
            create:'<?php echo '/faloa/backend/Order/createDocument/targetField/documents';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }


});
//
<?php }} ?>