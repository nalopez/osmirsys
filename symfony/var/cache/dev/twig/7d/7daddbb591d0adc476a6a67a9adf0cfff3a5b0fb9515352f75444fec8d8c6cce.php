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

/* pen/penList.html.twig */
class __TwigTemplate_c9f95169dd7585adc5129c6137b20602b059502d1937e09fe938d277f8c75926 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pen/penList.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pen/penList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pen/penList.html.twig"));

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
        <h3> Pen List </h3>
    </div>
    <div class=\"add-button\">
        <a href=\"/pens/add\"> <button>Add New Pen</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["penList"]) || array_key_exists("penList", $context) ? $context["penList"] : (function () { throw new RuntimeError('Variable "penList" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "    <table>
        <tr>
            <th> #
            <th> Pen Code
            <th> Location
            <th> Description
            <th> Capacity
            <th> Created By
            <th> Actions
        </tr>
        ";
            // line 24
            $context["inc"] = 1;
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["penList"]) || array_key_exists("penList", $context) ? $context["penList"] : (function () { throw new RuntimeError('Variable "penList" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pen"]) {
                // line 26
                echo "        <tr>
            <td> ";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 27, $this->source); })()), "html", null, true);
                echo "
            <td> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pen"], "penCode", []), "html", null, true);
                echo "
            <td> ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pen"], "locationName", []), "html", null, true);
                echo "
            <td> ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pen"], "description", []), "html", null, true);
                echo "
            <td> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pen"], "capacity", []), "html", null, true);
                echo "
            <td> ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pen"], "createdByUsername", []), "html", null, true);
                echo "
            <td>
        </tr>
        ";
                // line 35
                $context["inc"] = ((isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 35, $this->source); })()) + 1);
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </table>
    ";
        } else {
            // line 39
            echo "    No results found.
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pen/penList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  134 => 37,  128 => 36,  126 => 35,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  97 => 26,  92 => 25,  90 => 24,  78 => 14,  76 => 13,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <div class=\"page-title\">
        <h3> Pen List </h3>
    </div>
    <div class=\"add-button\">
        <a href=\"/pens/add\"> <button>Add New Pen</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    {% if penList|length > 0 %}
    <table>
        <tr>
            <th> #
            <th> Pen Code
            <th> Location
            <th> Description
            <th> Capacity
            <th> Created By
            <th> Actions
        </tr>
        {% set inc = 1 %}
        {% for pen in penList %}
        <tr>
            <td> {{ inc }}
            <td> {{ pen.penCode }}
            <td> {{ pen.locationName }}
            <td> {{ pen.description }}
            <td> {{ pen.capacity }}
            <td> {{ pen.createdByUsername }}
            <td>
        </tr>
        {% set inc = inc + 1 %}
        {% endfor %}
    </table>
    {% else %}
    No results found.
    {% endif %}
{% endblock %}
", "pen/penList.html.twig", "/var/www/html/symfony/app/Resources/views/pen/penList.html.twig");
    }
}
