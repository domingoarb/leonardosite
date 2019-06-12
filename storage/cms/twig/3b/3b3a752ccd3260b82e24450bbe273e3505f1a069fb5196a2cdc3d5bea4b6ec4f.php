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
        echo "<h3 class=\"text-center\">DEMOS</h3>
 <div class=\"container d-line row\">
\t<div class=\"d-inline float-left col-md-4\">
\t\t<section class=\"audio-player md-w-50  card border-0\">
\t\t  <div class=\"card md-w-50 sm-w-25\">
\t\t    <div class=\"card-body\">
\t\t      <div class=\"row align-items-center mt-4 mb-3 mx-0\">
               \t<i id=\"play-button\" class=\"far fa-play-circle play-pause btn-contacto\" aria-hidden=\"true\"></i>
\t\t\t\t
\t\t\t\t<i id=\"pause-button\" class=\"far fa-pause-circle play-pause d-none btn-contacto\"></i>


\t\t\t\t<i id=\"next-button\" class=\"fas fa-fast-forward btn-contacto ml-2\" aria-hidden=\"true\"></i>

\t\t        <div class=\"col ml-auto rounded-circle border-0 p-1\">
\t\t          <img id=\"thumbnail\" class=\"img-fluid rounded-circle\" src=\"http://lorempixel.com/100/100/abstract/1\" alt=\"\">
\t\t        </div>
\t\t      </div>
\t\t      <div class=\"p-0 m-0\" id=\"now-playing\">
\t\t        <p class=\"font-italic mb-0\">Ahora escuchando: </p>
\t\t        <p class=\"lead\" id=\"title\"></p>
\t\t      </div>
\t\t      <div class=\"progress-bar progress col-12 mb-3\">
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t  <audio id=\"audio-player\" class=\"d-none\" src=\"\" type=\"audio/mp3\" controls=\"controls\"></audio>
\t\t</section>
\t</div>
\t<div class=\"col-md-3 d-inline \">
\t\t<ul class=\"playlist list-group list-group-flush\">
\t\t    \t<li audio_url='";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "'
\t\t      \t\timg_url='";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("http://lorempixel.com/150/150/abstract/2");
        echo "'
\t\t      \t\tclass=\"active list-group-item playlist-item\">
\t\t\t      \t\t<img src='";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p.png");
        echo "' with='20px'>ublicidad
\t\t      \t</li>

\t\t      \t<li audio_url='";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/vodemolibro.mp3");
        echo "'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/3\">
\t\t      \t\t<img src='";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/e.png");
        echo "' with='150px'>-learnings
\t\t  \t\t</li>


\t\t\t    <li audio_url='";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/vo_reel_archive_voice.mp3");
        echo "'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/4\">
\t\t  \t\t\t<img src='";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/r.png");
        echo "' with='150px'>adio Imaging
\t\t  \t\t</li>

\t\t\t    <li audio_url='";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo_suave_vo.mp3");
        echo "'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/5\">
\t\t  \t\t\t<img src='";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/a.png");
        echo "' with='30px'>udio libros
\t\t  \t\t</li>

\t\t  \t\t<li audio_url='";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/vodemo2.mp3");
        echo "'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/6\">
\t\t  \t\t\t<img src='";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/i.png");
        echo "'>VR
\t\t  \t\t</li>

\t\t\t\t<li audio_url='";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/audios/demo2vo.mp3");
        echo "'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/7\">
\t\t  \t\t\t<img src='";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/n.png");
        echo "'>arración corporativa, micros y videos institucionales
\t\t  \t\t</li>
\t\t    </ul>

