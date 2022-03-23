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

/* navbar.twig */
class __TwigTemplate_be291ed1c844bec97b8c3bf0e257b006008296e447a44190d0c253d33c7cb131 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        $context["nav"] = ["domains" => ["title" => "Domains", "url" => "domain-pricing-table/"], "hosting" => ["title" => "Hosting", "url" => "website-hosting-services/"], "mobile" => ["title" => "Apps", "url" => "mobile-app-development/"], "marketing" => ["title" => "Online Marketing", "url" => "online-marketing/"], "about" => ["title" => "Contact Us", "url" => "contact/"]];
        // line 8
        echo "
";
        // line 9
        $context["websites"] = ["development" => ["title" => "Website Development", "url" => "website-development/"], "management" => ["title" => "Website Management", "url" => "website-management-services/"], "seo" => ["title" => "SEO", "url" => "seo-search-engine-optimisation/"], "ssl" => ["title" => "SSL Certificates", "url" => "ssl-certificates/"]];
        // line 15
        echo "
\t";
        // line 16
        $context["usernav"] = ["host" => ["title" => "cPanel Login", "url" => "https://rs13.cphost.co.za:2083/"], "email" => ["title" => "Webmail Login", "url" => "https://rs13.cphost.co.za:2096/"]];
        // line 20
        echo "

  \t<nav class=\"navbar navbar-expand-lg navbar-light bg-light fixed-top\">
\t    <div class=\"container-fluid\">
\t      <a class=\"navbar-brand\" href=\"#\"><img id=\"site-logo\" class=\"img-fluid\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 24), "html", null, true);
        echo "images/secondsite-logo.png\" /></a>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"navbar-toggler-icon\"></span>
\t      </button>
\t      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
\t        <ul class=\"navbar-nav ml-auto\">
\t          <li class=\"nav-item\">
\t            <a class=\"nav-link\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 31), "html", null, true);
        echo "\">Home
\t              <span class=\"sr-only\">(current)</span>
\t            </a>
\t          </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"website-navbar\" data-toggle=\"dropdown\">
                        Website Services
                    </a>
                    <div class=\"dropdown-menu\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["websites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "                            <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 41));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 41));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 41));
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </div>
                </li>
\t          ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nav"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 47));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 47));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 47));
            echo "</a>
\t\t\t\t  </li>
\t      \t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fas fa-user\"></i> ";
        // line 53
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 53))), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usernav"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "\t\t\t\t\t\t\t<a target=\"_blank\" class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 57));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 57));
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
\t\t\t\t\t\t<a target=\"_blank\" class=\"dropdown-item\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "admin", [], "any", false, false, false, 60));
        echo "login.php\" data-toggle=\"modal\" data-target=\"#loginModal\">
\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isactive", [], "any", false, false, false, 64) == "1")) {
            // line 65
            echo "\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "admin", [], "any", false, false, false, 65));
            echo "php/logout/\">Logout</a>
\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t</div>
\t\t\t\t</li>
\t        </ul>
\t      </div>
\t    </div>
  \t</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 67,  154 => 65,  152 => 64,  145 => 60,  142 => 59,  131 => 57,  127 => 56,  121 => 53,  116 => 50,  104 => 47,  101 => 46,  97 => 45,  93 => 43,  81 => 41,  77 => 40,  65 => 31,  55 => 24,  49 => 20,  47 => 16,  44 => 15,  42 => 9,  39 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set nav = {
    domains:    { title: \"Domains\", url: \"domain-pricing-table/\" },
    hosting:    { title: \"Hosting\", url: \"website-hosting-services/\" },
\tmobile:\t\t{ title: \"Apps\", url: \"mobile-app-development/\" },
\tmarketing: {title: \"Online Marketing\", url: \"online-marketing/\" },
\tabout:    { title: \"Contact Us\", url: \"contact/\" }
} %}

{% set websites = {
\tdevelopment:\t{ title: \"Website Development\", url: \"website-development/\" },
\tmanagement:    { title: \"Website Management\", url: \"website-management-services/\" },
\tseo:    { title: \"SEO\", url: \"seo-search-engine-optimisation/\" },
\tssl:    { title: \"SSL Certificates\", url: \"ssl-certificates/\" }
} %}

\t{% set usernav = {
\t\thost: { title: \"cPanel Login\", url: \"https://rs13.cphost.co.za:2083/\" },
\t\temail: { title: \"Webmail Login\", url: \"https://rs13.cphost.co.za:2096/\" }
\t} %}


  \t<nav class=\"navbar navbar-expand-lg navbar-light bg-light fixed-top\">
\t    <div class=\"container-fluid\">
\t      <a class=\"navbar-brand\" href=\"#\"><img id=\"site-logo\" class=\"img-fluid\" src=\"{{ site.url }}images/secondsite-logo.png\" /></a>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"navbar-toggler-icon\"></span>
\t      </button>
\t      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
\t        <ul class=\"navbar-nav ml-auto\">
\t          <li class=\"nav-item\">
\t            <a class=\"nav-link\" href=\"{{ site.url }}\">Home
\t              <span class=\"sr-only\">(current)</span>
\t            </a>
\t          </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"website-navbar\" data-toggle=\"dropdown\">
                        Website Services
                    </a>
                    <div class=\"dropdown-menu\">
                        {% for item in websites %}
                            <a class=\"dropdown-item\" href=\"{{ site.url|escape }}{{ item.url|escape }}\">{{ item.title|escape }}</a>
                        {% endfor %}
                    </div>
                </li>
\t          {% for item in nav %}
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ site.url|escape }}{{ item.url|escape }}\">{{ item.title|escape }}</a>
\t\t\t\t  </li>
\t      \t  {% endfor %}

\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fas fa-user\"></i> {{ user.firstname|escape|capitalize }}
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\">
                        {% for item in usernav %}
\t\t\t\t\t\t\t<a target=\"_blank\" class=\"dropdown-item\" href=\"{{ item.url|escape }}\">{{ item.title|escape }}</a>
                        {% endfor %}

\t\t\t\t\t\t<a target=\"_blank\" class=\"dropdown-item\" href=\"{{ site.admin|escape }}login.php\" data-toggle=\"modal\" data-target=\"#loginModal\">
\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% if user.isactive == '1' %}
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ site.admin|escape }}php/logout/\">Logout</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</li>
\t        </ul>
\t      </div>
\t    </div>
  \t</nav>
", "navbar.twig", "/home/thirdeye/public_html/templates/navbar.twig");
    }
}
