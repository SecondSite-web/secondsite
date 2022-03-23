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

/* home_page.twig */
class __TwigTemplate_d0bdc41894a6fd65dd7bfb8d40796d9db3ca9e5e8287a91b5c7d2297d142da91 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.twig", "home_page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <section id=\"introduction\">
        <div class=\"container-fluid shadow-sm\">
            <div class=\"row\">
                <div class=\"d-none d-lg-block col-lg-6 no-gutter img-block\">
                    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img class=\"d-block w-100\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 20), "html", null, true);
        echo "images/data-center.jpg\" alt=\"Hosting and Domains\">
                                <div class=\"block-liner w-100 h-100\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <h5 class=\"bg-danger text-white\">Domains & Hosting</h5>
                                        <p class=\"bg-light text-dark\">We offer domains and world class hosting services</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 29), "html", null, true);
        echo "images/mobile.jpg\" alt=\"Mobile App Development for Android and IOS\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-danger text-white\">Mobile App Development</h5>
                                    <p class=\"bg-light text-dark\">Professional apps for Android and IOS</p>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 36), "html", null, true);
        echo "images/website-slide.jpg\" alt=\"Business Data Management Systems\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-danger text-white\">Website Design and Development</h5>
                                    <p class=\"bg-light text-dark\">We build modern and powerful websites to meet any need</p>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 43), "html", null, true);
        echo "images/startup.jpg\" alt=\"Startup Business Consulting Services\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-danger text-white\">Startup Consulting and Services</h5>
                                    <p class=\"bg-light text-dark\">We offer a range of services for Startup Businesses and Entrepreneurs</p>
                                </div>
                            </div>
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 no-gutter bg-dark text-white p-5 txt-block\">
                    <h1 class=\"display-4 pb-3\">Digital Consulting</h1>
                    <h2 class=\"mt-3\"><small>Complete solutions for Entrepreneurs, Startups and SME's</small></h2>
                    <p class=\"lead text-white mt-3\">We offer a wide variety of services to assist developing businesses in establishing an effective digital strategy to cover business needs, promote productivity, save time and avoid unnecessary expense</p>
                </div>
            </div>
        </div>
    </section>
    <div class=\"container-fluid\">
        <div class=\"text-center p-2 mt-3\">
            <h3>Our Services</h3>
            <div class=\"hr-divider mt-2 mb-2\">
                <div class=\"hr-line\"></div>
                <div class=\"hr-icon\"><i class=\"fa fa-chevron-down\"></i></div>
                <div class=\"hr-line\"></div>
            </div>
        </div>
    </div>
    <section id=\"summary bg-light\">
        <div class=\"container-fluid mb-5 shadow-sm bg-light\">
            <div class=\"row\">
                <div class=\"col-md-6 mt-3\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Startup Consulting and Services</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>Business Registration Services</li>
                                <li>Business Plans and Corporate Profiles</li>
                                <li>Special Business Licencing and Legislative Compliance Services</li>
                                <li>Digital Security, Data Protection and POPI Compliance</li>
                                <li>Privacy Policies and Terms of Service specific to regional law</li>
                                <li>Corporate Email Systems Audits for Litigation purposes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mt-3\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Online Presence and Marketing Tools Development</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>Graphic Design</li>
                                <li>Brand and Identity Consulting and Design</li>
                                <li>Website Development and Design</li>
                                <li>Website Updates, Maintenance and Troubleshooting</li>
                                <li>Social Media Services</li>
                                <li>Marketing Strategy Development and Management Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mt-3 shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Business IT Systems Development</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>IT Systems Management Services</li>
                                <li>Online and Telephonic Tech Support Solutions</li>
                                <li>Mobile Apps for Android and IOS</li>
                                <li>Custom Business Data Architecture Systems</li>
                                <li>Data Protection including backups and antivirus</li>
                                <li>Systems Training for staff members</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mt-3\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Domain Names and Hosting</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>Domain Names</li>
                                <li>Complete A+ Rated <strong>Hosting Solutions</strong></li>
                                <li>Cloud Hosting Solutions</li>
                                <li>Email Systems Management</li>
                                <li>Email hosting on cloud, Office 365 or GSuite</li>
                                <li>SSL Certificates</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 text-center mt-4 pb-2\">
                    <p class=\"lead\">Tailor made solutions to meet your specific business needs</p>
                </div>
            </div>
        </div>
    </section>
    <section id=\"contact-block\">
        <div class=\"container\">
            <div class=\"hr-divider mt-2\">
                <div class=\"hr-line\"></div>
                <div class=\"hr-icon\"><i class=\"fa fa-chevron-down\"></i></div>
                <div class=\"hr-line\"></div>
            </div>
            <div class=\"row  shadow-sm\">
                <div class=\"col-md-12 bg-danger text-white p-5 text-center\">
                    <h2>How can we help you? Please contact us </h2>
                    <a class=\"contact-btn m-4 p-3 btn text-danger border-danger bg-white\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 169), "html", null, true);
        echo "contact/\">Contact Us <i class=\"fa fa-users text-danger\"></i> </a>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 176
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "home_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 176,  235 => 169,  106 => 43,  96 => 36,  86 => 29,  74 => 20,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index.twig' %}

{% block head %}{% endblock head %}

