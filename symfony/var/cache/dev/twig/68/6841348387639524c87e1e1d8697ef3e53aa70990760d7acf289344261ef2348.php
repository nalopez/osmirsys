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

/* tenant/tenantList.html.twig */
class __TwigTemplate_0459832e525490c57ec0f5a2780646d3cbbfa5c1a0e33d3e4f707a6cb42531c3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tenant/tenantList.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tenant/tenantList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tenant/tenantList.html.twig"));

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
        <a href=\"/tenants/add\"> <button>Add New Tenant</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["tenantList"]) || array_key_exists("tenantList", $context) ? $context["tenantList"] : (function () { throw new RuntimeError('Variable "tenantList" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "    <table>
        <tr>
            <th> #
            <th> Name
            <th> Address
            <th> Phone Number
            <th> Email Address
            <th> Status
            <th> Created By
            <th> Actions
        </tr>
        ";
            // line 25
            $context["inc"] = 1;
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tenantList"]) || array_key_exists("tenantList", $context) ? $context["tenantList"] : (function () { throw new RuntimeError('Variable "tenantList" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tenant"]) {
                // line 27
                echo "        <tr>
            <td> ";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "
            <td> ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "lastName", []), "html", null, true);
                echo "
            <td> ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "address", []), "html", null, true);
                echo "
            <td> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "phoneNumber", []), "html", null, true);
                echo "
            <td> ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "emailAddress", []), "html", null, true);
                echo "
            <td> ";
                // line 33
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "statusName", [])), "html", null, true);
                echo "
            <td> ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "createdByUsername", []), "html", null, true);
                echo "
            <td>
                ";
                // line 36
                $context["activateClass"] = "activate";
                // line 37
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["tenant"], "statusCode", []) == "ACT")) {
                    // line 38
                    echo "                    ";
                    $context["activateClass"] = "deactivate";
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "
                <a href=\"tenants/viewInfo/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "tenantId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon view-info\"></div>
                </a>
                <a href=\"tenants/edit/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "tenantId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon edit\"></div>
                </a>
                <a href=\"tenants/";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["activateClass"]) || array_key_exists("activateClass", $context) ? $context["activateClass"] : (function () { throw new RuntimeError('Variable "activateClass" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tenant"], "tenantId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon ";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["activateClass"]) || array_key_exists("activateClass", $context) ? $context["activateClass"] : (function () { throw new RuntimeError('Variable "activateClass" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\"></div>
                </a>
            </td>
        </tr>
        ";
                // line 52
                $context["inc"] = ((isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 52, $this->source); })()) + 1);
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </table>
    ";
        } else {
            // line 56
            echo "    No results found.
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tenant/tenantList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 56,  179 => 54,  173 => 53,  171 => 52,  164 => 48,  158 => 47,  152 => 44,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  132 => 36,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  105 => 29,  101 => 28,  98 => 27,  93 => 26,  91 => 25,  78 => 14,  76 => 13,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <div class=\"page-title\">
        <h3> Tenant List </h3>
    </div>
    <div class=\"add-button\">
        <a href=\"/tenants/add\"> <button>Add New Tenant</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    {% if tenantList|length > 0 %}
    <table>
        <tr>
            <th> #
            <th> Name
            <th> Address
            <th> Phone Number
            <th> Email Address
            <th> Status
            <th> Created By
            <th> Actions
        </tr>
        {% set inc = 1 %}
        {% for tenant in tenantList %}
        <tr>
            <td> {{ inc }}
            <td> {{ tenant.firstName }} {{ tenant.lastName }}
            <td> {{ tenant.address }}
            <td> {{ tenant.phoneNumber }}
            <td> {{ tenant.emailAddress }}
            <td> {{ tenant.statusName|capitalize }}
            <td> {{ tenant.createdByUsername }}
            <td>
                {% set activateClass = 'activate' %}
                {% if tenant.statusCode == 'ACT' %}
                    {% set activateClass = 'deactivate' %}
                {% endif %}

                <a href=\"tenants/viewInfo/{{ tenant.tenantId }}\">
                    <div class=\"action-icon view-info\"></div>
                </a>
                <a href=\"tenants/edit/{{ tenant.tenantId }}\">
                    <div class=\"action-icon edit\"></div>
                </a>
                <a href=\"tenants/{{ activateClass }}/{{ tenant.tenantId }}\">
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
", "tenant/tenantList.html.twig", "/var/www/html/symfony/app/Resources/views/tenant/tenantList.html.twig");
    }
}
