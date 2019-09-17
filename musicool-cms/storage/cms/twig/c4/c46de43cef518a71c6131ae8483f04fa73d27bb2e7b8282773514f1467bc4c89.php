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

/* D:\laragon\www\musicool-cms/themes/musicool/partials/global/footer.htm */
class __TwigTemplate_32f4721f1ee9476eb87779cc1cf2da994ff21cc7c1fed67500828fff1bec7b12 extends \Twig\Template
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
        echo "<footer>
    <div class=\"container-fluid bg-dark\">
      <div class=\"row\">
        <div class=\"container\">
          <div class=\"row bottomnav\">
            <div class=\"col-sm-6\">
              <a href=\"#\" class=\"footrlogo\">
                <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-musicool.png");
        echo "\" class=\"img-responsive\">
              </a>
              <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
              <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["phone"] ?? null), "phone_number", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"row\">
                <div class=\"col-sm-4\">
                  <ol class=\"list-unstyled\">
                    <h5>Company</h5>
                    <li><a href=\"aboutus.html\">About Us</a></li>
                    <li><a href=\"product.html\">Product</a></li>
                    <li><a href=\"galeri.html\">Galeri</a></li>
                    <li><a href=\"pesan.html\">Pesan Sekarang</a></li>
                    <li><a href=\"contact.html\">Contact us</a></li>
                  </ol>
                </div>
                <div class=\"col-sm-8 subsc\">
                  <h5>Subscribe</h5>
                  <p>Get latest update and offers.</p>
                  <form>
                    <div class=\"input-group\">
                      <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Enter your E-mail\">
                      <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\" onclick=\"subscribe()\">
                          <i class=\"fa fa-arrow-right\"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                  <ol class=\"list-unstyled\">
                    <li><a href=\"https://twitter.com/";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "twitter", [], "any", false, false, false, 39), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                    <li><a href=\"https://facebook.com/";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "face", [], "any", false, false, false, 40), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                    <li><a href=\"#\" target=\"_blank\"><i class=\"la la-google-plus\"></i>Google+</a></li>
                    <li><a href=\"https://www.linkedin.com/in/";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "linkedin", [], "any", false, false, false, 42), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i>Linkedin</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div> <!-- ./bottomnav -->
        </div>
      </div>
    </div>
    <div class=\"container-fluid bg-green\">
      <div class=\"row\">
        <div class=\"container cp\">
          <p>Copyright &copy; ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " MUSICOOL</p>
        </div>
      </div>
    </div>
  </footer>
  <script>
  function subscribe(){
     let email = \$(\"#email\").val();
     \$.ajax({
         url: \"/api/subscriber\",
         type:\"POST\",
         data:{
           \"email\":email
         },
         success:function(){
             alert(\"success subscribe\");
         },
         error: function(error){
             alert(error.responseJSON.data.email[0]);
         }
     })
  }
  </script>";
    }

    public function getTemplateName()
    {
        return "D:\\laragon\\www\\musicool-cms/themes/musicool/partials/global/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 54,  93 => 42,  88 => 40,  84 => 39,  53 => 11,  49 => 10,  44 => 8,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container-fluid bg-dark\">
      <div class=\"row\">
        <div class=\"container\">
          <div class=\"row bottomnav\">
            <div class=\"col-sm-6\">
              <a href=\"#\" class=\"footrlogo\">
                <img src=\"{{ 'assets/img/logo-musicool.png'|theme }}\" class=\"img-responsive\">
              </a>
              <p>{{ email.email }}</p>
              <p>{{ phone.phone_number }}</p>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"row\">
                <div class=\"col-sm-4\">
                  <ol class=\"list-unstyled\">
                    <h5>Company</h5>
                    <li><a href=\"aboutus.html\">About Us</a></li>
                    <li><a href=\"product.html\">Product</a></li>
                    <li><a href=\"galeri.html\">Galeri</a></li>
                    <li><a href=\"pesan.html\">Pesan Sekarang</a></li>
                    <li><a href=\"contact.html\">Contact us</a></li>
                  </ol>
                </div>
                <div class=\"col-sm-8 subsc\">
                  <h5>Subscribe</h5>
                  <p>Get latest update and offers.</p>
                  <form>
                    <div class=\"input-group\">
                      <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Enter your E-mail\">
                      <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\" onclick=\"subscribe()\">
                          <i class=\"fa fa-arrow-right\"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                  <ol class=\"list-unstyled\">
                    <li><a href=\"https://twitter.com/{{ contact.twitter }}\" target=\"_blank\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                    <li><a href=\"https://facebook.com/{{ contact.face }}\" target=\"_blank\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                    <li><a href=\"#\" target=\"_blank\"><i class=\"la la-google-plus\"></i>Google+</a></li>
                    <li><a href=\"https://www.linkedin.com/in/{{ contact.linkedin }}\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i>Linkedin</a></li>
                  </ol>
                </div>
              </div>
            </div>
          </div> <!-- ./bottomnav -->
        </div>
      </div>
    </div>
    <div class=\"container-fluid bg-green\">
      <div class=\"row\">
        <div class=\"container cp\">
          <p>Copyright &copy; {{ \"now\"|date(\"Y\") }} MUSICOOL</p>
        </div>
      </div>
    </div>
  </footer>
  <script>
  function subscribe(){
     let email = \$(\"#email\").val();
     \$.ajax({
         url: \"/api/subscriber\",
         type:\"POST\",
         data:{
           \"email\":email
         },
         success:function(){
             alert(\"success subscribe\");
         },
         error: function(error){
             alert(error.responseJSON.data.email[0]);
         }
     })
  }
  </script>", "D:\\laragon\\www\\musicool-cms/themes/musicool/partials/global/footer.htm", "");
    }
}
