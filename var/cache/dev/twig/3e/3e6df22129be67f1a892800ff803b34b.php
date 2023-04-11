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

/* cases/index.html.twig */
class __TwigTemplate_0e055355ba6bc370f4594072aeec7445 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cases/index.html.twig", 1);
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

        echo "Cases index";
        
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
    <h1>Cases index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Type</th>
                <th>Property</th>
                <th>Station</th>
                <th>Price</th>
                <th>Value</th>
                <th>Players</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cases"]) || array_key_exists("cases", $context) ? $context["cases"] : (function () { throw new RuntimeError('Variable "cases" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "position", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 30), "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "property", [], "any", false, true, false, 32), "name", [], "any", true, true, false, 32)) {
                // line 33
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "property", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
                echo "
                ";
            }
            // line 35
            echo "                </td>
                <td>
                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "station", [], "any", false, true, false, 37), "name", [], "any", true, true, false, 37)) {
                // line 38
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "station", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "
                    ";
            }
            // line 40
            echo "                </td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "price", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "value", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 43) != null)) {
                // line 44
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["case"], "players", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                    // line 45
                    echo "                            ";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 45) . " "), "html", null, true);
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    ";
            }
            // line 48
            echo "                </td>
                <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_show", ["id" => twig_get_attribute($this->env, $this->source, $context["case"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["case"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_new");
        echo "\">Create new</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cases/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 62,  210 => 59,  201 => 55,  192 => 51,  188 => 50,  184 => 48,  181 => 47,  172 => 45,  167 => 44,  165 => 43,  161 => 42,  157 => 41,  154 => 40,  148 => 38,  146 => 37,  142 => 35,  136 => 33,  134 => 32,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cases index{% endblock %}

{% block body %}
    <div class=\"container\">
    <h1>Cases index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Type</th>
                <th>Property</th>
                <th>Station</th>
                <th>Price</th>
                <th>Value</th>
                <th>Players</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for case in cases %}
            <tr>
                <td>{{ case.id }}</td>
                <td>{{ case.name }}</td>
                <td>{{ case.position }}</td>
                <td>{{ case.type.description }}</td>
                <td>
                {% if case.property.name is defined %}
                    {{ case.property.name }}
                {% endif %}
                </td>
                <td>
                    {% if case.station.name is defined %}
                        {{ case.station.name }}
                    {% endif %}
                </td>
                <td>{{ case.price }}</td>
                <td>{{ case.value }}</td>
                <td>{% if case.players!=null %}
                        {% for player in case.players %}
                            {{ player.name~\" \" }}
                        {% endfor %}
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('app_cases_show', {'id': case.id}) }}\">show</a>
                    <a href=\"{{ path('app_cases_edit', {'id': case.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_cases_new') }}\">Create new</a>
    </div>
{% endblock %}
", "cases/index.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/cases/index.html.twig");
    }
}
