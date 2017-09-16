<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d0528b49c8fdd67410a8c88eb0e0fbd842dc6030de5a831203c4b5b6156614fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e2b076a15fba7e5799030723c1bd6c3deddfd47f656790fe59c4a7670bcf3db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b076a15fba7e5799030723c1bd6c3deddfd47f656790fe59c4a7670bcf3db5->enter($__internal_e2b076a15fba7e5799030723c1bd6c3deddfd47f656790fe59c4a7670bcf3db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_3f2c469a246312523531d89d9a85b8127fad0c10aa64ab3d16ac4f4946d6f808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2c469a246312523531d89d9a85b8127fad0c10aa64ab3d16ac4f4946d6f808->enter($__internal_3f2c469a246312523531d89d9a85b8127fad0c10aa64ab3d16ac4f4946d6f808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b076a15fba7e5799030723c1bd6c3deddfd47f656790fe59c4a7670bcf3db5->leave($__internal_e2b076a15fba7e5799030723c1bd6c3deddfd47f656790fe59c4a7670bcf3db5_prof);

        
        $__internal_3f2c469a246312523531d89d9a85b8127fad0c10aa64ab3d16ac4f4946d6f808->leave($__internal_3f2c469a246312523531d89d9a85b8127fad0c10aa64ab3d16ac4f4946d6f808_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f10b7c7a9bcac779aaff2b9dd1e7d937f217839925f9ca86f628372fe9485ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10b7c7a9bcac779aaff2b9dd1e7d937f217839925f9ca86f628372fe9485ea4->enter($__internal_f10b7c7a9bcac779aaff2b9dd1e7d937f217839925f9ca86f628372fe9485ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b7eb535b2c156b6a92f756dc98a7b3f876a37e7ca69f618b8c586abd09c7498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7eb535b2c156b6a92f756dc98a7b3f876a37e7ca69f618b8c586abd09c7498->enter($__internal_2b7eb535b2c156b6a92f756dc98a7b3f876a37e7ca69f618b8c586abd09c7498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2b7eb535b2c156b6a92f756dc98a7b3f876a37e7ca69f618b8c586abd09c7498->leave($__internal_2b7eb535b2c156b6a92f756dc98a7b3f876a37e7ca69f618b8c586abd09c7498_prof);

        
        $__internal_f10b7c7a9bcac779aaff2b9dd1e7d937f217839925f9ca86f628372fe9485ea4->leave($__internal_f10b7c7a9bcac779aaff2b9dd1e7d937f217839925f9ca86f628372fe9485ea4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
