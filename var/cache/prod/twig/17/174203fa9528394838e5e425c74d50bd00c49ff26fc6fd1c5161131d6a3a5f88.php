<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__a7a608d30a06dc7f72589df3cc6abd5d6bb03bdbebfaff5f074138c3fdbee2f0 */
class __TwigTemplate_eba50f778c503ee7ef6fa5119e88898d94cb115e8666320092c3cd7c59eb334a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/tienda-presta/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/tienda-presta/img/app_icon.png\" />

<title>Páginas • joyas</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.6.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = 'b0040b23ae3d315aa1bde1cf8962946e';
    var token_admin_orders = '178cb43097bb40788e604084664b4627';
    var token_admin_customers = 'de061bfd64777a17197325daf24dc7e3';
    var token_admin_customer_threads = 'e90d6f642887e8b70324b0e165c1f8cb';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '35d5789f02d4f717af69117831485334';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/tienda-presta/admin6497fliwd/index.php/improve/modules/catalog/recommended?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak';
    var admin_notification_get_link = '/tienda-presta/admin6497fliwd/index.php/common/notifications?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak';
    var admin_notification_push_link = '/tienda-presta/admin6497fliwd/index.php/common/notifications/ack?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak';
    var tab_modules_list = 'wic_pushproductcms,protectedshops,trustedshops,trustedshopsintegration,ebadgeletitbuy,etranslation,bablic';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/tienda-presta/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tienda-presta/admin6497fliwd/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tienda-presta/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tienda-presta/admin6497fliwd/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tienda-presta/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tienda-presta/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/tienda-presta\\/admin6497fliwd\\/\";
var baseDir = \"\\/tienda-presta\\/\";
var changeFormLanguageUrl = \"\\/tienda-presta\\/admin6497fliwd\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/tienda-presta/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/admin6497fliwd/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/js/admin.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/admin6497fliwd/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/js/tools.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/admin6497fliwd/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/admin6497fliwd/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/tienda-presta/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/tienda-presta/admin6497fliwd/index.php/common/notifications?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/tienda-presta\\/admin6497fliwd\\/index.php?controller=AdminGamification&token=533cffc31d020c0fa7f050888d1ec0cc\";
            var current_id_tab = 57;
        </script>

