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

/* game/roll.html.twig */
class __TwigTemplate_63aa9964875a3bea655bb29dfab4eefe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/roll.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/roll.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/roll.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["perdu"]) || array_key_exists("perdu", $context) ? $context["perdu"] : (function () { throw new RuntimeError('Variable "perdu" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <h1 style=\"color: red;\">ALEXIS FTG VOUS AVEZ PERDU</h1>
    ";
        }
        // line 7
        echo "    <p style=\"font-size: large; color: red;\">";
        if (((isset($context["dice1"]) || array_key_exists("dice1", $context) ? $context["dice1"] : (function () { throw new RuntimeError('Variable "dice1" does not exist.', 7, $this->source); })()) == (isset($context["dice2"]) || array_key_exists("dice2", $context) ? $context["dice2"] : (function () { throw new RuntimeError('Variable "dice2" does not exist.', 7, $this->source); })()))) {
            echo "Distribue ";
            echo twig_escape_filter($this->env, (isset($context["dice1"]) || array_key_exists("dice1", $context) ? $context["dice1"] : (function () { throw new RuntimeError('Variable "dice1" does not exist.', 7, $this->source); })()), "html", null, true);
            echo " gorgées";
        }
        echo "</p>
    <div class=\"flex\">
    <div class=\"face\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["dice1"]) || array_key_exists("dice1", $context) ? $context["dice1"] : (function () { throw new RuntimeError('Variable "dice1" does not exist.', 10, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "        <span class=\"pip\"></span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
    <div class=\"face\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["dice2"]) || array_key_exists("dice2", $context) ? $context["dice2"] : (function () { throw new RuntimeError('Variable "dice2" does not exist.', 15, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            <span class=\"pip\"></span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
    </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 26
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/roll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 26,  128 => 25,  113 => 18,  106 => 16,  102 => 15,  98 => 13,  91 => 11,  87 => 10,  76 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if perdu %}
        <h1 style=\"color: red;\">ALEXIS FTG VOUS AVEZ PERDU</h1>
    {% endif %}
    <p style=\"font-size: large; color: red;\">{% if dice1 == dice2 %}Distribue {{ dice1 }} gorgées{% endif %}</p>
    <div class=\"flex\">
    <div class=\"face\">
        {% for i in 1..dice1  %}
        <span class=\"pip\"></span>
        {% endfor %}
    </div>
    <div class=\"face\">
        {% for i in 1..dice2 %}
            <span class=\"pip\"></span>
        {% endfor %}
    </div>
    </div>



{% endblock %}

{% block title %}

{% endblock %}

", "game/roll.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/game/roll.html.twig");
    }
}
