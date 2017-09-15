<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6be926763d39c2573da78bd0bc989da38356f9b6b8b4757d98fa980bbe3820b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c016060342ce6fc4eaac9333046fb330f68f1d0e5f500f74908f99cf4a3b4374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c016060342ce6fc4eaac9333046fb330f68f1d0e5f500f74908f99cf4a3b4374->enter($__internal_c016060342ce6fc4eaac9333046fb330f68f1d0e5f500f74908f99cf4a3b4374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_7ed05a8a4df0f13d04372e6047bf8bab690670824d6525829400635e332b0676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed05a8a4df0f13d04372e6047bf8bab690670824d6525829400635e332b0676->enter($__internal_7ed05a8a4df0f13d04372e6047bf8bab690670824d6525829400635e332b0676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c016060342ce6fc4eaac9333046fb330f68f1d0e5f500f74908f99cf4a3b4374->leave($__internal_c016060342ce6fc4eaac9333046fb330f68f1d0e5f500f74908f99cf4a3b4374_prof);

        
        $__internal_7ed05a8a4df0f13d04372e6047bf8bab690670824d6525829400635e332b0676->leave($__internal_7ed05a8a4df0f13d04372e6047bf8bab690670824d6525829400635e332b0676_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d2b852fe1b17d67095cb2df06cd6c7bd49a5316b9ccd80a60d5a843fad96e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2b852fe1b17d67095cb2df06cd6c7bd49a5316b9ccd80a60d5a843fad96e61->enter($__internal_5d2b852fe1b17d67095cb2df06cd6c7bd49a5316b9ccd80a60d5a843fad96e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_df2b28a2af8faff6ff8f2eab07fba19a6d1ce070c3a4c651497ef0e12c2c75f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2b28a2af8faff6ff8f2eab07fba19a6d1ce070c3a4c651497ef0e12c2c75f9->enter($__internal_df2b28a2af8faff6ff8f2eab07fba19a6d1ce070c3a4c651497ef0e12c2c75f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_df2b28a2af8faff6ff8f2eab07fba19a6d1ce070c3a4c651497ef0e12c2c75f9->leave($__internal_df2b28a2af8faff6ff8f2eab07fba19a6d1ce070c3a4c651497ef0e12c2c75f9_prof);

        
        $__internal_5d2b852fe1b17d67095cb2df06cd6c7bd49a5316b9ccd80a60d5a843fad96e61->leave($__internal_5d2b852fe1b17d67095cb2df06cd6c7bd49a5316b9ccd80a60d5a843fad96e61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
