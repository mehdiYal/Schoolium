<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1406c706aafb1d29637c02dc07b8308c8d1175e94ef470af301598ed8fc617a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f0f685cdd7484e73d89c61a53847d9053f0c349098a58876a505fd4b8685d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0f685cdd7484e73d89c61a53847d9053f0c349098a58876a505fd4b8685d1f->enter($__internal_2f0f685cdd7484e73d89c61a53847d9053f0c349098a58876a505fd4b8685d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_34d42075a98a16956b17c18cf09597d491df8e84c18aaa0dacd8e88719af7575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d42075a98a16956b17c18cf09597d491df8e84c18aaa0dacd8e88719af7575->enter($__internal_34d42075a98a16956b17c18cf09597d491df8e84c18aaa0dacd8e88719af7575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0f685cdd7484e73d89c61a53847d9053f0c349098a58876a505fd4b8685d1f->leave($__internal_2f0f685cdd7484e73d89c61a53847d9053f0c349098a58876a505fd4b8685d1f_prof);

        
        $__internal_34d42075a98a16956b17c18cf09597d491df8e84c18aaa0dacd8e88719af7575->leave($__internal_34d42075a98a16956b17c18cf09597d491df8e84c18aaa0dacd8e88719af7575_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_209d569decd74f0e659c5a89f3c7a5e8055d26a55cc08ff7050a3eeb700bcde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209d569decd74f0e659c5a89f3c7a5e8055d26a55cc08ff7050a3eeb700bcde8->enter($__internal_209d569decd74f0e659c5a89f3c7a5e8055d26a55cc08ff7050a3eeb700bcde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a1054518683e52176204d4b830d6d12bf818e3923a89a51c709870b641ba507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1054518683e52176204d4b830d6d12bf818e3923a89a51c709870b641ba507->enter($__internal_8a1054518683e52176204d4b830d6d12bf818e3923a89a51c709870b641ba507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8a1054518683e52176204d4b830d6d12bf818e3923a89a51c709870b641ba507->leave($__internal_8a1054518683e52176204d4b830d6d12bf818e3923a89a51c709870b641ba507_prof);

        
        $__internal_209d569decd74f0e659c5a89f3c7a5e8055d26a55cc08ff7050a3eeb700bcde8->leave($__internal_209d569decd74f0e659c5a89f3c7a5e8055d26a55cc08ff7050a3eeb700bcde8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_885565d3ec5886223a279a3aecc8b57fde259fa092db07552feb7dfdd04124ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885565d3ec5886223a279a3aecc8b57fde259fa092db07552feb7dfdd04124ac->enter($__internal_885565d3ec5886223a279a3aecc8b57fde259fa092db07552feb7dfdd04124ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_184e99bb7a7163ad8a4efaf8732cf0c3ae725a0a0ddcac4bc3e3e31b5d056f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184e99bb7a7163ad8a4efaf8732cf0c3ae725a0a0ddcac4bc3e3e31b5d056f91->enter($__internal_184e99bb7a7163ad8a4efaf8732cf0c3ae725a0a0ddcac4bc3e3e31b5d056f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_184e99bb7a7163ad8a4efaf8732cf0c3ae725a0a0ddcac4bc3e3e31b5d056f91->leave($__internal_184e99bb7a7163ad8a4efaf8732cf0c3ae725a0a0ddcac4bc3e3e31b5d056f91_prof);

        
        $__internal_885565d3ec5886223a279a3aecc8b57fde259fa092db07552feb7dfdd04124ac->leave($__internal_885565d3ec5886223a279a3aecc8b57fde259fa092db07552feb7dfdd04124ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
