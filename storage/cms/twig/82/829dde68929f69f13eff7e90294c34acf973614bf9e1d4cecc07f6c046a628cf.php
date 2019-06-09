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

/* /home/mime/web/octosite/themes/leo-theme/partials/site/footer.htm */
class __TwigTemplate_539c310ffe0dfa0852cc8e7d2a9c03f16dba1c5567a52590d49ff4b7f514da92 extends \Twig\Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit text-center\">
        &copy; Derechos reservados Leonardo Rodriguez &trade;";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mime/web/octosite/themes/leo-theme/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit text-center\">
        &copy; Derechos reservados Leonardo Rodriguez &trade;{{ \"now\"|date(\"Y\") }}</p>
    </div>
</div>", "/home/mime/web/octosite/themes/leo-theme/partials/site/footer.htm", "");
    }
}
