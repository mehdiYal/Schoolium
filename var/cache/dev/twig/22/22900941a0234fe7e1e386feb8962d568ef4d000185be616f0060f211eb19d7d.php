<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_432e15b31053ffcb4fc5b65ff2547e831e70cc06101146847aea688688d8de06 extends Twig_Template
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
        $__internal_bf122eb17611bc022ad997318389e6a1c5ae01efb90cec46cc86606c79ed535c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf122eb17611bc022ad997318389e6a1c5ae01efb90cec46cc86606c79ed535c->enter($__internal_bf122eb17611bc022ad997318389e6a1c5ae01efb90cec46cc86606c79ed535c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f1fe1d83028dd19cd2990da0b978a8355dfecf9600421a3403f99e5d9e88a613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fe1d83028dd19cd2990da0b978a8355dfecf9600421a3403f99e5d9e88a613->enter($__internal_f1fe1d83028dd19cd2990da0b978a8355dfecf9600421a3403f99e5d9e88a613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf122eb17611bc022ad997318389e6a1c5ae01efb90cec46cc86606c79ed535c->leave($__internal_bf122eb17611bc022ad997318389e6a1c5ae01efb90cec46cc86606c79ed535c_prof);

        
        $__internal_f1fe1d83028dd19cd2990da0b978a8355dfecf9600421a3403f99e5d9e88a613->leave($__internal_f1fe1d83028dd19cd2990da0b978a8355dfecf9600421a3403f99e5d9e88a613_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_234fa811a02a64429fe4a423718201c1656b3aff7c7320db6da0c1d53ef1b053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234fa811a02a64429fe4a423718201c1656b3aff7c7320db6da0c1d53ef1b053->enter($__internal_234fa811a02a64429fe4a423718201c1656b3aff7c7320db6da0c1d53ef1b053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_44e5ba752c2f8274e69b9fbc6ec25410c05eeab5214e68a3ed548ac216d496a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e5ba752c2f8274e69b9fbc6ec25410c05eeab5214e68a3ed548ac216d496a7->enter($__internal_44e5ba752c2f8274e69b9fbc6ec25410c05eeab5214e68a3ed548ac216d496a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_44e5ba752c2f8274e69b9fbc6ec25410c05eeab5214e68a3ed548ac216d496a7->leave($__internal_44e5ba752c2f8274e69b9fbc6ec25410c05eeab5214e68a3ed548ac216d496a7_prof);

        
        $__internal_234fa811a02a64429fe4a423718201c1656b3aff7c7320db6da0c1d53ef1b053->leave($__internal_234fa811a02a64429fe4a423718201c1656b3aff7c7320db6da0c1d53ef1b053_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16c8f3b3e69fb9a3a01b000936e8e332d8ca6dc099e666ee0af12bf64a1b288d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c8f3b3e69fb9a3a01b000936e8e332d8ca6dc099e666ee0af12bf64a1b288d->enter($__internal_16c8f3b3e69fb9a3a01b000936e8e332d8ca6dc099e666ee0af12bf64a1b288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0773a10149cd96dd4170286a6d990a23ae323b8bc66387ab9f4885320f090247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0773a10149cd96dd4170286a6d990a23ae323b8bc66387ab9f4885320f090247->enter($__internal_0773a10149cd96dd4170286a6d990a23ae323b8bc66387ab9f4885320f090247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0773a10149cd96dd4170286a6d990a23ae323b8bc66387ab9f4885320f090247->leave($__internal_0773a10149cd96dd4170286a6d990a23ae323b8bc66387ab9f4885320f090247_prof);

        
        $__internal_16c8f3b3e69fb9a3a01b000936e8e332d8ca6dc099e666ee0af12bf64a1b288d->leave($__internal_16c8f3b3e69fb9a3a01b000936e8e332d8ca6dc099e666ee0af12bf64a1b288d_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
