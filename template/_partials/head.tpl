{block name='head_charset'}
  <meta charset="UTF-8">
{/block}
{block name='head_ie_compatibility'}
  <meta http-equiv="x-ua-compatible" content="ie=edge">
{/block}

{block name='head_seo'}
  <title>La Barra CCU</title>
  <meta name="description" content="{block name='head_seo_description'}{$page.meta.description}{/block}">
  <meta name="keywords" content="{block name='head_seo_keywords'}{$page.meta.keywords}{/block}">
  {if $page.meta.robots !== 'index'}
    <meta name="robots" content="{$page.meta.robots}">
  {/if}
  {if $page.canonical}
    <link rel="canonical" href="{$page.canonical}">
  {/if}
{/block}

{literal}
<!-- Global site tag (gtag.js) - Google Ads: 725653018 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-725653018"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-725653018');
</script>

<!--
Event snippet for RT All Site CCU E-commerce (Test) on : Please do not remove.
Place this snippet on pages with events you’re tracking. 
Creation date: 07/24/2019
-->
<script>
  gtag('event', 'conversion', {
    'allow_custom_scripts': true,
    'send_to': 'DC-5221135/invmedia/rtall0+standard'
  });
</script>
<noscript>
<img src="https://ad.doubleclick.net/ddm/activity/src=5221135;type=invmedia;cat=rtall0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" alt=""/>
</noscript>
<!-- End of event snippet: Please do not remove -->
{/literal}


{block name='head_viewport'}
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
{/block}

{block name='head_icons'}
  <link rel="icon" type="image/vnd.microsoft.icon" href="{$shop.favicon}?{$shop.favicon_update_time}">
  <link rel="shortcut icon" type="image/x-icon" href="{$shop.favicon}?{$shop.favicon_update_time}">
{/block}
     
{block name='stylesheets'}
    {include file="_partials/stylesheets.tpl" stylesheets=$stylesheets}
    <!--ICONS-->
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/icon-ccu.css?v=1">
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/ionicons.min.css?v=1">
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/lightgallery.min.css?v=1">
	<!--COUNTDOWN-->
	<link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/flipclock.css">
    <!--SLICK-->
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/slick-theme.css">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/bootstrap.min.css">
    <!--ESTILOS GENERALES-->
<!--    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/inicio_edad.css">-->
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/thememod.css">
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/style.css?v=4.1">
    <link rel="stylesheet" type="text/css" href="/themes/ccu/assets/css/lity.min.css">
	<link href="/themes/ccu/assets/css/sweetalert.css?v1" rel="stylesheet" />
	<link href="/themes/ccu/assets/css/sweetalert2_2.min.css?v1" rel="stylesheet" />
   
{/block}

{block name='javascript_head'}
    {include file="_partials/javascript.tpl" javascript=$javascript.head vars=$js_custom_vars}
    <script type="text/javascript" src="/themes/ccu/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/themes/ccu/assets/js/flipclock.min.js"></script>
    <script type="text/javascript" src="/themes/ccu/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/themes/ccu/assets/js/mainv2.js?v=3.5"></script>	
	<script type="text/javascript" src="/themes/ccu/assets/js/sweetalert2_2.min.js"></script>	
	<script type="text/javascript" src="/themes/ccu/assets/js/contactoRapido.js?v=1.3"></script>
    	
    <script type="text/javascript" >
        function operacion(ps, param) {
            if (param == 1) {
                ps.parentNode.parentNode.getElementsByTagName('input')[0].value = (+ps.parentNode.parentNode.getElementsByTagName('input')[0].value + 1);
            }

            /*restar*/
            if (param == 2) {
                ps.parentNode.parentNode.getElementsByTagName('input')[0].value = Math.max(1, (+ps.parentNode.parentNode.getElementsByTagName('input')[0].value - 1));
            }
            
            if (param == 3) {
                ps.parentNode.parentNode.getElementsByTagName('input')[0].value = (+ps.parentNode.parentNode.getElementsByTagName('input')[0].value + 6);
            }
            
            if (param == 4) {
                ps.parentNode.parentNode.getElementsByTagName('input')[0].value = Math.max(6, (+ps.parentNode.parentNode.getElementsByTagName('input')[0].value - 6));
            }
            
        }
              
        function all_brands()
        {
            $('#brands').show();
            $(".bttn-more").hide();
        }
		
		function aumentarCant(nombre){
			var digito = Number($(nombre).val())+1;
			$(nombre).val(digito);
		
		}
		
		function disminuirCant(nombre){
			var digito = Number($(nombre).val())-1;
			var valor; 
			if(digito<1){
				valor=1;
			}else{
				valor = digito;
			}  
				$(nombre).val(valor);
		}
        
        function confirmaEdad()
        {
            console.log("edad");
            var popup = 1;
            $.ajax({
                data:  { popup: popup},
                url:   'modules/ajax/validarPopup.php',
                type:  'post',
                dataType:"json",
                async: false,
                success:  function (response){
                    if(response.estado == 1)
                    {
                        $('#popup-edad').hide();
                        $('#contingencia').show();
                    }
                }
            });
        }
        
        function confirmaContingencia()
        {
            console.log("contingencia");
            var popup = 2;
            $.ajax({
                data:  { popup: popup},
                url:   'modules/ajax/validarPopup.php',
                type:  'post',
                dataType:"json",
                async: false,
                success:  function (response){
                    if(response.estado == 1)
                    {
                        //$('#popup-contingencia').hide();
                    }
                }
            });
        }
    </script>

    {literal}
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '756796541518653');
      fbq('track', 'PageView');
    </script>
    <noscript><img height=""1"" width=""1"" style=""display:none""
      src=""https://www.facebook.com/tr?id=756796541518653&ev=PageView&noscript=1""
    /></noscript>
    <!-- End Facebook Pixel Code -->	
    {/literal}
            
{/block}

{block name='hook_header'}
  {$HOOK_HEADER nofilter}
{/block}

{block name='hook_extra'}{/block}