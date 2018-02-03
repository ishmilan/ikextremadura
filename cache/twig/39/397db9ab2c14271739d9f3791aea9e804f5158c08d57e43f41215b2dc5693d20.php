<?php

/* partials/base.html.twig */
class __TwigTemplate_1b634c127db5eb04b109a2a821440c155bf13bccda125f94ac64580e0b2538a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "\t<style>
html, body{padding:0;margin:0;font-size: 14px;overflow-x:hidden;}
*{color:#333;scroll-behavior:smooth;}
p{margin: 16px 0 0;}
h2,h3,.h3,h4,.h4,h5,.h5{text-align:center;}
.h4{margin-top:3rem;}
h2,h3{color:#003BFE;}
h3,.h3{font-size:26px;}
hr{border:0;height:1px;background:#CDCDCD;width:96%;margin:20px auto;}
section{margin: auto -15px;padding: 4rem 16px;}
section:nth-child(even){background:#EEE;}
a{color:#003BFE !important;}
footer{background:#EEE;box-shadow:inset 0 0 4px;width:101vw;margin: 0 -0.5vw;}
.footer-maps{padding:16px !important;padding-bottom: 0px !important;}
@media (min-width:769px) {.footer-maps{text-align:right;}}
*:not([class*=\"fa-\"]):not([class*=\"glyphicon-\"]){font-family:verdana, sans-serif !important;}
.banner > h2, .banner > div{text-align: center;}
@media (min-width:600px){
\t.banner{position:relative;margin: auto -15px;}
\t.banner > h2,.banner > h3, .banner > div{position: absolute;top:0;left:50%;width:100%;background:rgba(245,245,245,0.8);display:block;padding:1em;max-width:980px;margin:0;transform:translateX(-50%);}
\t.banner > div{text-align: center;top:auto;bottom:0;padding-bottom:0;}
}
.container-flex{display:flex;flex-wrap: wrap;align-items: sttopretch;justify-content: space-around;}
.m-card{margin: 16px 4px;box-sizing: border-box;
\tbox-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
\tborder-radius: 2px;background-clip: padding-box;display:inline-block;max-width: 280px;
}
.m-card:hover{box-shadow: 0 0 6px 0 rgba(0,0,0,0.4);transform:scale(1.01);text-decoration:none;}
.m-card > div{position:relative;height:136px;}
.m-card .card-image{overflow: hidden;position:absolute;width:100%;top:0;}
.m-card .card-title{position: absolute;bottom:0;width:100%;padding:8px;background: rgba(245,245,245,0.5);
\toverflow: hidden;padding-top: 12px;height: 50%;font-size:110%;font-weight:bold;text-align: center;
}
.m-card .card-container{position:relative;width:100%;border-radius: 0 0 2px 2px;background-clip: padding-box;box-sizing: border-box;}
.m-card .card-container p{padding: 16px;font-size:80%;}
.t-card{margin:16px 4px;box-sizing:border-box;box-shadow:0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
\tborder-radius:2px;background-clip:padding-box;display:inline-block;max-width:280px;min-height:220px;}
.t-card>div{display:table;vertical-align:middle;width:100%;height:50%;}
.t-card>div>*{height:100%;display:table-cell;vertical-align:middle;position:initial;font-size:100%;
\tmargin:0;padding:8px;text-align:center;}
.t-card .card-title{width:100%;background: rgba(245,245,245,0.5);border-bottom:solid 1px #DCDCDC;}
\t</style>
</head>

<body data-spy=\"scroll\" data-target=\".navbar\">
\t";
        // line 68
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "

\t<div class=\"container-fluid marketing\">
\t\t";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "\t</div>

\t<footer class=\"footer bg-ikea-blue-alpha\">
\t\t<div class=\"container\" style=\"padding:0\">
\t\t\t<div class=\"col-xs-12 col-sm-6 footer-maps\" style=\"padding:0\">
\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2591.4553885583537!2d-6.373308684633227!3d39.44981997948928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd15dfb165538491%3A0x88933ab596a1d43a!2sCalle+Torre+de+Floripes%2C+3%2C+10005+C%C3%A1ceres!5e1!3m2!1ses!2ses!4v1517159457659\" frameborder=\"0\" style=\"border:0\" height=\"210px\" allowfullscreen></iframe>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6\" style=\"padding:16px 24px 0 16px;\">
\t\t\t\t<address style=\"margin:0;\">
\t\t\t\t\t<strong>IKExtremadura&copy; Cáceres-Badajoz</strong><br>
\t\t\t\t\tC/ Torre de Floripes nº3<br>
\t\t\t\t\t(10005, CÁCERES)<br>
\t\t\t\t\t<strong>Correo:</strong> <a href=\"mailto:info@ikextremadura.es\">info@ikextremadura.es</a> <br>
\t\t\t\t\t<strong>Teléfonos: </strong><a href=\"tel:+34608442272\">608442272</a>|<a href=\"tel:+34927269036\">927269036</a>|<a href=\"https://api.whatsapp.com/send?phone=+34608442272&text=Hola%20IKExtremadura!%20\">whatsapp</a><br>
\t\t\t\t\t<strong>HORARIO:</strong><br>
\t\t\t\t\t<strong>L a V:</strong> 10h.-14h. y 17h.-19.30h.<br>
\t\t\t\t\t<strong>Sábados:</strong> 10h.-14h.<br>
\t\t\t\t\t<a href=\"https://twitter.com/ikextremadura?ref_src=twsrc%5Etfw\" class=\"twitter-follow-button\" data-show-count=\"false\">Follow @ikextremadura</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script><br>
\t\t\t\t\t<iframe src=\"https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.ikextremadura.es%2F&width=450&layout=standard&action=like&size=small&show_faces=false&share=false&height=35&appId\" width=\"450\" height=\"35\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
\t\t\t\t</address>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<div class=\"container\">
\t\t\t<p class=\"text-muted text-center\" style=\"padding-bottom:2rem;\">Desarrollado por <a target=\"blank\" href=\"http://ishmilan.es\" title=\"Ish Milan\">Ish Milan</a>.
\t\t</div>
\t</footer>
</body>
<!--";
        // line 101
        $this->displayBlock('bottom', $context, $blocks);
        echo "-->

</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "description", array())) {
            // line 10
            echo "\t\t<meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "description", array());
            echo "\">
\t";
        } else {
            // line 12
            echo "\t\t<meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["site"] ?? null), "description", array());
            echo "\">
\t";
        }
        // line 13
        echo " ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", array())) {
            // line 14
            echo "\t<meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", array());
            echo "\"> ";
        }
        // line 15
        echo "\t<link rel=\"icon\" type=\"image/png\" href=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\">

\t<title>";
        // line 17
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>

\t";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo " ";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        echo " ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/bootstrap.min.css", 1 => 101), "method");
        echo " ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/carousel.css", 1 => 101), "method");
        echo " ";
        echo " ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/bootstrap-custom.css", 1 => 100), "method");
        // line 20
        echo "\t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo " ";
    }

    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        echo " ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        echo " ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(        // line 21
($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 22
            echo " ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            echo " ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            echo " ";
        }
        echo " ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo " ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
    }

    // line 101
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 101,  218 => 72,  206 => 22,  204 => 21,  191 => 20,  180 => 19,  176 => 22,  173 => 20,  171 => 19,  162 => 17,  156 => 15,  151 => 14,  148 => 13,  142 => 12,  136 => 10,  134 => 9,  129 => 6,  126 => 5,  118 => 101,  88 => 73,  86 => 72,  81 => 69,  79 => 68,  32 => 23,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t{% block head %}
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t{% if header.description %}
\t\t<meta name=\"description\" content=\"{{ header.description }}\">
\t{% else %}
\t\t<meta name=\"description\" content=\"{{ site.description }}\">
\t{% endif %} {% if header.robots %}
\t<meta name=\"robots\" content=\"{{ header.robots }}\"> {% endif %}
\t<link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">

