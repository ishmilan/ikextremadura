<?php

/* partials/navigation.html.twig */
class __TwigTemplate_70ab42c9d1042126e1edce282ca12d86ae1d378a5dae2b942d499f8fe231e482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-wrapper fixed-top\">
\t<style>

.navbar li a{text-transform:uppercase;}
.navbar.navbar-ikea{background-color:#FFE000;color:#003BFE;font-size:1.1rem;border-radius:0;box-shadow:0 0 4px #333;}
.navbar.navbar-ikea, .navbar.navbar-ikea>.container, .container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse,
.container>.navbar-header, .navbar.navbar-ikea .nav.navbar-nav, .navbar.navbar-ikea .nav.navbar-nav a{min-height: 4rem;}
.navbar-brand, .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{padding:0;margin:0;}
.navbar.navbar-ikea .navbar-nav>li>a{padding:1.3rem 0.4rem;}
.navbar.navbar-ikea .navbar-nav>li.active>a{cursor: not-allowed;color: #333 !important;background: #EEE;}
.navbar-brand{width:calc(100% - 70px);height:4rem;position:relative;}
.navbar-brand img{max-height:4rem;margin:0px;}
.navbar-brand img.small{display:none;}
.navbar-brand h1{padding-left: 0.3rem;font-size: 1.6rem;margin:0;margin-top:0.9rem;display:none;color:#003BFE;}
.navbar-toggle.collapsed .icon-bar{background: #003BFE;}
.navbar-toggle.collapsed:hover .icon-bar{filter: brightness(200%);}
.navbar.navbar-wrapper.fixed-top{position:fixed;top:0;border:0;}
.navbar-wrapper, .navbar-wrapper>.container-fluid{margin: 0;padding: 0;}
@media(max-width:479px){
\t.navbar-brand img.big{display:none;}
\t.navbar-brand img.small{display:block;max-width:100%;position:absolute;top:50%;transform:translateY(-50%);}
}
@media(max-width:700px){
\t.navbar-collapse > .navbar-nav > li > a{margin:auto -15px;}
}
\t</style>
\t<div class=\"container-fluid\">
\t\t<nav class=\"navbar navbar-ikea navbar-static-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 37
        echo ($context["base_url"] ?? null);
        echo "\" title=\"";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "\">
\t\t\t\t\t\t<img src=\"/images/logo.jpg\" class=\"big\"/>
\t\t\t\t\t\t<img src=\"/images/logo-s.jpg\" class=\"small\"/>
\t\t\t\t\t\t<h1>IKExtremadura</h1>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"navbar\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#inicio\">Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#pedido\">Pedidos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#tarifas\">Tarifas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#garantia\">Garantía</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#quien\">Nosotros</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>
</div>
<script>
\tvar click = navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/) ? 'touchstart' : 'click';
\tdocument.querySelector('.navbar-toggle.collapsed').addEventListener(click,function(){
\t\tdocument.querySelector('#navbar').classList.toggle('collapse');
\t});
\tvar options = document.querySelectorAll('#navbar li > a');
\tfor(var i=0;i<options.length;i++){
\t\toptions[i].addEventListener(click,function(){
\t\t\tdocument.querySelector('#navbar').classList.toggle('collapse');
\t\t});
\t}
</script>
<!--";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            echo " ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                echo " ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                echo " <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li> ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "-->
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 78,  57 => 37,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar navbar-wrapper fixed-top\">
\t<style>

.navbar li a{text-transform:uppercase;}
.navbar.navbar-ikea{background-color:#FFE000;color:#003BFE;font-size:1.1rem;border-radius:0;box-shadow:0 0 4px #333;}
.navbar.navbar-ikea, .navbar.navbar-ikea>.container, .container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse,
.container>.navbar-header, .navbar.navbar-ikea .nav.navbar-nav, .navbar.navbar-ikea .nav.navbar-nav a{min-height: 4rem;}
.navbar-brand, .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand{padding:0;margin:0;}
.navbar.navbar-ikea .navbar-nav>li>a{padding:1.3rem 0.4rem;}
.navbar.navbar-ikea .navbar-nav>li.active>a{cursor: not-allowed;color: #333 !important;background: #EEE;}
.navbar-brand{width:calc(100% - 70px);height:4rem;position:relative;}
.navbar-brand img{max-height:4rem;margin:0px;}
.navbar-brand img.small{display:none;}
.navbar-brand h1{padding-left: 0.3rem;font-size: 1.6rem;margin:0;margin-top:0.9rem;display:none;color:#003BFE;}
.navbar-toggle.collapsed .icon-bar{background: #003BFE;}
.navbar-toggle.collapsed:hover .icon-bar{filter: brightness(200%);}
.navbar.navbar-wrapper.fixed-top{position:fixed;top:0;border:0;}
.navbar-wrapper, .navbar-wrapper>.container-fluid{margin: 0;padding: 0;}
@media(max-width:479px){
\t.navbar-brand img.big{display:none;}
\t.navbar-brand img.small{display:block;max-width:100%;position:absolute;top:50%;transform:translateY(-50%);}
}
@media(max-width:700px){
\t.navbar-collapse > .navbar-nav > li > a{margin:auto -15px;}
}
\t</style>
\t<div class=\"container-fluid\">
\t\t<nav class=\"navbar navbar-ikea navbar-static-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"{{ base_url }}\" title=\"{{ site.title }}\">
\t\t\t\t\t\t<img src=\"/images/logo.jpg\" class=\"big\"/>
\t\t\t\t\t\t<img src=\"/images/logo-s.jpg\" class=\"small\"/>
\t\t\t\t\t\t<h1>IKExtremadura</h1>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"navbar\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#inicio\">Inicio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#pedido\">Pedidos</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#tarifas\">Tarifas</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#garantia\">Garantía</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#quien\">Nosotros</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>
</div>
<script>
\tvar click = navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/) ? 'touchstart' : 'click';
\tdocument.querySelector('.navbar-toggle.collapsed').addEventListener(click,function(){
\t\tdocument.querySelector('#navbar').classList.toggle('collapse');
\t});
\tvar options = document.querySelectorAll('#navbar li > a');
\tfor(var i=0;i<options.length;i++){
\t\toptions[i].addEventListener(click,function(){
\t\t\tdocument.querySelector('#navbar').classList.toggle('collapse');
\t\t});
\t}
</script>
<!--{% for page in pages.children %} {% if page.visible %} {% set current_page = (page.active or page.activeChild) ? 'active' : '' %} <li class=\"{{ current_page }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li> {% endif %} {% endfor %}-->
", "partials/navigation.html.twig", "/opt/lampp/htdocs/ikextremadura/user/themes/bootgrav/templates/partials/navigation.html.twig");
    }
}
