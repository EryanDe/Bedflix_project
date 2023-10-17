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

/* security/login.html.twig */
class __TwigTemplate_522617cdd1548be606f63f93b92ed3a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">


";
        // line 13
        echo "\t";
        // line 14
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login to the Bedflix
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "\t<style>
\t\tbody {
\t\t\tbackground-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(10, 10, 10, 0.2)), url(\"https://assets.nflxext.com/ffe/siteui/vlv3/ab180a27-b661-44d7-a6d9-940cb32f2f4a/c0f30a65-c9b4-4baf-85f1-b6f2b5ae5de8/FR-fr-20231009-popsignuptwoweeks-perspective_alpha_website_small.jpg\");


\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tfont-style: normal;
\t\t\t/* object-fit: cover; */
\t\t\tbackground-size: cover;


\t\t}

\t\t* {
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tfont-style: normal;

\t\t}

\t\t/* body { */
\t\t/* background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.6)),
        url(\"https: //assets.nflxext.com/ffe/siteui/vlv3/9db4a880-3034-4e98-bdea-5d983e86bf52/e51f7928-e078-4d74-95ef-15815021f579/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\"),
        url(\"../../public/assets/img_login/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\"); */
\t\t/* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(46, 46, 44, 0.6)),
            url(\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../../public/assets/img_login/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg"), "html", null, true);
        echo "\");

    font-family: 'Roboto', sans-serif;
    font-style: normal;
    /* object-fit: cover; */
\t\t/* background-size: cover;
} */

\t\t/* CSS pour centrer la login-zone */
\t\t{
\t\t\t# .body {
\t\t\t\tmargin: 0;
\t\t\t\t/* Réinitialiser les marges par défaut du body */
\t\t\t\tpadding: 0;
\t\t\t\t/* Réinitialiser les rembourrages par défaut du body */
\t\t\t\theight: 100vh;
\t\t\t\t/* Prendre la hauteur complète de la vue */
\t\t\t\tdisplay: flex;
\t\t\t\t/* Utiliser la flexbox pour centrer verticalement et horizontalement */
\t\t\t\tflex-direction: column;
\t\t\t\t/* Disposer les éléments verticalement */
\t\t\t\tjustify-content: center;
\t\t\t\t/* Centrer verticalement */
\t\t\t\talign-items: center;
\t\t\t\t/* Centrer horizontalement */
\t\t\t} #
\t\t}

\t\t/* HEADER */


\t\t/* CSS pour le header */
\t\t/* .header-login {
    text-align: left;
    /* Aligner le contenu du header à gauche */
\t\t/* padding: 10px; */
\t\t/* Ajouter un peu d'espacement autour de l'image */
\t\t/* display: flex; */
\t\t/* justify-content: flex-start; */
\t\t/* } */
\t\t.header-login img {
\t\t\twidth: 150px;
\t\t\t/* Largeur de l'image */
\t\t\theight: auto;
\t\t\t/* Ajuster la hauteur de l'image en conséquence */
\t\t\t/* position:relative; */
            margin-top: 10px;
            margin-left: 10px;
\t\t}


\t\t.header-login {
\t\t\ttext-align: left;
\t\t\tdisplay: flex;
\t\t\tjustify-content: flex-start;
\t\t\tmargin-top: 1%;
\t\t\tmargin-left: 1%;
\t\t\tmargin-bottom: 1%;
\t\t\twidth: 100%;
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t}
\t\t{
\t\t\t# .header-login {
\t\t\t\ttext-align: left;
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: flex-start;
\t\t\t\tposition: relative;
\t\t\t\ttop: 0;
\t\t\t\twidth: 100%;
\t\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t\tz-index: 1;
\t\t\t} #
\t\t}
\t\t/* FORMULAIRE */

\t\t/* form {
    background-color: #fff;
    /* Couleur de fond du formulaire */
\t\t/* padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); */
\t\t/* Ombre pour le formulaire */
\t\t/* text-align: center;
} */


\t\t/* @media only screen and (min-width:360px) { */


