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

/* /home/mime/web/octosite/themes/leo-theme/partials/site/header.htm */
class __TwigTemplate_2bf9943cd591e861c9388412ce260610a90cd3908bb0f956a1f104f305822b00 extends \Twig\Template
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
        echo "<!-- Image and text -->  
<div class=\"clearfix\">
    <a class=\"navbar-brand\" href=\"#\">
        <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" class=\"menu-logo float-left\">
    </a>
    <nav class=\"navbar navbar-expand-lg navbar-light menu_leo\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
        <ul class=\"navbar-nav mx-auto pt-4 mt-lg-0\">
          <li class=\"nav-item\">
            <a   class=\"nav-link\"  href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">INICIO</a>
          </li>
          <li class=\"nav-item\">
            <a  class=\"nav-link\"  href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("servicios");
        echo "\">SERVICIOS</a>
          </li>
          <li class=\"nav-item\">
            <a  class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("demos");
        echo "\">DEMOS</a>
          </li>
          <li class=\"nav-item\">
            <a  class=\"nav-link\"  href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacto");
        echo "\">CONTACTO</a>
          </li>
        </ul>
      </div>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mime/web/octosite/themes/leo-theme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  64 => 19,  58 => 16,  52 => 13,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Image and text -->  
<div class=\"clearfix\">
    <a class=\"navbar-brand\" href=\"#\">
        <img src=\"{{ 'assets/images/logo.svg'|theme }}\" class=\"menu-logo float-left\">
    </a>
    <nav class=\"navbar navbar-expand-lg navbar-light menu_leo\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo01\">
        <ul class=\"navbar-nav mx-auto pt-4 mt-lg-0\">
          <li class=\"nav-item\">
            <a   class=\"nav-link\"  href=\"{{ 'home' | page }}\">INICIO</a>
          </li>
          <li class=\"nav-item\">
            <a  class=\"nav-link\"  href=\"{{ 'servicios' | page }}\">SERVICIOS</a>
          </li>
          <li class=\"nav-item\">
            <a  class=\"nav-link\" href=\"{{ 'demos' | page }}\">DEMOS</a>
          </li>
          <li class=\"nav-item\">
            <a  class=\"nav-link\"  href=\"{{ 'contacto' | page }}\">CONTACTO</a>
          </li>
        </ul>
      </div>
    </nav>
</div>", "/home/mime/web/octosite/themes/leo-theme/partials/site/header.htm", "");
    }
}
