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

/* game/rules.html.twig */
class __TwigTemplate_21549b1901dcf15dbd81d7ab606cb714 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/rules.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/rules.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/rules.html.twig", 1);
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

        echo "Mon'Hop au lit ! Les régles de jeu";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/global.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"rules-container\">
        <h1>Bienvenue sur le jeu Mon'Hop au lit ! Nous allons vous expliquer les régles de jeu</h1>
        <div id=\"config\">
            <h2>Configuration de la partie</h2>
            <p>Lorsque vous aurez cliqué sur Jouer vous allez être rediriger vers le jeu. Vous allez pouvoir ajouter les joueurs
                participants. Ensuite vous les verrez afficher sur la plateau avec l'argent que posséde chacun d'entre eux.
            </p>
            <p>Rendez-vous sur la page ... pour choisir le pion de chacun des joueurs</p>
            <p>Maintenant la configuration est finit vous pouvez jouer</p>
        </div>
        <div id=\"rule\">
            <h2>Les régles</h2>
            <p>Lancer les dés chacun votre tour, celui qui doit jouer est affiché en gris au millieu du plateau</p>
            <p>Si vous vous réalisez un double vous rejouez, attention au bout du 3ieme double direction la cellule de dégrisement</p>
            <p>Chaque fois que vous passez par la case départ vous recevez 200\$ mais vous devrez boire une gorgée pour le plaisir biensur</p>
            <p>Si un joueur atterrit sur une case propriété déjà achetée, il doit payer une location au propriétaire de la case. Si un joueur atterrit sur une case compagnie ou gare et qu'elle est déjà achetée, il doit payer une taxe au propriétaire de la case. Sinon vous pourrez choisir de l'acquérir</p>
            <p>Si un joueur ne peut pas payer une taxe ou une location, il doit vendre des propriétés ou des maisons jusqu'à ce qu'il ait assez d'argent pour couvrir le coût.</p>
            <p>Si un joueur atterrit sur la case \"Ivresse sur la voie publique\", il doit aller en cellule de dégrisement et ne pas jouer pendant un tour.</p>
            <p>Les joueurs peuvent acheter des maisons et des hôtels sur certaines de leurs propriétés. Si un joueur atterrit sur une propriété avec des maisons ou des hôtels, il doit payer une location plus élevée au propriétaire.</p>
            <p>Le jeu se termine lorsqu'un joueur a acheté toutes les propriétés et a mis tous ses concurrents sur la faillite.</p>
        </div>
        <div id=\"button\">
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game");
        echo "\">JOUER</a>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 31,  112 => 8,  102 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon'Hop au lit ! Les régles de jeu{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/global.css') }}\">
{% endblock %}
{% block body %}

    <div class=\"rules-container\">
        <h1>Bienvenue sur le jeu Mon'Hop au lit ! Nous allons vous expliquer les régles de jeu</h1>
        <div id=\"config\">
            <h2>Configuration de la partie</h2>
            <p>Lorsque vous aurez cliqué sur Jouer vous allez être rediriger vers le jeu. Vous allez pouvoir ajouter les joueurs
                participants. Ensuite vous les verrez afficher sur la plateau avec l'argent que posséde chacun d'entre eux.
            </p>
            <p>Rendez-vous sur la page ... pour choisir le pion de chacun des joueurs</p>
            <p>Maintenant la configuration est finit vous pouvez jouer</p>
        </div>
        <div id=\"rule\">
            <h2>Les régles</h2>
            <p>Lancer les dés chacun votre tour, celui qui doit jouer est affiché en gris au millieu du plateau</p>
            <p>Si vous vous réalisez un double vous rejouez, attention au bout du 3ieme double direction la cellule de dégrisement</p>
            <p>Chaque fois que vous passez par la case départ vous recevez 200\$ mais vous devrez boire une gorgée pour le plaisir biensur</p>
            <p>Si un joueur atterrit sur une case propriété déjà achetée, il doit payer une location au propriétaire de la case. Si un joueur atterrit sur une case compagnie ou gare et qu'elle est déjà achetée, il doit payer une taxe au propriétaire de la case. Sinon vous pourrez choisir de l'acquérir</p>
            <p>Si un joueur ne peut pas payer une taxe ou une location, il doit vendre des propriétés ou des maisons jusqu'à ce qu'il ait assez d'argent pour couvrir le coût.</p>
            <p>Si un joueur atterrit sur la case \"Ivresse sur la voie publique\", il doit aller en cellule de dégrisement et ne pas jouer pendant un tour.</p>
            <p>Les joueurs peuvent acheter des maisons et des hôtels sur certaines de leurs propriétés. Si un joueur atterrit sur une propriété avec des maisons ou des hôtels, il doit payer une location plus élevée au propriétaire.</p>
            <p>Le jeu se termine lorsqu'un joueur a acheté toutes les propriétés et a mis tous ses concurrents sur la faillite.</p>
        </div>
        <div id=\"button\">
            <a href=\"{{ path('app_game') }}\">JOUER</a>
        </div>
    </div>

{% endblock %}", "game/rules.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/game/rules.html.twig");
    }
}
