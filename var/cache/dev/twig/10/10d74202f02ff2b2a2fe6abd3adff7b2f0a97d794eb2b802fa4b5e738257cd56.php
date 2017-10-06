<?php

/* default/index.html.twig */
class __TwigTemplate_cc0f6e940e5bdeacb2028e069533637fa5512d7ebb425371a94e54c401a1adce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd03a3b648d957efbbefc2a37b625753891f090f03f300674361a9cb7bc47c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd03a3b648d957efbbefc2a37b625753891f090f03f300674361a9cb7bc47c8e->enter($__internal_dd03a3b648d957efbbefc2a37b625753891f090f03f300674361a9cb7bc47c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_8a4a596b7abe2122453f3850b0860dca2247de17f28c6b6cabbc5f18358e939e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4a596b7abe2122453f3850b0860dca2247de17f28c6b6cabbc5f18358e939e->enter($__internal_8a4a596b7abe2122453f3850b0860dca2247de17f28c6b6cabbc5f18358e939e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd03a3b648d957efbbefc2a37b625753891f090f03f300674361a9cb7bc47c8e->leave($__internal_dd03a3b648d957efbbefc2a37b625753891f090f03f300674361a9cb7bc47c8e_prof);

        
        $__internal_8a4a596b7abe2122453f3850b0860dca2247de17f28c6b6cabbc5f18358e939e->leave($__internal_8a4a596b7abe2122453f3850b0860dca2247de17f28c6b6cabbc5f18358e939e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cdd779fa1b0b19b4a4f3ec78b755d155527e129605427cd6b6ddc861757bb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdd779fa1b0b19b4a4f3ec78b755d155527e129605427cd6b6ddc861757bb99->enter($__internal_3cdd779fa1b0b19b4a4f3ec78b755d155527e129605427cd6b6ddc861757bb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de4a8f2667db9cc6e10375ecdccb9ba2d05da8ca65c63f9fca42b90f41d846ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4a8f2667db9cc6e10375ecdccb9ba2d05da8ca65c63f9fca42b90f41d846ab->enter($__internal_de4a8f2667db9cc6e10375ecdccb9ba2d05da8ca65c63f9fca42b90f41d846ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            ";
        // line 7
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h1>
            ";
        }
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_de4a8f2667db9cc6e10375ecdccb9ba2d05da8ca65c63f9fca42b90f41d846ab->leave($__internal_de4a8f2667db9cc6e10375ecdccb9ba2d05da8ca65c63f9fca42b90f41d846ab_prof);

        
        $__internal_3cdd779fa1b0b19b4a4f3ec78b755d155527e129605427cd6b6ddc861757bb99->leave($__internal_3cdd779fa1b0b19b4a4f3ec78b755d155527e129605427cd6b6ddc861757bb99_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\" style=\"text-align: center;\">
            <h1>Bienvenue chez Schoolium</h1>
            {% if  app.user %}
            <h1>{{app.user.nom}}</h1>
            {% endif %}
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\default\\index.html.twig");
    }
}
