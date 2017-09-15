<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cf902a21c4c1433c9ea27b88cfa3e9140d354bcacd2d33cd74b9d7846d455b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1f0d5a3655b9a1ce17fd47e2785fea48ea6be0d0484bee3844aa45d7dfb5b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f0d5a3655b9a1ce17fd47e2785fea48ea6be0d0484bee3844aa45d7dfb5b04->enter($__internal_e1f0d5a3655b9a1ce17fd47e2785fea48ea6be0d0484bee3844aa45d7dfb5b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_9923c4e22f155629adc63d4295f512fcb56b06c8776327559c3da957cf36f4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9923c4e22f155629adc63d4295f512fcb56b06c8776327559c3da957cf36f4a4->enter($__internal_9923c4e22f155629adc63d4295f512fcb56b06c8776327559c3da957cf36f4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f0d5a3655b9a1ce17fd47e2785fea48ea6be0d0484bee3844aa45d7dfb5b04->leave($__internal_e1f0d5a3655b9a1ce17fd47e2785fea48ea6be0d0484bee3844aa45d7dfb5b04_prof);

        
        $__internal_9923c4e22f155629adc63d4295f512fcb56b06c8776327559c3da957cf36f4a4->leave($__internal_9923c4e22f155629adc63d4295f512fcb56b06c8776327559c3da957cf36f4a4_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ebd98dac3281ae17e0fd21eaf91cc3558875025ebb4c73dd5755698b3ef0f628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd98dac3281ae17e0fd21eaf91cc3558875025ebb4c73dd5755698b3ef0f628->enter($__internal_ebd98dac3281ae17e0fd21eaf91cc3558875025ebb4c73dd5755698b3ef0f628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4029505e3ab04a7ea29738eda5f760be0621d25f3c18e942c11ed00de7a42d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4029505e3ab04a7ea29738eda5f760be0621d25f3c18e942c11ed00de7a42d63->enter($__internal_4029505e3ab04a7ea29738eda5f760be0621d25f3c18e942c11ed00de7a42d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_4029505e3ab04a7ea29738eda5f760be0621d25f3c18e942c11ed00de7a42d63->leave($__internal_4029505e3ab04a7ea29738eda5f760be0621d25f3c18e942c11ed00de7a42d63_prof);

        
        $__internal_ebd98dac3281ae17e0fd21eaf91cc3558875025ebb4c73dd5755698b3ef0f628->leave($__internal_ebd98dac3281ae17e0fd21eaf91cc3558875025ebb4c73dd5755698b3ef0f628_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0f073b9f0cb0c53a23c08629eaa7c936143ad91ece7d85b787c540434c2128b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f073b9f0cb0c53a23c08629eaa7c936143ad91ece7d85b787c540434c2128b->enter($__internal_a0f073b9f0cb0c53a23c08629eaa7c936143ad91ece7d85b787c540434c2128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a329c2c8b9f0afcfb7c7bc60348473a440a5d5805e4fea039ba5ac624001d4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a329c2c8b9f0afcfb7c7bc60348473a440a5d5805e4fea039ba5ac624001d4bc->enter($__internal_a329c2c8b9f0afcfb7c7bc60348473a440a5d5805e4fea039ba5ac624001d4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a329c2c8b9f0afcfb7c7bc60348473a440a5d5805e4fea039ba5ac624001d4bc->leave($__internal_a329c2c8b9f0afcfb7c7bc60348473a440a5d5805e4fea039ba5ac624001d4bc_prof);

        
        $__internal_a0f073b9f0cb0c53a23c08629eaa7c936143ad91ece7d85b787c540434c2128b->leave($__internal_a0f073b9f0cb0c53a23c08629eaa7c936143ad91ece7d85b787c540434c2128b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
