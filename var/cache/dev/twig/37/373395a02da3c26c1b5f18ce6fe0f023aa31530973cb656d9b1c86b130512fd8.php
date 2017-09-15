<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c1e0b93695c65a4be7240a0661dad4b1f7d3ad14833b5a373cc0d1d5785b6f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5261c24846708264f368ddde8abf7e18e7e7137c15bb168834fcf3280659dadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5261c24846708264f368ddde8abf7e18e7e7137c15bb168834fcf3280659dadb->enter($__internal_5261c24846708264f368ddde8abf7e18e7e7137c15bb168834fcf3280659dadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_993599a9f4c3cb29d7b680c748f0034504f07ec7170f19f9352829318329371e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993599a9f4c3cb29d7b680c748f0034504f07ec7170f19f9352829318329371e->enter($__internal_993599a9f4c3cb29d7b680c748f0034504f07ec7170f19f9352829318329371e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5261c24846708264f368ddde8abf7e18e7e7137c15bb168834fcf3280659dadb->leave($__internal_5261c24846708264f368ddde8abf7e18e7e7137c15bb168834fcf3280659dadb_prof);

        
        $__internal_993599a9f4c3cb29d7b680c748f0034504f07ec7170f19f9352829318329371e->leave($__internal_993599a9f4c3cb29d7b680c748f0034504f07ec7170f19f9352829318329371e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
