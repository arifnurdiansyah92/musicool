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

/* D:\laragon\www\musicool-cms/themes/musicool/partials/global/header.htm */
class __TwigTemplate_7aef3f48b095c6dfeeaaaa452600701466aa0270c7614832383e684ad46b3a3e extends \Twig\Template
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
        echo "<!-- <section id=\"header\" class=\"mainpage hidden-xs\" data-spy=\"affix\" data-offset-top=\"81\"> -->
  <header id=\"header\" class=\"mainpage hidden-xs\" data-spy=\"affix\" data-offset-top=\"81\">
    <div class=\"mainmenu\">
      <div class=\"container\">
      <!-- TOPNAV -->
      <div class=\"row\">
        <div class=\"col-md-2 header-logo\">
          <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-musicool.png");
        echo "\" class=\"logo img-responsive\">
          <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-musicool_w.png");
        echo "\" class=\"logow img-responsive\">
        </div>
        <div class=\"col-md-10 topnav header-nav clearfix\">
          <ul class=\"nav\">
            <li ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13) == "homepage")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Home</a></li>
            <li ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == "aboutus")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("aboutus");
        echo "\">About Us</a></li>
            <li ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15) == "product")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Product</a></li>
            <li ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "jaringan-kami")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jaringan-kami");
        echo "\">Jaringan Kami</a></li>
            <li ";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "blog") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "post-page"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
            <li ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == "gallery")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">Galeri</a></li>
            <li><a href=\"pesan.html\">Pesan Sekarang</a></li>
            <li ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == "contact")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
          </ul>
        </div>
      </div>
      <!-- ./TOPNAV -->
      </div>

    </div>
  </header>
  <!-- Mobile Menu -->
  <header id=\"header-m\" class=\"mainpage clearfix visible-xs\" data-spy=\"affix\" data-offset-top=\"81\">
    <nav class=\"navbar navbar-default navbar-mobile\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">

                <div class=\"header-m\">
                  <img src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-musicool.png");
        echo "\" class=\"logo img-responsive\">
                  <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-musicool_w.png");
        echo "\" class=\"logow img-responsive\">
                </div>
                <button type=\"button\" class=\"navbar-toggle offcanvas-toggle pull-right\" data-toggle=\"offcanvas\" data-target=\"#js-bootstrap-offcanvas\" style=\"float:left;\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <div class=\"navbar-offcanvas navbar-offcanvas-right\" id=\"js-bootstrap-offcanvas\">
      <div class=\"clearfix topx\">
        <button type=\"button\" class=\"btn-close navbar-toggle pull-right\">
            <span class=\"sr-only\">Toggle navigation</span>
            <i class=\"la la-times-circle\"></i>
        </button>
      </div>
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"index.html\">Home</a></li>
        <li><a href=\"aboutus.html\">About Us</a></li>
        <li><a href=\"product.html\">Product</a></li>
        <li><a href=\"blog.html\">Blog</a></li>
        <li><a href=\"galeri.html\">Galeri</a></li>
        <li><a href=\"pesan.html\">Pesan Sekarang</a></li>
        <li><a href=\"contact.html\">Contact</a></li>
      </ul>
      <div class=\"mobilemenu-logo\">
        <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-musicool.png");
        echo "\" class=\"img-responsive\">
      </div>
    </div>
  </header>
  <!-- ./Mobile Menu -->";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\musicool-cms/themes/musicool/partials/global/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 68,  131 => 37,  127 => 36,  104 => 20,  95 => 18,  87 => 17,  79 => 16,  71 => 15,  63 => 14,  55 => 13,  48 => 9,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <section id=\"header\" class=\"mainpage hidden-xs\" data-spy=\"affix\" data-offset-top=\"81\"> -->
  <header id=\"header\" class=\"mainpage hidden-xs\" data-spy=\"affix\" data-offset-top=\"81\">
    <div class=\"mainmenu\">
      <div class=\"container\">
      <!-- TOPNAV -->
      <div class=\"row\">
        <div class=\"col-md-2 header-logo\">
          <img src=\"{{ 'assets/img/logo-musicool.png'|theme }}\" class=\"logo img-responsive\">
          <img src=\"{{ 'assets/img/logo-musicool_w.png'|theme }}\" class=\"logow img-responsive\">
        </div>
        <div class=\"col-md-10 topnav header-nav clearfix\">
          <ul class=\"nav\">
            <li {% if this.page.id == 'homepage' %}class=\"active\"{% endif %}><a href=\"{{ \"homepage\"|page }}\">Home</a></li>
            <li {% if this.page.id == 'aboutus' %}class=\"active\"{% endif %}><a href=\"{{\"aboutus\"|page}}\">About Us</a></li>
            <li {% if this.page.id == 'product' %}class=\"active\"{% endif %}><a href=\"{{\"product\"|page}}\">Product</a></li>
            <li {% if this.page.id == 'jaringan-kami' %}class=\"active\"{% endif %}><a href=\"{{\"jaringan-kami\"|page}}\">Jaringan Kami</a></li>
            <li {% if this.page.id == 'blog' or this.page.id == 'post-page' %}class=\"active\"{% endif %}><a href=\"{{\"blog\"|page}}\">Blog</a></li>
            <li {% if this.page.id == 'gallery' %}class=\"active\"{% endif %}><a href=\"{{\"gallery\"|page}}\">Galeri</a></li>
            <li><a href=\"pesan.html\">Pesan Sekarang</a></li>
            <li {% if this.page.id == 'contact' %}class=\"active\"{% endif %}><a href=\"{{\"contact\"|page}}\">Contact</a></li>
          </ul>
        </div>
      </div>
      <!-- ./TOPNAV -->
      </div>

    </div>
  </header>
  <!-- Mobile Menu -->
  <header id=\"header-m\" class=\"mainpage clearfix visible-xs\" data-spy=\"affix\" data-offset-top=\"81\">
    <nav class=\"navbar navbar-default navbar-mobile\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">

                <div class=\"header-m\">
                  <img src=\"{{ 'assets/img/logo-musicool.png'|theme }}\" class=\"logo img-responsive\">
                  <img src=\"{{ 'assets/img/logo-musicool_w.png'|theme }}\" class=\"logow img-responsive\">
                </div>
                <button type=\"button\" class=\"navbar-toggle offcanvas-toggle pull-right\" data-toggle=\"offcanvas\" data-target=\"#js-bootstrap-offcanvas\" style=\"float:left;\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <div class=\"navbar-offcanvas navbar-offcanvas-right\" id=\"js-bootstrap-offcanvas\">
      <div class=\"clearfix topx\">
        <button type=\"button\" class=\"btn-close navbar-toggle pull-right\">
            <span class=\"sr-only\">Toggle navigation</span>
            <i class=\"la la-times-circle\"></i>
        </button>
      </div>
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"index.html\">Home</a></li>
        <li><a href=\"aboutus.html\">About Us</a></li>
        <li><a href=\"product.html\">Product</a></li>
        <li><a href=\"blog.html\">Blog</a></li>
        <li><a href=\"galeri.html\">Galeri</a></li>
        <li><a href=\"pesan.html\">Pesan Sekarang</a></li>
        <li><a href=\"contact.html\">Contact</a></li>
      </ul>
      <div class=\"mobilemenu-logo\">
        <img src=\"{{ 'assets/img/logo-musicool.png'|theme }}\" class=\"img-responsive\">
      </div>
    </div>
  </header>
  <!-- ./Mobile Menu -->", "D:\\laragon\\www\\musicool-cms/themes/musicool/partials/global/header.htm", "");
    }
}
