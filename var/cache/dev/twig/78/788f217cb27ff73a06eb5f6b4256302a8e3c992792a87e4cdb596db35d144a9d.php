<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8d4cd47b336a0ecd6224f0e28801bfc602431d68e2a1b9aa80a0b5f2c2fcd858 extends Twig_Template
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
        $__internal_1ccc2dc51a9b2056d7d4aaface9c57779fca5e718c7eee571409be9563ab62ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccc2dc51a9b2056d7d4aaface9c57779fca5e718c7eee571409be9563ab62ca->enter($__internal_1ccc2dc51a9b2056d7d4aaface9c57779fca5e718c7eee571409be9563ab62ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c66a4ba16de8720fa52ef75015ba872f503e1b6b60c4baa08bae77656411f0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66a4ba16de8720fa52ef75015ba872f503e1b6b60c4baa08bae77656411f0d1->enter($__internal_c66a4ba16de8720fa52ef75015ba872f503e1b6b60c4baa08bae77656411f0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ccc2dc51a9b2056d7d4aaface9c57779fca5e718c7eee571409be9563ab62ca->leave($__internal_1ccc2dc51a9b2056d7d4aaface9c57779fca5e718c7eee571409be9563ab62ca_prof);

        
        $__internal_c66a4ba16de8720fa52ef75015ba872f503e1b6b60c4baa08bae77656411f0d1->leave($__internal_c66a4ba16de8720fa52ef75015ba872f503e1b6b60c4baa08bae77656411f0d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_619f98eec1d30c9ca56d2155f35313601a70a3f24b051fcd5d1f20f659a198e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619f98eec1d30c9ca56d2155f35313601a70a3f24b051fcd5d1f20f659a198e5->enter($__internal_619f98eec1d30c9ca56d2155f35313601a70a3f24b051fcd5d1f20f659a198e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f48d28080d8fd522fb5fc48d4d735ff8a1e08307e71b652cd212df91079787e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f48d28080d8fd522fb5fc48d4d735ff8a1e08307e71b652cd212df91079787e->enter($__internal_9f48d28080d8fd522fb5fc48d4d735ff8a1e08307e71b652cd212df91079787e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9f48d28080d8fd522fb5fc48d4d735ff8a1e08307e71b652cd212df91079787e->leave($__internal_9f48d28080d8fd522fb5fc48d4d735ff8a1e08307e71b652cd212df91079787e_prof);

        
        $__internal_619f98eec1d30c9ca56d2155f35313601a70a3f24b051fcd5d1f20f659a198e5->leave($__internal_619f98eec1d30c9ca56d2155f35313601a70a3f24b051fcd5d1f20f659a198e5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_065c98acfabc0b21eb910015f8de70a2ab8fc0e84a181251f13883672eda2197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065c98acfabc0b21eb910015f8de70a2ab8fc0e84a181251f13883672eda2197->enter($__internal_065c98acfabc0b21eb910015f8de70a2ab8fc0e84a181251f13883672eda2197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2999a775aec29d2b4da33ca063e1e95a7e6012a5dc7b3b2cb63be90f3c3a6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2999a775aec29d2b4da33ca063e1e95a7e6012a5dc7b3b2cb63be90f3c3a6f0->enter($__internal_d2999a775aec29d2b4da33ca063e1e95a7e6012a5dc7b3b2cb63be90f3c3a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d2999a775aec29d2b4da33ca063e1e95a7e6012a5dc7b3b2cb63be90f3c3a6f0->leave($__internal_d2999a775aec29d2b4da33ca063e1e95a7e6012a5dc7b3b2cb63be90f3c3a6f0_prof);

        
        $__internal_065c98acfabc0b21eb910015f8de70a2ab8fc0e84a181251f13883672eda2197->leave($__internal_065c98acfabc0b21eb910015f8de70a2ab8fc0e84a181251f13883672eda2197_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
