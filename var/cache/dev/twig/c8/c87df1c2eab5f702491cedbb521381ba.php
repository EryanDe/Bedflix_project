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

/* /composants_base/footer.html.twig */
class __TwigTemplate_403800f209bad71211c80c88270b4719 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/composants_base/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/composants_base/footer.html.twig"));

        // line 1
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 4
        echo "

";
        // line 6
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Footer.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  <footer>
    <div class=\"sommaire\">
      <div id=\"socialMedia\">

        <div class=\"reseaux\" id=\"facebook\">
          <a href=\"#\"><img src=\"../Images/facebook_.png\" /></a>
        </div>

        <div class=\"reseaux\" id=\"instagram\">
          <a href=\"#\"><img src=\"../Images/instagram.png\" /></a>
        </div>

        <div class=\"reseaux\" id=\"twitter\">
          <a href=\"#\"><img src=\"../Images/twitter.png\" /></a>
        </div>

        <div class=\"reseaux\" id=\"youtube\">
          <a href=\"#\"><img src=\"../Images/youtube.png\" /></a>
        </div>

      </div>

      <div class=\"services\">
        <a href=\"#\">Autodescription</a>
        <a href=\"#\">Relation investisseur</a>
        <a href=\"#\">Confidentialité</a>
        <a href=\"#\">Nous contacter</a>
        <a href=\"#\">Centre d'aide</a>
        <a href=\"#\">Recrutement</a>
        <a href=\"#\">Informations légales</a>
        <a href=\"#\">Cartes cadeaux</a>
        <a href=\"#\">Préférences de cookies</a>
        <a href=\"#\">Presse</a>
        <a href=\"#\">Conditions d'utilisations</a>
        <a href=\"#\">Mentions légales</a>
      </div>
    </div>
  </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "/composants_base/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 7,  84 => 6,  71 => 2,  61 => 1,  51 => 6,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheet %}
  <link rel=\"stylesheet\" href=\"{{ asset('css/Footer.css') }}\" />
{% endblock %}


{% block body %}
  <footer>
    <div class=\"sommaire\">
      <div id=\"socialMedia\">

        <div class=\"reseaux\" id=\"facebook\">
          <a href=\"#\"><img src=\"../Images/facebook_.png\" /></a>
        </div>

        <div class=\"reseaux\" id=\"instagram\">
          <a href=\"#\"><img src=\"../Images/instagram.png\" /></a>
        </div>

        <div class=\"reseaux\" id=\"twitter\">
          <a href=\"#\"><img src=\"../Images/twitter.png\" /></a>
        </div>

        <div class=\"reseaux\" id=\"youtube\">
          <a href=\"#\"><img src=\"../Images/youtube.png\" /></a>
        </div>

      </div>

      <div class=\"services\">
        <a href=\"#\">Autodescription</a>
        <a href=\"#\">Relation investisseur</a>
        <a href=\"#\">Confidentialité</a>
        <a href=\"#\">Nous contacter</a>
        <a href=\"#\">Centre d'aide</a>
        <a href=\"#\">Recrutement</a>
        <a href=\"#\">Informations légales</a>
        <a href=\"#\">Cartes cadeaux</a>
        <a href=\"#\">Préférences de cookies</a>
        <a href=\"#\">Presse</a>
        <a href=\"#\">Conditions d'utilisations</a>
        <a href=\"#\">Mentions légales</a>
      </div>
    </div>
  </footer>
{% endblock %}
", "/composants_base/footer.html.twig", "C:\\Users\\Dilmamode Yasmine\\Desktop\\Bedflix_projet\\Bedflix_project\\templates\\composants_base\\footer.html.twig");
    }
}
