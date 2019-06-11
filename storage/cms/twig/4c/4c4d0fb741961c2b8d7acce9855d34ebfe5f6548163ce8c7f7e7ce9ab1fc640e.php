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
      <h4 class=\"card-title\">GRABACIONES LISTAS PARA USAR</h4>
      <p class=\"card-text text-justify\">Del guion a su correo electrónico, un audio listo para su uso brindando un nuevo nivel de calidad y profesionalismo al mundo en línea del voice over.</p>
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
      <h4 class=\"card-title\">TAN RÁPIDO COMO LO NECESITE</h4>
      <p class=\"card-text text-justify\">Una vez recibido el sript haré lo posible para retornarle su audio en el menor tiempo posible. Intento superar mi marca de respuesta de tan solo una hora.</p>
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
      <h4 class=\"card-title\">EDICION DE VIDEO</h4>
      <p class=\"card-text text-justify\">Tambien puedo ofrecerle edición de sus videos, subtitulados, diseño gráfico, creación de imagen corporativa, diseños web y más.</p>
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
      <h4 class=\"card-title\">EDICION DE AUDIO</h4>
      <p class=\"card-text \">Le ofrezco un servicio completo de edición de audio,  musicalización,  efectos y más . Su pieza puede quedar completamente vestida para debutar en los medios.</p>
    </div>
  </div>
</div>

<div class=\"row justify-content-center\">
  <img  src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logos_clientes.png");
        echo "\" class=\"img-fluid banner w-75\"> 
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
        return array (  94 => 46,  81 => 36,  68 => 26,  55 => 16,  42 => 6,  35 => 1,);
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
      <h4 class=\"card-title\">GRABACIONES LISTAS PARA USAR</h4>
      <p class=\"card-text text-justify\">Del guion a su correo electrónico, un audio listo para su uso brindando un nuevo nivel de calidad y profesionalismo al mundo en línea del voice over.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"{{ 'assets/images/reloj.svg'|theme }}\">  
    </div>
    <div class=\"card-body\">
      <h4 class=\"card-title\">TAN RÁPIDO COMO LO NECESITE</h4>
      <p class=\"card-text text-justify\">Una vez recibido el sript haré lo posible para retornarle su audio en el menor tiempo posible. Intento superar mi marca de respuesta de tan solo una hora.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"{{ 'assets/images/edicion_audio.svg'|theme }}\">
    </div>
    <div class=\"card-body\">
      <h4 class=\"card-title\">EDICION DE VIDEO</h4>
      <p class=\"card-text text-justify\">Tambien puedo ofrecerle edición de sus videos, subtitulados, diseño gráfico, creación de imagen corporativa, diseños web y más.</p>
    </div>
  </div>

  <div class=\"card border-0\">
    <div class=\"text-center\">
      <img class=\"img_servicio\" src=\"{{ 'assets/images/edicion_video.svg'|theme }}\">
    </div>
    <div class=\"card-body\">
      <h4 class=\"card-title\">EDICION DE AUDIO</h4>
      <p class=\"card-text \">Le ofrezco un servicio completo de edición de audio,  musicalización,  efectos y más . Su pieza puede quedar completamente vestida para debutar en los medios.</p>
    </div>
  </div>
</div>

<div class=\"row justify-content-center\">
  <img  src=\"{{ 'assets/images/logos_clientes.png'|theme }}\" class=\"img-fluid banner w-75\"> 
</div>", "/home/mime/web/octosite/themes/leo-theme/pages/servicios.htm", "");
    }
}
