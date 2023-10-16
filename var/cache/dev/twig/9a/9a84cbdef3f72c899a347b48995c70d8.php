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

/* accueil/index.html.twig */
class __TwigTemplate_05713b4269148040bf0ed3db7fdd2d23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Accueil.css"), "html", null, true);
        echo "\"/>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "  <div class=\"example-wrapper\">
    <h1>Accueil</h1>

    ";
        // line 18
        echo "    <div id=\"MainSection\">
      <div class=\"SectionBox\" id=\"Description\">
        <h1>Peaky Blinders</h1>
        <h3>Dernière saison disponible dès maintenant !</h3>
        <p>
          En 1919, à Birmingham, les frères Shelby, issus d'une famille de gitans, sont à la tête d'un gang qui tire ses revenus de paris clandestins, de trafics en tous genres et de vols.
          <br /> Tommy Shelby, le leader de la fratrie, cherche surtout à grimper dans l'échelle sociale. Par tous les moyens.
        </p>
      </div>
    </div>

    ";
        // line 30
        echo "
    ";
        // line 34
        echo "
    ";
        // line 36
        echo "    <div class=\"carousel-container\">
      <div class=\"carousel\">
        <div class=\"slide\"><img src=\"../images/affiche_1.jpg\" alt=\"Affiche 1\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_2.jpg\" alt=\"Affiche 2\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_joker.png\" alt=\"Affiche 3\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_4.jpg\" alt=\"Affiche 4\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_1.jpg\" alt=\"Affiche 1\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_2.jpg\" alt=\"Affiche 2\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_joker.png\" alt=\"Affiche 3\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_4.jpg\" alt=\"Affiche 4\" /></div>
      </div>
    </div>

    ";
        // line 52
        echo "
    <div>
      ";
        // line 55
        echo "    </div>

    <div>
      ";
        // line 59
        echo "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  155 => 55,  151 => 52,  136 => 36,  133 => 34,  130 => 30,  117 => 18,  112 => 14,  102 => 13,  81 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Accueil
{% endblock %} {# <title>Accueil - Bedflix</title> #}

{# {% block stylesheets %}<link rel=\"stylesheet\" href=\"{{ asset('css/Carrousel.css') }}\"/>{% endblock %} #}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{ asset('css/Accueil.css') }}\"/>{% endblock %}

  


{% block body %}
  <div class=\"example-wrapper\">
    <h1>Accueil</h1>

    {# AJOUTER BANNIERE FILMS/SERIE VEDETTE #}
    <div id=\"MainSection\">
      <div class=\"SectionBox\" id=\"Description\">
        <h1>Peaky Blinders</h1>
        <h3>Dernière saison disponible dès maintenant !</h3>
        <p>
          En 1919, à Birmingham, les frères Shelby, issus d'une famille de gitans, sont à la tête d'un gang qui tire ses revenus de paris clandestins, de trafics en tous genres et de vols.
          <br /> Tommy Shelby, le leader de la fratrie, cherche surtout à grimper dans l'échelle sociale. Par tous les moyens.
        </p>
      </div>
    </div>

    {# HEADER #}

    {# plusieurs carrousels mêlant
 films et séries (en ce moment, 
 genres tendances, personnalisées pour l’utilisateur) #}

    {# CARROUSEL 1 --> FILMS/SERIE ~ #EN_CE_MOMENT #}
    <div class=\"carousel-container\">
      <div class=\"carousel\">
        <div class=\"slide\"><img src=\"../images/affiche_1.jpg\" alt=\"Affiche 1\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_2.jpg\" alt=\"Affiche 2\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_joker.png\" alt=\"Affiche 3\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_4.jpg\" alt=\"Affiche 4\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_1.jpg\" alt=\"Affiche 1\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_2.jpg\" alt=\"Affiche 2\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_joker.png\" alt=\"Affiche 3\" /></div>
        <div class=\"slide\"><img src=\"../images/affiche_4.jpg\" alt=\"Affiche 4\" /></div>
      </div>
    </div>

    {# {% block javascripts %}
        <script src=\"{{ asset('Script/Carrousel.js') }}\"></script>
    {% endblock %} #}

    <div>
      {# CARROUSEL 2 --> FILMS/SERIE ~ #TENDANCES #}
    </div>

    <div>
      {# CARROUSEL 3 --> FILMS/SERIE ~ essayer carrousel \"PERSONALISE\" #}
    </div>
  </div>
{% endblock %}
", "accueil/index.html.twig", "C:\\Users\\Dilmamode Yasmine\\Desktop\\Bedflix_projet\\Bedflix_project\\templates\\accueil\\index.html.twig");
    }
}
