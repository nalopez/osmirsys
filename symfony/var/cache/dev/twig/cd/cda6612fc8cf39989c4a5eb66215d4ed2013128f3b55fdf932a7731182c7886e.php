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

/* cycle/cycleList.html.twig */
class __TwigTemplate_15ef6efa68b2bdc13768272df3c3fb289e81bad51c2672fea2cbb400a083fb3b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cycle/cycleList.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cycle/cycleList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cycle/cycleList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"page-title\">
        <h3> Tenant List </h3>
    </div>
    <div class=\"add-button\">
        <a href=\"/tenants/add\"> <button>Add New Cycle</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["cycleList"]) || array_key_exists("cycleList", $context) ? $context["cycleList"] : (function () { throw new RuntimeError('Variable "cycleList" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "    <table>
        <tr>
            <th> #
            <th> Name
            <th> Pen Code
            <th> Location
            <th> Cycle Count
            <th> Head Count
            <th> Start Date
            <th> End Date
            <th> Status
            <th> Created By
            <th> Actions
        </tr>
        ";
            // line 28
            $context["inc"] = 1;
            // line 29
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cycleList"]) || array_key_exists("cycleList", $context) ? $context["cycleList"] : (function () { throw new RuntimeError('Variable "cycleList" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cycle"]) {
                // line 30
                echo "        <tr>
            <td> ";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "
            <td> ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "lastName", []), "html", null, true);
                echo "
            <td> ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "penCode", []), "html", null, true);
                echo "
            <td> ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "locationName", []), "html", null, true);
                echo "
            <td> ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "cycleCount", []), "html", null, true);
                echo "
            <td> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "headCount", []), "html", null, true);
                echo "
            <td> ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "startDate", []), "html", null, true);
                echo "
            <td> ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "endDate", []), "html", null, true);
                echo "
            <td> ";
                // line 39
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "statusName", [])), "html", null, true);
                echo "
            <td> ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "createdByUsername", []), "html", null, true);
                echo "
            <td>
                ";
                // line 42
                $context["activateClass"] = "activate";
                // line 43
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["cycle"], "statusCode", []) == "ACT")) {
                    // line 44
                    echo "                    ";
                    $context["activateClass"] = "deactivate";
                    // line 45
                    echo "                ";
                }
                // line 46
                echo "
                <a href=\"tenants/viewInfo/";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "tenantId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon view-info\"></div>
                </a>
                <a href=\"tenants/edit/";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "tenantId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon edit\"></div>
                </a>
                <a href=\"tenants/";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["activateClass"]) || array_key_exists("activateClass", $context) ? $context["activateClass"] : (function () { throw new RuntimeError('Variable "activateClass" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cycle"], "tenantId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon ";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["activateClass"]) || array_key_exists("activateClass", $context) ? $context["activateClass"] : (function () { throw new RuntimeError('Variable "activateClass" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "\"></div>
                </a>
            </td>
        </tr>
        ";
                // line 58
                $context["inc"] = ((isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 58, $this->source); })()) + 1);
                // line 59
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cycle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    </table>
    ";
        } else {
            // line 62
            echo "    No results found.
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cycle/cycleList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 62,  194 => 60,  188 => 59,  186 => 58,  179 => 54,  173 => 53,  167 => 50,  161 => 47,  158 => 46,  155 => 45,  152 => 44,  149 => 43,  147 => 42,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  108 => 32,  104 => 31,  101 => 30,  96 => 29,  94 => 28,  78 => 14,  76 => 13,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <div class=\"page-title\">
        <h3> Tenant List </h3>
    </div>
    <div class=\"add-button\">
        <a href=\"/tenants/add\"> <button>Add New Cycle</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    {% if cycleList|length > 0 %}
    <table>
        <tr>
            <th> #
            <th> Name
            <th> Pen Code
            <th> Location
            <th> Cycle Count
            <th> Head Count
            <th> Start Date
            <th> End Date
            <th> Status
            <th> Created By
            <th> Actions
        </tr>
        {% set inc = 1 %}
        {% for cycle in cycleList %}
        <tr>
            <td> {{ inc }}
            <td> {{ cycle.firstName }} {{ cycle.lastName }}
            <td> {{ cycle.penCode }}
            <td> {{ cycle.locationName }}
            <td> {{ cycle.cycleCount }}
            <td> {{ cycle.headCount }}
            <td> {{ cycle.startDate }}
            <td> {{ cycle.endDate }}
            <td> {{ cycle.statusName|capitalize }}
            <td> {{ cycle.createdByUsername }}
            <td>
                {% set activateClass = 'activate' %}
                {% if cycle.statusCode == 'ACT' %}
                    {% set activateClass = 'deactivate' %}
                {% endif %}

                <a href=\"tenants/viewInfo/{{ cycle.tenantId }}\">
                    <div class=\"action-icon view-info\"></div>
                </a>
                <a href=\"tenants/edit/{{ cycle.tenantId }}\">
                    <div class=\"action-icon edit\"></div>
                </a>
                <a href=\"tenants/{{ activateClass }}/{{ cycle.tenantId }}\">
                    <div class=\"action-icon {{ activateClass }}\"></div>
                </a>
            </td>
        </tr>
        {% set inc = inc + 1 %}
        {% endfor %}
    </table>
    {% else %}
    No results found.
    {% endif %}
{% endblock %}
", "cycle/cycleList.html.twig", "/var/www/html/symfony/app/Resources/views/cycle/cycleList.html.twig");
    }
}
