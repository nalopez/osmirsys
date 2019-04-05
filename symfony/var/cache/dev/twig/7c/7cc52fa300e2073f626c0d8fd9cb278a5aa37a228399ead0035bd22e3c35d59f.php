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

/* header.html.twig */
class __TwigTemplate_d128e61a8cd48e8ced27c528b460c87884b4fd468a6359eb0af416f2aac07543 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", []), "get", [0 => "userId"], "method")) {
            // line 3
            echo "
<div id=\"header-ribbon\">
\t<div id=\"sytem-name\">
\t\t<h2>Osmirsys 1.0</h2>
\t</div>
\t<div id=\"user-header\">
\t    <div>Hello ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", []), "get", [0 => "username"], "method"), "html", null, true);
            echo "! <a href=\"/logout\">Logout</a></div>
\t    <div>Your last login is on ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", []), "get", [0 => "lastLogin"], "method"), "html", null, true);
            echo " </div>
\t</div>
\t<div class=\"clearfix\"></div>
</div>

<div>
\t<ul id=\"header-tab\">
\t\t<li> <a href=\"/\">Home</a>
\t\t<li> <a href=\"/users\">Users</a>
\t\t<li> <a href=\"/tenants\">Tenants</a>
\t\t<li> <a href=\"/pens\">Pens</a>
\t\t<li> <a href=\"/cycles\">Cycles</a>
\t</ul>
</div>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  54 => 9,  46 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if (app.session.get('userId')) %}

<div id=\"header-ribbon\">
\t<div id=\"sytem-name\">
\t\t<h2>Osmirsys 1.0</h2>
\t</div>
\t<div id=\"user-header\">
\t    <div>Hello {{ app.session.get('username') }}! <a href=\"/logout\">Logout</a></div>
\t    <div>Your last login is on {{ app.session.get('lastLogin') }} </div>
\t</div>
\t<div class=\"clearfix\"></div>
</div>

<div>
\t<ul id=\"header-tab\">
\t\t<li> <a href=\"/\">Home</a>
\t\t<li> <a href=\"/users\">Users</a>
\t\t<li> <a href=\"/tenants\">Tenants</a>
\t\t<li> <a href=\"/pens\">Pens</a>
\t\t<li> <a href=\"/cycles\">Cycles</a>
\t</ul>
</div>

{% endif %}", "header.html.twig", "/var/www/html/symfony/app/Resources/views/header.html.twig");
    }
}
