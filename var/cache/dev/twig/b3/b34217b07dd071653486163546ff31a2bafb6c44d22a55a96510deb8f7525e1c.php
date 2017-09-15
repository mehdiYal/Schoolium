<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_aaa33a75cf7a0988a5bf811895e3e5ef98796ae4f1bbec179c245af3c83f74b3 extends Twig_Template
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
        $__internal_0df44840510ef53ac61d1c6d0dcae262f61c060a107d7e56bf4b0222238bc2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df44840510ef53ac61d1c6d0dcae262f61c060a107d7e56bf4b0222238bc2f7->enter($__internal_0df44840510ef53ac61d1c6d0dcae262f61c060a107d7e56bf4b0222238bc2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_62b60803e21291e0cbc8bf9249ed3e7d8c4be2031f1dba08c55c99499e816830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b60803e21291e0cbc8bf9249ed3e7d8c4be2031f1dba08c55c99499e816830->enter($__internal_62b60803e21291e0cbc8bf9249ed3e7d8c4be2031f1dba08c55c99499e816830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0df44840510ef53ac61d1c6d0dcae262f61c060a107d7e56bf4b0222238bc2f7->leave($__internal_0df44840510ef53ac61d1c6d0dcae262f61c060a107d7e56bf4b0222238bc2f7_prof);

        
        $__internal_62b60803e21291e0cbc8bf9249ed3e7d8c4be2031f1dba08c55c99499e816830->leave($__internal_62b60803e21291e0cbc8bf9249ed3e7d8c4be2031f1dba08c55c99499e816830_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
