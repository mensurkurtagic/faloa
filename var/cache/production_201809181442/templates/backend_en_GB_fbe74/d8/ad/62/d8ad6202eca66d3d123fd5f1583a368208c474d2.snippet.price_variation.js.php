<?php /* Smarty version Smarty-3.1.12, created on 2018-10-14 23:24:51
         compiled from "C:\xampp\htdocs\faloa\themes\Backend\ExtJs\backend\article\model\price_variation.js" */ ?>
<?php /*%%SmartyHeaderCode:5198471905bc3b42314d803-66868044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ad6202eca66d3d123fd5f1583a368208c474d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\faloa\\themes\\Backend\\ExtJs\\backend\\article\\model\\price_variation.js',
      1 => 1537274534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5198471905bc3b42314d803-66868044',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5bc3b42315a590_66718406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc3b42315a590_66718406')) {function content_5bc3b42315a590_66718406($_smarty_tpl) {?>/**
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
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.PriceVariation', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'integer', useNull: true },
        { name: 'option_names' },
        { name: 'isGross', type: 'integer' },
        { name: 'variation', type: 'float' },
        { name: 'configuratorSetId', type: 'integer'}
    ],

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
            create: '<?php echo '/faloa/backend/ArticlePriceVariation/createPriceVariation';?>',
            update: '<?php echo '/faloa/backend/ArticlePriceVariation/updatePriceVariation';?>',
            destroy: '<?php echo '/faloa/backend/ArticlePriceVariation/deletePriceVariation';?>'
        },

        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    },

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getOptions', associationKey: 'options' }
    ]
});
//

<?php }} ?>