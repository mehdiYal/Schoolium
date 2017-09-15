<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_26b44d7e6b28c60a6a482eb8f80b0c6073ce48d515fbed5c1af7026d8fe693e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_faceb68667980e9d493013154aa062ae0ec52738998df375878a57c0da05c114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faceb68667980e9d493013154aa062ae0ec52738998df375878a57c0da05c114->enter($__internal_faceb68667980e9d493013154aa062ae0ec52738998df375878a57c0da05c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d8dc08d0a957691878fe651dc1ad69184b24cb6a14bb3c62120b8bfcc458318f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8dc08d0a957691878fe651dc1ad69184b24cb6a14bb3c62120b8bfcc458318f->enter($__internal_d8dc08d0a957691878fe651dc1ad69184b24cb6a14bb3c62120b8bfcc458318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faceb68667980e9d493013154aa062ae0ec52738998df375878a57c0da05c114->leave($__internal_faceb68667980e9d493013154aa062ae0ec52738998df375878a57c0da05c114_prof);

        
        $__internal_d8dc08d0a957691878fe651dc1ad69184b24cb6a14bb3c62120b8bfcc458318f->leave($__internal_d8dc08d0a957691878fe651dc1ad69184b24cb6a14bb3c62120b8bfcc458318f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_859dd4401f374c025e6d47604802913b6e62b1cc52915bed882a5e6fb79e7d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859dd4401f374c025e6d47604802913b6e62b1cc52915bed882a5e6fb79e7d41->enter($__internal_859dd4401f374c025e6d47604802913b6e62b1cc52915bed882a5e6fb79e7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4c19e75a612e33fbdb2b86349194fd7c2e69ab5f827c0591675da47c0c94b2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c19e75a612e33fbdb2b86349194fd7c2e69ab5f827c0591675da47c0c94b2cf->enter($__internal_4c19e75a612e33fbdb2b86349194fd7c2e69ab5f827c0591675da47c0c94b2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4c19e75a612e33fbdb2b86349194fd7c2e69ab5f827c0591675da47c0c94b2cf->leave($__internal_4c19e75a612e33fbdb2b86349194fd7c2e69ab5f827c0591675da47c0c94b2cf_prof);

        
        $__internal_859dd4401f374c025e6d47604802913b6e62b1cc52915bed882a5e6fb79e7d41->leave($__internal_859dd4401f374c025e6d47604802913b6e62b1cc52915bed882a5e6fb79e7d41_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_734d6499b872bfeec09b1cf60663a6ea74bc20ee24d81a8a5c00a1a7610c4f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734d6499b872bfeec09b1cf60663a6ea74bc20ee24d81a8a5c00a1a7610c4f5b->enter($__internal_734d6499b872bfeec09b1cf60663a6ea74bc20ee24d81a8a5c00a1a7610c4f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4eed52f4c055df3bb0485ec58fcded16fd03ca38e6414712b38dd537bc81d48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eed52f4c055df3bb0485ec58fcded16fd03ca38e6414712b38dd537bc81d48b->enter($__internal_4eed52f4c055df3bb0485ec58fcded16fd03ca38e6414712b38dd537bc81d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4eed52f4c055df3bb0485ec58fcded16fd03ca38e6414712b38dd537bc81d48b->leave($__internal_4eed52f4c055df3bb0485ec58fcded16fd03ca38e6414712b38dd537bc81d48b_prof);

        
        $__internal_734d6499b872bfeec09b1cf60663a6ea74bc20ee24d81a8a5c00a1a7610c4f5b->leave($__internal_734d6499b872bfeec09b1cf60663a6ea74bc20ee24d81a8a5c00a1a7610c4f5b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
