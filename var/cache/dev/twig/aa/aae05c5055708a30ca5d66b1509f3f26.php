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

/* game/board.html.twig */
class __TwigTemplate_8257e2b7d01d1b4ee04116c7412279f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/board.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/board.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cases"]) || array_key_exists("cases", $context) ? $context["cases"] : (function () { throw new RuntimeError('Variable "cases" does not exist.', 1, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 2));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 3
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["player"], "turn", [], "any", false, false, false, 3)) {
                    // line 4
                    echo "            <!-- The Modal -->
            <div id=\"myModal\" class=\"modal\">

                <!-- Modal content -->
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"background-color: ";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 9), "html", null, true);
                    echo "\">

                        <h2>";
                    // line 11
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 11), "html", null, true);
                    echo " c'est ton tour <span onclick=\"hideModal()\">!</span></h2>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"card-content\">
                            ";
                    // line 15
                    $this->loadTemplate("cases/show.html.twig", "game/board.html.twig", 15)->display($context);
                    // line 16
                    echo "                        </div>


                    </div>
                    <div class=\"modal-footer\" style=\"background-color: ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 20), "html", null, true);
                    echo "\">

                        ";
                    // line 22
                    $this->loadTemplate("cases/action.html.twig", "game/board.html.twig", 22)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, $context["case"], "id", [], "any", false, false, false, 22), "player" => $context["player"]]));
                    // line 23
                    echo "
                    </div>
                </div>

            </div>
        ";
                }
                // line 29
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
<div class=\"board\">
    <div class=\"center\">
        <div class=\"show-players\">
            <h2>All players</h2>
            <div id=\"button\">
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_player_new");
        echo "\"><i id=\"add-player\" class=\"fa-solid fa-plus\"></i></a>
            </div>
            <div class=\"left-players\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 41
            echo "                    <div class=\"onePlayer\">
                            <div>
                                <p class=\"show-player\" ";
            // line 43
            if (($context["player"] == (isset($context["nextPlayer"]) || array_key_exists("nextPlayer", $context) ? $context["nextPlayer"] : (function () { throw new RuntimeError('Variable "nextPlayer" does not exist.', 43, $this->source); })()))) {
                echo " id=\"player-turn\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "money", [], "any", false, false, false, 43), "html", null, true);
            echo "€</p>
                                <div class=\"icon-player\" style=\"color: ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 44), "html", null, true);
            echo "; margin-left: 10px\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44);
            echo "</div>
                            </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </div>
            <div class=\"right-players\">
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 50, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 51
            echo "                <div class=\"onePlayer\">
                    ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52) > 5)) {
                // line 53
                echo "                    <div>
                        <p class=\"show-player\" ";
                // line 54
                if (($context["player"] == (isset($context["nextPlayer"]) || array_key_exists("nextPlayer", $context) ? $context["nextPlayer"] : (function () { throw new RuntimeError('Variable "nextPlayer" does not exist.', 54, $this->source); })()))) {
                    echo " id=\"player-turn\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 54), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "money", [], "any", false, false, false, 54), "html", null, true);
                echo "€</p>
                        <div class=\"icon-player\" style=\"color: ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 55), "html", null, true);
                echo "; margin-left: 10px\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55);
                echo "</div>

                </div>
                ";
            }
            // line 59
            echo "            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>


    </div>
    <div class=\"community-chest-deck\">
        <h2 class=\"label\">Caisse de communauté</h2>
        <div class=\"deck\" id=\"deck-chest\">
            <i id=\"deck-icon-chest\" class=\"fa-solid fa-toolbox\"></i>
        </div>
    </div>
    <h1 class=\"title text-danger\">Mon'hop au lit !</h1>
    <div class=\"chance-deck\">
        <h2 class=\"label\">Chance</h2>
        <div class=\"deck\" id=\"deck-chance\">
            <i id=\"deck-icon-chance\" class=\"fa-solid fa-question\"></i>
        </div>
    </div>
</div>
";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cases"]) || array_key_exists("cases", $context) ? $context["cases"] : (function () { throw new RuntimeError('Variable "cases" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 80
            echo "
        ";
            // line 81
            if ((((((twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 81) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81) == 5)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81) == 6)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81) == 7)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81) == 9))) {
                // line 82
                echo "        ";
                // line 83
                echo "

        ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85) == 5)) {
                    // line 86
                    echo "        ";
                    // line 87
                    echo "<div class=\"space corner type";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
                    echo "\">
    <div class=\"container\">
        <div class=\"instructions\">Collect \$200.00 salary as you pass</div>
        <div>
            ";
                    // line 91
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 91));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 92
                        echo "                <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 92), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 92), "value", [], "any", false, false, false, 92);
                        echo "</div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "        </div>
    </div>
    <div class=\"arrow fa fa-long-arrow-left\"></div>
