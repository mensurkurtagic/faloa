<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:50
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\customer\model\debit.js" */ ?>
<?php /*%%SmartyHeaderCode:9623812335bc3b4222008e3-94275966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00bb08c8a3144d801c2a8bbe75d338f4d20a5643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\customer\\model\\debit.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9623812335bc3b4222008e3-94275966',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b422204c31_76618642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b422204c31_76618642')) {function content_5bc3b422204c31_76618642($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Model - Customer list backend module.
 *
 * The debit model represents a single data row of the s_user_debit or
 * the Shopware\Models\Customer\Debit doctrine model which contains all data about the
 * customer debit.
 */
// 
Ext.define('Shopware.apps.Customer.model.Debit', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * Unique identifier field
     * @string
     */
    idProperty: 'id',
    /**
     * The fields used for this model
     * @array
     */
    fields: [
        // 
        { name: 'account', type: 'string' },
        { name: 'bankCode', type: 'string' },
        { name: 'bankName', type: 'string' },
        { name: 'accountHolder', type: 'string' }
    ]
});
// 
<?php }} ?>