{% block body %}

    <section id=\"introduction\">
        <div class=\"container-fluid shadow-sm\">
            <div class=\"row\">
                <div class=\"d-none d-lg-block col-lg-6 no-gutter img-block\">
                    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img class=\"d-block w-100\" src=\"{{ site.url }}images/data-center.jpg\" alt=\"Hosting and Domains\">
                                <div class=\"block-liner w-100 h-100\">
                                    <div class=\"carousel-caption d-none d-md-block\">
                                        <h5 class=\"bg-danger text-white\">Domains & Hosting</h5>
                                        <p class=\"bg-light text-dark\">We offer domains and world class hosting services</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"{{ site.url }}images/mobile.jpg\" alt=\"Mobile App Development for Android and IOS\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-danger text-white\">Mobile App Development</h5>
                                    <p class=\"bg-light text-dark\">Professional apps for Android and IOS</p>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"{{ site.url }}images/website-slide.jpg\" alt=\"Business Data Management Systems\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-danger text-white\">Website Design and Development</h5>
                                    <p class=\"bg-light text-dark\">We build modern and powerful websites to meet any need</p>
                                </div>
                            </div>
                            <div class=\"carousel-item\">
                                <img class=\"d-block w-100\" src=\"{{ site.url }}images/startup.jpg\" alt=\"Startup Business Consulting Services\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5 class=\"bg-danger text-white\">Startup Consulting and Services</h5>
                                    <p class=\"bg-light text-dark\">We offer a range of services for Startup Businesses and Entrepreneurs</p>
                                </div>
                            </div>
                        </div>
                        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 no-gutter bg-dark text-white p-5 txt-block\">
                    <h1 class=\"display-4 pb-3\">Digital Consulting</h1>
                    <h2 class=\"mt-3\"><small>Complete solutions for Entrepreneurs, Startups and SME's</small></h2>
                    <p class=\"lead text-white mt-3\">We offer a wide variety of services to assist developing businesses in establishing an effective digital strategy to cover business needs, promote productivity, save time and avoid unnecessary expense</p>
                </div>
            </div>
        </div>
    </section>
    <div class=\"container-fluid\">
        <div class=\"text-center p-2 mt-3\">
            <h3>Our Services</h3>
            <div class=\"hr-divider mt-2 mb-2\">
                <div class=\"hr-line\"></div>
                <div class=\"hr-icon\"><i class=\"fa fa-chevron-down\"></i></div>
                <div class=\"hr-line\"></div>
            </div>
        </div>
    </div>
    <section id=\"summary bg-light\">
        <div class=\"container-fluid mb-5 shadow-sm bg-light\">
            <div class=\"row\">
                <div class=\"col-md-6 mt-3\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Startup Consulting and Services</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>Business Registration Services</li>
                                <li>Business Plans and Corporate Profiles</li>
                                <li>Special Business Licencing and Legislative Compliance Services</li>
                                <li>Digital Security, Data Protection and POPI Compliance</li>
                                <li>Privacy Policies and Terms of Service specific to regional law</li>
                                <li>Corporate Email Systems Audits for Litigation purposes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mt-3\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Online Presence and Marketing Tools Development</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>Graphic Design</li>
                                <li>Brand and Identity Consulting and Design</li>
                                <li>Website Development and Design</li>
                                <li>Website Updates, Maintenance and Troubleshooting</li>
                                <li>Social Media Services</li>
                                <li>Marketing Strategy Development and Management Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mt-3 shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Business IT Systems Development</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>IT Systems Management Services</li>
                                <li>Online and Telephonic Tech Support Solutions</li>
                                <li>Mobile Apps for Android and IOS</li>
                                <li>Custom Business Data Architecture Systems</li>
                                <li>Data Protection including backups and antivirus</li>
                                <li>Systems Training for staff members</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mt-3\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-header text-white bg-danger\">
                            <h5>Domain Names and Hosting</h5>
                        </div>
                        <div class=\"card-body\">
                            <ul>
                                <li>Domain Names</li>
                                <li>Complete A+ Rated <strong>Hosting Solutions</strong></li>
                                <li>Cloud Hosting Solutions</li>
                                <li>Email Systems Management</li>
                                <li>Email hosting on cloud, Office 365 or GSuite</li>
                                <li>SSL Certificates</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 text-center mt-4 pb-2\">
                    <p class=\"lead\">Tailor made solutions to meet your specific business needs</p>
                </div>
            </div>
        </div>
    </section>
    <section id=\"contact-block\">
        <div class=\"container\">
            <div class=\"hr-divider mt-2\">
                <div class=\"hr-line\"></div>
                <div class=\"hr-icon\"><i class=\"fa fa-chevron-down\"></i></div>
                <div class=\"hr-line\"></div>
            </div>
            <div class=\"row  shadow-sm\">
                <div class=\"col-md-12 bg-danger text-white p-5 text-center\">
                    <h2>How can we help you? Please contact us </h2>
                    <a class=\"contact-btn m-4 p-3 btn text-danger border-danger bg-white\" href=\"{{ site.url }}contact/\">Contact Us <i class=\"fa fa-users text-danger\"></i> </a>
                </div>
            </div>
        </div>
    </section>
{% endblock body %}

{% block scripts %}{% endblock scripts %}

", "home_page.twig", "/home/thirdeye/public_html/templates/website/home_page.twig");
    }
}
