<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8c7c7bd4342f76bb8a2b4b1260ab53a6b8562c837d5b05f9b9299065aeeee810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_afef0cab8a325095f11b2b9cc96984c91035ecf9b85ac84ec35c4b5132f80f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afef0cab8a325095f11b2b9cc96984c91035ecf9b85ac84ec35c4b5132f80f36->enter($__internal_afef0cab8a325095f11b2b9cc96984c91035ecf9b85ac84ec35c4b5132f80f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_c93c89627f2c4ed16996bab12b95521fc646729df8bf11ec6c49fdcbf41723cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93c89627f2c4ed16996bab12b95521fc646729df8bf11ec6c49fdcbf41723cc->enter($__internal_c93c89627f2c4ed16996bab12b95521fc646729df8bf11ec6c49fdcbf41723cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afef0cab8a325095f11b2b9cc96984c91035ecf9b85ac84ec35c4b5132f80f36->leave($__internal_afef0cab8a325095f11b2b9cc96984c91035ecf9b85ac84ec35c4b5132f80f36_prof);

        
        $__internal_c93c89627f2c4ed16996bab12b95521fc646729df8bf11ec6c49fdcbf41723cc->leave($__internal_c93c89627f2c4ed16996bab12b95521fc646729df8bf11ec6c49fdcbf41723cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5faf6d051465f3d95685d2e31cf1345e0a28316b0edaf26cb0297512c310b4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5faf6d051465f3d95685d2e31cf1345e0a28316b0edaf26cb0297512c310b4b2->enter($__internal_5faf6d051465f3d95685d2e31cf1345e0a28316b0edaf26cb0297512c310b4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d22dd1211ed7d665c575ec544e884d5847d02ed7c46c0340b3ec46807a1d1b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22dd1211ed7d665c575ec544e884d5847d02ed7c46c0340b3ec46807a1d1b86->enter($__internal_d22dd1211ed7d665c575ec544e884d5847d02ed7c46c0340b3ec46807a1d1b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d22dd1211ed7d665c575ec544e884d5847d02ed7c46c0340b3ec46807a1d1b86->leave($__internal_d22dd1211ed7d665c575ec544e884d5847d02ed7c46c0340b3ec46807a1d1b86_prof);

        
        $__internal_5faf6d051465f3d95685d2e31cf1345e0a28316b0edaf26cb0297512c310b4b2->leave($__internal_5faf6d051465f3d95685d2e31cf1345e0a28316b0edaf26cb0297512c310b4b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
