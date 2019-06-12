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


        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/bootstrap.min.css", 1 => "assets/vendor/fontawesome/all.min.css", 2 => "assets/css/app.css", 3 => "assets/vendor/audio/audio-player.css", 4 => "assets/css/jquery-ui.css"]);
        // line 20
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon16x16.ico");
        echo "\">
    </head>
    <body class=\"d-flex flex-column\">
        <!-- Header -->
            <header id=\"layout-header\" class=\"container text-center justify-content-center\">
                ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "            </header>

            <div id=\"page-content\">
                <div class=\"container text-center justify-content-center\">
                        <!-- Content -->
                        <section id=\"layout-content\">";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "</section>
                </div>
            </div>
        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery.js", 1 => "assets/vendor/bootstrap/bootstrap.min.js", 2 => "assets/vendor/audio/audioPlayer.js", 3 => "assets/vendor/audio/jquery-ui-slider.js", 4 => "assets/js/app.js"]);
        // line 47
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
        return array (  101 => 47,  99 => 41,  94 => 38,  90 => 37,  82 => 32,  75 => 27,  71 => 26,  63 => 21,  60 => 20,  58 => 13,  49 => 7,  45 => 6,  41 => 5,  35 => 1,);
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


        <link href=\"{{ [
                    'assets/vendor/bootstrap/bootstrap.min.css',
                    'assets/vendor/fontawesome/all.min.css',
                    'assets/css/app.css',
                    'assets/vendor/audio/audio-player.css',
                    'assets/css/jquery-ui.css',
                    
        ]|theme }}\" rel=\"stylesheet\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon16x16.ico'|theme }}\">
    </head>
    <body class=\"d-flex flex-column\">
        <!-- Header -->
            <header id=\"layout-header\" class=\"container text-center justify-content-center\">
                {% partial 'site/header' %}
            </header>

            <div id=\"page-content\">
                <div class=\"container text-center justify-content-center\">
                        <!-- Content -->
                        <section id=\"layout-content\">{% page %}</section>
                </div>
            </div>
        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{[
            'assets/vendor/jquery.js',
            'assets/vendor/bootstrap/bootstrap.min.js',
            'assets/vendor/audio/audioPlayer.js',
            'assets/vendor/audio/jquery-ui-slider.js',
            'assets/js/app.js'
        ]|theme }}\"></script>
    </body>
</html>", "/home/mime/web/octosite/themes/leo-theme/layouts/default.htm", "");
    }
}
