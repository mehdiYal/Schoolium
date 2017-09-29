<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c35894c87e2069de18e213d5709d2d483a67bed98ce998cc789ef141ba9851ed extends Twig_Template
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
        $__internal_fdf3e1d9b13aa8ae3e0c836c46607cb7864b91bfb4979c27aaf0095f65e33393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf3e1d9b13aa8ae3e0c836c46607cb7864b91bfb4979c27aaf0095f65e33393->enter($__internal_fdf3e1d9b13aa8ae3e0c836c46607cb7864b91bfb4979c27aaf0095f65e33393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_27b33ba877c24fe6bfa989927e46a186ee39bc02cff2b60084ebb85fe12fc785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b33ba877c24fe6bfa989927e46a186ee39bc02cff2b60084ebb85fe12fc785->enter($__internal_27b33ba877c24fe6bfa989927e46a186ee39bc02cff2b60084ebb85fe12fc785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf3e1d9b13aa8ae3e0c836c46607cb7864b91bfb4979c27aaf0095f65e33393->leave($__internal_fdf3e1d9b13aa8ae3e0c836c46607cb7864b91bfb4979c27aaf0095f65e33393_prof);

        
        $__internal_27b33ba877c24fe6bfa989927e46a186ee39bc02cff2b60084ebb85fe12fc785->leave($__internal_27b33ba877c24fe6bfa989927e46a186ee39bc02cff2b60084ebb85fe12fc785_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62b98bf3472971044f37c67a97374724575d1432b3c24f44f5373c4d93be22a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b98bf3472971044f37c67a97374724575d1432b3c24f44f5373c4d93be22a0->enter($__internal_62b98bf3472971044f37c67a97374724575d1432b3c24f44f5373c4d93be22a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bdc9462d2b488015dc6be0642fb9c9c384b2e60937a2c068e511015892a04807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc9462d2b488015dc6be0642fb9c9c384b2e60937a2c068e511015892a04807->enter($__internal_bdc9462d2b488015dc6be0642fb9c9c384b2e60937a2c068e511015892a04807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bdc9462d2b488015dc6be0642fb9c9c384b2e60937a2c068e511015892a04807->leave($__internal_bdc9462d2b488015dc6be0642fb9c9c384b2e60937a2c068e511015892a04807_prof);

        
        $__internal_62b98bf3472971044f37c67a97374724575d1432b3c24f44f5373c4d93be22a0->leave($__internal_62b98bf3472971044f37c67a97374724575d1432b3c24f44f5373c4d93be22a0_prof);

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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
