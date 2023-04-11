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

/* player/new.html.twig */
class __TwigTemplate_a0f6b248b7318e5cc643d05206903c45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "player/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "player/new.html.twig", 1);
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

        echo "New Player";
        
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
        echo "    <div class=\"container\">
        <h1 class=\"row justify-content-center\">Bienvenu ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
        echo ", Vous pouvez créer des joueurs</h1>
        ";
        // line 8
        echo twig_include($this->env, $context, "player/_form.html.twig");
        echo "
        <div class=\"list-players\" style=\"margin-top: 50px;\">
            <h2>Les participants actuels sont:</h2>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 12
            echo "                <div>
                    <p style=\"display: inline-block; color: ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13);
            echo "</p>
                    <form style=\"display: inline-block\" method=\"post\" action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 15))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-danger\"><i style=\"color: red; display: inline-block\" id=\"dele-player\" class=\"fa-regular fa-circle-xmark\"></i></button>
                    </form>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "player/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 20,  120 => 15,  116 => 14,  108 => 13,  105 => 12,  101 => 11,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Player{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"row justify-content-center\">Bienvenu {{ app.user.username }}, Vous pouvez créer des joueurs</h1>
        {{ include('player/_form.html.twig') }}
        <div class=\"list-players\" style=\"margin-top: 50px;\">
            <h2>Les participants actuels sont:</h2>
            {% for player in players %}
                <div>
                    <p style=\"display: inline-block; color: {{ player.color }}\">{{player.name}} {{ player.icon.value|raw }}</p>
                    <form style=\"display: inline-block\" method=\"post\" action=\"{{ path('app_player_delete', {'id': player.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ player.id) }}\">
                        <button class=\"btn btn-danger\"><i style=\"color: red; display: inline-block\" id=\"dele-player\" class=\"fa-regular fa-circle-xmark\"></i></button>
                    </form>
                </div>
            {% endfor %}
        </div>
    </div>

{% endblock %}", "player/new.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/player/new.html.twig");
    }
}
