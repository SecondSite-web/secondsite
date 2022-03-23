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

/* index.twig */
class __TwigTemplate_7794eedb1e13b5a38f4cf85ef8f82ff2c57f0c3405497ba2cda4dd3ad7a8da7d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en-ZA\" prefix=\"og: http://ogp.me/ns#\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</title>

        <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "\" />
        <meta name=\"image\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pic", [], "any", false, false, false, 10), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"index,follow\" />
        <link rel=\"canonical\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 12), "html", null, true);
        echo "\" />

        <meta property=\"og:locale\" content=\"en_ZA\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:title\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "\" />
        <meta property=\"og:description\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "\" />
        <meta property=\"og:url\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 18), "html", null, true);
        echo "\" />
        <meta property=\"og:site_name\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\" />
        <meta property=\"og:image\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pic", [], "any", false, false, false, 20), "html", null, true);
        echo "\" />
        <meta property=\"og:image:alt\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "\" />
        <meta property=\"og:image:type\" content=\"image/png\" />
        <meta property=\"fb:app_id\" content=\"461996124627453\" />
        <meta property=\"fb:admins\" content=\"461996124627453\" />

        <meta name=\"twitter:card\" content=\"summary_large_image\" />
        <meta name=\"twitter:title\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 27), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" />
        <meta name=\"twitter:description\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "\" />
        <meta name=\"twitter:image\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pic", [], "any", false, false, false, 29), "html", null, true);
        echo "\" />
        <meta name=\"twitter:image:alt\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "\" />

        <meta name=\"DC.title\" content=\"Sir Lowry's Pass\" />
        <meta name=\"geo.region\" content=\"ZA-WC\" />
        <meta name=\"geo.placename\" content=\"Sir Lowry's Pass\" />
        <meta name=\"geo.position\" content=\"-34.140307;18.895935\" />
        <meta name=\"ICBM\" content=\"-34.140307, 18.895935\" />
        <!-- Site Icons -->
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 38), "html", null, true);
        echo "apple-touch-icon.png\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 39), "html", null, true);
        echo "favicon-32x32.png\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 40), "html", null, true);
        echo "favicon-16x16.png\" />
        <link rel=\"manifest\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 41), "html", null, true);
        echo "manifest.json\" />
        <meta name=\"msapplication-TileColor\" content=\"#2b5797\" />
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 43), "html", null, true);
        echo "mstile-144x144.png\" />
        <meta name=\"theme-color\" content=\"#ffffff\" />
        <link rel=\"author\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 45), "html", null, true);
        echo "humans.txt\" />

        ";
        // line 48
        echo "        ";
        // line 49
        echo "        <link rel='dns-prefetch' href='//code.jquery.com' />
        <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 50), "html", null, true);
        echo "css/styles.min.css\">


        ";
        // line 53
        $this->displayBlock('head', $context, $blocks);
        // line 54
        echo "    </head>

    <body class=\"page-";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "class", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
    <!--[if lte IE 9]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    ";
        // line 60
        $this->loadTemplate("navbar.twig", "index.twig", 60)->display($context);
        // line 61
        echo "    <section id=\"page-header\" class=\"hidden gone\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"text-center text-danger\">
                        <h1 class=\"redheading\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 66), "html", null, true);
        echo "</h1>
                        <p class=\"black-text\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 67), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"page-wrapper\">
    ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "    </div>
    ";
        // line 77
        $this->loadTemplate("footer.twig", "index.twig", 77)->display($context);
        // line 78
        echo "        ";
        // line 81
        echo "
        ";
        // line 83
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 83), "html", null, true);
        echo "vendor/jquery/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 84), "html", null, true);
        echo "vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 85), "html", null, true);
        echo "vendor/jquery-validation/jquery.validate.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 86), "html", null, true);
        echo "js/contact.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 87), "html", null, true);
        echo "js/login.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 88), "html", null, true);
        echo "js/custom.min.js\"></script>
        ";
        // line 90
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        echo " ";
        // line 91
        echo "    </body>