</div>

";
                    // line 100
                    echo "<div class=\"row horizontal-row bottom-row\">
    ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 101
$context["case"], "type", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101) == 6)) {
                    // line 102
                    echo "    ";
                    // line 103
                    echo "    ";
                    // line 104
                    echo "</div>
<div class=\"space corner type";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
                    echo "\">
    <div class=\"just\">Visite</div>
    <div style=\"display: inline\">
        <div>
            ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 110
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["player"], "prison", [], "any", false, false, false, 110) == 0)) {
                            // line 111
                            echo "                    <div class=\"icon-player\" style=\"color: ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 111), "html", null, true);
                            echo ";\">";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111);
                            echo "</div>
                ";
                        }
                        // line 113
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "        </div>
    </div>
        <div class=\"drawing\">
            <div>
            ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 118));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 119
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["player"], "prison", [], "any", false, false, false, 119) > 0)) {
                            // line 120
                            echo "                    <div class=\"icon-player test\" style=\"position: absolute;top: 0;left: 0;color: ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 120), "html", null, true);
                            echo ";\">";
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120);
                            echo "</div>
                ";
                        }
                        // line 122
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "            </div>
            <div class=\"container\">
                <div class=\"name\">trop</div>
                <div class=\"window\">
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <i class=\"person fa-regular fa-face-frown\"></i>
                </div>
                <div class=\"name\">plein</div>
            </div>
        </div>
        <div class=\"visiting\">D'ivrogne</div>
    </div>

    ";
                    // line 139
                    echo "    <div class=\"row vertical-row left-row\">
        ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 140
$context["case"], "type", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140) == 7)) {
                    // line 141
                    echo "        ";
                    // line 142
                    echo "        ";
                    // line 143
                    echo "    </div>
    <div class=\"space corner type";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144), "html", null, true);
                    echo "\">
        <div class=\"container\">
            <div class=\"name\">Happy</div>
            <i class=\"drawing fa-solid fa-beer-mug-empty\"></i>
            <div>
                ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 150
                        echo "                    <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 150), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 150), "value", [], "any", false, false, false, 150);
                        echo "</div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "            </div>
            <div class=\"name\">Hour</div>
        </div>
    </div>
    ";
                    // line 157
                    echo "
    <div class=\"row horizontal-row top-row\">
";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 159
$context["case"], "type", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159) == 9)) {
                    // line 162
                    echo "</div>
    <div class=\"space corner type";
                    // line 163
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 163), "id", [], "any", false, false, false, 163), "html", null, true);
                    echo "\">
        <div class=\"container\">
            <div class=\"name\">Ivresse sur</div>
            <i class=\"drawing fa-solid fa-truck-medical\"></i>
            <div>
                ";
                    // line 168
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 168));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 169
                        echo "                    <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 169), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 169), "value", [], "any", false, false, false, 169);
                        echo "</div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "            </div>
            <div class=\"name\">voie publique</div>
        </div>
    </div>
";
                    // line 176
                    echo "    <div class=\"row vertical-row right-row\">
        ";
                }
                // line 178
                echo "        ";
            } else {
                // line 179
                echo "

            ";
                // line 181
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181) == 1)) {
                    // line 182
                    echo "                ";
                    // line 183
                    echo "                <div class=\"space chance\">

                    <div class=\"container\">
                        <div class=\"name\">Chance</div>
                        <i class=\"drawing fa fa-question\"></i>
                        <div>
                            ";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 189));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 190
                        echo "                                <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 190), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 190), "value", [], "any", false, false, false, 190);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo "                        </div>
                    </div>

                </div>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 196
$context["case"], "type", [], "any", false, false, false, 196), "id", [], "any", false, false, false, 196) == 2)) {
                    // line 197
                    echo "                ";
                    // line 198
                    echo "                <div class=\"space community-chest\">

                    <div class=\"container\">
                        <div class=\"name\">";
                    // line 201
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "name", [], "any", false, false, false, 201), "html", null, true);
                    echo "</div>
                        <i class=\"drawing fa fa-cube\"></i>
                        <div>
                            ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 204));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 205
                        echo "                                <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 205), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 205), "value", [], "any", false, false, false, 205);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    echo "                        </div>
                    </div>

                </div>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 211
