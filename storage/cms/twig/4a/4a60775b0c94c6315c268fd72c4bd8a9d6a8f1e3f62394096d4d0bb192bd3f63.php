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

/* /home/mime/web/octosite/themes/leo-theme/layouts/default.htm */
class __TwigTemplate_8207f27794469644c6bcb1c74d536a5203a4db595f6e168e657f74b07395bb99 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/fontawesome/all.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "    </head>
    <body class=\"container\">

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/mime/web/octosite/themes/leo-theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  113 => 36,  109 => 35,  104 => 32,  100 => 31,  94 => 27,  92 => 26,  86 => 22,  82 => 21,  75 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  49 => 7,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">
        <link href=\"{{ 'assets/vendor/bootstrap/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/vendor/fontawesome/all.min.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/app.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body class=\"container\">

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap/bootstrap.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>

    </body>
</html>", "/home/mime/web/octosite/themes/leo-theme/layouts/default.htm", "");
    }
}
