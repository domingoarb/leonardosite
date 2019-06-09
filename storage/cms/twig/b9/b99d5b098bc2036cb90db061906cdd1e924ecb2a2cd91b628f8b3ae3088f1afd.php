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

/* /home/mime/web/octosite/themes/leo-theme/pages/home.htm */
class __TwigTemplate_95b254af1f35f35935d4ca8acd0b897b00062089913854d5a6b5f891529d56eb extends \Twig\Template
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
        echo "<div class=\"container\">
\t<div class=\"portada\">
\t\t<div class=\"portada-text\">
\t\t\t";
        // line 4
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("mensaje_bienvenida.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 5
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mime/web/octosite/themes/leo-theme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
\t<div class=\"portada\">
\t\t<div class=\"portada-text\">
\t\t\t{% content \"mensaje_bienvenida.htm\" %}
\t\t</div>
\t</div>
</div>", "/home/mime/web/octosite/themes/leo-theme/pages/home.htm", "");
    }
}
