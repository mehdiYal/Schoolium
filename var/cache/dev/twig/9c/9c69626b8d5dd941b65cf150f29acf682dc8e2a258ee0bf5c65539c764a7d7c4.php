<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_cfc6fb73314354fb8e680671079877c5d301a2a98470ea8bffcb43a848326d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_495250e619aabe6fce057efc85c606affddb367772fe5557e61fdd66e2aaafaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495250e619aabe6fce057efc85c606affddb367772fe5557e61fdd66e2aaafaf->enter($__internal_495250e619aabe6fce057efc85c606affddb367772fe5557e61fdd66e2aaafaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_47ec4d4ac51c69fb3cdb82bb305eebc3320b88cd9ba01e2017f0c4e4021b1215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ec4d4ac51c69fb3cdb82bb305eebc3320b88cd9ba01e2017f0c4e4021b1215->enter($__internal_47ec4d4ac51c69fb3cdb82bb305eebc3320b88cd9ba01e2017f0c4e4021b1215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495250e619aabe6fce057efc85c606affddb367772fe5557e61fdd66e2aaafaf->leave($__internal_495250e619aabe6fce057efc85c606affddb367772fe5557e61fdd66e2aaafaf_prof);

        
        $__internal_47ec4d4ac51c69fb3cdb82bb305eebc3320b88cd9ba01e2017f0c4e4021b1215->leave($__internal_47ec4d4ac51c69fb3cdb82bb305eebc3320b88cd9ba01e2017f0c4e4021b1215_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12ed43f89796abc9c82541eda16da63b651ce49607cedeb2d10283f14e448403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ed43f89796abc9c82541eda16da63b651ce49607cedeb2d10283f14e448403->enter($__internal_12ed43f89796abc9c82541eda16da63b651ce49607cedeb2d10283f14e448403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abc62066c16e1f44ac5d208fba9478dc28e794e8a22d724860b52b5d05a1b880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc62066c16e1f44ac5d208fba9478dc28e794e8a22d724860b52b5d05a1b880->enter($__internal_abc62066c16e1f44ac5d208fba9478dc28e794e8a22d724860b52b5d05a1b880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_abc62066c16e1f44ac5d208fba9478dc28e794e8a22d724860b52b5d05a1b880->leave($__internal_abc62066c16e1f44ac5d208fba9478dc28e794e8a22d724860b52b5d05a1b880_prof);

        
        $__internal_12ed43f89796abc9c82541eda16da63b651ce49607cedeb2d10283f14e448403->leave($__internal_12ed43f89796abc9c82541eda16da63b651ce49607cedeb2d10283f14e448403_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
