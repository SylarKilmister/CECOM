<?php /* Smarty version Smarty3-b7, created on 2021-01-29 11:49:43
         compiled from "C:/laragon/www/webcecom//templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53231586760144ab74529c7-03423146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c30059f5094d800fba240326d81781c5b2939d81' => 
    array (
      0 => 'C:/laragon/www/webcecom//templates/header.tpl',
      1 => 1611872919,
    ),
  ),
  'nocache_hash' => '53231586760144ab74529c7-03423146',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/logo.jpg" width="184" height="28" alt="CECOM"></a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='homepage'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
">Inicio</a></li>
                <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='about'){?>active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/about">Nosotros</a>
                </li>
                <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='service'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/service">Servicios</a></li>
                <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='contact'){?>active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/contact" >Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</div>
