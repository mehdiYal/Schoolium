<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_776cd615b8759ed72317ae086378acc489295d2714037f9e3fc9a0e7d4ba460c extends Twig_Template
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
        $__internal_b954d20e6c1b6c14dc029f1d1fec2b08c43ac807b4f3baf2dabeac1bceb84b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b954d20e6c1b6c14dc029f1d1fec2b08c43ac807b4f3baf2dabeac1bceb84b4f->enter($__internal_b954d20e6c1b6c14dc029f1d1fec2b08c43ac807b4f3baf2dabeac1bceb84b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_512912a4a874bac18eef32c1addd9b49d64f2ba21aeb2f794d7da3d986b58a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512912a4a874bac18eef32c1addd9b49d64f2ba21aeb2f794d7da3d986b58a15->enter($__internal_512912a4a874bac18eef32c1addd9b49d64f2ba21aeb2f794d7da3d986b58a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b954d20e6c1b6c14dc029f1d1fec2b08c43ac807b4f3baf2dabeac1bceb84b4f->leave($__internal_b954d20e6c1b6c14dc029f1d1fec2b08c43ac807b4f3baf2dabeac1bceb84b4f_prof);

        
        $__internal_512912a4a874bac18eef32c1addd9b49d64f2ba21aeb2f794d7da3d986b58a15->leave($__internal_512912a4a874bac18eef32c1addd9b49d64f2ba21aeb2f794d7da3d986b58a15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