\t\t.login-zone {
\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t/* Couleur noire avec une transparence de 70% */
\t\t\tposition: relative;
\t\t\ttop: 0;
\t\t\tbottom: 0;
\t\t\twidth: 50%;
\t\t\theight: auto;
\t\t\tpadding: 5em;
\t\t\tmargin: 10% 60% 1% 40%;
\t\t\t/* left: 0;
    right: 0; */
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\t/* Mettre au 1er plan */
\t\t\tz-index: 1;
\t\t\twidth: 20em;
\t\t\tborder-radius: 5px;
\t\t\tcolor: white;
\t\t\ttext-size-adjust: auto;
\t\t}

\t\t.login-zone {
\t\t\t/* ... Other styles ... */
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: flex-start;
\t\t\t/* Align items to the top horizontally */
\t\t\talign-items: flex-start;
\t\t\t/* Align items to the top vertically */
\t\t\t/* overflow:inherit */
\t\t\t/* Masquer le contenu dépassant du conteneur */
\t\t\t/* Utiliser la flexbox pour centrer verticalement et horizontalement */
\t\t\t/* Disposer les éléments verticalement */
\t\t\tpadding-bottom: 10%;
\t\t}


\t\t/* } */

\t\t/* CSS for button and input elements */
\t\t.login-button,
\t\tinput[type=\"email\"],
\t\tinput[type=\"password\"] {
\t\t\twidth: 150%;
\t\t\tpadding: 10px;
\t\t\tmargin: 10px;
\t\t\tbox-sizing: border-box;
\t\t}

\t\t.login-title {
\t\t\tfont-size: xx-large;
\t\t\tfont-weight: 900;
\t\t}


\t\tinput {
\t\t\tbackground-color: rgb(69, 67, 67);
\t\t\tborder-radius: 5px;
\t\t\tborder-style: none;
\t\t\tfont-weight: bold;
\t\t\tcolor: white;
\t\t}
\t\tinput::placeholder {
\t\t\tcolor: rgb(172, 163, 163); /* Other styles you want to apply */
\t\t}
\t\t.login-button {
\t\t\tmax-width: 280%;
\t\t\twidth: 275%;
\t\t\tcolor: white;
\t\t\tbackground-color: red;
\t\t\tfont-weight: bold;
\t\t\tfont-size: 15px;

\t\t\tborder-radius: 5px;
\t\t\tcursor: pointer;
\t\t\tborder-style: none;

\t\t}
\t\t.remember {
\t\t\tbackground-color: black;
\t\t\tcolor: rgb(105, 101, 101);
\t\t\tpadding-top: 5%;
\t\t\tpadding-bottom: 10%;
\t\t\tpadding-right: 10%;
\t\t\tborder-radius: 1px;
\t\t}

\t\t.login-visit {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: space-between;
\t\t\tpadding: 1%;
\t\t\ttext-size-adjust: auto;
\t\t\toverflow: hidden;

\t\t\tcolor: rgb(105, 101, 101);
\t\t\tborder-radius: 1px;
\t\t\t/* Masquer le contenu dépassant du conteneur */
\t\t}


\t\t/* FOOTER */
\t\t/* CSS pour placer le footer en bas */
\t\tfooter {
\t\t\tposition: relative;
\t\t\t/* Position absolue pour s'assurer que le footer reste en bas */
\t\t\tbottom: 0;
\t\t\tmargin-top: 20%;
\t\t\tmargin-bottom: -5%;
\t\t\tmargin-left: -5%;
            margin-right:0%;
\t\t\tpadding: 1% 3% 5% 10%;
\t\t\twidth: 95%;
\t\t\t/* Prendre la largeur complète de la vue */
\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\tcolor: rgb(105, 101, 101);
\t\t\t/* z-index: 1; */


\t\t}


\t\t.services div {
\t\t\tdisplay: flex;
\t\t\talign-items: start; 
\t\t\t";
        // line 269
        echo "\t\t\talign-content: flex-start;
\t\t\t/* Use space-around to evenly distribute space between links */
\t\t\tmargin: 1em;
\t\t\t/* Adjust the top margin for additional spacing */
\t\t}

\t\t.services div a {
\t\t\tmargin: 1em 1em 1em 0;

\t\t}

\t\t.language-select select {
\t\t\tbackground-color: black;
\t\t\tcolor: rgb(105, 101, 101);
\t\t\tpadding: 1%;
\t\t\tborder-radius: 1px;
\t\t}

\t\t/* .services {
display: flex;
display: flex;
    align-items: center;
    justify-content: space-around;
} */
\t\t/* html,
body {
    margin: 0;
    padding: 0;
    height: 100%;
} */
\t</style>
\t<header class=\"header-login\">
\t\t";
        // line 302
        echo "\t\t<!-- <img src=\"\"> --><a href=\"/login\"> <img class=\"bedflix-header-img\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img_login/bedflix.png"), "html", null, true);
        echo "\" alt=\"Image\" width=\"200\" height=\"150\"></a>
