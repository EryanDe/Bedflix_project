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

/* composants_base/header_provisoire.html.twig */
class __TwigTemplate_7b1ed19a07813e063319d006d82d8c9f extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants_base/header_provisoire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants_base/header_provisoire.html.twig"));

        // line 9
        echo "
<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\"> \" Admin \" </a>


";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            echo " ";
            // line 14
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("#");
            echo "\"> </a> ";
            // line 15
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("#");
            echo "\"> Deconnexion </a> ";
        }
        // line 17
        echo "</div> #}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "composants_base/header_provisoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  59 => 15,  55 => 14,  52 => 13,  46 => 10,  43 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{# 
<div>
<a href=\"{{ path('app_accueil')}}\"> Accueil </a>
<a href=\"{{ path('app_series')}}\"> Séries </a>
<a href=\"{{ path('app_films')}}\"> Films </a>

{# Si l'user est une admin ca déclenche le if #}
{# {% if app.user.id === \" METTRE ICI LE NUMEROS CORRESPONDANT\" %}  {% endif %}  --> peut etre aussi appliquer avec une valeur string  #}

<a href=\"{{ path('app_admin')}}\"> \" Admin \" </a>


{% if app.user %} {# si l'utilisateur est connecté #}
    <a href=\"{{ path('#')}}\"> </a> {# Modifier le nom de la route #}
    <a href=\"{{ path('#')}}\"> Deconnexion </a> {# Modifier le nom de la route #}
{% endif %}
</div> #}", "composants_base/header_provisoire.html.twig", "C:\\Users\\Dilmamode Yasmine\\Desktop\\Bedflix_projet\\Bedflix_project\\templates\\composants_base\\header_provisoire.html.twig");
    }
}
