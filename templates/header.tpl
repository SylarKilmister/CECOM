 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{$WEB_ROOT}"><img src="{$WEB_ROOT}/assets/img/logo.jpg" width="184" height="28" alt="CECOM"></a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="{if $page eq 'homepage'}active{/if}"><a href="{$WEB_ROOT}">Inicio</a></li>
                <li class="{if $page eq 'about'}active{/if}">
                    <a href="{$WEB_ROOT}/about">Nosotros</a>
                </li>
                <li class="{if $page eq 'service'}active{/if}"><a href="{$WEB_ROOT}/service">Servicios</a></li>
                <li class="{if $page eq 'contact'}active{/if}">
                    <a href="{$WEB_ROOT}/contact" >Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</div>
