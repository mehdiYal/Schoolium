<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a8766f8ad97ba714943c19ae7e83ef34ee29f5de36831996a90851cab62a26d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_fb590d85ef8dfac1f18bfe04383a382b2eb9aaa733a03459f0342d9ceb90f1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb590d85ef8dfac1f18bfe04383a382b2eb9aaa733a03459f0342d9ceb90f1e7->enter($__internal_fb590d85ef8dfac1f18bfe04383a382b2eb9aaa733a03459f0342d9ceb90f1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ecc0e05d54c24b48600ec0f994204f557580efcf93371b7dcd61083ffd0886e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc0e05d54c24b48600ec0f994204f557580efcf93371b7dcd61083ffd0886e3->enter($__internal_ecc0e05d54c24b48600ec0f994204f557580efcf93371b7dcd61083ffd0886e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb590d85ef8dfac1f18bfe04383a382b2eb9aaa733a03459f0342d9ceb90f1e7->leave($__internal_fb590d85ef8dfac1f18bfe04383a382b2eb9aaa733a03459f0342d9ceb90f1e7_prof);

        
        $__internal_ecc0e05d54c24b48600ec0f994204f557580efcf93371b7dcd61083ffd0886e3->leave($__internal_ecc0e05d54c24b48600ec0f994204f557580efcf93371b7dcd61083ffd0886e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86985fe79c020a3acc4546d3db38da6ccc1fe595b43aa64a0042cb85960efee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86985fe79c020a3acc4546d3db38da6ccc1fe595b43aa64a0042cb85960efee8->enter($__internal_86985fe79c020a3acc4546d3db38da6ccc1fe595b43aa64a0042cb85960efee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b663a80a0d414107f1f11a5fc2a3c7116fb83876e516f4420e4b2328408eba68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b663a80a0d414107f1f11a5fc2a3c7116fb83876e516f4420e4b2328408eba68->enter($__internal_b663a80a0d414107f1f11a5fc2a3c7116fb83876e516f4420e4b2328408eba68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b663a80a0d414107f1f11a5fc2a3c7116fb83876e516f4420e4b2328408eba68->leave($__internal_b663a80a0d414107f1f11a5fc2a3c7116fb83876e516f4420e4b2328408eba68_prof);

        
        $__internal_86985fe79c020a3acc4546d3db38da6ccc1fe595b43aa64a0042cb85960efee8->leave($__internal_86985fe79c020a3acc4546d3db38da6ccc1fe595b43aa64a0042cb85960efee8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
