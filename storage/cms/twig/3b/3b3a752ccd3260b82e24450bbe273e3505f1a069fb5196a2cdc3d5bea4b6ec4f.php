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

/* /home/mime/web/octosite/themes/leo-theme/pages/demos.htm */
class __TwigTemplate_b0d0e373092baea22d2503123de71cb1366b87f09ec5b7f2df75a35ca87fdc16 extends \Twig\Template
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
        echo "<h4 class=\"text-center\">DEMOS</h4>

<div class=\"container d-line row\">
\t<div class=\"d-inline float-left col-md-6\">
\t\t<dl>
\t\t\t<dt>Locución publicitaria</dt>
  \t\t\t<dd><audio controls><source src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "\" type=\"audio/mp3\" /></audio></dd>

  \t\t\t<dt>E-learnings</dt>
\t\t  \t<dd><audio controls><source src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "\" type=\"audio/mp3\" /></audio></dd>

\t\t  \t<dt>Radio Imaging</dt>
\t\t  \t<dd><audio controls><source src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "\" type=\"audio/mp3\" /></audio></dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt>Audio libros</dt>
  \t\t\t<dd><audio controls><source src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "\" type=\"audio/mp3\" /></audio></dd>

  \t\t\t<dt>IVR</dt>
\t\t  \t<dd><audio controls><source src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "\" type=\"audio/mp3\" /></audio></dd>

\t\t  \t<dt>Narración corporativa, micros y videos institucionales</dt>
\t\t  \t<dd><audio controls><source src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "\" type=\"audio/mp3\" /></audio></dd>
\t\t</dl>
\t</div>
\t<div class=\"d-inline demo float-right col-md-6\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mime/web/octosite/themes/leo-theme/pages/demos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  69 => 21,  63 => 18,  55 => 13,  49 => 10,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 class=\"text-center\">DEMOS</h4>

<div class=\"container d-line row\">
\t<div class=\"d-inline float-left col-md-6\">
\t\t<dl>
\t\t\t<dt>Locución publicitaria</dt>
  \t\t\t<dd><audio controls><source src=\"{{'assets/audios/demo2vo.mp3'|theme}}\" type=\"audio/mp3\" /></audio></dd>

  \t\t\t<dt>E-learnings</dt>
\t\t  \t<dd><audio controls><source src=\"{{ 'assets/audios/demo2vo.mp3'|theme }}\" type=\"audio/mp3\" /></audio></dd>

\t\t  \t<dt>Radio Imaging</dt>
\t\t  \t<dd><audio controls><source src=\"{{ 'assets/audios/demo2vo.mp3'|theme }}\" type=\"audio/mp3\" /></audio></dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt>Audio libros</dt>
  \t\t\t<dd><audio controls><source src=\"{{ 'assets/audios/demo2vo.mp3'|theme }}\" type=\"audio/mp3\" /></audio></dd>

  \t\t\t<dt>IVR</dt>
\t\t  \t<dd><audio controls><source src=\"{{ 'assets/audios/demo2vo.mp3'|theme }}\" type=\"audio/mp3\" /></audio></dd>

\t\t  \t<dt>Narración corporativa, micros y videos institucionales</dt>
\t\t  \t<dd><audio controls><source src=\"{{ 'assets/audios/demo2vo.mp3'|theme }}\" type=\"audio/mp3\" /></audio></dd>
\t\t</dl>
\t</div>
\t<div class=\"d-inline demo float-right col-md-6\"></div>
</div>", "/home/mime/web/octosite/themes/leo-theme/pages/demos.htm", "");
    }
}
