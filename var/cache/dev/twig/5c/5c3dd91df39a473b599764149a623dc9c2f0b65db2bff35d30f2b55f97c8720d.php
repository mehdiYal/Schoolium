<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_004ed2c035a0936893d03c557d3f66e4ffb22ea4677e43bb1b574f1910da27c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_141f352ef1f2e1b6ce6f08a723c777746eb90dd620975971bac14131be464bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141f352ef1f2e1b6ce6f08a723c777746eb90dd620975971bac14131be464bae->enter($__internal_141f352ef1f2e1b6ce6f08a723c777746eb90dd620975971bac14131be464bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_98a444185f1e3fd5abb1b6bb5ef12c52132098dd9c783b391c3b07bf62445dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a444185f1e3fd5abb1b6bb5ef12c52132098dd9c783b391c3b07bf62445dec->enter($__internal_98a444185f1e3fd5abb1b6bb5ef12c52132098dd9c783b391c3b07bf62445dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141f352ef1f2e1b6ce6f08a723c777746eb90dd620975971bac14131be464bae->leave($__internal_141f352ef1f2e1b6ce6f08a723c777746eb90dd620975971bac14131be464bae_prof);

        
        $__internal_98a444185f1e3fd5abb1b6bb5ef12c52132098dd9c783b391c3b07bf62445dec->leave($__internal_98a444185f1e3fd5abb1b6bb5ef12c52132098dd9c783b391c3b07bf62445dec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2607d37bd47f9463494dd12328c886088832ad42aecfbf68e3f722065ce622e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2607d37bd47f9463494dd12328c886088832ad42aecfbf68e3f722065ce622e->enter($__internal_f2607d37bd47f9463494dd12328c886088832ad42aecfbf68e3f722065ce622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43a836ed1f8630982687154a2850f0feb6e85bcdb1cb017bb62ae1713e759cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a836ed1f8630982687154a2850f0feb6e85bcdb1cb017bb62ae1713e759cfa->enter($__internal_43a836ed1f8630982687154a2850f0feb6e85bcdb1cb017bb62ae1713e759cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_43a836ed1f8630982687154a2850f0feb6e85bcdb1cb017bb62ae1713e759cfa->leave($__internal_43a836ed1f8630982687154a2850f0feb6e85bcdb1cb017bb62ae1713e759cfa_prof);

        
        $__internal_f2607d37bd47f9463494dd12328c886088832ad42aecfbf68e3f722065ce622e->leave($__internal_f2607d37bd47f9463494dd12328c886088832ad42aecfbf68e3f722065ce622e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1384329d3bef55119a118e63458af07f55be00dad5352a17fa750c526f6c90e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1384329d3bef55119a118e63458af07f55be00dad5352a17fa750c526f6c90e8->enter($__internal_1384329d3bef55119a118e63458af07f55be00dad5352a17fa750c526f6c90e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dd83996e5648e596509c4c1d79205bc8200bcb7994af03d0348386669be058c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd83996e5648e596509c4c1d79205bc8200bcb7994af03d0348386669be058c->enter($__internal_5dd83996e5648e596509c4c1d79205bc8200bcb7994af03d0348386669be058c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5dd83996e5648e596509c4c1d79205bc8200bcb7994af03d0348386669be058c->leave($__internal_5dd83996e5648e596509c4c1d79205bc8200bcb7994af03d0348386669be058c_prof);

        
        $__internal_1384329d3bef55119a118e63458af07f55be00dad5352a17fa750c526f6c90e8->leave($__internal_1384329d3bef55119a118e63458af07f55be00dad5352a17fa750c526f6c90e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
