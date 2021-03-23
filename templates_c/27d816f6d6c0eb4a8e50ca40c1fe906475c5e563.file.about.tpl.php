<?php /* Smarty version Smarty3-b7, created on 2021-01-29 11:50:35
         compiled from "C:/laragon/www/webcecom//templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152806279260144aebb77bc3-46459692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d816f6d6c0eb4a8e50ca40c1fe906475c5e563' => 
    array (
      0 => 'C:/laragon/www/webcecom//templates/about.tpl',
      1 => 1611872919,
    ),
  ),
  'nocache_hash' => '152806279260144aebb77bc3-46459692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- BREADCRUMB
        ===============================================================-->
<div class="breadcrumb-container">
    <div class="container text-right">
        <ol class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
">Inicio</a></li>
            <li class="active">Acerca de Nosotros <i class="fa fa-arrow-down ml5"></i></li>
        </ol>
    </div>
</div>
<!-- ABOUT US
  ===============================================================-->
<!-- INTRODUCTION -->
<!-- MISION, VISION AND VALUES -->
<section class="bg-gray" id="mision">
    <div class="container">
        <div class="row">
            <!-- Mision -->
            <div class="col-md-12">
                <div class="title">
                    <h2>Quienes Somos</h2>
                </div>
                <p class="text-justify">
                    El CECOM realiza estudios, proyectos y capacitaciones que permitan crear capacidades para el diseño, ejecución y evaluación de políticas públicas, programas y proyectos para la gestión del desarrollo local en sus dimensiones del desarrollo social, de género, económico, y de legalidad desde una perspectiva integral y sustentable. Prestamos toda clase de servicios, asesoría y consultoría así como realizar todo tipo de estudios e investigaciones en diverso temas.
                </p>
                <p class="text-justify">Ofrecemos también servicios de capacitación-formación en los ámbitos de educación para contribuir a la formación y especialización de servidores públicos así como capacitar a organizaciones civiles y productivas. Apoyamos con nuestros estudios al aprovechamiento de los recursos naturales, la protección del ambiente.</p>
            </div>
        </div><!-- /row -->
        <div class="row">
            <!-- Mision -->
            <div class="col-md-6">
                <h3 class="color4 wow fadeInUp">Misión</h3>
                <p class="text-justify">Somos un centro de estudios estratégicos que tiene como finalidad generar las bases para el desarrollo social, humano y económico de los sectores tomando en cuenta la trasversalidad y equidad de género en nuestro programas</p>
            </div>
            <!-- Vision -->
            <div class="col-md-6">
                <h3 class="color4 wow fadeInUp">Visión</h3>
                <p class="text-justify">Ser bajo un enfoque práctico y en forma real, el centro más importante de investigación y consultoría en temas del desarrollo social, humano, económico y derechos fundamentales en el sureste de México.</p>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section Mision, Vision and Values -->


<!-- HISTORY -->
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-r">
                    <h2>Nuestra historia</h2>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Tab Menú -->
                <ul class="nav nav-justified nav-wizard" id="navHistoryCarousel">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('timelines')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <li class="<?php if ($_smarty_tpl->getVariable('key')->value===0){?>active<?php }?>">
                            <a data-toggle="tab" href="#content_<?php echo $_smarty_tpl->getVariable('key')->value;?>
"><?php echo $_smarty_tpl->getVariable('item')->value['period'];?>
</a>
                        </li>
                    <?php }} ?>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('timelines')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <div id="content_<?php echo $_smarty_tpl->getVariable('key')->value;?>
" class="<?php if ($_smarty_tpl->getVariable('key')->value===0){?>tab-pane fade in active<?php }else{ ?> tab-pane fade<?php }?>">
                            <h3 class="color5"><?php echo $_smarty_tpl->getVariable('item')->value['title'];?>
</h3>
                            <p class="text-italic"><?php echo $_smarty_tpl->getVariable('item')->value['sumary'];?>
</p>
                        </div>
                    <?php }} ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="slick-carousel" id="historyCarousel">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('timelines')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <div>
                            <img src="http://placehold.it/820x330/BDC3C7/ffffff?text=2000-2005" alt="2000-2005" class="img-responsive mb15">
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section Mision, Vision and Values -->
<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="title-r">
                <h2>Nuestro equipo</h2>
            </div>
            <div class="slick-carousel" id="team">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('team')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    <div class="row">
                        <div class="col-sm-6 col-md-3 text-center">
                            <div class="item-img-wrap">
                                <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/perfiles/<?php echo $_smarty_tpl->getVariable('item')->value['image'];?>
" class="img-responsive" alt="team">
                            </div>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="col-sm-6 col-md-9 pb30">
                            <h4 class="color5 text-uppercase"><?php echo $_smarty_tpl->getVariable('item')->value['name'];?>
 <small><i class="fa fa-angle-right"></i> <?php echo $_smarty_tpl->getVariable('item')->value['position'];?>
</small></h4>
                            <p class="text-justify"><strong>Resumen:</strong> <?php echo nl2br($_smarty_tpl->getVariable('item')->value['summary']);?>
</p>
                            <h5 class="color5 m0 pb10"></h5>
                        </div>
                    </div>
                <?php }} ?>
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Certificaciones</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <!-- Fact -->
                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/certificate/empresaigualdad.jpg" class="img-responsive" alt="team">
                    </div>
                    <!-- Fact -->
                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/certificate/empresasocial.png"  class="img-responsive"  alt="team">
                    </div>
                    <!-- Fact -->
                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/certificate/coparmex.jpg"  class="img-responsive" alt="team">
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/certificate/fomento.png"  class="img-responsive" alt="team">
                    </div>

                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="<?php echo $_smarty_tpl->getVariable('WEB_ROOT')->value;?>
/assets/img/certificate/amexme.jpg"  class="img-responsive" alt="team">
                    </div>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section Facts -->
<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-r">
                    <h2>alianzas y convenio</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <ul class="listicon-check">
                    <li>KEETIL A.C.</li>

                    <li>ILSB GENERO</li>

                    <li>COLEGIO DE LA FRONTERA NORTE- DEPARTAMENTO DE POLITICAS PUBLICAS</li>

                    <li>IAP-CHIAPAS</li></ul>

                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="listicon-check">
                    <li>INSTITUTO TECNOLOGICO DE TAPACHULA</li>

                    <li>FOMENTO ECONÓMICO DE CHIAPAS AC</li>

                    <li>UNACH – FACULTAD DE DERECHO</li>

                    <li>INSTITUTO DE CIENCIAS FORENSES- UNAM</li>

                </ul>

            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section Lists -->
