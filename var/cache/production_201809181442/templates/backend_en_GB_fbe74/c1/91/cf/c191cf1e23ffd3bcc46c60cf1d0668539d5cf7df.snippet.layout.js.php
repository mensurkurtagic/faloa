<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:39
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\model\layout.js" */ ?>
<?php /*%%SmartyHeaderCode:19296470505bc3b633acb148-13708258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c191cf1e23ffd3bcc46c60cf1d0668539d5cf7df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\model\\layout.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19296470505bc3b633acb148-13708258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b633acf0f2_95297471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b633acf0f2_95297471')) {function content_5bc3b633acf0f2_95297471($_smarty_tpl) {?>/**
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

/**
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.model.Layout', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'type', type: 'string' },
        { name: 'title', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'attributes' },

        //mapping fields which used only for the form field generation
        { name: 'xtype', type: 'string', mapping: 'type' },
        { name: 'containerId', type: 'int', mapping: 'id' }
    ],

    associations: [
        {
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.Element',
            name: 'getElements',
            associationKey: 'elements'
        },
        {
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.Layout',
            name: 'getChildren',
            associationKey: 'children'
        }
    ]
});


//
<?php }} ?>