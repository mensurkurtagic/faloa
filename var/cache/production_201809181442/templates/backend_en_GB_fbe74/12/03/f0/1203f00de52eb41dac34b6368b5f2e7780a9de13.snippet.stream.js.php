<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:52
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\product_stream\model\stream.js" */ ?>
<?php /*%%SmartyHeaderCode:10914783245bc3b4249c4672-42014174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1203f00de52eb41dac34b6368b5f2e7780a9de13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\product_stream\\model\\stream.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10914783245bc3b4249c4672-42014174',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b4249d0940_82720298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b4249d0940_82720298')) {function content_5bc3b4249d0940_82720298($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.model.Stream', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'ProductStream'
        };
    },

    fields: [
        //
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string', useNull: false },
        { name : 'description', type: 'string', useNull: false },
        { name : 'type', type: 'int', defaultValue: 1 },
        { name : 'sorting' },
        { name : 'sortingId', type: 'int', useNull: true },
        { name : 'conditions', useNull: false }
    ]
});
//<?php }} ?>