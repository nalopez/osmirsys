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

/* user/userList.html.twig */
class __TwigTemplate_c3fd7052784911f0e672879670e41c45ca42aeee1bf001735211fb91548792b6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/userList.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userList.html.twig"));

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
        <h3> User List </h3>
    </div>
    <div class=\"add-button\">
        <a href=\"/users/add\"> <button>Add New User</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["userList"]) || array_key_exists("userList", $context) ? $context["userList"] : (function () { throw new RuntimeError('Variable "userList" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "    <table>
        <tr>
            <th> #
            <th> Username
            <th> Name
            <th> Status
            <th> Created By
            <th> Last Login
            <th> Actions
        </tr>
        ";
            // line 24
            $context["inc"] = 1;
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) || array_key_exists("userList", $context) ? $context["userList"] : (function () { throw new RuntimeError('Variable "userList" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo "        <tr>
            <td> ";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 27, $this->source); })()), "html", null, true);
                echo "
            <td> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", []), "html", null, true);
                echo "
            <td> ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", []), "html", null, true);
                echo "
            <td> ";
                // line 30
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "statusName", [])), "html", null, true);
                echo "
            <td> ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdByUsername", []), "html", null, true);
                echo "
            <td> ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", []), "html", null, true);
                echo "
            <td>
                ";
                // line 34
                $context["activateClass"] = "activate";
                // line 35
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "statusCode", []) == "ACT")) {
                    // line 36
                    echo "                    ";
                    $context["activateClass"] = "deactivate";
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "
                <a href=\"users/edit/";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon edit\"></div>
                </a>
                <a href=\"users/";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["activateClass"]) || array_key_exists("activateClass", $context) ? $context["activateClass"] : (function () { throw new RuntimeError('Variable "activateClass" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userId", []), "html", null, true);
                echo "\">
                    <div class=\"action-icon ";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["activateClass"]) || array_key_exists("activateClass", $context) ? $context["activateClass"] : (function () { throw new RuntimeError('Variable "activateClass" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "\"></div>
                </a>
            </td>
        </tr>
        ";
                // line 47
                $context["inc"] = ((isset($context["inc"]) || array_key_exists("inc", $context) ? $context["inc"] : (function () { throw new RuntimeError('Variable "inc" does not exist.', 47, $this->source); })()) + 1);
                // line 48
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </table>
    ";
        } else {
            // line 51
            echo "    No results found.
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/userList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 51,  168 => 49,  162 => 48,  160 => 47,  153 => 43,  147 => 42,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  127 => 34,  122 => 32,  118 => 31,  114 => 30,  108 => 29,  104 => 28,  100 => 27,  97 => 26,  92 => 25,  90 => 24,  78 => 14,  76 => 13,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <div class=\"page-title\">
        <h3> User List </h3>
    </div>
    <div class=\"add-button\">
        <a href=\"/users/add\"> <button>Add New User</button> </a>
    </div>
    <div class=\"clearfix\"></div>
    <hr>

    {% if userList|length > 0 %}
    <table>
        <tr>
            <th> #
            <th> Username
            <th> Name
            <th> Status
            <th> Created By
            <th> Last Login
            <th> Actions
        </tr>
        {% set inc = 1 %}
        {% for user in userList %}
        <tr>
            <td> {{ inc }}
            <td> {{ user.username }}
            <td> {{ user.firstName }} {{ user.lastName }}
            <td> {{ user.statusName|capitalize }}
            <td> {{ user.createdByUsername }}
            <td> {{ user.lastLogin }}
            <td>
                {% set activateClass = 'activate' %}
                {% if user.statusCode == 'ACT' %}
                    {% set activateClass = 'deactivate' %}
                {% endif %}

                <a href=\"users/edit/{{ user.userId }}\">
                    <div class=\"action-icon edit\"></div>
                </a>
                <a href=\"users/{{ activateClass }}/{{ user.userId }}\">
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
", "user/userList.html.twig", "/var/www/html/symfony/app/Resources/views/user/userList.html.twig");
    }
}
