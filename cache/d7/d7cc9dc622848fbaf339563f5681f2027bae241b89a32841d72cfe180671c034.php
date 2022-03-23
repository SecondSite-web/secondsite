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

/* footer.twig */
class __TwigTemplate_60adb8d576f489c4e448e29040c8085e5107f11684536e6fa82c0581e53ac32f extends \Twig\Template
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
        echo "
<!-- Login Modal-->
<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Welcome Back!</h5>
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form id=\"login-form\" class=\"user\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "admin", [], "any", false, false, false, 13), "html", null, true);
        echo "php/login.php\" method=\"post\" role=\"form\" data-toggle=\"validator\">
\t\t\t\t\t<div class=\"messages\"></div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-user\" id=\"email\" name=\"email\" placeholder=\"email@address.com\" required=\"required\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control form-control-user\" id=\"password\" name=\"password\" placeholder=\"Password Please\" required=\"required\">
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" id=\"submit\" class=\"btn btn-success btn-send\">Login</button>
\t\t\t\t\t<hr />
\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "admin", [], "any", false, false, false, 23));
        echo "reset-request.php\">Forgot your password?</a><br />
\t\t\t\t\t";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "allowRegister", [], "any", false, false, false, 24) == "1")) {
            // line 25
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "admin", [], "any", false, false, false, 25));
            echo "register.php\">Register a new account</a>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Close</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Footer -->
<footer class=\"bg-dark text-white pt-4 mt-4 pb-2\">
\t<div class=\"footer-inner container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>Navigation Links</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 43), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 44), "html", null, true);
        echo "website-development/\">Website Design</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 45), "html", null, true);
        echo "custom-database-solutions/\">Database Design</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 46), "html", null, true);
        echo "domain-pricing-table/\">Domains</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 47), "html", null, true);
        echo "website-hosting-services/\">Hosting</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 48), "html", null, true);
        echo "website-management-services/\">Managed Websites</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 49), "html", null, true);
        echo "online-marketing/\">Online Marketing</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 50), "html", null, true);
        echo "ssl-certificates/\">SSl Certificates</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 51), "html", null, true);
        echo "seo-search-engine-optimisation/\">SEO</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 52), "html", null, true);
        echo "contact/\">Contact Us</a></li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>Website Use & Info</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li><a rel=\"nofollow\" href=\"http://www.icann.org/en/resources/registrars/registrant-rights/educational/\" target=\"_blank\">Registrant Education</a></li>
\t\t\t\t\t<li><a rel=\"nofollow\" href=\"http://www.icann.org/en/resources/registrars/registrant-rights/benefits/\" target=\"_blank\">Domain Name Registrant Rights</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 61), "html", null, true);
        echo "privacy-policy/\" title=\"Privacy Policy\" target=\"_blank\">Privacy Policy</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 62), "html", null, true);
        echo "acceptable-use-policy/\" title=\"Acceptable Use Policy\" target=\"_blank\">Acceptable Use Policy</a></li>
\t\t\t\t\t<li><hr /></li>
\t\t\t\t\t<li>Report conerns to:</li>
\t\t\t\t\t<li><a href=\"mailto:abuse@secondsite.xyz\">abuse@secondsite.xyz</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>Contact Info</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>Email:</li>
\t\t\t\t\t<li><a href=\"mailto:info@secondsite.xyz\">info@secondsite.xyz</a></li>
\t\t\t\t\t<li><hr /></li>
\t\t\t\t\t<li>Mobile:</li>
\t\t\t\t\t<li><a href=\"tel:+27799959818\">+27 (0) 79 995 9818</a></li>
\t\t\t\t\t<li><hr /></li>
\t\t\t\t\t<li>Support:</li>
\t\t\t\t\t<li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 78), "html", null, true);
        echo "contact-us/\">Contact Form</a> </li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"facebook\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["social"] ?? null), "facebookurl", [], "any", false, false, false, 83));
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"twitter\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["social"] ?? null), "twitterurl", [], "any", false, false, false, 90));
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"instagram\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["social"] ?? null), "instagramurl", [], "any", false, false, false, 97));
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"linkedin\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["social"] ?? null), "linkedinurl", [], "any", false, false, false, 104));
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"pinterest\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["social"] ?? null), "pinteresturl", [], "any", false, false, false, 111));
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<hr />
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col pb-2\">
\t\t\t\t<p class=\"m-0 text-center text-white\"><small>Copyright &copy; ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "name", [], "any", false, false, false, 131), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "year", [], "any", false, false, false, 131), "html", null, true);
        echo " | All Rights Reserved | Proudly Powered by <a class=\"text-white\" href=\"http://secondsite.xyz\">SecondSite</a></small></p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a href=\"#\" class=\"btn btn-primary btn-sm back-to-top move-top\" role=\"button\" title=\"Click to return on the top page\" data-toggle=\"tooltip\" data-placement=\"left\">
