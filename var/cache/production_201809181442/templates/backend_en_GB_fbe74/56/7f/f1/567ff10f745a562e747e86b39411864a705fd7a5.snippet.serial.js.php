<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:58
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\article\store\serial.js" */ ?>
<?php /*%%SmartyHeaderCode:21172866525bc3b42a1decd1-27360698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '567ff10f745a562e747e86b39411864a705fd7a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\article\\store\\serial.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21172866525bc3b42a1decd1-27360698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b42a1f8454_74239071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b42a1f8454_74239071')) {function content_5bc3b42a1f8454_74239071($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 */
//
Ext.define('Shopware.apps.Article.store.Serial', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',

    autoLoad: false,

    batch:true,

    remoteFilter: true,
    remoteSort: true,

    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Article.model.Serial',

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
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
        api: {
            read: '<?php echo '/faloa/backend/Article/getSerials';?>',
            create: '<?php echo '/faloa/backend/Article/addSerials';?>',
            destroy: '<?php echo '/faloa/backend/Article/deleteSerials/targetField/details';?>'
        },

        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//

<?php }} ?>