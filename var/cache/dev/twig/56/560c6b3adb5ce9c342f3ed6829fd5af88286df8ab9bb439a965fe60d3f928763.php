<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e71f54c2974461908140e91dcf30474d652509a9cb441886853b450a8745d1c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0ad16f4636c26d06f5697e0fc822393e7afa4718180a01726f96e94aa46122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0ad16f4636c26d06f5697e0fc822393e7afa4718180a01726f96e94aa46122->enter($__internal_6d0ad16f4636c26d06f5697e0fc822393e7afa4718180a01726f96e94aa46122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d78f9857b23ffe534f5d11c4a48b6c3853a2b8ce112b7c317ad942df6efc2061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78f9857b23ffe534f5d11c4a48b6c3853a2b8ce112b7c317ad942df6efc2061->enter($__internal_d78f9857b23ffe534f5d11c4a48b6c3853a2b8ce112b7c317ad942df6efc2061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0ad16f4636c26d06f5697e0fc822393e7afa4718180a01726f96e94aa46122->leave($__internal_6d0ad16f4636c26d06f5697e0fc822393e7afa4718180a01726f96e94aa46122_prof);

        
        $__internal_d78f9857b23ffe534f5d11c4a48b6c3853a2b8ce112b7c317ad942df6efc2061->leave($__internal_d78f9857b23ffe534f5d11c4a48b6c3853a2b8ce112b7c317ad942df6efc2061_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f3e378417f62f4a8227eb118c51b8c7b497a4d3d27bf93119ae8739f103656f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3e378417f62f4a8227eb118c51b8c7b497a4d3d27bf93119ae8739f103656f->enter($__internal_0f3e378417f62f4a8227eb118c51b8c7b497a4d3d27bf93119ae8739f103656f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_349598c6271f6efd4577f966dc7e4ec5965114b1c2d0920738692a98a2e609b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349598c6271f6efd4577f966dc7e4ec5965114b1c2d0920738692a98a2e609b2->enter($__internal_349598c6271f6efd4577f966dc7e4ec5965114b1c2d0920738692a98a2e609b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_349598c6271f6efd4577f966dc7e4ec5965114b1c2d0920738692a98a2e609b2->leave($__internal_349598c6271f6efd4577f966dc7e4ec5965114b1c2d0920738692a98a2e609b2_prof);

        
        $__internal_0f3e378417f62f4a8227eb118c51b8c7b497a4d3d27bf93119ae8739f103656f->leave($__internal_0f3e378417f62f4a8227eb118c51b8c7b497a4d3d27bf93119ae8739f103656f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
