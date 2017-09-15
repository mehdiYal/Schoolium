<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5758c5bd860fccc6802e71649cc34c9ca224c2825c6a6c61d5c6d9d8177431fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_48821838007c841397fd26fb2fcbcb187e486f0d1a7140ea5538d90fc0543290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48821838007c841397fd26fb2fcbcb187e486f0d1a7140ea5538d90fc0543290->enter($__internal_48821838007c841397fd26fb2fcbcb187e486f0d1a7140ea5538d90fc0543290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_f2f4efa0ad462ef76eb2a9e10571294a934e80f61fc8bf15ea73b8b87c33355b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f4efa0ad462ef76eb2a9e10571294a934e80f61fc8bf15ea73b8b87c33355b->enter($__internal_f2f4efa0ad462ef76eb2a9e10571294a934e80f61fc8bf15ea73b8b87c33355b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48821838007c841397fd26fb2fcbcb187e486f0d1a7140ea5538d90fc0543290->leave($__internal_48821838007c841397fd26fb2fcbcb187e486f0d1a7140ea5538d90fc0543290_prof);

        
        $__internal_f2f4efa0ad462ef76eb2a9e10571294a934e80f61fc8bf15ea73b8b87c33355b->leave($__internal_f2f4efa0ad462ef76eb2a9e10571294a934e80f61fc8bf15ea73b8b87c33355b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e898dafb6bf1c121a9cfe45f37d32f59b106c2949350ec32f202019dc955ca26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e898dafb6bf1c121a9cfe45f37d32f59b106c2949350ec32f202019dc955ca26->enter($__internal_e898dafb6bf1c121a9cfe45f37d32f59b106c2949350ec32f202019dc955ca26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_112a3060a4e56655021baa6c95f748ed1aff2852cc62b15fef220f0efa06a3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112a3060a4e56655021baa6c95f748ed1aff2852cc62b15fef220f0efa06a3e0->enter($__internal_112a3060a4e56655021baa6c95f748ed1aff2852cc62b15fef220f0efa06a3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_112a3060a4e56655021baa6c95f748ed1aff2852cc62b15fef220f0efa06a3e0->leave($__internal_112a3060a4e56655021baa6c95f748ed1aff2852cc62b15fef220f0efa06a3e0_prof);

        
        $__internal_e898dafb6bf1c121a9cfe45f37d32f59b106c2949350ec32f202019dc955ca26->leave($__internal_e898dafb6bf1c121a9cfe45f37d32f59b106c2949350ec32f202019dc955ca26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