\t</div>
\t<div class=\"d-inline demo float-right col-md-5\"></div>
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
        return array (  138 => 66,  132 => 63,  126 => 60,  120 => 57,  114 => 54,  108 => 51,  102 => 48,  96 => 45,  89 => 41,  83 => 38,  77 => 35,  72 => 33,  68 => 32,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3 class=\"text-center\">DEMOS</h3>
 <div class=\"container d-line row\">
\t<div class=\"d-inline float-left col-md-4\">
\t\t<section class=\"audio-player md-w-50  card border-0\">
\t\t  <div class=\"card md-w-50 sm-w-25\">
\t\t    <div class=\"card-body\">
\t\t      <div class=\"row align-items-center mt-4 mb-3 mx-0\">
               \t<i id=\"play-button\" class=\"far fa-play-circle play-pause btn-contacto\" aria-hidden=\"true\"></i>
\t\t\t\t
\t\t\t\t<i id=\"pause-button\" class=\"far fa-pause-circle play-pause d-none btn-contacto\"></i>


\t\t\t\t<i id=\"next-button\" class=\"fas fa-fast-forward btn-contacto ml-2\" aria-hidden=\"true\"></i>

\t\t        <div class=\"col ml-auto rounded-circle border-0 p-1\">
\t\t          <img id=\"thumbnail\" class=\"img-fluid rounded-circle\" src=\"http://lorempixel.com/100/100/abstract/1\" alt=\"\">
\t\t        </div>
\t\t      </div>
\t\t      <div class=\"p-0 m-0\" id=\"now-playing\">
\t\t        <p class=\"font-italic mb-0\">Ahora escuchando: </p>
\t\t        <p class=\"lead\" id=\"title\"></p>
\t\t      </div>
\t\t      <div class=\"progress-bar progress col-12 mb-3\">
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t  <audio id=\"audio-player\" class=\"d-none\" src=\"\" type=\"audio/mp3\" controls=\"controls\"></audio>
\t\t</section>
\t</div>
\t<div class=\"col-md-3 d-inline \">
\t\t<ul class=\"playlist list-group list-group-flush\">
\t\t    \t<li audio_url='{{\"assets/audios/demo2vo.mp3\"|theme}}'
\t\t      \t\timg_url='{{\"http://lorempixel.com/150/150/abstract/2\"|theme}}'
\t\t      \t\tclass=\"active list-group-item playlist-item\">
\t\t\t      \t\t<img src='{{\"assets/images/p.png\"|theme}}' with='20px'>ublicidad
\t\t      \t</li>

\t\t      \t<li audio_url='{{\"assets/audios/vodemolibro.mp3\"|theme}}'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/3\">
\t\t      \t\t<img src='{{\"assets/images/e.png\"|theme}}' with='150px'>-learnings
\t\t  \t\t</li>


\t\t\t    <li audio_url='{{\"assets/audios/vo_reel_archive_voice.mp3\"|theme}}'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/4\">
\t\t  \t\t\t<img src='{{\"assets/images/r.png\"|theme}}' with='150px'>adio Imaging
\t\t  \t\t</li>

\t\t\t    <li audio_url='{{\"assets/audios/demo_suave_vo.mp3\"|theme}}'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/5\">
\t\t  \t\t\t<img src='{{\"assets/images/a.png\"|theme}}' with='30px'>udio libros
\t\t  \t\t</li>

\t\t  \t\t<li audio_url='{{\"assets/audios/vodemo2.mp3\"|theme}}'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/6\">
\t\t  \t\t\t<img src='{{\"assets/images/i.png\"|theme}}'>VR
\t\t  \t\t</li>

\t\t\t\t<li audio_url='{{\"assets/audios/demo2vo.mp3\"|theme}}'
\t\t      \t\tclass=\"list-group-item playlist-item\" 
\t\t      \t\timg_url=\"http://lorempixel.com/150/150/abstract/7\">
\t\t  \t\t\t<img src='{{\"assets/images/n.png\"|theme}}'>arración corporativa, micros y videos institucionales
\t\t  \t\t</li>
\t\t    </ul>

\t</div>
\t<div class=\"d-inline demo float-right col-md-5\"></div>
</div>", "/home/mime/web/octosite/themes/leo-theme/pages/demos.htm", "");
    }
}
