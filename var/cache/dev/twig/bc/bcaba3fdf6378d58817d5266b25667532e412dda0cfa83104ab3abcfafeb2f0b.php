<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_30c86688f64fce8c4d02fd89bc85c944f7b418e1aae0c404f0f89c3a4bd37c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_24a8622db082651c0b980bca89954fc94f57903e928b0b794e39b2512a112716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a8622db082651c0b980bca89954fc94f57903e928b0b794e39b2512a112716->enter($__internal_24a8622db082651c0b980bca89954fc94f57903e928b0b794e39b2512a112716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_c2b4465c9333e81cdd7f9c1921c3d19e859ac138f3512d1dca7fd25fdb8173ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b4465c9333e81cdd7f9c1921c3d19e859ac138f3512d1dca7fd25fdb8173ae->enter($__internal_c2b4465c9333e81cdd7f9c1921c3d19e859ac138f3512d1dca7fd25fdb8173ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a8622db082651c0b980bca89954fc94f57903e928b0b794e39b2512a112716->leave($__internal_24a8622db082651c0b980bca89954fc94f57903e928b0b794e39b2512a112716_prof);

        
        $__internal_c2b4465c9333e81cdd7f9c1921c3d19e859ac138f3512d1dca7fd25fdb8173ae->leave($__internal_c2b4465c9333e81cdd7f9c1921c3d19e859ac138f3512d1dca7fd25fdb8173ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9993cab38d83102f571888c19df19d34fbec0f9ea507e3cba67d76e7ad3f63af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9993cab38d83102f571888c19df19d34fbec0f9ea507e3cba67d76e7ad3f63af->enter($__internal_9993cab38d83102f571888c19df19d34fbec0f9ea507e3cba67d76e7ad3f63af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8d2c7f6605e783d4ddbbf2a59ba00efd378ada90fb71f3e272cd3a9687a27ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d2c7f6605e783d4ddbbf2a59ba00efd378ada90fb71f3e272cd3a9687a27ce->enter($__internal_a8d2c7f6605e783d4ddbbf2a59ba00efd378ada90fb71f3e272cd3a9687a27ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a8d2c7f6605e783d4ddbbf2a59ba00efd378ada90fb71f3e272cd3a9687a27ce->leave($__internal_a8d2c7f6605e783d4ddbbf2a59ba00efd378ada90fb71f3e272cd3a9687a27ce_prof);

        
        $__internal_9993cab38d83102f571888c19df19d34fbec0f9ea507e3cba67d76e7ad3f63af->leave($__internal_9993cab38d83102f571888c19df19d34fbec0f9ea507e3cba67d76e7ad3f63af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
