<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:33:39
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\theme\model\settings.js" */ ?>
<?php /*%%SmartyHeaderCode:19468825905bc3b633b9e8c6-20009724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4512eb3b68ca89362402246f4e94bf957c383017' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\theme\\model\\settings.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19468825905bc3b633b9e8c6-20009724',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b633baf119_62717764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b633baf119_62717764')) {function content_5bc3b633baf119_62717764($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.model.Settings', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'Theme',
            detail: 'Shopware.apps.Theme.view.settings.Settings',
            proxy: {
                type: 'ajax',
                api: {
                    detail:  '<?php echo '/faloa/backend/base/loadSettings';?>',
                    create:  '<?php echo '/faloa/backend/base/saveSettings';?>',
                    update:  '<?php echo '/faloa/backend/base/saveSettings';?>'
                },
                reader: {
                    type: 'json',
                    root: 'data',
                    totalProperty: 'total'
                }
            }
        };
    },

    fields: [
        { name: 'id', type: 'integer' },
        { name: 'forceCompile', type: 'boolean' },
        { name: 'createSourceMap', type: 'boolean' },
        { name: 'compressCss', type: 'boolean' },
        { name: 'compressJs', type: 'boolean' },
        { name: 'reloadSnippets', type: 'boolean' }
    ]
});

//

<?php }} ?>