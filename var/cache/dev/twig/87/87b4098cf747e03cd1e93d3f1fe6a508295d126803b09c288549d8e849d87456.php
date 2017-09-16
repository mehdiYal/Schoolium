<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4621ea11850e7cb9d8d4cb4f0c79b67c4953163c0553c03f466b3d204da4b2c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_24e1d5a089a85d73b9d8e3c8d85cbdb67695cc890843a25be122af242b3d97a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e1d5a089a85d73b9d8e3c8d85cbdb67695cc890843a25be122af242b3d97a2->enter($__internal_24e1d5a089a85d73b9d8e3c8d85cbdb67695cc890843a25be122af242b3d97a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_09af5cc21b7eba9f3d62b9f9c5a4d0a0c4843630df435f1d162fb2e161eee637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09af5cc21b7eba9f3d62b9f9c5a4d0a0c4843630df435f1d162fb2e161eee637->enter($__internal_09af5cc21b7eba9f3d62b9f9c5a4d0a0c4843630df435f1d162fb2e161eee637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e1d5a089a85d73b9d8e3c8d85cbdb67695cc890843a25be122af242b3d97a2->leave($__internal_24e1d5a089a85d73b9d8e3c8d85cbdb67695cc890843a25be122af242b3d97a2_prof);

        
        $__internal_09af5cc21b7eba9f3d62b9f9c5a4d0a0c4843630df435f1d162fb2e161eee637->leave($__internal_09af5cc21b7eba9f3d62b9f9c5a4d0a0c4843630df435f1d162fb2e161eee637_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea2f7b8f920e60e96079266a4f9084e02b4392fc5c7b250cb08250c550603810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2f7b8f920e60e96079266a4f9084e02b4392fc5c7b250cb08250c550603810->enter($__internal_ea2f7b8f920e60e96079266a4f9084e02b4392fc5c7b250cb08250c550603810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c8318d49203759af73855adc7252657b145423b0b0d1b04fc85ccbd108161e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8318d49203759af73855adc7252657b145423b0b0d1b04fc85ccbd108161e23->enter($__internal_c8318d49203759af73855adc7252657b145423b0b0d1b04fc85ccbd108161e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c8318d49203759af73855adc7252657b145423b0b0d1b04fc85ccbd108161e23->leave($__internal_c8318d49203759af73855adc7252657b145423b0b0d1b04fc85ccbd108161e23_prof);

        
        $__internal_ea2f7b8f920e60e96079266a4f9084e02b4392fc5c7b250cb08250c550603810->leave($__internal_ea2f7b8f920e60e96079266a4f9084e02b4392fc5c7b250cb08250c550603810_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
