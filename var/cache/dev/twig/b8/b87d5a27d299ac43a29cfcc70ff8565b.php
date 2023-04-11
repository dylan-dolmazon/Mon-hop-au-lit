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

/* cases/action.html.twig */
class __TwigTemplate_93149d5c06f0e183ca4c24d90bd20100 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/action.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/action.html.twig"));

        // line 1
        echo "<div class=\"actions\">
    <button class=\"button-65\" style=\"background-color: #6848a4\" hx-get=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_mortgage", ["player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\" hx-target=\"#card-content\">Hypothéquer</button>
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3) == 1)) {
            // line 4
            echo "        <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: yellow\" hx-get=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_luck_random", ["player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\" hx-target=\"#depart-content\">Tirer une carte</button>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 5, $this->source); })()), "type", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == 2)) {
            // line 6
            echo "        <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: cornflowerblue\" hx-get=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_luck_random", ["player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\"  hx-target=\"#depart-content\">Tirer une carte</button>

    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == 3)) {
            // line 9
            echo "        ";
            // line 10
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 10, $this->source); })()), "owner", [], "any", false, false, false, 10) == null)) {
                // line 11
                echo "            <div id=\"content-btn-buy\">
                <button class=\"button-65\" id=\"btn-buy\" onclick=\"hide(this)\" style=\"background-color: blue\"
                        hx-post=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_buy", ["case" => twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\">
                    Acheter (";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), "html", null, true);
                echo "€)
                </button>
            </div>
        ";
            } else {
                // line 18
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 18, $this->source); })()), "owner", [], "any", false, false, false, 18) != (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 18, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 18, $this->source); })()), "owner", [], "any", false, false, false, 18), "prison", [], "any", false, false, false, 18) == 0))) {
                    // line 19
                    echo "                <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: red;\"
                        hx-post=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_pay", ["case" => twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "price" => $this->extensions['App\TwigExtension\TwigExtension']->getRent((isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 20, $this->source); })()))]), "html", null, true);
                    echo "\">
                    Payer (";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['App\TwigExtension\TwigExtension']->getRent((isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 21, $this->source); })())), "html", null, true);
                    echo "€)
                </button>
            ";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26) == 4)) {
            // line 27
            echo "        ";
            // line 28
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 28, $this->source); })()), "owner", [], "any", false, false, false, 28) == null)) {
                // line 29
                echo "            <div id=\"content-btn-buy\">
                <button class=\"button-65\" id=\"btn-buy\" onclick=\"hide(this)\" style=\"background-color: blue\"
                        hx-post=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_buy", ["case" => twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">
                    Acheter(";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32), "html", null, true);
                echo "€)
                </button>
            </div>
        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 35, $this->source); })()), "owner", [], "any", false, false, false, 35) != (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 35, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 35, $this->source); })()), "owner", [], "any", false, false, false, 35), "prison", [], "any", false, false, false, 35) == 0))) {
                // line 36
                echo "
            <button class=\"button-65 \" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: red;\"
                    hx-post=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_pay", ["case" => twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "price" => $this->extensions['App\TwigExtension\TwigExtension']->getRent((isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 38, $this->source); })()))]), "html", null, true);
                echo "\">
                Payer (";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['App\TwigExtension\TwigExtension']->getRent((isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 39, $this->source); })())), "html", null, true);
                echo "€)
            </button>

        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 42
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 42, $this->source); })()), "owner", [], "any", false, false, false, 42) == (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 42, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 42, $this->source); })()), "property", [], "any", false, false, false, 42), "house", [], "any", false, false, false, 42) < 5))) {
                // line 43
                echo "            <button class=\"button-65\" id=\"btn-add-house\" onclick=\"hide(this)\" style=\"background-color: green;\"
                    hx-post=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_add_house", ["cases" => twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
                ";
                // line 45
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 45, $this->source); })()), "property", [], "any", false, false, false, 45), "house", [], "any", false, false, false, 45) == 4)) {
                    // line 46
                    echo "                    Ajouter un hotel (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 46, $this->source); })()), "property", [], "any", false, false, false, 46), "priceHouse", [], "any", false, false, false, 46), "html", null, true);
                    echo "€)
                ";
                } else {
                    // line 48
                    echo "                    Ajouter une maison (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 48, $this->source); })()), "property", [], "any", false, false, false, 48), "priceHouse", [], "any", false, false, false, 48), "html", null, true);
                    echo "€)
                ";
                }
                // line 50
                echo "            </button>
        ";
            }
            // line 52
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53) == 5)) {
            // line 54
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) == 6)) {
            // line 55
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 55, $this->source); })()), "prison", [], "any", false, false, false, 55) != 0)) {
                // line 56
                echo "            <button class=\"button-65\" id=\"btn-pay\" onclick=\"hide(this)\" style=\"background-color: red;\"
                    hx-post=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_out_of_jail", ["player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">Payer 1 shot pour sortir
            </button>
        ";
            }
            // line 60
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) == 7)) {
            // line 61
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61) == 8)) {
            // line 62
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 62, $this->source); })()), "price", [], "any", false, false, false, 62) != null)) {
                // line 63
                echo "            <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: red;\"
                    hx-post=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_pay", ["case" => twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "price" => twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">Payer
                (";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65), "html", null, true);
                echo "€)
            </button>

        ";
            }
            // line 69
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 69, $this->source); })()), "type", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69) == 9)) {
            // line 70
            echo "        <button class=\"button-65 \" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: saddlebrown;\"
                hx-post=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_go_prison", ["player" => twig_get_attribute($this->env, $this->source, (isset($context["player"]) || array_key_exists("player", $context) ? $context["player"] : (function () { throw new RuntimeError('Variable "player" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
            Aller en dégrisement
        </button>
    ";
        }
        // line 75
        echo "    <button class=\"button-65\" id=\"close\" style=\"background-color: black \" >Finir le tour</button>