$context["case"], "type", [], "any", false, false, false, 211), "id", [], "any", false, false, false, 211) == 3)) {
                    // line 212
                    echo "                ";
                    // line 213
                    echo "                <div class=\"space railroad\">

                    <div class=\"container\">
                        <div class=\"name\">";
                    // line 216
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "name", [], "any", false, false, false, 216), "html", null, true);
                    echo "</div>
                        <i class=\"drawing fa-solid fa-martini-glass\" ></i>
                        <div>
                            ";
                    // line 219
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 219));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 220
                        echo "                                <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 220), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 220), "value", [], "any", false, false, false, 220);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 222
                    echo "                        </div>
                        <div class=\"price\" ";
                    // line 223
                    if ((twig_get_attribute($this->env, $this->source, $context["case"], "owner", [], "any", false, false, false, 223) != null)) {
                        echo "style=\"background-color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "owner", [], "any", false, false, false, 223), "color", [], "any", false, false, false, 223), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["case"], "price", [], "any", false, false, false, 223) . " €"), "html", null, true);
                    echo "</div>

                    </div>

                </div>
            ";
                } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 228
$context["case"], "type", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228) == 4) && (twig_get_attribute($this->env, $this->source, $context["case"], "property", [], "any", false, false, false, 228) != null))) {
                    // line 229
                    echo "                ";
                    // line 230
                    echo "

                <div class=\"space property\">

                    <div class=\"container\">
                        <div class=\"color-bar \" style=\"background-color: ";
                    // line 235
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "property", [], "any", false, false, false, 235), "color", [], "any", false, false, false, 235), "html", null, true);
                    echo "\">
                            ";
                    // line 236
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "property", [], "any", false, false, false, 236), "house", [], "any", false, false, false, 236) != null)) {
                        // line 237
                        echo "
                                ";
                        // line 238
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "property", [], "any", false, false, false, 238), "house", [], "any", false, false, false, 238) == 1)) {
                            // line 239
                            echo "                                    <p style=\"background-color: rgb(63,192,0)\">20°</p>
                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 240
$context["case"], "property", [], "any", false, false, false, 240), "house", [], "any", false, false, false, 240) == 2)) {
                            // line 241
                            echo "                                    <p style=\"background-color: rgb(100,155,0)\">40°</p>
                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 242
$context["case"], "property", [], "any", false, false, false, 242), "house", [], "any", false, false, false, 242) == 3)) {
                            // line 243
                            echo "                                    <p style=\"background-color: rgb(175,80,0)\">60°</p>
                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 244
$context["case"], "property", [], "any", false, false, false, 244), "house", [], "any", false, false, false, 244) == 4)) {
                            // line 245
                            echo "                                    <p style=\"background-color: rgb(200,55,0)\">80°</p>
                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 246
$context["case"], "property", [], "any", false, false, false, 246), "house", [], "any", false, false, false, 246) == 5)) {
                            // line 247
                            echo "                                    <p style=\"background-color: rgb(255,0,0)\">100°</p>
                                ";
                        }
                        // line 249
                        echo "
                            ";
                    }
                    // line 251
                    echo "                        </div>
                        <div class=\"name\">";
                    // line 252
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "name", [], "any", false, false, false, 252), "html", null, true);
                    echo "</div>
                        <div>
                            ";
                    // line 254
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 254));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 255
                        echo "                                <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 255), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 255), "value", [], "any", false, false, false, 255);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 257
                    echo "                        </div>
                        <div class=\"price\" ";
                    // line 258
                    if ((twig_get_attribute($this->env, $this->source, $context["case"], "owner", [], "any", false, false, false, 258) != null)) {
                        echo "style=\"background-color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "owner", [], "any", false, false, false, 258), "color", [], "any", false, false, false, 258), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["case"], "price", [], "any", false, false, false, 258) . " €"), "html", null, true);
                    echo "</div>
                    </div>

                </div>
            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 262
$context["case"], "type", [], "any", false, false, false, 262), "id", [], "any", false, false, false, 262) == 8)) {
                    // line 263
                    echo "                ";
                    // line 264
                    echo "                <div class=\"space fee income-tax\">

                    <div class=\"container\">
                        <div class=\"name\">";
                    // line 267
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "name", [], "any", false, false, false, 267), "html", null, true);
                    echo "</div>
                        <div class=\"diamond\"></div>
                        <div>
                            ";
                    // line 270
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 270));
                    foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                        // line 271
                        echo "                                <div class=\"icon-player\" style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "color", [], "any", false, false, false, 271), "html", null, true);
                        echo ";\">";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "icon", [], "any", false, false, false, 271), "value", [], "any", false, false, false, 271);
                        echo "</div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    echo "                        </div>
                        <div class=\"instructions\">";
                    // line 274
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["case"], "price", [], "any", false, false, false, 274) . " €"), "html", null, true);
                    echo "</div>
                    </div>

                </div>
            ";
                }
                // line 279
                echo "
        ";
            }
            // line 281
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "    </div>

    ";
        // line 286
        echo "</div>