\t</header>


\t<form method=\"POST\" action=\"login.php\">

\t\t";
        // line 308
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 308, $this->source); })())) {
            // line 309
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 309, $this->source); })()), "messageKey", [], "any", false, false, false, 309), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 309, $this->source); })()), "messageData", [], "any", false, false, false, 309), "security"), "html", null, true);
            echo "</div>
\t\t\t";
            // line 311
            echo "\t\t";
        }
        // line 312
        echo "
\t\t";
        // line 313
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 313, $this->source); })()), "user", [], "any", false, false, false, 313)) {
            // line 314
            echo "\t\t\t<div class=\"mb-3\">
\t\t\t\tVous êtes connecté en tant que : 
\t\t\t\t";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "user", [], "any", false, false, false, 316), "userIdentifier", [], "any", false, false, false, 316), "html", null, true);
            echo ",
\t\t\t\t<a href=\"";
            // line 317
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t</div>
\t\t";
        }
        // line 320
        echo "
\t\t";
        // line 335
        echo "
\t\t<div
\t\t\tclass=\"login-zone\">
\t\t\t<!-- formulaire  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        S'identifier 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        email input 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        password input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        id button
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        -->
\t\t\t<form method=\"POST\" action=\"login.php\">
\t\t\t\t<div class=\"login-title\">S'identifier</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t\t<input type=\"email\" value=\"";
        // line 348
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 348, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe\" required>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<button class=\"login-button\">S'identifier</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"remember\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember\" name=\"remember\" checked/>
\t\t\t\t\t<label for=\"remember\">Se souvenir de moi</label>
\t\t\t\t\t<!-- TODO : relier à la page d'aide -->
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\tBesoin d'aide?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-visit\">
\t\t\t\t\t<div>
\t\t\t\t\t\tPremière visite sur Netflix ?

\t\t\t\t\t\t<!-- TODO : relier à page inscription -->
\t\t\t\t\t\t<a href=\"https://127.0.0.1:8000/inscription\">Inscrivez-vous.

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<br></br>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\tCette page est protégée par Google reCAPTCHA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    pour nous assurer que vous n'êtes plus un robot.
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<!-- TODO : relier à une page \"en savoir plus\" -->
\t\t\t\t\t<a href=\"\">En savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>

\t<footer>

\t\t<div class=\"services\">
\t\t\t<div>
\t\t\t\tDes questions ? Appelez le (+33) **** - *** - ***
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a>FAQ</a>
\t\t\t\t<a>Centre d'aide</a>
\t\t\t\t<a>Boutique Netflix</a>
\t\t\t\t<a>Conditions d'utilisation</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a>Confidentialité</a>
\t\t\t\t<a>Préférences de cookies</a>
\t\t\t\t<a>Mentions légales</a>
\t\t\t\t<a>Choix liés à la pub</a>
\t\t\t</div>
\t\t\t<div class=\"language-select\">
\t\t\t\t<label for=\"language-select\"></label>

\t\t\t\t<select id=\"language-select\">
\t\t\t\t\t<option value=\"french\">※ Français</option>
\t\t\t\t</select>

