<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:50
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\customer\model\customer_stream.js" */ ?>
<?php /*%%SmartyHeaderCode:10317912375bc3b422512ea8-73814195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b537bf1f1e23d9b1aaaae189f515527ced56a295' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\customer\\model\\customer_stream.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10317912375bc3b422512ea8-73814195',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b422519031_86768447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b422519031_86768447')) {function content_5bc3b422519031_86768447($_smarty_tpl) {?>/**
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

// 
Ext.define('Shopware.apps.Customer.model.CustomerStream', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'CustomerStream'
        };
    },

    fields: [
        // 
        { name: 'id', type: 'int', useNull: true },
        { name: 'customer_count', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'static', type: 'boolean', defaultValue: false },
        { name: 'assignment', type: 'string' },
        { name: 'freezeUpTime', type: 'time', useNull: true, defaultValue: null },
        { name: 'freezeUpDate', type: 'date', useNull: true, defaultValue: null },
        {
            name: 'freezeUp',
            type: 'string',
            convert: function (value, record) {
                if (value === null) {
                    return null;
                }

                record.data.freezeUpTime = Ext.Date.format(value, 'H:i');
                record.data.freezeUpDate = new Date(value);
                return record.data.freezeUpDate;
            },
            useNull: true,
            defaultValue: null
        },
        { name: 'description', type: 'string', useNull: true },
        { name: 'conditions', type: 'string' }
    ],

    hasConditions: function() {
        var conditions = this.get('conditions');
        conditions = Object.keys(Ext.JSON.decode(conditions));
        return conditions.length > 0;
    }
});
// 
<?php }} ?>