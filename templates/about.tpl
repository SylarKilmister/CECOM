<!-- BREADCRUMB
        ===============================================================-->
<div class="breadcrumb-container">
    <div class="container text-right">
        <ol class="breadcrumb">
            <li><a href="{$WEB_ROOT}">Inicio</a></li>
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
                    {foreach from=$timelines item=item key=key}
                        <li class="{if $key === 0}active{/if}">
                            <a data-toggle="tab" href="#content_{$key}">{$item.period}</a>
                        </li>
                    {/foreach}
                </ul>
                <!-- Tab Content -->
                <div class="tab-content">
                    {foreach from=$timelines item=item key=key}
                        <div id="content_{$key}" class="{if $key === 0}tab-pane fade in active{else} tab-pane fade{/if}">
                            <h3 class="color5">{$item.title}</h3>
                            <p class="text-italic">{$item.sumary}</p>
                        </div>
                    {/foreach}
                </div>
            </div>
            <div class="col-md-6">
                <div class="slick-carousel" id="historyCarousel">
                    {foreach from=$timelines item=item key=key}
                        <div>
                            <img src="http://placehold.it/820x330/BDC3C7/ffffff?text=2000-2005" alt="2000-2005" class="img-responsive mb15">
                        </div>
                    {/foreach}
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
                {foreach from=$team item=item key=key}
                    <div class="row">
                        <div class="col-sm-6 col-md-3 text-center">
                            <div class="item-img-wrap">
                                <img src="{$WEB_ROOT}/assets/img/perfiles/{$item.image}" class="img-responsive" alt="team">
                            </div>
                            <div class="visible-xs-block visible-sm-block pt20"></div>
                        </div>
                        <div class="col-sm-6 col-md-9 pb30">
                            <h4 class="color5 text-uppercase">{$item.name} <small><i class="fa fa-angle-right"></i> {$item.position}</small></h4>
                            <p class="text-justify"><strong>Resumen:</strong> {$item.summary|nl2br}</p>
                            <h5 class="color5 m0 pb10"></h5>
                        </div>
                    </div>
                {/foreach}
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
                        <img src="{$WEB_ROOT}/assets/img/certificate/empresaigualdad.jpg" class="img-responsive" alt="team">
                    </div>
                    <!-- Fact -->
                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="{$WEB_ROOT}/assets/img/certificate/empresasocial.png"  class="img-responsive"  alt="team">
                    </div>
                    <!-- Fact -->
                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="{$WEB_ROOT}/assets/img/certificate/coparmex.jpg"  class="img-responsive" alt="team">
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="{$WEB_ROOT}/assets/img/certificate/fomento.png"  class="img-responsive" alt="team">
                    </div>

                    <div class="col-sm-6 col-md-4 pt60">
                        <img src="{$WEB_ROOT}/assets/img/certificate/amexme.jpg"  class="img-responsive" alt="team">
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
