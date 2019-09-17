<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\laragon\www\musicool-cms/themes/musicool/layouts/layout.htm */
class __TwigTemplate_e1ebfe2b76b6f9841e0a6bbb44d7bd6d10f34a690a3eb79c58e3c022cbba77dd extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
\t<meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>MUSICOOL - ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>
  
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.offcanvas.min.css");
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/css/line-awesome.min.css");
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/css/font-awesome.min.css");
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.min.css");
        echo "\" />
  <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.fancybox.css?v=2.1.5\" media=\"screen\" /> -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" />
  <!-- Magnific Popup core CSS file -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/blog.style.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css\">
    <style>
        .lingkaran {
            width: 35px;
            height: 35px;
            position: absolute;
            background-color: #009b4c;
            border-radius: 50px;
            z-index: -1;
            top: -10px;
            left: -10px
        }

        .d-block {
            display: block;
        }

        .mx-50 {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .input-wrapper {
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: #f7f7f7;
            border-radius: 0;
            padding: 30px;
            border: none;
            box-shadow: none !important;
            font-size: 15px;
        }

        .submit-btn {
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #009B4D;
            padding-left: 30px;
            padding-right: 30px;
            border-color: transparent;
            border-radius: 20px;

        }

        .flex-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .flex-item {
            margin: 20px;
            cursor: pointer;
            color: #666666;
            padding-bottom: 10px;
        }

        .flex-item.active {
            border-bottom: 3px solid #009B4D;
        }

        .flex-item.active,
        .flex-item:hover {
            color: black !important;
        }

        .square:before {
            content: \"\";
            display: block;
            padding-top: 100%;
            margin: 20px;
        }
        #loading {
            height: 75px;
        }
        
    </style>

</head>

<body>

  ";
        // line 104
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 105
        echo "

  ";
        // line 107
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 108
        echo "
  ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("global/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "

  <script src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-1.11.2.min.js");
        echo "\"></script>
  <script src=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
  <script src=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.offcanvas.min.js");
        echo "\"></script>
  <script src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
  <script src=\"";
        // line 116
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.matchHeight-min.js");
        echo "\"></script>
  <script src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/home.js");
        echo "\"></script>
  <script src=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
  <!-- Magnific Popup core JS file -->
  <script src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/magnific-popup.js");
        echo "\"></script>
  ";
        // line 121
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 122
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 123
        echo "


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\musicool-cms/themes/musicool/layouts/layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 123,  242 => 122,  227 => 121,  223 => 120,  218 => 118,  214 => 117,  210 => 116,  206 => 115,  202 => 114,  198 => 113,  194 => 112,  190 => 110,  186 => 109,  183 => 108,  181 => 107,  177 => 105,  173 => 104,  86 => 20,  82 => 19,  77 => 17,  73 => 16,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
<head>
\t<meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>MUSICOOL - {{ this.page.title }}</title>
  
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/bootstrap.offcanvas.min.css'|theme }}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/fonts/css/line-awesome.min.css'|theme }}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/fonts/css/font-awesome.min.css'|theme }}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/owl.carousel.min.css'|theme }}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/owl.theme.default.min.css'|theme }}\" />
  <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.fancybox.css?v=2.1.5\" media=\"screen\" /> -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/style.css'|theme }}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/responsive.css'|theme }}\" />
  <!-- Magnific Popup core CSS file -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/blog.style.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css\">
    <style>
        .lingkaran {
            width: 35px;
            height: 35px;
            position: absolute;
            background-color: #009b4c;
            border-radius: 50px;
            z-index: -1;
            top: -10px;
            left: -10px
        }

        .d-block {
            display: block;
        }

        .mx-50 {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .input-wrapper {
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: #f7f7f7;
            border-radius: 0;
            padding: 30px;
            border: none;
            box-shadow: none !important;
            font-size: 15px;
        }

        .submit-btn {
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #009B4D;
            padding-left: 30px;
            padding-right: 30px;
            border-color: transparent;
            border-radius: 20px;

        }

        .flex-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .flex-item {
            margin: 20px;
            cursor: pointer;
            color: #666666;
            padding-bottom: 10px;
        }

        .flex-item.active {
            border-bottom: 3px solid #009B4D;
        }

        .flex-item.active,
        .flex-item:hover {
            color: black !important;
        }

        .square:before {
            content: \"\";
            display: block;
            padding-top: 100%;
            margin: 20px;
        }
        #loading {
            height: 75px;
        }
        
    </style>

</head>

<body>

  {% partial 'global/header' %}


  {% page %}

  {% partial 'global/footer' %}


  <script src=\"{{ 'assets/js/jquery-1.11.2.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/bootstrap.offcanvas.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/jquery.matchHeight-min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/home.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
  <!-- Magnific Popup core JS file -->
  <script src=\"{{ 'assets/js/magnific-popup.js'|theme }}\"></script>
  {% framework extras %}
  {% scripts %}



</body>
</html>", "D:\\laragon\\www\\musicool-cms/themes/musicool/layouts/layout.htm", "");
    }
}
