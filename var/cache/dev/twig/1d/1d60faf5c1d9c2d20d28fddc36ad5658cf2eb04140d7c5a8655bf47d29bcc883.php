<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_851b499c1a09de6b5ff59e234923a0fa79f12ce372a047b59f3636edf33bcd85 extends Twig_Template
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
        $__internal_340c5894736f3ac8677c537a6a09e4a52029bb07fb262d1fc84ddb0e51e62b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340c5894736f3ac8677c537a6a09e4a52029bb07fb262d1fc84ddb0e51e62b2c->enter($__internal_340c5894736f3ac8677c537a6a09e4a52029bb07fb262d1fc84ddb0e51e62b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b299839d03a647ca3bb9a0cf8e0b89f567631dbd310c91d9fa76a49ece560a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b299839d03a647ca3bb9a0cf8e0b89f567631dbd310c91d9fa76a49ece560a37->enter($__internal_b299839d03a647ca3bb9a0cf8e0b89f567631dbd310c91d9fa76a49ece560a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_340c5894736f3ac8677c537a6a09e4a52029bb07fb262d1fc84ddb0e51e62b2c->leave($__internal_340c5894736f3ac8677c537a6a09e4a52029bb07fb262d1fc84ddb0e51e62b2c_prof);

        
        $__internal_b299839d03a647ca3bb9a0cf8e0b89f567631dbd310c91d9fa76a49ece560a37->leave($__internal_b299839d03a647ca3bb9a0cf8e0b89f567631dbd310c91d9fa76a49ece560a37_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
