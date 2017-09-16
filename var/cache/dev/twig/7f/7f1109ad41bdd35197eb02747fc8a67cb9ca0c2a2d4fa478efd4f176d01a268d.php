<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b52bbb323e85e0cd5cd99bdba6212f189e36dab7e46b67153361cd21336906b4 extends Twig_Template
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
        $__internal_4a2a58c2c37cc2fe9bd79e9010b41562d63436ded2a2c4e318c65961f423ab77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2a58c2c37cc2fe9bd79e9010b41562d63436ded2a2c4e318c65961f423ab77->enter($__internal_4a2a58c2c37cc2fe9bd79e9010b41562d63436ded2a2c4e318c65961f423ab77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_97f024e082918c25d5d65b672f39b8e656dcc1569f6a980396b949541845c55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f024e082918c25d5d65b672f39b8e656dcc1569f6a980396b949541845c55f->enter($__internal_97f024e082918c25d5d65b672f39b8e656dcc1569f6a980396b949541845c55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2a58c2c37cc2fe9bd79e9010b41562d63436ded2a2c4e318c65961f423ab77->leave($__internal_4a2a58c2c37cc2fe9bd79e9010b41562d63436ded2a2c4e318c65961f423ab77_prof);

        
        $__internal_97f024e082918c25d5d65b672f39b8e656dcc1569f6a980396b949541845c55f->leave($__internal_97f024e082918c25d5d65b672f39b8e656dcc1569f6a980396b949541845c55f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1c38425e21a8db83bddf0f684650462dab4d0588e27f8e89ac8e800bbaf5b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c38425e21a8db83bddf0f684650462dab4d0588e27f8e89ac8e800bbaf5b0b->enter($__internal_f1c38425e21a8db83bddf0f684650462dab4d0588e27f8e89ac8e800bbaf5b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab1de6171f3ef2de8c852fc529b9c79faa517b3cce5b4be6ccab1cfb5b758524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1de6171f3ef2de8c852fc529b9c79faa517b3cce5b4be6ccab1cfb5b758524->enter($__internal_ab1de6171f3ef2de8c852fc529b9c79faa517b3cce5b4be6ccab1cfb5b758524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ab1de6171f3ef2de8c852fc529b9c79faa517b3cce5b4be6ccab1cfb5b758524->leave($__internal_ab1de6171f3ef2de8c852fc529b9c79faa517b3cce5b4be6ccab1cfb5b758524_prof);

        
        $__internal_f1c38425e21a8db83bddf0f684650462dab4d0588e27f8e89ac8e800bbaf5b0b->leave($__internal_f1c38425e21a8db83bddf0f684650462dab4d0588e27f8e89ac8e800bbaf5b0b_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
