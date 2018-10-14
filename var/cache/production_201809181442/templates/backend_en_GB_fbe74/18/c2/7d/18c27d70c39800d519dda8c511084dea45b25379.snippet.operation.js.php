<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:55
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\article_list\store\operation.js" */ ?>
<?php /*%%SmartyHeaderCode:5501276135bc3b4271eda61-33729932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c27d70c39800d519dda8c511084dea45b25379' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\article_list\\store\\operation.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5501276135bc3b4271eda61-33729932',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b4271f3f70_96098654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b4271f3f70_96098654')) {function content_5bc3b4271f3f70_96098654($_smarty_tpl) {?>/**
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
 * Shopware Store - Operation store
 *
 * The batch process store holds all operations which the user wants to apply to a filter
 */
Ext.define('Shopware.apps.ArticleList.store.Operation', {

    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',

    /**
     * Define unique store id to create the store by the store manager
     */
    storeId: 'multiEdit.Operation',

    /**
     * Define how much rows loaded with one request
     */
    pageSize: 100,

   /**
    * Auto load the store after the component
    * is initialized
    * @boolean
    */
    autoLoad: false,

    /**
     * Do not remote sort the store
     */
    remoteSort: false,

    /**
     * Also disable remote filtering
     */
    remoteFilter: false,

   /**
    * Define the used model for this store
    * @string
    */
    model : 'Shopware.apps.ArticleList.model.Operation',

    mode: 'local',

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/faloa/backend/ArticleList/getOperations';?>',

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


<?php }} ?>