<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3357ef541e7c4afc5509752d93bfaf5f38a042282524a0669a78a80b3059b0e3 extends Twig_Template
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
        $__internal_5ebc6435ac881bcc83f91f8af243782854916ead9b221c0b226d10aafc1eb739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebc6435ac881bcc83f91f8af243782854916ead9b221c0b226d10aafc1eb739->enter($__internal_5ebc6435ac881bcc83f91f8af243782854916ead9b221c0b226d10aafc1eb739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_fececba4732c610dd86b632ceeffc60eb24e77d4c3f67381d7c0de8aec9e95fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fececba4732c610dd86b632ceeffc60eb24e77d4c3f67381d7c0de8aec9e95fb->enter($__internal_fececba4732c610dd86b632ceeffc60eb24e77d4c3f67381d7c0de8aec9e95fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5ebc6435ac881bcc83f91f8af243782854916ead9b221c0b226d10aafc1eb739->leave($__internal_5ebc6435ac881bcc83f91f8af243782854916ead9b221c0b226d10aafc1eb739_prof);

        
        $__internal_fececba4732c610dd86b632ceeffc60eb24e77d4c3f67381d7c0de8aec9e95fb->leave($__internal_fececba4732c610dd86b632ceeffc60eb24e77d4c3f67381d7c0de8aec9e95fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
