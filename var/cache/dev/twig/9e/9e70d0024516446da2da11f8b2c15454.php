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

/* /composants_base/header.html.twig */
class __TwigTemplate_cc205a18565622f974fc0bbeeb608790 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/composants_base/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/composants_base/header.html.twig"));

        // line 1
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 2
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Navbar.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <!-- Début Header et Nav barre -->

<header>
    <nav id=\"NavBar\">
    <!-- Coté Gauche -->
        <div id=\"LeftSide\">
            <img id=\"BedFlixLogo\" src=\"https://cdn.discordapp.com/attachments/1113769683485720657/1123939247171313694/image.png\" id=\"Accueil\" /> ";
        // line 13
        echo "
            <ul><!-- Liens clicables -->            
                <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a></li>          
                <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_series");
        echo "\">Séries</a></li>
                <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_films");
        echo "\">Films</a></li>
                <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\"> \" Admin \" </a></li>
            </ul>
        </div>

        



    
    


    <!-- Coté droit -->
        <div id=\"RightSide\">
            <!-- Barre de recherche -->
            <input type=\"text\" name=\"search\" placeholder=\"Titres, personnes, genres\" />

            <a href=\"#\">Jeunesse</a>

        ";
        // line 38
        echo "            <img id=\"BedFlixLogo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/NotifBell2.png"), "html", null, true);
        echo "\" alt=\"Notifications\" />
        ";
        // line 40
        echo "
        ";
        // line 42
        echo "            <img id=\"BedFlixLogo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_profil.jpg"), "html", null, true);
        echo "\" alt=\"Profil\" />
        ";
        // line 44
        echo "            
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("");
        echo "\"> Deconnexion </a> ";
        // line 46
        echo "
        </div>
    </nav>
</header>
<!-- Fin Header et Nav barre -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/composants_base/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 46,  155 => 45,  152 => 44,  147 => 42,  144 => 40,  139 => 38,  117 => 18,  113 => 17,  109 => 16,  105 => 15,  101 => 13,  93 => 6,  83 => 5,  70 => 2,  60 => 1,  50 => 5,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheet %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/Navbar.css') }}\" />
{% endblock %}

{% block body %}
  <!-- Début Header et Nav barre -->

<header>
    <nav id=\"NavBar\">
    <!-- Coté Gauche -->
        <div id=\"LeftSide\">
            <img id=\"BedFlixLogo\" src=\"https://cdn.discordapp.com/attachments/1113769683485720657/1123939247171313694/image.png\" id=\"Accueil\" /> {# VOIR REMPLACER PAR COPIE LOCAL #}

            <ul><!-- Liens clicables -->            
                <li><a href=\"{{ path('app_accueil') }}\">Accueil</a></li>          
                <li><a href=\"{{ path('app_series') }}\">Séries</a></li>
                <li><a href=\"{{ path('app_films') }}\">Films</a></li>
                <li><a href=\"{{ path('app_admin')}}\"> \" Admin \" </a></li>
            </ul>
        </div>

        



    
    


    <!-- Coté droit -->
        <div id=\"RightSide\">
            <!-- Barre de recherche -->
            <input type=\"text\" name=\"search\" placeholder=\"Titres, personnes, genres\" />

            <a href=\"#\">Jeunesse</a>

        {# <a href=\"{{ path('#')}}\">Modifier le nom de la route --> si besoin sinon modifier en bouton dropdown  #}
            <img id=\"BedFlixLogo\" src=\"{{ asset('images/icones/NotifBell2.png') }}\" alt=\"Notifications\" />
        {# </a>  #}

        {# <a href=\"{{ path('#')}}\">Modifier le nom de la route --> voir si Drop button ou si renvoie vers page  #}
            <img id=\"BedFlixLogo\" src=\"{{ asset('images/image_profil.jpg') }}\" alt=\"Profil\" />
        {# </a>  #}
            
        <a href=\"{{ path('')}}\"> Deconnexion </a> {# Modifier le nom de la route #}

        </div>
    </nav>
</header>
<!-- Fin Header et Nav barre -->
{% endblock %}
", "/composants_base/header.html.twig", "C:\\Users\\Dilmamode Yasmine\\Desktop\\Bedflix_projet\\Bedflix_project\\templates\\composants_base\\header.html.twig");
    }
}
