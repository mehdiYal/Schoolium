<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_73eea420ca43760209dc1fd79abcd4aea12f3f5e6855ac163e2da8eb6c31f919 extends Twig_Template
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
        $__internal_0e902a1416b8b99bc7406be86a061a6c1652a69f43ee9b60f5a9e7272679cfc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e902a1416b8b99bc7406be86a061a6c1652a69f43ee9b60f5a9e7272679cfc6->enter($__internal_0e902a1416b8b99bc7406be86a061a6c1652a69f43ee9b60f5a9e7272679cfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_25aaa900f81b3ce246b1a009e96cdbd95d188c19724ed2cbe7b7fd350534fd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25aaa900f81b3ce246b1a009e96cdbd95d188c19724ed2cbe7b7fd350534fd75->enter($__internal_25aaa900f81b3ce246b1a009e96cdbd95d188c19724ed2cbe7b7fd350534fd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0e902a1416b8b99bc7406be86a061a6c1652a69f43ee9b60f5a9e7272679cfc6->leave($__internal_0e902a1416b8b99bc7406be86a061a6c1652a69f43ee9b60f5a9e7272679cfc6_prof);

        
        $__internal_25aaa900f81b3ce246b1a009e96cdbd95d188c19724ed2cbe7b7fd350534fd75->leave($__internal_25aaa900f81b3ce246b1a009e96cdbd95d188c19724ed2cbe7b7fd350534fd75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