<script>
    var modal = document.getElementById(\"myModal\");
    var btnShow = document.getElementById(\"btn-show\");
    var btnClose = document.getElementById(\"close\");
    if(modal.style.display===\"block\"){
        btnShow.click();
    }
    btnClose.onclick = function (){
        modal.style.display = \"none\";
    }
    var btn = document.getElementById(\"btn-required\");


    if( btn !== null && btn.style.display !== 'none'){
        btnClose.style.display = 'none';
        btn.addEventListener('click', function(){
            btnClose.style.display = \"block\";
        })
    }
    function hideModal(){
        modal.style.display = \"none\";
    }
    function hide(btn){
        btn.style.display='none';
    }
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "game/board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 286,  756 => 283,  749 => 281,  745 => 279,  737 => 274,  734 => 273,  723 => 271,  719 => 270,  713 => 267,  708 => 264,  706 => 263,  704 => 262,  691 => 258,  688 => 257,  677 => 255,  673 => 254,  668 => 252,  665 => 251,  661 => 249,  657 => 247,  655 => 246,  652 => 245,  650 => 244,  647 => 243,  645 => 242,  642 => 241,  640 => 240,  637 => 239,  635 => 238,  632 => 237,  630 => 236,  626 => 235,  619 => 230,  617 => 229,  615 => 228,  601 => 223,  598 => 222,  587 => 220,  583 => 219,  577 => 216,  572 => 213,  570 => 212,  568 => 211,  562 => 207,  551 => 205,  547 => 204,  541 => 201,  536 => 198,  534 => 197,  532 => 196,  526 => 192,  515 => 190,  511 => 189,  503 => 183,  501 => 182,  499 => 181,  495 => 179,  492 => 178,  488 => 176,  482 => 171,  471 => 169,  467 => 168,  459 => 163,  456 => 162,  454 => 159,  450 => 157,  444 => 152,  433 => 150,  429 => 149,  421 => 144,  418 => 143,  416 => 142,  414 => 141,  412 => 140,  409 => 139,  392 => 123,  386 => 122,  378 => 120,  375 => 119,  371 => 118,  365 => 114,  359 => 113,  351 => 111,  348 => 110,  344 => 109,  337 => 105,  334 => 104,  332 => 103,  330 => 102,  328 => 101,  325 => 100,  318 => 94,  307 => 92,  303 => 91,  295 => 87,  293 => 86,  291 => 85,  287 => 83,  285 => 82,  283 => 81,  280 => 80,  276 => 79,  256 => 61,  241 => 59,  232 => 55,  222 => 54,  219 => 53,  217 => 52,  214 => 51,  197 => 50,  193 => 48,  181 => 44,  171 => 43,  167 => 41,  163 => 40,  157 => 37,  149 => 31,  123 => 29,  115 => 23,  113 => 22,  108 => 20,  102 => 16,  100 => 15,  93 => 11,  88 => 9,  81 => 4,  78 => 3,  60 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for case in cases %}
    {% for player in case.players %}
        {% if player.turn %}
            <!-- The Modal -->
            <div id=\"myModal\" class=\"modal\">

                <!-- Modal content -->
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"background-color: {{ player.color }}\">

                        <h2>{{ player.name }} c'est ton tour <span onclick=\"hideModal()\">!</span></h2>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"card-content\">
                            {% include 'cases/show.html.twig' %}
                        </div>


                    </div>
                    <div class=\"modal-footer\" style=\"background-color: {{ player.color }}\">

                        {% include 'cases/action.html.twig' with {'id': case.id, 'player': player} %}

                    </div>
                </div>

            </div>
        {% endif %}
    {% endfor %}
{% endfor %}

<div class=\"board\">
    <div class=\"center\">
        <div class=\"show-players\">
            <h2>All players</h2>
            <div id=\"button\">
                <a href=\"{{ path('app_player_new') }}\"><i id=\"add-player\" class=\"fa-solid fa-plus\"></i></a>
            </div>
            <div class=\"left-players\">
                {% for player in players %}
                    <div class=\"onePlayer\">
                            <div>
                                <p class=\"show-player\" {% if player == nextPlayer %} id=\"player-turn\" {% endif %}>{{ player.name }}: {{ player.money }}€</p>
                                <div class=\"icon-player\" style=\"color: {{ player.color }}; margin-left: 10px\">{{ player.icon.value|raw }}</div>
                            </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"right-players\">
                {% for player in players %}
                <div class=\"onePlayer\">
                    {% if loop.index > 5 %}
                    <div>
                        <p class=\"show-player\" {% if player == nextPlayer %} id=\"player-turn\" {% endif %}>{{ player.name }}: {{ player.money }}€</p>
                        <div class=\"icon-player\" style=\"color: {{ player.color }}; margin-left: 10px\"{{ player.icon.value|raw }}</div>

                </div>
                {% endif %}
            </div>
            {% endfor %}
        </div>


    </div>
    <div class=\"community-chest-deck\">
        <h2 class=\"label\">Caisse de communauté</h2>
        <div class=\"deck\" id=\"deck-chest\">
            <i id=\"deck-icon-chest\" class=\"fa-solid fa-toolbox\"></i>
        </div>
    </div>
    <h1 class=\"title text-danger\">Mon'hop au lit !</h1>
    <div class=\"chance-deck\">
        <h2 class=\"label\">Chance</h2>
        <div class=\"deck\" id=\"deck-chance\">
            <i id=\"deck-icon-chance\" class=\"fa-solid fa-question\"></i>
        </div>
    </div>
</div>
{% for case in cases %}

        {% if case.type != null and case.type.id == 5 or case.type.id == 6 or case.type.id == 7 or case.type.id == 9 %}
        {# si la case est un coin  #}


        {% if case.type.id == 5 %}
        {# Casse départ #}
<div class=\"space corner type{{ case.type.id }}\">
    <div class=\"container\">
        <div class=\"instructions\">Collect \$200.00 salary as you pass</div>
        <div>
            {% for player in case.players %}
                <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
            {% endfor %}
        </div>
    </div>
    <div class=\"arrow fa fa-long-arrow-left\"></div>
</div>

{# creer la div ligne du bas #}
<div class=\"row horizontal-row bottom-row\">
    {% elseif case.type.id == 6%}
    {# case visite simple/cellule de degrisement #}
    {# fermer la div ligne du bas #}
</div>
<div class=\"space corner type{{ case.type.id }}\">
    <div class=\"just\">Visite</div>
    <div style=\"display: inline\">
        <div>
            {% for player in case.players %}
                {% if player.prison == 0 %}
                    <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
        <div class=\"drawing\">
            <div>
            {% for player in case.players %}
                {% if player.prison > 0 %}
                    <div class=\"icon-player test\" style=\"position: absolute;top: 0;left: 0;color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                {% endif %}
            {% endfor %}
            </div>
            <div class=\"container\">
                <div class=\"name\">trop</div>
                <div class=\"window\">
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <i class=\"person fa-regular fa-face-frown\"></i>
                </div>
                <div class=\"name\">plein</div>
            </div>
        </div>
        <div class=\"visiting\">D'ivrogne</div>
    </div>

    {# creer la div ligne de gauche #}
    <div class=\"row vertical-row left-row\">
        {% elseif case.type.id == 7%}
        {# coin happy hour #}
        {# fermer la div ligne de gauche #}
    </div>
    <div class=\"space corner type{{ case.type.id }}\">
        <div class=\"container\">
            <div class=\"name\">Happy</div>
            <i class=\"drawing fa-solid fa-beer-mug-empty\"></i>
            <div>
                {% for player in case.players %}
                    <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                {% endfor %}
            </div>
            <div class=\"name\">Hour</div>
        </div>
    </div>
    {# creer la div ligne du haut #}

    <div class=\"row horizontal-row top-row\">
{% elseif case.type.id == 9%}
{# coin aller en cellule de degrisement #}
{# fermer la div ligne du haut #}
</div>
    <div class=\"space corner type{{ case.type.id }}\">
        <div class=\"container\">
            <div class=\"name\">Ivresse sur</div>
            <i class=\"drawing fa-solid fa-truck-medical\"></i>
            <div>
                {% for player in case.players %}
                    <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                {% endfor %}
            </div>
            <div class=\"name\">voie publique</div>
        </div>
    </div>
{# creer la div ligne de droite #}
    <div class=\"row vertical-row right-row\">
        {% endif %}
        {%else%}


            {% if case.type.id == 1 %}
                {# chance #}
                <div class=\"space chance\">

                    <div class=\"container\">
                        <div class=\"name\">Chance</div>
                        <i class=\"drawing fa fa-question\"></i>
                        <div>
                            {% for player in case.players %}
                                <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                            {% endfor %}
                        </div>
                    </div>

                </div>
            {% elseif case.type.id== 2%}
                {# Caisse communauté #}
                <div class=\"space community-chest\">

                    <div class=\"container\">
                        <div class=\"name\">{{ case.name }}</div>
                        <i class=\"drawing fa fa-cube\"></i>
                        <div>
                            {% for player in case.players %}
                                <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                            {% endfor %}
                        </div>
                    </div>

                </div>
            {% elseif case.type.id == 3 %}
                {# gare #}
                <div class=\"space railroad\">

                    <div class=\"container\">
                        <div class=\"name\">{{ case.name }}</div>
                        <i class=\"drawing fa-solid fa-martini-glass\" ></i>
                        <div>
                            {% for player in case.players %}
                                <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                            {% endfor %}
                        </div>
                        <div class=\"price\" {% if case.owner != null %}style=\"background-color: {{case.owner.color}}\"{% endif %}>{{ case.price~\" €\" }}</div>

                    </div>

                </div>
            {% elseif case.type.id == 4 and case.property != null %}
                {# propriété #}


                <div class=\"space property\">

                    <div class=\"container\">
                        <div class=\"color-bar \" style=\"background-color: {{ case.property.color }}\">
                            {% if case.property.house!=null %}

                                {% if case.property.house == 1 %}
                                    <p style=\"background-color: rgb(63,192,0)\">20°</p>
                                {% elseif case.property.house == 2 %}
                                    <p style=\"background-color: rgb(100,155,0)\">40°</p>
                                {% elseif case.property.house == 3 %}
                                    <p style=\"background-color: rgb(175,80,0)\">60°</p>
                                {% elseif case.property.house == 4 %}
                                    <p style=\"background-color: rgb(200,55,0)\">80°</p>
                                {% elseif case.property.house == 5 %}
                                    <p style=\"background-color: rgb(255,0,0)\">100°</p>
                                {% endif %}

                            {% endif %}
                        </div>
                        <div class=\"name\">{{ case.name }}</div>
                        <div>
                            {% for player in case.players %}
                                <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                            {% endfor %}
                        </div>
                        <div class=\"price\" {% if case.owner != null %}style=\"background-color: {{case.owner.color}}\"{% endif %}>{{ case.price~\" €\" }}</div>
                    </div>

                </div>
            {% elseif case.type.id == 8 %}
                {# impot #}
                <div class=\"space fee income-tax\">

                    <div class=\"container\">
                        <div class=\"name\">{{ case.name }}</div>
                        <div class=\"diamond\"></div>
                        <div>
                            {% for player in case.players %}
                                <div class=\"icon-player\" style=\"color: {{ player.color }};\">{{ player.icon.value|raw }}</div>
                            {% endfor %}
                        </div>
                        <div class=\"instructions\">{{ case.price~\" €\" }}</div>
                    </div>

                </div>
            {% endif %}

        {% endif %}

        {% endfor %}
    </div>

    {# fermer la div ligne de droite #}
</div>
<script>
    var modal = document.getElementById(\"myModal\");
    var btnShow = document.getElementById(\"btn-show\");
    var btnClose = document.getElementById(\"close\");
    if(modal.style.display===\"block\"){
        btnShow.click();
    }
    btnClose.onclick = function (){
        modal.style.display = \"none\";
    }
    var btn = document.getElementById(\"btn-required\");


    if( btn !== null && btn.style.display !== 'none'){
        btnClose.style.display = 'none';
        btn.addEventListener('click', function(){
            btnClose.style.display = \"block\";
        })
    }
    function hideModal(){
        modal.style.display = \"none\";
    }
    function hide(btn){
        btn.style.display='none';
    }
</script>", "game/board.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/game/board.html.twig");
    }
}