\t\t\t</div>
\t\t</div>
\t</footer>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 348,  469 => 335,  466 => 320,  460 => 317,  456 => 316,  452 => 314,  450 => 313,  447 => 312,  444 => 311,  439 => 309,  437 => 308,  427 => 302,  393 => 269,  173 => 51,  147 => 27,  137 => 26,  117 => 23,  103 => 18,  93 => 17,  81 => 14,  79 => 13,  71 => 6,  61 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{# CSS>>> #}
{% block stylesheets %}

\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">


{# <link rel=\"stylesheet\" href=\"{{asset('../../public/css/login.css')}}\"> #}
\t{# <link rel=\"stylesheet\" href=\"{{asset ('css/login.css')}}\"> #}


{% endblock %}
{% block css %}
\t<link rel=\"stylesheet\" href=\"{{asset ('css/login.css')}}\">

{% endblock %}


{% block title %}Login to the Bedflix
{% endblock %}

{% block body %}
\t<style>
\t\tbody {
\t\t\tbackground-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(10, 10, 10, 0.2)), url(\"https://assets.nflxext.com/ffe/siteui/vlv3/ab180a27-b661-44d7-a6d9-940cb32f2f4a/c0f30a65-c9b4-4baf-85f1-b6f2b5ae5de8/FR-fr-20231009-popsignuptwoweeks-perspective_alpha_website_small.jpg\");


\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tfont-style: normal;
\t\t\t/* object-fit: cover; */
\t\t\tbackground-size: cover;


\t\t}

\t\t* {
\t\t\tfont-family: 'Roboto', sans-serif;
\t\t\tfont-style: normal;

\t\t}

\t\t/* body { */
\t\t/* background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(255, 255, 255, 0.6)),
        url(\"https: //assets.nflxext.com/ffe/siteui/vlv3/9db4a880-3034-4e98-bdea-5d983e86bf52/e51f7928-e078-4d74-95ef-15815021f579/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\"),
        url(\"../../public/assets/img_login/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg\"); */
\t\t/* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(46, 46, 44, 0.6)),
            url(\"{{ asset('../../public/assets/img_login/FR-fr-20230925-popsignuptwoweeks-perspective_alpha_website_small.jpg') }}\");

    font-family: 'Roboto', sans-serif;
    font-style: normal;
    /* object-fit: cover; */
\t\t/* background-size: cover;
} */

\t\t/* CSS pour centrer la login-zone */
\t\t{
\t\t\t# .body {
\t\t\t\tmargin: 0;
\t\t\t\t/* Réinitialiser les marges par défaut du body */
\t\t\t\tpadding: 0;
\t\t\t\t/* Réinitialiser les rembourrages par défaut du body */
\t\t\t\theight: 100vh;
\t\t\t\t/* Prendre la hauteur complète de la vue */
\t\t\t\tdisplay: flex;
\t\t\t\t/* Utiliser la flexbox pour centrer verticalement et horizontalement */
\t\t\t\tflex-direction: column;
\t\t\t\t/* Disposer les éléments verticalement */
\t\t\t\tjustify-content: center;
\t\t\t\t/* Centrer verticalement */
\t\t\t\talign-items: center;
\t\t\t\t/* Centrer horizontalement */
\t\t\t} #
\t\t}

\t\t/* HEADER */


\t\t/* CSS pour le header */
\t\t/* .header-login {
    text-align: left;
    /* Aligner le contenu du header à gauche */
\t\t/* padding: 10px; */
\t\t/* Ajouter un peu d'espacement autour de l'image */
\t\t/* display: flex; */
\t\t/* justify-content: flex-start; */
\t\t/* } */
\t\t.header-login img {
\t\t\twidth: 150px;
\t\t\t/* Largeur de l'image */
\t\t\theight: auto;
\t\t\t/* Ajuster la hauteur de l'image en conséquence */
\t\t\t/* position:relative; */
            margin-top: 10px;
            margin-left: 10px;
\t\t}


\t\t.header-login {
\t\t\ttext-align: left;
\t\t\tdisplay: flex;
\t\t\tjustify-content: flex-start;
\t\t\tmargin-top: 1%;
\t\t\tmargin-left: 1%;
\t\t\tmargin-bottom: 1%;
\t\t\twidth: 100%;
\t\t\tposition: relative;
\t\t\tz-index: 1;
\t\t}
\t\t{
\t\t\t# .header-login {
\t\t\t\ttext-align: left;
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: flex-start;
\t\t\t\tposition: relative;
\t\t\t\ttop: 0;
\t\t\t\twidth: 100%;
\t\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t\tz-index: 1;
\t\t\t} #
\t\t}
\t\t/* FORMULAIRE */

\t\t/* form {
    background-color: #fff;
    /* Couleur de fond du formulaire */
\t\t/* padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); */
\t\t/* Ombre pour le formulaire */
\t\t/* text-align: center;
} */


\t\t/* @media only screen and (min-width:360px) { */


\t\t.login-zone {
\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\t/* Couleur noire avec une transparence de 70% */
\t\t\tposition: relative;
\t\t\ttop: 0;
\t\t\tbottom: 0;
\t\t\twidth: 50%;
\t\t\theight: auto;
\t\t\tpadding: 5em;
\t\t\tmargin: 10% 60% 1% 40%;
\t\t\t/* left: 0;
    right: 0; */
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\t/* Mettre au 1er plan */
\t\t\tz-index: 1;
\t\t\twidth: 20em;
\t\t\tborder-radius: 5px;
\t\t\tcolor: white;
\t\t\ttext-size-adjust: auto;
\t\t}

\t\t.login-zone {
\t\t\t/* ... Other styles ... */
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: flex-start;
\t\t\t/* Align items to the top horizontally */
\t\t\talign-items: flex-start;
\t\t\t/* Align items to the top vertically */
\t\t\t/* overflow:inherit */
\t\t\t/* Masquer le contenu dépassant du conteneur */
\t\t\t/* Utiliser la flexbox pour centrer verticalement et horizontalement */
\t\t\t/* Disposer les éléments verticalement */
\t\t\tpadding-bottom: 10%;
\t\t}


\t\t/* } */

\t\t/* CSS for button and input elements */
\t\t.login-button,
\t\tinput[type=\"email\"],
\t\tinput[type=\"password\"] {
\t\t\twidth: 150%;
\t\t\tpadding: 10px;
\t\t\tmargin: 10px;
\t\t\tbox-sizing: border-box;
\t\t}

\t\t.login-title {
\t\t\tfont-size: xx-large;
\t\t\tfont-weight: 900;
\t\t}


\t\tinput {
\t\t\tbackground-color: rgb(69, 67, 67);
\t\t\tborder-radius: 5px;
\t\t\tborder-style: none;
\t\t\tfont-weight: bold;
\t\t\tcolor: white;
\t\t}
\t\tinput::placeholder {
\t\t\tcolor: rgb(172, 163, 163); /* Other styles you want to apply */
\t\t}
\t\t.login-button {
\t\t\tmax-width: 280%;
\t\t\twidth: 275%;
\t\t\tcolor: white;
\t\t\tbackground-color: red;
\t\t\tfont-weight: bold;
\t\t\tfont-size: 15px;

\t\t\tborder-radius: 5px;
\t\t\tcursor: pointer;
\t\t\tborder-style: none;

\t\t}
\t\t.remember {
\t\t\tbackground-color: black;
\t\t\tcolor: rgb(105, 101, 101);
\t\t\tpadding-top: 5%;
\t\t\tpadding-bottom: 10%;
\t\t\tpadding-right: 10%;
\t\t\tborder-radius: 1px;
\t\t}

\t\t.login-visit {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: space-between;
\t\t\tpadding: 1%;
\t\t\ttext-size-adjust: auto;
\t\t\toverflow: hidden;

\t\t\tcolor: rgb(105, 101, 101);
\t\t\tborder-radius: 1px;
\t\t\t/* Masquer le contenu dépassant du conteneur */
\t\t}


\t\t/* FOOTER */
\t\t/* CSS pour placer le footer en bas */
\t\tfooter {
\t\t\tposition: relative;
\t\t\t/* Position absolue pour s'assurer que le footer reste en bas */
\t\t\tbottom: 0;
\t\t\tmargin-top: 20%;
\t\t\tmargin-bottom: -5%;
\t\t\tmargin-left: -5%;
            margin-right:0%;
\t\t\tpadding: 1% 3% 5% 10%;
\t\t\twidth: 95%;
\t\t\t/* Prendre la largeur complète de la vue */
\t\t\tbackground-color: rgba(0, 0, 0, 0.8);
\t\t\tcolor: rgb(105, 101, 101);
\t\t\t/* z-index: 1; */


\t\t}


\t\t.services div {
\t\t\tdisplay: flex;
\t\t\talign-items: start; 
\t\t\t{# justify-content: space-between; #}
\t\t\talign-content: flex-start;
\t\t\t/* Use space-around to evenly distribute space between links */
\t\t\tmargin: 1em;
\t\t\t/* Adjust the top margin for additional spacing */
\t\t}

\t\t.services div a {
\t\t\tmargin: 1em 1em 1em 0;

\t\t}

\t\t.language-select select {
\t\t\tbackground-color: black;
\t\t\tcolor: rgb(105, 101, 101);
\t\t\tpadding: 1%;
\t\t\tborder-radius: 1px;
\t\t}

\t\t/* .services {
display: flex;
display: flex;
    align-items: center;
    justify-content: space-around;
} */
\t\t/* html,
body {
    margin: 0;
    padding: 0;
    height: 100%;
} */
\t</style>
\t<header class=\"header-login\">
\t\t{# <img src=\"../../public/assets/img_login/bedflix.png\"> #}
\t\t<!-- <img src=\"\"> --><a href=\"/login\"> <img class=\"bedflix-header-img\" src=\"{{asset (\"assets/img_login/bedflix.png\")}}\" alt=\"Image\" width=\"200\" height=\"150\"></a>
\t</header>


\t<form method=\"POST\" action=\"login.php\">

\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{# ↑\t\t↑\t\tTODO : faire affiche un message d'erreur (\"informations invalides ou al. ) \t\t↑\t\t↑ #}
\t\t{% endif %}

\t\t{% if app.user %}
\t\t\t<div class=\"mb-3\">
\t\t\t\tVous êtes connecté en tant que : 
\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t</div>
\t\t{% endif %}

\t\t{# <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <label for=\"inputEmail\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"  required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t           value=\"{{ csrf_token('authenticate') }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        Connexion
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form> #}

\t\t<div
\t\t\tclass=\"login-zone\">
\t\t\t<!-- formulaire  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        S'identifier 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        email input 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        password input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        id button
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        -->
\t\t\t<form method=\"POST\" action=\"login.php\">
\t\t\t\t<div class=\"login-title\">S'identifier</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputEmail\"></label>
\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\" required autofocus>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<label for=\"inputPassword\"></label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe\" required>


\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<button class=\"login-button\">S'identifier</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"remember\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember\" name=\"remember\" checked/>
\t\t\t\t\t<label for=\"remember\">Se souvenir de moi</label>
\t\t\t\t\t<!-- TODO : relier à la page d'aide -->
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\tBesoin d'aide?</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"login-visit\">
\t\t\t\t\t<div>
\t\t\t\t\t\tPremière visite sur Netflix ?

\t\t\t\t\t\t<!-- TODO : relier à page inscription -->
\t\t\t\t\t\t<a href=\"https://127.0.0.1:8000/inscription\">Inscrivez-vous.

\t\t\t\t\t\t</a>
\t\t\t\t\t\t<br></br>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\tCette page est protégée par Google reCAPTCHA
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    pour nous assurer que vous n'êtes plus un robot.
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<!-- TODO : relier à une page \"en savoir plus\" -->
\t\t\t\t\t<a href=\"\">En savoir plus
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>

\t<footer>

\t\t<div class=\"services\">
\t\t\t<div>
\t\t\t\tDes questions ? Appelez le (+33) **** - *** - ***
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a>FAQ</a>
\t\t\t\t<a>Centre d'aide</a>
\t\t\t\t<a>Boutique Netflix</a>
\t\t\t\t<a>Conditions d'utilisation</a>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a>Confidentialité</a>
\t\t\t\t<a>Préférences de cookies</a>
\t\t\t\t<a>Mentions légales</a>
\t\t\t\t<a>Choix liés à la pub</a>
\t\t\t</div>
\t\t\t<div class=\"language-select\">
\t\t\t\t<label for=\"language-select\"></label>

\t\t\t\t<select id=\"language-select\">
\t\t\t\t\t<option value=\"french\">※ Français</option>
\t\t\t\t</select>

\t\t\t</div>
\t\t</div>
\t</footer>


{% endblock %}
", "security/login.html.twig", "C:\\Users\\Hal\\Downloads\\MontpellierAdrar\\MontpellierAdrarP5231000\\231016projet_bedflix_groupe\\templates\\security\\login.html.twig");
    }
}