";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-es admincmscontent\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminDashboard&amp;token=53b7b135f54b29f631cfb644f6c2942b\"></a>
      <span id=\"shop_version\">1.7.6.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=cf0c8b51eaa403a11ef99bae8e4eaa5c\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda-presta/admin6497fliwd/index.php/improve/modules/manage?token=e1c0a653022c417008b0b6bf235f2374\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda-presta/admin6497fliwd/index.php/sell/catalog/categories/new?token=e1c0a653022c417008b0b6bf235f2374\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda-presta/admin6497fliwd/index.php/sell/catalog/products/new?token=e1c0a653022c417008b0b6bf235f2374\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=6178216c02f58970d46892142d799cc8\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminOrders&amp;token=178cb43097bb40788e604084664b4627\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"67\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/?-EmYGegak\"
        data-post-link=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminQuickAccesses&token=53d343a019d4ff629a9964e5cfe22335\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"P&aacute;ginas - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminQuickAccesses&token=53d343a019d4ff629a9964e5cfe22335\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/tienda-presta/admin6497fliwd/index.php?controller=AdminSearch&amp;token=d35bcfa1f775290f647d58dba42f5e57\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/tienda-presta/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/rocho1978%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Angel</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/employees/1/edit?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\">
      <i class=\"material-icons\">settings</i>
      Tu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminLogin&amp;logout=1&amp;token=26ee4ae10e5585c33da28e6504a75234\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/employees/toggle-navigation?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminDashboard&amp;token=53b7b135f54b29f631cfb644f6c2942b\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminOrders&amp;token=178cb43097bb40788e604084664b4627\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminOrders&amp;token=178cb43097bb40788e604084664b4627\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/orders/invoices/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminSlip&amp;token=c62bad9b5958e6eabae714a7419d92c6\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/orders/delivery-slips/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminCarts&amp;token=4d5f2be9497036b68b39163b3938e9d9\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/catalog/products?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/catalog/products?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/catalog/categories?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminTracking&amp;token=99e6b63590c9d4faa05392a5acbcc7a7\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminAttributesGroups&amp;token=a32579594819ba32fddf5a4e62f2925b\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/catalog/brands/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminAttachments&amp;token=3bbac9c4c8cc0f7c46b747e1cbf74046\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminCartRules&amp;token=6178216c02f58970d46892142d799cc8\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/stocks/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/customers/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/sell/customers/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminAddresses&amp;token=03aed87f56b00cfed5e45afa7d92b7fe\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminCustomerThreads&amp;token=e90d6f642887e8b70324b0e165c1f8cb\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminCustomerThreads&amp;token=e90d6f642887e8b70324b0e165c1f8cb\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminOrderMessage&amp;token=ed4d8c622edcb1a157ad6001740b08bc\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminReturn&amp;token=ba4be4442408209968e9977b4541931f\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminStats&amp;token=cf0c8b51eaa403a11ef99bae8e4eaa5c\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/modules/manage?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/modules/manage?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/modules/addons/modules/catalog?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/themes/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/themes/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/modules/addons/themes/catalog?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/mail_theme/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Tema Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/cms-pages/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/modules/positions/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminImages&amp;token=b91f05b2cd81d8c73a8c5d24b40b25a7\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/modules/link-widget/list?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminCarriers&amp;token=75c552fe1bae3e1b9577b3d71f71aa24\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminCarriers&amp;token=75c552fe1bae3e1b9577b3d71f71aa24\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/shipping/preferences?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/payment/payment_methods?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/payment/payment_methods?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/payment/preferences?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/international/localization/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/international/localization/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminZones&amp;token=5b74cb8968463d4722e2e3baf47a36ab\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/international/taxes/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/international/translations/settings?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminEmarketing&amp;token=7303c49b8ca92cb249cd6e1968e72f75\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/shop/preferences/preferences?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/shop/preferences/preferences?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/shop/order-preferences/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/shop/product-preferences/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/shop/customer-preferences/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/shop/contacts/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/shop/seo-urls/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminSearchConf&amp;token=732efe4bab6127ecfc821f330ffc0909\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminGamification&amp;token=533cffc31d020c0fa7f050888d1ec0cc\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/system-information/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/system-information/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/performance/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/administration/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/emails/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/import/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/employees/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/sql-requests/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/logs/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/tienda-presta/admin6497fliwd/index.php/configure/advanced/webservice-keys/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Diseño</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/cms-pages/?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\" aria-current=\"page\">Páginas</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Páginas          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/cms-pages/category/new?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\"                  title=\"Añadir una nueva categoría de página\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir una nueva categoría de página
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/tienda-presta/admin6497fliwd/index.php/improve/design/cms-pages/new?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\"                  title=\"Añadir nueva página\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nueva página
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/tienda-presta/admin6497fliwd/index.php/improve/modules/catalog?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\"                title=\"Módulos recomendados\"
                              >
                Módulos recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/tienda-presta/admin6497fliwd/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.6.7%2526country%253Des/Ayuda?_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Módulos y Servicios recomendados',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/tienda-presta/admin6497fliwd/index.php/modules/addons/modules/recommended?tabClassName=AdminCmsContent&_token=VXnmZ8zG9K6wh918MQRVNDhPeYkKkdXi3F-EmYGegak',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1123
        $this->displayBlock('content_header', $context, $blocks);
        // line 1124
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1125
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1126
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1127
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/tienda-presta/admin6497fliwd/index.php?controller=AdminDashboard&amp;token=53b7b135f54b29f631cfb644f6c2942b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=rocho1978%40gmail.com&amp;firstname=Angel&amp;lastname=Le%C3%B3n&amp;website=http%3A%2F%2Flocalhost%2Ftienda-presta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/tienda-presta/admin6497fliwd/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=rocho1978%40gmail.com&amp;firstname=Angel&amp;lastname=Le%C3%B3n&amp;website=http%3A%2F%2Flocalhost%2Ftienda-presta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1234
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 101
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1123
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1124
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1125
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1126
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1234
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__a7a608d30a06dc7f72589df3cc6abd5d6bb03bdbebfaff5f074138c3fdbee2f0";
    }

    public function getDebugInfo()
    {
        return array (  1324 => 1234,  1319 => 1126,  1314 => 1125,  1309 => 1124,  1304 => 1123,  1295 => 101,  1287 => 1234,  1178 => 1127,  1175 => 1126,  1172 => 1125,  1169 => 1124,  1167 => 1123,  141 => 101,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a7a608d30a06dc7f72589df3cc6abd5d6bb03bdbebfaff5f074138c3fdbee2f0", "");
    }
}
