<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:56
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\order\store\batch.js" */ ?>
<?php /*%%SmartyHeaderCode:4689969065bc3b428dd33c5-56087278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f2bc6cc1898328c2f1937501e0f16809938d9dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\order\\store\\batch.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4689969065bc3b428dd33c5-56087278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b428ddac99_19843611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b428ddac99_19843611')) {function content_5bc3b428ddac99_19843611($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Order list backend module
 *
 * The list store is used from the order list grid.
 */
//
Ext.define('Shopware.apps.Order.store.Batch', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * to upload all selected items in one request
     * @boolean
     */
    batch:true,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Order.model.Order',

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
            update:'<?php echo '/faloa/backend/Order/batchProcess/targetField/orders';?>'
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