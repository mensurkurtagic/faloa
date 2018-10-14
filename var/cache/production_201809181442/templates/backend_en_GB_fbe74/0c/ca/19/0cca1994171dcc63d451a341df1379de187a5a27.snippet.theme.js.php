<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:39
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\model\theme.js" */ ?>
<?php /*%%SmartyHeaderCode:18457280535bc3b6339beb72-28845156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cca1994171dcc63d451a341df1379de187a5a27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\model\\theme.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18457280535bc3b6339beb72-28845156',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b6339c8f29_90574688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b6339c8f29_90574688')) {function content_5bc3b6339c8f29_90574688($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.model.Theme', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'Theme',
            detail: 'Shopware.apps.Theme.view.create.Theme'
        };
    },

    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string' },
        { name : 'template', type: 'string' },
        { name : 'description', type: 'string' },
        { name : 'author', type: 'string' },
        { name : 'path', type: 'string' },
        { name : 'license', type: 'string' },
        { name : 'screen', type: 'string' },
        { name : 'esi', type: 'boolean' },
        { name : 'emotion', type: 'boolean' },
        { name : 'style', type: 'boolean' },
        { name : 'version', type: 'int' },
        { name : 'pluginId', type: 'int' },

        { name : 'themeInfo', type: 'string' },

        { name : 'parentId', type: 'int', useNull: true, defaultValue: null },

        { name : 'screen', type: 'string' },
        { name : 'hasConfig', type: 'int' },
        { name : 'hasConfigSet', type: 'boolean' },

        { name : 'enabled', type: 'boolean', defaultValue: false },
        { name : 'preview', type: 'boolean', defaultValue: false }
    ],

    associations: [
        {
            relation: 'OneToMany',
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.Layout',
            name: 'getLayout',
            associationKey: 'configLayout'
        },
        {
            //only for save action.
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.ConfigValue',
            name: 'getConfigValues',
            associationKey: 'values'
        },
        {
            //read only
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.ConfigSet',
            name: 'getConfigSets',
            associationKey: 'configSets'
        }
    ]

});

//

<?php }} ?>