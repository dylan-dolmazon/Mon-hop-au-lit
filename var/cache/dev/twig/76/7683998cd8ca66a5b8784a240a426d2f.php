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

/* cases/owner.html.twig */
class __TwigTemplate_ffc7198d0435cbf6343e46b23fc4f9db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/owner.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cases/owner.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cases"]) || array_key_exists("cases", $context) ? $context["cases"] : (function () { throw new RuntimeError('Variable "cases" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "type", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2) == 3)) {
                // line 3
                echo "        ";
                $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "station", [], "any", false, false, false, 3), "mortgage", [], "any", false, false, false, 3);
                // line 4
                echo "
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
$context["case"], "type", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == 4)) {
                // line 6
                echo "        ";
                $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["case"], "property", [], "any", false, false, false, 6), "mortgage", [], "any", false, false, false, 6);
                // line 7
                echo "    ";
            }
            // line 8
            echo "

    <div style=\"display: flex; justify-content: space-between; margin-top: 10px\">
        <div>
            <h2>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</h2>
        </div>
        <div>
            <button class=\"button-65\" hx-post=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cases_mortgage_player", ["cases" => twig_get_attribute($this->env, $this->source, $context["case"], "id", [], "any", false, false, false, 15), "price" => (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 15, $this->source); })())]), "html", null, true);
            echo "\" hx-target=\"#resp\" style=\"background-color: #6848a4\">Vendre (";
            echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " €)
            </button>
        </div>
    </div>
    <div id=\"resp\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cases/owner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  70 => 12,  64 => 8,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for case in cases %}
    {% if case.type.id == 3 %}
        {% set price = case.station.mortgage %}

    {% elseif case.type.id==4 %}
        {% set price = case.property.mortgage %}
    {% endif %}


    <div style=\"display: flex; justify-content: space-between; margin-top: 10px\">
        <div>
            <h2>{{ case.name }}</h2>
        </div>
        <div>
            <button class=\"button-65\" hx-post=\"{{ path('app_cases_mortgage_player',{cases: case.id, price: price}) }}\" hx-target=\"#resp\" style=\"background-color: #6848a4\">Vendre ({{ price }} €)
            </button>
        </div>
    </div>
    <div id=\"resp\"></div>
{% endfor %}", "cases/owner.html.twig", "/Users/monkey/Desktop/mon-hop-au-lit/templates/cases/owner.html.twig");
    }
}
