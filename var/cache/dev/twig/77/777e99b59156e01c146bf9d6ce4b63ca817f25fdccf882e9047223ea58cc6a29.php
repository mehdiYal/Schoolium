<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_92ef3a66c04d7a213f539dfe6108cf2e87573b2c35c881611a8d33db4e48b3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_754a463054070a8707a4bf1fd291d9b68757b9a3c31365ce4b8446b86b89d3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754a463054070a8707a4bf1fd291d9b68757b9a3c31365ce4b8446b86b89d3b9->enter($__internal_754a463054070a8707a4bf1fd291d9b68757b9a3c31365ce4b8446b86b89d3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_b5f6e5eb33206c0ab7a39b212538cf9be7862fd2b0d3980b9c6865d88873ffbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f6e5eb33206c0ab7a39b212538cf9be7862fd2b0d3980b9c6865d88873ffbb->enter($__internal_b5f6e5eb33206c0ab7a39b212538cf9be7862fd2b0d3980b9c6865d88873ffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_754a463054070a8707a4bf1fd291d9b68757b9a3c31365ce4b8446b86b89d3b9->leave($__internal_754a463054070a8707a4bf1fd291d9b68757b9a3c31365ce4b8446b86b89d3b9_prof);

        
        $__internal_b5f6e5eb33206c0ab7a39b212538cf9be7862fd2b0d3980b9c6865d88873ffbb->leave($__internal_b5f6e5eb33206c0ab7a39b212538cf9be7862fd2b0d3980b9c6865d88873ffbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6a372452b4dfa6ad997cb11b89388ee2e71755f72e0851e9189547b7d75d9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a372452b4dfa6ad997cb11b89388ee2e71755f72e0851e9189547b7d75d9d1->enter($__internal_d6a372452b4dfa6ad997cb11b89388ee2e71755f72e0851e9189547b7d75d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95265f96f97786b4ba5f5dbefdb8650e89119aca761f7ec2f7c9801bf3ff1a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95265f96f97786b4ba5f5dbefdb8650e89119aca761f7ec2f7c9801bf3ff1a6d->enter($__internal_95265f96f97786b4ba5f5dbefdb8650e89119aca761f7ec2f7c9801bf3ff1a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_95265f96f97786b4ba5f5dbefdb8650e89119aca761f7ec2f7c9801bf3ff1a6d->leave($__internal_95265f96f97786b4ba5f5dbefdb8650e89119aca761f7ec2f7c9801bf3ff1a6d_prof);

        
        $__internal_d6a372452b4dfa6ad997cb11b89388ee2e71755f72e0851e9189547b7d75d9d1->leave($__internal_d6a372452b4dfa6ad997cb11b89388ee2e71755f72e0851e9189547b7d75d9d1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
