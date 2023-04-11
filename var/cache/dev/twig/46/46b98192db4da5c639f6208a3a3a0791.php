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

/* game/index.html.twig */
class __TwigTemplate_e09c36fb963233b74114beadf99cb914 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/index.html.twig", 1);
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

        echo "Mon'Hop au lit !";
        
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
        echo "    <a id=\"rule_icon\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_rules");
        echo "\"><i class=\"fa-solid fa-circle-info\" id=\"icon-info\"></i></a>
    <button hx-target=\"#dice\" hx-post=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_reset");
        echo "\" class=\"btn-reset\">RESET GAME</button>

    <!-- The Modal -->
   ";
        // line 13
        echo "
        <div class=\"table\" id=\"table\">
        ";
        // line 15
        echo twig_include($this->env, $context, "game/board.html.twig");
        echo "
        </div>
        <div id=\"game-management\">
            <div id=\"dice\"></div>
            <button hx-target=\"#dice\" hx-post=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_roll");
        echo "\" class=\"btn-roll\"><i id=\"dices\" class=\"fa-solid fa-dice\"></i>roll</button>
            <button id=\"btn-update\" hx-target=\"#table\" hx-post=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_board");
        echo "\">maj</button>
        </div>


    <script>

        function updateBoard(){
            const btnMaj = document.getElementById('btn-update');
            btnMaj.click();
            console.log('board updated');
        }

        const div = document.getElementById('dice');
        let i =0;
        const observer = new MutationObserver(function(mutations) {

            if (i==0){
                updateBoard()
                i=1
            }else{
                i=0;
            }
        });
        observer.observe(div, { childList: true });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 20,  134 => 19,  127 => 15,  123 => 13,  117 => 9,  112 => 8,  102 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon'Hop au lit !{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/global.css') }}\">
{% endblock %}
{% block body %}
    <a id=\"rule_icon\" href=\"{{ path('app_game_rules') }}\"><i class=\"fa-solid fa-circle-info\" id=\"icon-info\"></i></a>
    <button hx-target=\"#dice\" hx-post=\"{{ path('app_game_reset') }}\" class=\"btn-reset\">RESET GAME</button>

    <!-- The Modal -->
   {# modal #}

        <div class=\"table\" id=\"table\">
        {{ include('game/board.html.twig') }}
        </div>
        <div id=\"game-management\">
            <div id=\"dice\"></div>
            <button hx-target=\"#dice\" hx-post=\"{{ path('app_game_roll') }}\" class=\"btn-roll\"><i id=\"dices\" class=\"fa-solid fa-dice\"></i>roll</button>
            <button id=\"btn-update\" hx-target=\"#table\" hx-post=\"{{ path('app_game_board') }}\">maj</button>
        </div>


    <script>

        function updateBoard(){
            const btnMaj = document.getElementById('btn-update');
            btnMaj.click();
            console.log('board updated');
        }

        const div = document.getElementById('dice');
        let i =0;
        const observer = new MutationObserver(function(mutations) {

            if (i==0){
                updateBoard()
                i=1
            }else{
                i=0;
            }
        });
        observer.observe(div, { childList: true });
    </script>
{% endblock %}
", "game/index.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/game/index.html.twig");
    }
}
