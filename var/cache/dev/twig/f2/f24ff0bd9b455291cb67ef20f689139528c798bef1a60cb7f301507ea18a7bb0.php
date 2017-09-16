<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_542ce5822e33410c6eb22da382c01e084db94458c94c14a6b9de9df841dec068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_24e3f18684fd4ab740c16011a25207038ccea9fd452d5f56a063becaba5a4fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e3f18684fd4ab740c16011a25207038ccea9fd452d5f56a063becaba5a4fb0->enter($__internal_24e3f18684fd4ab740c16011a25207038ccea9fd452d5f56a063becaba5a4fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_711ff0e26f0b774cb9f905c0bb93e3c0457e2943de12e9191d3fafe656aaf5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711ff0e26f0b774cb9f905c0bb93e3c0457e2943de12e9191d3fafe656aaf5c8->enter($__internal_711ff0e26f0b774cb9f905c0bb93e3c0457e2943de12e9191d3fafe656aaf5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e3f18684fd4ab740c16011a25207038ccea9fd452d5f56a063becaba5a4fb0->leave($__internal_24e3f18684fd4ab740c16011a25207038ccea9fd452d5f56a063becaba5a4fb0_prof);

        
        $__internal_711ff0e26f0b774cb9f905c0bb93e3c0457e2943de12e9191d3fafe656aaf5c8->leave($__internal_711ff0e26f0b774cb9f905c0bb93e3c0457e2943de12e9191d3fafe656aaf5c8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4aacf4f6fee1a2413b7c771e7f467922802b3e52fa074680db86397d7c5b00ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aacf4f6fee1a2413b7c771e7f467922802b3e52fa074680db86397d7c5b00ec->enter($__internal_4aacf4f6fee1a2413b7c771e7f467922802b3e52fa074680db86397d7c5b00ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9807c5ac6ad047321c4a921795dd52390f142cc1cb0db11c2170ba11968b622e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9807c5ac6ad047321c4a921795dd52390f142cc1cb0db11c2170ba11968b622e->enter($__internal_9807c5ac6ad047321c4a921795dd52390f142cc1cb0db11c2170ba11968b622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9807c5ac6ad047321c4a921795dd52390f142cc1cb0db11c2170ba11968b622e->leave($__internal_9807c5ac6ad047321c4a921795dd52390f142cc1cb0db11c2170ba11968b622e_prof);

        
        $__internal_4aacf4f6fee1a2413b7c771e7f467922802b3e52fa074680db86397d7c5b00ec->leave($__internal_4aacf4f6fee1a2413b7c771e7f467922802b3e52fa074680db86397d7c5b00ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
