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

/* cases/show.html.twig */
class __TwigTemplate_068f0d603a46ede68e93a63a6e07f224 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/show.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/global.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <div id=\"case-show\">
        ";
        // line 8
        if ((((((twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == 6)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == 7)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == 9))) {
            // line 9
            echo "            ";
            // line 10
            echo "
            ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == 5)) {
                // line 12
                echo "                ";
                // line 13
                echo "                <div class=\"case-content\">
                    <p id=\"depart\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-flag-checkered\"></i></div>
                    <p id=\"depart-content\">Vous repassez par la case départ Voici vos 400€</p>
                </div>
                <div class=\"alcool\">
                    <p>400€ = 4 gorgées</p>
                </div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21) == 6)) {
                // line 22
                echo "                ";
                // line 23
                echo "                <div class=\"case-content\">
                    <p id=\"visit\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-person-running\"></i></div>
                    <p id=\"visit-content\">Vous visitez la cellule de dégrisement</p>
                </div>

                <div class=\"alcool\">
                    ";
                // line 30
                $context["visiteSimple"] = false;
                // line 31
                echo "
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 32, $this->source); })()), "players", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    // line 33
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["player"], "prison", [], "any", false, false, false, 33) == 0)) {
                        // line 34
                        echo "                            ";
                        $context["visiteSimple"] = true;
                        // line 35
                        echo "                        ";
                    }
                    // line 36
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "

                    ";
                // line 39
                if ((isset($context["visiteSimple"]) || array_key_exists("visiteSimple", $context) ? $context["visiteSimple"] : (function () { throw new RuntimeError('Variable "visiteSimple" does not exist.', 39, $this->source); })())) {
                    // line 40
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 40, $this->source); })()), "players", [], "any", false, false, false, 40));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 41
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["player"], "prison", [], "any", false, false, false, 41) != 0)) {
                            // line 42
                            echo "                                <p>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 42), "html", null, true);
                            echo " doit boire 3 gorgées</p>
                            ";
                        }
                        // line 44
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                    ";
                }
                // line 46
                echo "
                </div>
            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 48
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48) == 7)) {
                // line 49
                echo "                ";
                // line 50
                echo "                <div class=\"case-content\">
                    <p id=\"depart\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
                echo "</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"drawing fa-solid fa-beer-mug-empty\"></i></div>
                    <p id=\"depart-content\">Vous êtes en plein HAPPY HOUR GO GO GO !!!!!</p>
                </div>
                <div class=\"alcool\">
                    <p>3 gorgées chacun à la santé des créateurs</p>
                </div>

            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 59
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59) == 9)) {
                // line 60
                echo "                ";
                // line 61
                echo "                <div class=\"case-content\">
                    <p id=\"ivre\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "html", null, true);
                echo "</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"drawing fa-solid fa-beer-mug-empty\"></i></div>
                    <p id=\"ivre-content\">TG et va dessoûler</p>
                </div>
            ";
            }
            // line 67
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 67, $this->source); })()), "type", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67) == 8)) {
            // line 68
            echo "            ";
            // line 69
            echo "            <div class=\"case-content\">
                <p id=\"ivre\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
                <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-skull-crossbones\"></i></div>
                ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 72, $this->source); })()), "price", [], "any", false, false, false, 72)) {
                // line 73
                echo "                    <p id=\"ivre-content\">Paye ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 73, $this->source); })()), "price", [], "any", false, false, false, 73), "html", null, true);
                echo "\$</p>
                ";
            }
            // line 75
            echo "            </div>
            <div class=\"alcool\">
                <p>Un shot en plus pour toi</p>
            </div>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 79, $this->source); })()), "type", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79) == 3)) {
            // line 80
            echo "            ";
            // line 81
            echo "            <div class=\"case-header\">
                <h1>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), "html", null, true);
            echo "</h1>
            </div>
            <div class=\"case-content\">
                <div class=\"prices\">
                    <p class=\"price-title\">Loyer</p>
                    <p class=\"price-content\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 87, $this->source); })()), "station", [], "any", false, false, false, 87), "rent1", [], "any", false, false, false, 87), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Si vous avez 2 bars</p>
                    <p class=\"price-content\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 91, $this->source); })()), "station", [], "any", false, false, false, 91), "rent2", [], "any", false, false, false, 91), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Si vous avez 3 bars</p>
                    <p class=\"price-content\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 95, $this->source); })()), "station", [], "any", false, false, false, 95), "rent3", [], "any", false, false, false, 95), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Si vous avez 4 bars</p>
                    <p class=\"price-content\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 99, $this->source); })()), "station", [], "any", false, false, false, 99), "rent4", [], "any", false, false, false, 99), "html", null, true);
            echo " \$</p>
                </div>
            </div>
            <div class=\"case-footer\">
                <div class=\"prices\">
                    <p class=\"price-title\">Prix de l'Hyothéque</p>
                    <p class=\"price-content\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 105, $this->source); })()), "station", [], "any", false, false, false, 105), "mortgage", [], "any", false, false, false, 105), "html", null, true);
            echo " \$</p>
                </div>
            </div>
            ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 108, $this->source); })()), "players", [], "any", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 109
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["player"], "turn", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 110, $this->source); })()), "owner", [], "any", false, false, false, 110) != $context["player"])) {
                        // line 111
                        echo "                    <div class=\"alcool\">
                        <p>Vous devez boire ";
                        // line 112
                        echo twig_escape_filter($this->env, $this->extensions['App\TwigExtension\TwigExtension']->getNbHouse((isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 112, $this->source); })())), "html", null, true);
                        echo " gorgées</p>
                    </div>
                ";
                    }
                    // line 115
                    echo "            ";
                }
                // line 116
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "
        ";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 118
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 118, $this->source); })()), "type", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118) == 1) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 118, $this->source); })()), "type", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118) == 2))) {
            // line 119
            echo "            ";
            // line 120
            echo "            <div class=\"case-content\">
                <p id=\"depart\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 121, $this->source); })()), "name", [], "any", false, false, false, 121), "html", null, true);
            echo "</p>
                ";
            // line 122
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 122, $this->source); })()), "type", [], "any", false, false, false, 122), "id", [], "any", false, false, false, 122) == 1)) {
                // line 123
                echo "                    <div id=\"i-content\"><i id=\"iconCase\"  class=\"fa-solid fa-question\"></i></div>
                ";
            } else {
                // line 125
                echo "
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-toolbox\"></i></div>
                ";
            }
            // line 128
            echo "                <p id=\"depart-content\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 128, $this->source); })()), "type", [], "any", false, false, false, 128), "description", [], "any", false, false, false, 128), "html", null, true);
            echo "</p>
            </div>
        ";
        } else {
            // line 131
            echo "            <div class=\"case-header\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 131, $this->source); })()), "property", [], "any", false, false, false, 131), "color", [], "any", false, false, false, 131), "html", null, true);
            echo "\">
                ";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 132, $this->source); })()), "owner", [], "any", false, false, false, 132) != null)) {
                echo " <p >Chez ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 132, $this->source); })()), "owner", [], "any", false, false, false, 132), "name", [], "any", false, false, false, 132), "html", null, true);
                echo "</p>";
            }
            // line 133
            echo "                <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 133, $this->source); })()), "name", [], "any", false, false, false, 133), "html", null, true);
            echo "</h1>
            </div>
            <div class=\"case-content\">
                <div class=\"prices\">
                    <p class=\"price-title\">Loyer</p>
                    <p class=\"price-content\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 138, $this->source); })()), "property", [], "any", false, false, false, 138), "rent", [], "any", false, false, false, 138), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 20°</p>
                    <p class=\"price-content\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 142, $this->source); })()), "property", [], "any", false, false, false, 142), "rent1", [], "any", false, false, false, 142), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 40°</p>
                    <p class=\"price-content\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 146, $this->source); })()), "property", [], "any", false, false, false, 146), "rent2", [], "any", false, false, false, 146), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 60°</p>
                    <p class=\"price-content\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 150, $this->source); })()), "property", [], "any", false, false, false, 150), "rent3", [], "any", false, false, false, 150), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 80°</p>
                    <p class=\"price-content\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 154, $this->source); })()), "property", [], "any", false, false, false, 154), "rent4", [], "any", false, false, false, 154), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 100°</p>
                    <p class=\"price-content\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 158, $this->source); })()), "property", [], "any", false, false, false, 158), "rent5", [], "any", false, false, false, 158), "html", null, true);
            echo " \$</p>
                </div>
            </div>
            <div class=\"case-footer\">
                <div class=\"prices\">
                    <p class=\"price-title\">Prix des 20° en plus</p>
                    <p class=\"price-content\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 164, $this->source); })()), "property", [], "any", false, false, false, 164), "priceHouse", [], "any", false, false, false, 164), "html", null, true);
            echo " \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Prix des 100°</p>
                    <p class=\"price-content\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 168, $this->source); })()), "property", [], "any", false, false, false, 168), "priceHouse", [], "any", false, false, false, 168), "html", null, true);
            echo " \$ (plus 4 maisons)</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Prix de l'Hyothéque</p>
                    <p class=\"price-content\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 172, $this->source); })()), "property", [], "any", false, false, false, 172), "mortgage", [], "any", false, false, false, 172), "html", null, true);
            echo " \$</p>
                </div>
            </div>
            <div class=\"alcool\">
                <p>Vous devez boire ";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['App\TwigExtension\TwigExtension']->getNbHouse((isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 176, $this->source); })())), "html", null, true);
            echo " gorgées</p>
            </div>
        ";
        }
        // line 179
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cases/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  454 => 179,  448 => 176,  441 => 172,  434 => 168,  427 => 164,  418 => 158,  411 => 154,  404 => 150,  397 => 146,  390 => 142,  383 => 138,  374 => 133,  368 => 132,  363 => 131,  356 => 128,  351 => 125,  347 => 123,  345 => 122,  341 => 121,  338 => 120,  336 => 119,  334 => 118,  331 => 117,  325 => 116,  322 => 115,  316 => 112,  313 => 111,  310 => 110,  307 => 109,  303 => 108,  297 => 105,  288 => 99,  281 => 95,  274 => 91,  267 => 87,  259 => 82,  256 => 81,  254 => 80,  252 => 79,  246 => 75,  240 => 73,  238 => 72,  233 => 70,  230 => 69,  228 => 68,  225 => 67,  217 => 62,  214 => 61,  212 => 60,  210 => 59,  199 => 51,  196 => 50,  194 => 49,  192 => 48,  188 => 46,  185 => 45,  179 => 44,  173 => 42,  170 => 41,  165 => 40,  163 => 39,  159 => 37,  153 => 36,  150 => 35,  147 => 34,  144 => 33,  140 => 32,  137 => 31,  135 => 30,  126 => 24,  123 => 23,  121 => 22,  119 => 21,  109 => 14,  106 => 13,  104 => 12,  102 => 11,  99 => 10,  97 => 9,  95 => 8,  90 => 5,  80 => 4,  67 => 2,  57 => 1,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/styles/global.css') }}\">
{% endblock %}
{% block body %}


    <div id=\"case-show\">
        {% if case.type != null and case.type.id == 5 or case.type.id == 6 or case.type.id == 7 or case.type.id == 9 %}
            {# si la case est un coin  #}

            {% if case.type.id == 5 %}
                {# Casse départ #}
                <div class=\"case-content\">
                    <p id=\"depart\">{{case.name}}</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-flag-checkered\"></i></div>
                    <p id=\"depart-content\">Vous repassez par la case départ Voici vos 400€</p>
                </div>
                <div class=\"alcool\">
                    <p>400€ = 4 gorgées</p>
                </div>
            {% elseif case.type.id == 6 %}
                {# case visite simple/cellule de degrisement #}
                <div class=\"case-content\">
                    <p id=\"visit\">{{case.name}}</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-person-running\"></i></div>
                    <p id=\"visit-content\">Vous visitez la cellule de dégrisement</p>
                </div>

                <div class=\"alcool\">
                    {% set visiteSimple = false %}

                    {% for player in case.players %}
                        {% if player.prison==0 %}
                            {% set visiteSimple = true %}
                        {% endif %}
                    {% endfor %}


                    {% if visiteSimple %}
                        {% for player in case.players %}
                            {% if player.prison!=0 %}
                                <p>{{ player.name }} doit boire 3 gorgées</p>
                            {% endif %}
                        {% endfor %}
                    {%endif%}

                </div>
            {% elseif case.type.id == 7 %}
                {# coin happy hour #}
                <div class=\"case-content\">
                    <p id=\"depart\">{{case.name}}</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"drawing fa-solid fa-beer-mug-empty\"></i></div>
                    <p id=\"depart-content\">Vous êtes en plein HAPPY HOUR GO GO GO !!!!!</p>
                </div>
                <div class=\"alcool\">
                    <p>3 gorgées chacun à la santé des créateurs</p>
                </div>

            {% elseif case.type.id == 9 %}
                {# coin aller en cellule de degrisement #}
                <div class=\"case-content\">
                    <p id=\"ivre\">{{case.name}}</p>
                    <div id=\"i-content\"><i id=\"iconCase\" class=\"drawing fa-solid fa-beer-mug-empty\"></i></div>
                    <p id=\"ivre-content\">TG et va dessoûler</p>
                </div>
            {% endif %}
        {% elseif case.type.id == 8 %}
            {# impot #}
            <div class=\"case-content\">
                <p id=\"ivre\">{{case.name}}</p>
                <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-skull-crossbones\"></i></div>
                {% if case.price %}
                    <p id=\"ivre-content\">Paye {{case.price}}\$</p>
                {% endif %}
            </div>
            <div class=\"alcool\">
                <p>Un shot en plus pour toi</p>
            </div>
        {% elseif case.type.id == 3 %}
            {# gare #}
            <div class=\"case-header\">
                <h1>{{case.name}}</h1>
            </div>
            <div class=\"case-content\">
                <div class=\"prices\">
                    <p class=\"price-title\">Loyer</p>
                    <p class=\"price-content\">{{case.station.rent1}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Si vous avez 2 bars</p>
                    <p class=\"price-content\">{{case.station.rent2}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Si vous avez 3 bars</p>
                    <p class=\"price-content\">{{case.station.rent3}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Si vous avez 4 bars</p>
                    <p class=\"price-content\">{{case.station.rent4}} \$</p>
                </div>
            </div>
            <div class=\"case-footer\">
                <div class=\"prices\">
                    <p class=\"price-title\">Prix de l'Hyothéque</p>
                    <p class=\"price-content\">{{case.station.mortgage}} \$</p>
                </div>
            </div>
            {% for player in case.players %}
            {% if player.turn %}
                {% if case.owner != player%}
                    <div class=\"alcool\">
                        <p>Vous devez boire {{ getNbHouse(case) }} gorgées</p>
                    </div>
                {% endif %}
            {% endif %}
            {% endfor %}

        {% elseif case.type.id == 1 or case.type.id == 2 %}
            {# chance #}
            <div class=\"case-content\">
                <p id=\"depart\">{{case.name}}</p>
                {% if case.type.id == 1 %}
                    <div id=\"i-content\"><i id=\"iconCase\"  class=\"fa-solid fa-question\"></i></div>
                {% else %}

                    <div id=\"i-content\"><i id=\"iconCase\" class=\"fa-solid fa-toolbox\"></i></div>
                {% endif %}
                <p id=\"depart-content\" >{{case.type.description}}</p>
            </div>
        {% else %}
            <div class=\"case-header\" style=\"background-color: {{case.property.color}}\">
                {% if case.owner!=null %} <p >Chez {{ case.owner.name }}</p>{% endif %}
                <h1>{{case.name}}</h1>
            </div>
            <div class=\"case-content\">
                <div class=\"prices\">
                    <p class=\"price-title\">Loyer</p>
                    <p class=\"price-content\">{{case.property.rent}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 20°</p>
                    <p class=\"price-content\">{{case.property.rent1}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 40°</p>
                    <p class=\"price-content\">{{case.property.rent2}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 60°</p>
                    <p class=\"price-content\">{{case.property.rent3}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 80°</p>
                    <p class=\"price-content\">{{case.property.rent4}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Avec 100°</p>
                    <p class=\"price-content\">{{case.property.rent5}} \$</p>
                </div>
            </div>
            <div class=\"case-footer\">
                <div class=\"prices\">
                    <p class=\"price-title\">Prix des 20° en plus</p>
                    <p class=\"price-content\">{{case.property.priceHouse}} \$</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Prix des 100°</p>
                    <p class=\"price-content\">{{case.property.priceHouse}} \$ (plus 4 maisons)</p>
                </div>
                <div class=\"prices\">
                    <p class=\"price-title\">Prix de l'Hyothéque</p>
                    <p class=\"price-content\">{{case.property.mortgage}} \$</p>
                </div>
            </div>
            <div class=\"alcool\">
                <p>Vous devez boire {{ getNbHouse(case) }} gorgées</p>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "cases/show.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/cases/show.html.twig");
    }
}
