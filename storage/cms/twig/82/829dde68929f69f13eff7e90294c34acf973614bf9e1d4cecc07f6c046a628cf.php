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
        echo "<footer id=\"sticky-footer\" class=\"py-2 bg-dark gris text-center\">
\t<div class=\"container text-center d-inline\">
      <small> &copy; Derechos reservados Leonardo Rodríguez &trade;";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</small>
    </div>

\t<div class=\"navbar d-inline gris\">
\t\t<a href=\"https://wa.me/584249408911?text\" target=\"_blank\">
\t\t\t<i class=\"fab fa-whatsapp fa-2x\"></i>
\t\t</a>
  \t\t<a href=\"https://www.youtube.com/MrLeodejro\" target=\"_blank\">
  \t\t\t<i class=\"fab fa-youtube fa-2x\"></i>
  \t\t</a>
  \t\t<a href=\"https://www.instagram.com/leonardovoiceover\" target=\"_blank\">
  \t\t\t<i class=\"fab fa-instagram fa-2x\"></i>
  \t\t</a>
\t\t<a href=\"https://soundcloud.com/vozleonardo\" target=\"_blank\">
\t\t\t<i class=\"fab fa-soundcloud fa-2x\"></i>
\t\t</a>
\t</div>
</footer>";
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
        return array (  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"sticky-footer\" class=\"py-2 bg-dark gris text-center\">
\t<div class=\"container text-center d-inline\">
      <small> &copy; Derechos reservados Leonardo Rodríguez &trade;{{ \"now\"|date(\"Y\") }}</small>
    </div>

\t<div class=\"navbar d-inline gris\">
\t\t<a href=\"https://wa.me/584249408911?text\" target=\"_blank\">
\t\t\t<i class=\"fab fa-whatsapp fa-2x\"></i>
\t\t</a>
  \t\t<a href=\"https://www.youtube.com/MrLeodejro\" target=\"_blank\">
  \t\t\t<i class=\"fab fa-youtube fa-2x\"></i>
  \t\t</a>
  \t\t<a href=\"https://www.instagram.com/leonardovoiceover\" target=\"_blank\">
  \t\t\t<i class=\"fab fa-instagram fa-2x\"></i>
  \t\t</a>
\t\t<a href=\"https://soundcloud.com/vozleonardo\" target=\"_blank\">
\t\t\t<i class=\"fab fa-soundcloud fa-2x\"></i>
\t\t</a>
\t</div>
</footer>", "/home/mime/web/octosite/themes/leo-theme/partials/site/footer.htm", "");
    }
}