\t<title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

\t{% block stylesheets %} {# Bootstrap core CSS #} {% do assets.add('theme://css/bootstrap.min.css',101) %} {% do assets.add('theme://css/carousel.css',101) %} {# Custom styles for this theme #} {% do assets.add('theme://css/bootstrap-custom.css',100) %}
\t{{ assets.css() }} {% endblock %} {% block javascripts %} {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %} {% do assets.add('theme://js/bootstrap.min.js') %} {% if browser.getBrowser == 'msie' and browser.getVersion
\t>= 8 and browser.getVersion
\t<=9 %} {% do assets.add( 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %} {% do assets.add( 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %} {% endif %} {{ assets.js() }} {% endblock %} {% endblock head %}
\t<style>
html, body{padding:0;margin:0;font-size: 14px;overflow-x:hidden;}
*{color:#333;scroll-behavior:smooth;}
p{margin: 16px 0 0;}
h2,h3,.h3,h4,.h4,h5,.h5{text-align:center;}
.h4{margin-top:3rem;}
h2,h3{color:#003BFE;}
h3,.h3{font-size:26px;}
hr{border:0;height:1px;background:#CDCDCD;width:96%;margin:20px auto;}
section{margin: auto -15px;padding: 4rem 16px;}
section:nth-child(even){background:#EEE;}
a{color:#003BFE !important;}
footer{background:#EEE;box-shadow:inset 0 0 4px;width:101vw;margin: 0 -0.5vw;}
.footer-maps{padding:16px !important;padding-bottom: 0px !important;}
@media (min-width:769px) {.footer-maps{text-align:right;}}
*:not([class*=\"fa-\"]):not([class*=\"glyphicon-\"]){font-family:verdana, sans-serif !important;}
.banner > h2, .banner > div{text-align: center;}
@media (min-width:600px){
\t.banner{position:relative;margin: auto -15px;}
\t.banner > h2,.banner > h3, .banner > div{position: absolute;top:0;left:50%;width:100%;background:rgba(245,245,245,0.8);display:block;padding:1em;max-width:980px;margin:0;transform:translateX(-50%);}
\t.banner > div{text-align: center;top:auto;bottom:0;padding-bottom:0;}
}
.container-flex{display:flex;flex-wrap: wrap;align-items: sttopretch;justify-content: space-around;}
.m-card{margin: 16px 4px;box-sizing: border-box;
\tbox-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
\tborder-radius: 2px;background-clip: padding-box;display:inline-block;max-width: 280px;
}
.m-card:hover{box-shadow: 0 0 6px 0 rgba(0,0,0,0.4);transform:scale(1.01);text-decoration:none;}
.m-card > div{position:relative;height:136px;}
.m-card .card-image{overflow: hidden;position:absolute;width:100%;top:0;}
.m-card .card-title{position: absolute;bottom:0;width:100%;padding:8px;background: rgba(245,245,245,0.5);
\toverflow: hidden;padding-top: 12px;height: 50%;font-size:110%;font-weight:bold;text-align: center;
}
.m-card .card-container{position:relative;width:100%;border-radius: 0 0 2px 2px;background-clip: padding-box;box-sizing: border-box;}
.m-card .card-container p{padding: 16px;font-size:80%;}
.t-card{margin:16px 4px;box-sizing:border-box;box-shadow:0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
\tborder-radius:2px;background-clip:padding-box;display:inline-block;max-width:280px;min-height:220px;}
.t-card>div{display:table;vertical-align:middle;width:100%;height:50%;}
.t-card>div>*{height:100%;display:table-cell;vertical-align:middle;position:initial;font-size:100%;
\tmargin:0;padding:8px;text-align:center;}
.t-card .card-title{width:100%;background: rgba(245,245,245,0.5);border-bottom:solid 1px #DCDCDC;}
\t</style>
</head>

<body data-spy=\"scroll\" data-target=\".navbar\">
\t{% include 'partials/navigation.html.twig' %}


\t<div class=\"container-fluid marketing\">
\t\t{% block content %}{% endblock %}
\t</div>

\t<footer class=\"footer bg-ikea-blue-alpha\">
\t\t<div class=\"container\" style=\"padding:0\">
\t\t\t<div class=\"col-xs-12 col-sm-6 footer-maps\" style=\"padding:0\">
\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2591.4553885583537!2d-6.373308684633227!3d39.44981997948928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd15dfb165538491%3A0x88933ab596a1d43a!2sCalle+Torre+de+Floripes%2C+3%2C+10005+C%C3%A1ceres!5e1!3m2!1ses!2ses!4v1517159457659\" frameborder=\"0\" style=\"border:0\" height=\"210px\" allowfullscreen></iframe>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6\" style=\"padding:16px 24px 0 16px;\">
\t\t\t\t<address style=\"margin:0;\">
\t\t\t\t\t<strong>IKExtremadura&copy; Cáceres-Badajoz</strong><br>
\t\t\t\t\tC/ Torre de Floripes nº3<br>
\t\t\t\t\t(10005, CÁCERES)<br>
\t\t\t\t\t<strong>Correo:</strong> <a href=\"mailto:info@ikextremadura.es\">info@ikextremadura.es</a> <br>
\t\t\t\t\t<strong>Teléfonos: </strong><a href=\"tel:+34608442272\">608442272</a>|<a href=\"tel:+34927269036\">927269036</a>|<a href=\"https://api.whatsapp.com/send?phone=+34608442272&text=Hola%20IKExtremadura!%20\">whatsapp</a><br>
\t\t\t\t\t<strong>HORARIO:</strong><br>
\t\t\t\t\t<strong>L a V:</strong> 10h.-14h. y 17h.-19.30h.<br>
\t\t\t\t\t<strong>Sábados:</strong> 10h.-14h.<br>
\t\t\t\t\t<a href=\"https://twitter.com/ikextremadura?ref_src=twsrc%5Etfw\" class=\"twitter-follow-button\" data-show-count=\"false\">Follow @ikextremadura</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script><br>
\t\t\t\t\t<iframe src=\"https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.ikextremadura.es%2F&width=450&layout=standard&action=like&size=small&show_faces=false&share=false&height=35&appId\" width=\"450\" height=\"35\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
\t\t\t\t</address>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<div class=\"container\">
\t\t\t<p class=\"text-muted text-center\" style=\"padding-bottom:2rem;\">Desarrollado por <a target=\"blank\" href=\"http://ishmilan.es\" title=\"Ish Milan\">Ish Milan</a>.
\t\t</div>
\t</footer>
</body>
<!--{% block bottom %}{% endblock %}-->

</html>
", "partials/base.html.twig", "/opt/lampp/htdocs/ikextremadura/user/themes/bootgrav/templates/partials/base.html.twig");
    }
}
