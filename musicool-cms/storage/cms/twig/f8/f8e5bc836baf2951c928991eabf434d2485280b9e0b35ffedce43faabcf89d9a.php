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

/* D:\laragon\www\musicool-cms/plugins/edps/qrcode/components/qrcode/default.htm */
class __TwigTemplate_b8d51076aed802858174f5fa669f07c8564daed049319346be8f112e68c16cd6 extends \Twig\Template
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
        echo "<script src=\"../plugins/edps/qrcode/assets/js/qr.min.js\"></script>

<canvas id=\"qr-code\"></canvas>

<script>
    qr.canvas({
        canvas: document.getElementById('qr-code'),
        level:  \"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataToQrCode"] ?? null), "level", [], "any", false, false, false, 8), "html", null, true);
        echo "\",        
        foreground: \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataToQrCode"] ?? null), "foreground", [], "any", false, false, false, 9), "html", null, true);
        echo "\",
        background: \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataToQrCode"] ?? null), "background", [], "any", false, false, false, 10), "html", null, true);
        echo "\",
        size: \"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataToQrCode"] ?? null), "size", [], "any", false, false, false, 11), "html", null, true);
        echo "\",
        value: \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dataToQrCode"] ?? null), "value", [], "any", false, false, false, 12), "html", null, true);
        echo "\"
  \t});
</script>";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\musicool-cms/plugins/edps/qrcode/components/qrcode/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"../plugins/edps/qrcode/assets/js/qr.min.js\"></script>

<canvas id=\"qr-code\"></canvas>

<script>
    qr.canvas({
        canvas: document.getElementById('qr-code'),
        level:  \"{{ dataToQrCode.level }}\",        
        foreground: \"{{ dataToQrCode.foreground }}\",
        background: \"{{ dataToQrCode.background }}\",
        size: \"{{ dataToQrCode.size }}\",
        value: \"{{ dataToQrCode.value }}\"
  \t});
</script>", "D:\\laragon\\www\\musicool-cms/plugins/edps/qrcode/components/qrcode/default.htm", "");
    }
}
