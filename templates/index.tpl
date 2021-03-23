<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}
</head>

<body>
   <!-- PRELOADER
        ===============================================================-->
    <div id="preloader">
        <div class="cssload-container">
            <div class="cssload-double-torus"></div>
        </div>
    </div>
  <!-- .preloader //end -->
    {include file="{$DOC_ROOT}/templates/header.tpl"}
    {include file="{$DOC_ROOT}/templates/{$page}.tpl"}
    {include file="{$DOC_ROOT}/templates/footer.tpl"}
    {include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
</body>
</html>
