<?php

/* default/index.html.twig */
class __TwigTemplate_e7dd53a1d59c18ca9afe194e1bc787facc3052bd1f139ee8df3eac6ed5269f37 extends Twig_Template
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
        $__internal_6ad9dcb70d623024993c289ace02fbbf00f74be7407b3224bee62ae4d51d30ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad9dcb70d623024993c289ace02fbbf00f74be7407b3224bee62ae4d51d30ac->enter($__internal_6ad9dcb70d623024993c289ace02fbbf00f74be7407b3224bee62ae4d51d30ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b46dce0d54aae19e56b666cb4d04152563264e91ec1669c03fab5ea1a1e50f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46dce0d54aae19e56b666cb4d04152563264e91ec1669c03fab5ea1a1e50f0f->enter($__internal_b46dce0d54aae19e56b666cb4d04152563264e91ec1669c03fab5ea1a1e50f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad9dcb70d623024993c289ace02fbbf00f74be7407b3224bee62ae4d51d30ac->leave($__internal_6ad9dcb70d623024993c289ace02fbbf00f74be7407b3224bee62ae4d51d30ac_prof);

        
        $__internal_b46dce0d54aae19e56b666cb4d04152563264e91ec1669c03fab5ea1a1e50f0f->leave($__internal_b46dce0d54aae19e56b666cb4d04152563264e91ec1669c03fab5ea1a1e50f0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16f33f7e676eb4895097874ac66da68cb374ced8d8f806b22300f1e0af247b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f33f7e676eb4895097874ac66da68cb374ced8d8f806b22300f1e0af247b80->enter($__internal_16f33f7e676eb4895097874ac66da68cb374ced8d8f806b22300f1e0af247b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57a0a69ffbf2e9b18ce50caf12e20aa0c993357dc38b5c53776294ff3aa3bca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a0a69ffbf2e9b18ce50caf12e20aa0c993357dc38b5c53776294ff3aa3bca1->enter($__internal_57a0a69ffbf2e9b18ce50caf12e20aa0c993357dc38b5c53776294ff3aa3bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57a0a69ffbf2e9b18ce50caf12e20aa0c993357dc38b5c53776294ff3aa3bca1->leave($__internal_57a0a69ffbf2e9b18ce50caf12e20aa0c993357dc38b5c53776294ff3aa3bca1_prof);

        
        $__internal_16f33f7e676eb4895097874ac66da68cb374ced8d8f806b22300f1e0af247b80->leave($__internal_16f33f7e676eb4895097874ac66da68cb374ced8d8f806b22300f1e0af247b80_prof);

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
{% endblock %}", "default/index.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/default/index.html.twig");
    }
}