\t<i class=\"fa fa-chevron-up\"></i>
</a>

";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 131,  213 => 111,  203 => 104,  193 => 97,  183 => 90,  173 => 83,  165 => 78,  146 => 62,  142 => 61,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  114 => 48,  110 => 47,  106 => 46,  102 => 45,  98 => 44,  94 => 43,  76 => 27,  70 => 25,  68 => 24,  64 => 23,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Login Modal-->
<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Welcome Back!</h5>
\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form id=\"login-form\" class=\"user\" action=\"{{ site.admin }}php/login.php\" method=\"post\" role=\"form\" data-toggle=\"validator\">
\t\t\t\t\t<div class=\"messages\"></div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-user\" id=\"email\" name=\"email\" placeholder=\"email@address.com\" required=\"required\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control form-control-user\" id=\"password\" name=\"password\" placeholder=\"Password Please\" required=\"required\">
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" id=\"submit\" class=\"btn btn-success btn-send\">Login</button>
\t\t\t\t\t<hr />
\t\t\t\t\t<a href=\"{{ site.admin|escape }}reset-request.php\">Forgot your password?</a><br />
\t\t\t\t\t{% if site.allowRegister == '1' %}
\t\t\t\t\t<a href=\"{{ site.admin|escape }}register.php\">Register a new account</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Close</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Footer -->
<footer class=\"bg-dark text-white pt-4 mt-4 pb-2\">
\t<div class=\"footer-inner container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>Navigation Links</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li><a href=\"{{site.url}}\">Home</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}website-development/\">Website Design</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}custom-database-solutions/\">Database Design</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}domain-pricing-table/\">Domains</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}website-hosting-services/\">Hosting</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}website-management-services/\">Managed Websites</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}online-marketing/\">Online Marketing</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}ssl-certificates/\">SSl Certificates</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}seo-search-engine-optimisation/\">SEO</a></li>
\t\t\t\t\t<li><a href=\"{{site.url}}contact/\">Contact Us</a></li>
\t\t\t\t</ul>

\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>Website Use & Info</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li><a rel=\"nofollow\" href=\"http://www.icann.org/en/resources/registrars/registrant-rights/educational/\" target=\"_blank\">Registrant Education</a></li>
\t\t\t\t\t<li><a rel=\"nofollow\" href=\"http://www.icann.org/en/resources/registrars/registrant-rights/benefits/\" target=\"_blank\">Domain Name Registrant Rights</a></li>
\t\t\t\t\t<li><a href=\"{{ site.url }}privacy-policy/\" title=\"Privacy Policy\" target=\"_blank\">Privacy Policy</a></li>
\t\t\t\t\t<li><a href=\"{{ site.url }}acceptable-use-policy/\" title=\"Acceptable Use Policy\" target=\"_blank\">Acceptable Use Policy</a></li>
\t\t\t\t\t<li><hr /></li>
\t\t\t\t\t<li>Report conerns to:</li>
\t\t\t\t\t<li><a href=\"mailto:abuse@secondsite.xyz\">abuse@secondsite.xyz</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>Contact Info</h5>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t<li>Email:</li>
\t\t\t\t\t<li><a href=\"mailto:info@secondsite.xyz\">info@secondsite.xyz</a></li>
\t\t\t\t\t<li><hr /></li>
\t\t\t\t\t<li>Mobile:</li>
\t\t\t\t\t<li><a href=\"tel:+27799959818\">+27 (0) 79 995 9818</a></li>
\t\t\t\t\t<li><hr /></li>
\t\t\t\t\t<li>Support:</li>
\t\t\t\t\t<li><a href=\"{{ site.url }}contact-us/\">Contact Form</a> </li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"facebook\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"{{ social.facebookurl|e }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"twitter\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"{{ social.twitterurl|e }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"instagram\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"{{ social.instagramurl|e }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"linkedin\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"{{ social.linkedinurl|e }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<div id=\"pinterest\" class=\"footer-social d-inline m-1\">
\t\t\t\t\t\t\t<a href=\"{{ social.pinteresturl|e }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-pinterest-square fa-2x\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<hr />
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col pb-2\">
\t\t\t\t<p class=\"m-0 text-center text-white\"><small>Copyright &copy; {{ site.name }} {{ site.year }} | All Rights Reserved | Proudly Powered by <a class=\"text-white\" href=\"http://secondsite.xyz\">SecondSite</a></small></p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a href=\"#\" class=\"btn btn-primary btn-sm back-to-top move-top\" role=\"button\" title=\"Click to return on the top page\" data-toggle=\"tooltip\" data-placement=\"left\">
\t<i class=\"fa fa-chevron-up\"></i>
</a>

", "footer.twig", "/home/thirdeye/public_html/templates/footer.twig");
    }
}
