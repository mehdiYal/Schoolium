<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_954a07f3d6af0864a952abc1eafffe01266ea69b8a1eb0834c1592b859fd812d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_bcc04df8e4c37cca41f0a5c91095921f72d1a98c45153361858884efa56b6411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc04df8e4c37cca41f0a5c91095921f72d1a98c45153361858884efa56b6411->enter($__internal_bcc04df8e4c37cca41f0a5c91095921f72d1a98c45153361858884efa56b6411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_1da17bb34a36c3ae3afad1176fa87944d2153d9943ebd2cae4b08d4ad5f407aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da17bb34a36c3ae3afad1176fa87944d2153d9943ebd2cae4b08d4ad5f407aa->enter($__internal_1da17bb34a36c3ae3afad1176fa87944d2153d9943ebd2cae4b08d4ad5f407aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc04df8e4c37cca41f0a5c91095921f72d1a98c45153361858884efa56b6411->leave($__internal_bcc04df8e4c37cca41f0a5c91095921f72d1a98c45153361858884efa56b6411_prof);

        
        $__internal_1da17bb34a36c3ae3afad1176fa87944d2153d9943ebd2cae4b08d4ad5f407aa->leave($__internal_1da17bb34a36c3ae3afad1176fa87944d2153d9943ebd2cae4b08d4ad5f407aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3df69ecfb5dd05efe84dff7c5e7d2e0d575d6596c8c3265fff439a35b8a454e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3df69ecfb5dd05efe84dff7c5e7d2e0d575d6596c8c3265fff439a35b8a454e->enter($__internal_a3df69ecfb5dd05efe84dff7c5e7d2e0d575d6596c8c3265fff439a35b8a454e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a4d377f2d195fb42a4e7e556f790fcc694d7f41018afcb1919b0b3d68d1b31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4d377f2d195fb42a4e7e556f790fcc694d7f41018afcb1919b0b3d68d1b31d->enter($__internal_4a4d377f2d195fb42a4e7e556f790fcc694d7f41018afcb1919b0b3d68d1b31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_4a4d377f2d195fb42a4e7e556f790fcc694d7f41018afcb1919b0b3d68d1b31d->leave($__internal_4a4d377f2d195fb42a4e7e556f790fcc694d7f41018afcb1919b0b3d68d1b31d_prof);

        
        $__internal_a3df69ecfb5dd05efe84dff7c5e7d2e0d575d6596c8c3265fff439a35b8a454e->leave($__internal_a3df69ecfb5dd05efe84dff7c5e7d2e0d575d6596c8c3265fff439a35b8a454e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
