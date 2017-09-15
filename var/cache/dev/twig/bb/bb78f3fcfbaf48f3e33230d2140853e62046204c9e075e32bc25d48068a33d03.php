<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_1c296dd8dbdb0234df6ca8393cee0a205d0203e37fb9440b28652b85c56d39ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_09e2afb006339ea25221723c41e58229bf9e58d5aa77ec3d01f9a836517596fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e2afb006339ea25221723c41e58229bf9e58d5aa77ec3d01f9a836517596fb->enter($__internal_09e2afb006339ea25221723c41e58229bf9e58d5aa77ec3d01f9a836517596fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_5763b28317727b97d801b7dce8c8b1119c8949b17217b8454d3da234fe7f5b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5763b28317727b97d801b7dce8c8b1119c8949b17217b8454d3da234fe7f5b93->enter($__internal_5763b28317727b97d801b7dce8c8b1119c8949b17217b8454d3da234fe7f5b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e2afb006339ea25221723c41e58229bf9e58d5aa77ec3d01f9a836517596fb->leave($__internal_09e2afb006339ea25221723c41e58229bf9e58d5aa77ec3d01f9a836517596fb_prof);

        
        $__internal_5763b28317727b97d801b7dce8c8b1119c8949b17217b8454d3da234fe7f5b93->leave($__internal_5763b28317727b97d801b7dce8c8b1119c8949b17217b8454d3da234fe7f5b93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25ec489f6c5bcf73ad5f5b04e318bf65499ebf55950e12012fafb173b65c3027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ec489f6c5bcf73ad5f5b04e318bf65499ebf55950e12012fafb173b65c3027->enter($__internal_25ec489f6c5bcf73ad5f5b04e318bf65499ebf55950e12012fafb173b65c3027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a88fdadbb0128d14909f69babc83a3e3995b5da8ec399263ce4707b3d2f7fb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88fdadbb0128d14909f69babc83a3e3995b5da8ec399263ce4707b3d2f7fb05->enter($__internal_a88fdadbb0128d14909f69babc83a3e3995b5da8ec399263ce4707b3d2f7fb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_a88fdadbb0128d14909f69babc83a3e3995b5da8ec399263ce4707b3d2f7fb05->leave($__internal_a88fdadbb0128d14909f69babc83a3e3995b5da8ec399263ce4707b3d2f7fb05_prof);

        
        $__internal_25ec489f6c5bcf73ad5f5b04e318bf65499ebf55950e12012fafb173b65c3027->leave($__internal_25ec489f6c5bcf73ad5f5b04e318bf65499ebf55950e12012fafb173b65c3027_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
