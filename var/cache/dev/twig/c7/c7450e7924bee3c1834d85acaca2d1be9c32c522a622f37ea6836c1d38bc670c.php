<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0919eee8d31f7752d96455f8501378ee83191ea1ee5170ff00f4ff97f54c3b51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d10a9714bd3715fc2dd026d1d0cce3d525aa17aafb7cf065ef9df880dcfdebdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10a9714bd3715fc2dd026d1d0cce3d525aa17aafb7cf065ef9df880dcfdebdf->enter($__internal_d10a9714bd3715fc2dd026d1d0cce3d525aa17aafb7cf065ef9df880dcfdebdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_3e67af2a6aedbcc2e8a3a762d411028e4615ff73122dc05d7cc9e25e09d98ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e67af2a6aedbcc2e8a3a762d411028e4615ff73122dc05d7cc9e25e09d98ca4->enter($__internal_3e67af2a6aedbcc2e8a3a762d411028e4615ff73122dc05d7cc9e25e09d98ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10a9714bd3715fc2dd026d1d0cce3d525aa17aafb7cf065ef9df880dcfdebdf->leave($__internal_d10a9714bd3715fc2dd026d1d0cce3d525aa17aafb7cf065ef9df880dcfdebdf_prof);

        
        $__internal_3e67af2a6aedbcc2e8a3a762d411028e4615ff73122dc05d7cc9e25e09d98ca4->leave($__internal_3e67af2a6aedbcc2e8a3a762d411028e4615ff73122dc05d7cc9e25e09d98ca4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af8536d8fe29c201dd1b970e6f2cd8f12a8fb8e19525c6ab9604ab61c13e4175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8536d8fe29c201dd1b970e6f2cd8f12a8fb8e19525c6ab9604ab61c13e4175->enter($__internal_af8536d8fe29c201dd1b970e6f2cd8f12a8fb8e19525c6ab9604ab61c13e4175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0bbac7eedc4f48f3fd8bd46dc174f5dae34efb627662707c6b0218ca38d292fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbac7eedc4f48f3fd8bd46dc174f5dae34efb627662707c6b0218ca38d292fb->enter($__internal_0bbac7eedc4f48f3fd8bd46dc174f5dae34efb627662707c6b0218ca38d292fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_0bbac7eedc4f48f3fd8bd46dc174f5dae34efb627662707c6b0218ca38d292fb->leave($__internal_0bbac7eedc4f48f3fd8bd46dc174f5dae34efb627662707c6b0218ca38d292fb_prof);

        
        $__internal_af8536d8fe29c201dd1b970e6f2cd8f12a8fb8e19525c6ab9604ab61c13e4175->leave($__internal_af8536d8fe29c201dd1b970e6f2cd8f12a8fb8e19525c6ab9604ab61c13e4175_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