</div>
<script>




</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cases/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 75,  222 => 71,  219 => 70,  216 => 69,  209 => 65,  205 => 64,  202 => 63,  199 => 62,  196 => 61,  193 => 60,  187 => 57,  184 => 56,  181 => 55,  178 => 54,  176 => 53,  173 => 52,  169 => 50,  163 => 48,  157 => 46,  155 => 45,  151 => 44,  148 => 43,  146 => 42,  140 => 39,  136 => 38,  132 => 36,  130 => 35,  124 => 32,  120 => 31,  116 => 29,  113 => 28,  111 => 27,  109 => 26,  106 => 25,  103 => 24,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  80 => 14,  76 => 13,  72 => 11,  69 => 10,  67 => 9,  65 => 8,  59 => 6,  57 => 5,  52 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"actions\">
    <button class=\"button-65\" style=\"background-color: #6848a4\" hx-get=\"{{ path('app_cases_mortgage', {player: player.id}) }}\" hx-target=\"#card-content\">Hypothéquer</button>
    {% if case.type.id==1 %}
        <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: yellow\" hx-get=\"{{ path('app_luck_random',{player: player.id}) }}\" hx-target=\"#depart-content\">Tirer une carte</button>
    {% elseif case.type.id== 2 %}
        <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: cornflowerblue\" hx-get=\"{{ path('app_luck_random',{player: player.id}) }}\"  hx-target=\"#depart-content\">Tirer une carte</button>

    {% elseif case.type.id== 3 %}
        {# gare #}
        {% if case.owner == null %}
            <div id=\"content-btn-buy\">
                <button class=\"button-65\" id=\"btn-buy\" onclick=\"hide(this)\" style=\"background-color: blue\"
                        hx-post=\"{{ path('app_cases_buy',{case: case.id, player: player.id}) }}\">
                    Acheter ({{ case.price }}€)
                </button>
            </div>
        {% else %}
            {% if case.owner != player and case.owner.prison ==0 %}
                <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: red;\"
                        hx-post=\"{{ path('app_cases_pay',{case: case.id, player: player.id,price:getRent(case)}) }}\">
                    Payer ({{ getRent(case) }}€)
                </button>
            {% endif %}
        {% endif %}

    {% elseif case.type.id== 4 %}
        {# propriete #}
        {% if case.owner == null %}
            <div id=\"content-btn-buy\">
                <button class=\"button-65\" id=\"btn-buy\" onclick=\"hide(this)\" style=\"background-color: blue\"
                        hx-post=\"{{ path('app_cases_buy',{case: case.id, player: player.id}) }}\">
                    Acheter({{ case.price }}€)
                </button>
            </div>
        {% elseif case.owner != player and  case.owner.prison ==0 %}

            <button class=\"button-65 \" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: red;\"
                    hx-post=\"{{ path('app_cases_pay',{case: case.id, player: player.id,price:getRent(case)}) }}\">
                Payer ({{ getRent(case)}}€)
            </button>

        {% elseif case.owner == player and  case.property.house <5 %}
            <button class=\"button-65\" id=\"btn-add-house\" onclick=\"hide(this)\" style=\"background-color: green;\"
                    hx-post=\"{{ path('app_property_add_house',{cases: case.id}) }}\">
                {% if case.property.house == 4 %}
                    Ajouter un hotel ({{ case.property.priceHouse }}€)
                {% else %}
                    Ajouter une maison ({{ case.property.priceHouse }}€)
                {% endif %}
            </button>
        {% endif %}

    {% elseif case.type.id== 5 %}
    {% elseif case.type.id== 6 %}
        {% if player.prison != 0 %}
            <button class=\"button-65\" id=\"btn-pay\" onclick=\"hide(this)\" style=\"background-color: red;\"
                    hx-post=\"{{ path('app_out_of_jail',{player: player.id}) }}\">Payer 1 shot pour sortir
            </button>
        {% endif %}
    {% elseif case.type.id== 7 %}
    {% elseif case.type.id== 8 %}
        {% if case.price!=null %}
            <button class=\"button-65\" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: red;\"
                    hx-post=\"{{ path('app_cases_pay',{case: case.id, player: player.id, price:case.price}) }}\">Payer
                ({{ case.price }}€)
            </button>

        {% endif %}
    {% elseif case.type.id== 9 %}
        <button class=\"button-65 \" id=\"btn-required\" onclick=\"hide(this)\" style=\"background-color: saddlebrown;\"
                hx-post=\"{{ path('app_cases_go_prison',{player: player.id}) }}\">
            Aller en dégrisement
        </button>
    {% endif %}
    <button class=\"button-65\" id=\"close\" style=\"background-color: black \" >Finir le tour</button>

</div>
<script>




</script>

", "cases/action.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/cases/action.html.twig");
    }
}
