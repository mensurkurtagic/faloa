<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:52
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\order\model\order_history.js" */ ?>
<?php /*%%SmartyHeaderCode:18709262895bc3b424b3c690-04183057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '490263ca53058bc8a96d61fb6722f9e5c092c286' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\order\\model\\order_history.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18709262895bc3b424b3c690-04183057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b424b41d81_50120378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b424b41d81_50120378')) {function content_5bc3b424b41d81_50120378($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.model.OrderHistory', {

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
        { name : 'id', type: 'int' },
        { name : 'userName', type: 'string' },
        { name : 'changeDate', type: 'date' },
        { name : 'prevOrderStatusId', type: 'int' },
        { name : 'currentOrderStatusId', type: 'int' },
        { name : 'prevPaymentStatusId', type: 'int' },
        { name : 'currentPaymentStatusId', type: 'int' }
    ]
});
//

<?php }} ?>