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

/* /home/mime/web/octosite/themes/leo-theme/pages/servicios.htm */
class __TwigTemplate_f04bf361c57c5d8b7ccac971e363b99504de97c737a8943df77955874f0a7f51 extends \Twig\Template
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
        echo "<h3 class=\"text-center\">SERVICIOS</h3>

<div class=\"card-group\">
  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/microfono.svg");
        echo "\">  
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">GRABACIONES LISTAS PARA USAR</h5>
      <p class=\"card-text\">Del guion a su correo electrónico, un audio listo para su uso brindando un nuevo nivel de calidad y profesionalismo al mundo en línea del voice over.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/reloj.svg");
        echo "\">  
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">TAN RÁPIDO COMO LO NECESITE</h5>
      <p class=\"card-text\">Una vez recibido el sript haré lo posible para retornarle su audio en el menor tiempo posible. Intento superar mi marca de respuesta de tan solo una hora.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/edicion_audio.svg");
        echo "\">
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">EDICION DE VIDEO</h5>
      <p class=\"card-text\">Tambien puedo ofrecerle edición de sus videos, subtitulados, diseño gráfico, creación de imagen corporativa, diseños web y más.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/edicion_video.svg");
        echo "\">
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">EDICION DE AUDIO</h5>
      <p class=\"card-text\">Le ofrezco un servicio completo de edición de audio,  musicalización,  efectos y más . Su pieza puede quedar completamente vestida para debutar en los medios.</p>
    </div>
  </div>
</div>

<div class=\"row text-center\">
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_tv_guayana.svg");
        echo "\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_storytel.svg");
        echo "\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_cisco_webex.svg");
        echo "\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/office_365.svg");
        echo "\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_ingram.svg");
        echo "\"></div>  
</div>

<div class=\"row text-center\">
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_ie.svg");
        echo "\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_union_radio.svg");
        echo "\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_capital_99_9.svg");
        echo "\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo_dinamica_95.5.svg");
        echo "\"></div>  
</div>";
    }

    public function getTemplateName()
    {
        return "/home/mime/web/octosite/themes/leo-theme/pages/servicios.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  125 => 56,  121 => 55,  117 => 54,  110 => 50,  106 => 49,  102 => 48,  98 => 47,  94 => 46,  81 => 36,  68 => 26,  55 => 16,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 class=\"text-center\">SERVICIOS</h3>

<div class=\"card-group\">
  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"{{ 'assets/images/microfono.svg'|theme }}\">  
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">GRABACIONES LISTAS PARA USAR</h5>
      <p class=\"card-text\">Del guion a su correo electrónico, un audio listo para su uso brindando un nuevo nivel de calidad y profesionalismo al mundo en línea del voice over.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"{{ 'assets/images/reloj.svg'|theme }}\">  
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">TAN RÁPIDO COMO LO NECESITE</h5>
      <p class=\"card-text\">Una vez recibido el sript haré lo posible para retornarle su audio en el menor tiempo posible. Intento superar mi marca de respuesta de tan solo una hora.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"{{ 'assets/images/edicion_audio.svg'|theme }}\">
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">EDICION DE VIDEO</h5>
      <p class=\"card-text\">Tambien puedo ofrecerle edición de sus videos, subtitulados, diseño gráfico, creación de imagen corporativa, diseños web y más.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"{{ 'assets/images/edicion_video.svg'|theme }}\">
    </div>
    <div class=\"card-body\">
      <h5 class=\"card-title\">EDICION DE AUDIO</h5>
      <p class=\"card-text\">Le ofrezco un servicio completo de edición de audio,  musicalización,  efectos y más . Su pieza puede quedar completamente vestida para debutar en los medios.</p>
    </div>
  </div>
</div>

<div class=\"row text-center\">
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_tv_guayana.svg'|theme }}\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_storytel.svg'|theme }}\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_cisco_webex.svg'|theme }}\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/office_365.svg'|theme }}\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_ingram.svg'|theme }}\"></div>  
</div>

<div class=\"row text-center\">
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_ie.svg'|theme }}\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_union_radio.svg'|theme }}\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_capital_99_9.svg'|theme }}\"></div>  
  <div class=\"col\"> <img class=\"img_servicio\" src=\"{{ 'assets/images/logo_dinamica_95.5.svg'|theme }}\"></div>  
</div>", "/home/mime/web/octosite/themes/leo-theme/pages/servicios.htm", "");
    }
}