</html>
";
    }

    // line 53
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 90
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 90,  253 => 75,  247 => 53,  241 => 91,  237 => 90,  233 => 88,  229 => 87,  225 => 86,  221 => 85,  217 => 84,  212 => 83,  209 => 81,  207 => 78,  205 => 77,  202 => 76,  200 => 75,  189 => 67,  185 => 66,  178 => 61,  176 => 60,  169 => 56,  165 => 54,  163 => 53,  157 => 50,  154 => 49,  152 => 48,  147 => 45,  142 => 43,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  114 => 30,  110 => 29,  106 => 28,  100 => 27,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  69 => 16,  62 => 12,  57 => 10,  53 => 9,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en-ZA\" prefix=\"og: http://ogp.me/ns#\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <title>{{ page.title }}</title>

        <meta name=\"description\" content=\"{{ page.description }}\" />
        <meta name=\"image\" content=\"{{ page.pic }}\" />
        <meta name=\"robots\" content=\"index,follow\" />
        <link rel=\"canonical\" href=\"{{ page.url }}\" />

        <meta property=\"og:locale\" content=\"en_ZA\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:title\" content=\"{{ page.title }} - {{ site.name }}\" />
        <meta property=\"og:description\" content=\"{{ page.description }}\" />
        <meta property=\"og:url\" content=\"{{ page.url }}\" />
        <meta property=\"og:site_name\" content=\"{{ site.name }}\" />
        <meta property=\"og:image\" content=\"{{ page.pic }}\" />
        <meta property=\"og:image:alt\" content=\"{{ page.title }}\" />
        <meta property=\"og:image:type\" content=\"image/png\" />
        <meta property=\"fb:app_id\" content=\"461996124627453\" />
        <meta property=\"fb:admins\" content=\"461996124627453\" />

        <meta name=\"twitter:card\" content=\"summary_large_image\" />
        <meta name=\"twitter:title\" content=\"{{ page.title }} - {{ site.name }}\" />
        <meta name=\"twitter:description\" content=\"{{ page.description }}\" />
        <meta name=\"twitter:image\" content=\"{{ page.pic }}\" />
        <meta name=\"twitter:image:alt\" content=\"{{ page.description }}\" />

        <meta name=\"DC.title\" content=\"Sir Lowry's Pass\" />
        <meta name=\"geo.region\" content=\"ZA-WC\" />
        <meta name=\"geo.placename\" content=\"Sir Lowry's Pass\" />
        <meta name=\"geo.position\" content=\"-34.140307;18.895935\" />
        <meta name=\"ICBM\" content=\"-34.140307, 18.895935\" />
        <!-- Site Icons -->
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{site.url}}apple-touch-icon.png\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{site.url}}favicon-32x32.png\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{site.url}}favicon-16x16.png\" />
        <link rel=\"manifest\" href=\"{{site.url}}manifest.json\" />
        <meta name=\"msapplication-TileColor\" content=\"#2b5797\" />
        <meta name=\"msapplication-TileImage\" content=\"{{ site.url }}mstile-144x144.png\" />
        <meta name=\"theme-color\" content=\"#ffffff\" />
        <link rel=\"author\" href=\"{{ site.url }}humans.txt\" />

        {# include your site.manifest link here with icon links for favicons #}
        {# include schema.org structured data json meta here for SEO #}
        <link rel='dns-prefetch' href='//code.jquery.com' />
        <link rel=\"stylesheet\" href=\"{{ site.url }}css/styles.min.css\">


        {% block head %}{% endblock head %}
    </head>

    <body class=\"page-{{page.class}}\">
    <!--[if lte IE 9]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    {% include 'navbar.twig' %}
    <section id=\"page-header\" class=\"hidden gone\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"text-center text-danger\">
                        <h1 class=\"redheading\">{{ page.title }}</h1>
                        <p class=\"black-text\">{{ page.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=\"page-wrapper\">
    {% block body %}{% endblock body %}
    </div>
    {% include 'footer.twig' %}
        {# for Production use
        <script type=\"text/javascript\" src=\"{{ site.url }}js/main.js\"></script>
        End for Production Use #}

        {# for Development #}
        <script type=\"text/javascript\" src=\"{{ site.url }}vendor/jquery/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ site.url }}vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ site.url }}vendor/jquery-validation/jquery.validate.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ site.url }}js/contact.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ site.url }}js/login.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ site.url }}js/custom.min.js\"></script>
        {# end for Development #}
        {% block scripts %}{% endblock scripts %} {# for extra one page only scripts #}
    </body>
</html>
", "index.twig", "/home/thirdeye/public_html/templates/index.twig");
    }
}
