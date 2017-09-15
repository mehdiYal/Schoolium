<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2153b48e9b29951af96fd6129eddda53b8a9ce08b35bc6332096dad49a0c1ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd37b699716b62c594bf5acdb2c4d6cfb6a4ea20447e4b49ee25ae74d9f6d607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd37b699716b62c594bf5acdb2c4d6cfb6a4ea20447e4b49ee25ae74d9f6d607->enter($__internal_bd37b699716b62c594bf5acdb2c4d6cfb6a4ea20447e4b49ee25ae74d9f6d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_268daeaeec379b3729df196f06a523f00c8e899d0dba18ae20bbfc2a13e4d49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268daeaeec379b3729df196f06a523f00c8e899d0dba18ae20bbfc2a13e4d49f->enter($__internal_268daeaeec379b3729df196f06a523f00c8e899d0dba18ae20bbfc2a13e4d49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bd37b699716b62c594bf5acdb2c4d6cfb6a4ea20447e4b49ee25ae74d9f6d607->leave($__internal_bd37b699716b62c594bf5acdb2c4d6cfb6a4ea20447e4b49ee25ae74d9f6d607_prof);

        
        $__internal_268daeaeec379b3729df196f06a523f00c8e899d0dba18ae20bbfc2a13e4d49f->leave($__internal_268daeaeec379b3729df196f06a523f00c8e899d0dba18ae20bbfc2a13e4d49f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5abc04aa9eee22ecc7c9eb580be531dda07459487ddfa243a94d24376c7fc75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abc04aa9eee22ecc7c9eb580be531dda07459487ddfa243a94d24376c7fc75c->enter($__internal_5abc04aa9eee22ecc7c9eb580be531dda07459487ddfa243a94d24376c7fc75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_175a79f877705abbcb2965ebd98da686149ef4b6b1be9b66cc871d01e84107c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175a79f877705abbcb2965ebd98da686149ef4b6b1be9b66cc871d01e84107c2->enter($__internal_175a79f877705abbcb2965ebd98da686149ef4b6b1be9b66cc871d01e84107c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_175a79f877705abbcb2965ebd98da686149ef4b6b1be9b66cc871d01e84107c2->leave($__internal_175a79f877705abbcb2965ebd98da686149ef4b6b1be9b66cc871d01e84107c2_prof);

        
        $__internal_5abc04aa9eee22ecc7c9eb580be531dda07459487ddfa243a94d24376c7fc75c->leave($__internal_5abc04aa9eee22ecc7c9eb580be531dda07459487ddfa243a94d24376c7fc75c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2b0711adef1ab02fac39182ed9c38b6c60d538678c08885cd4a2446415012b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0711adef1ab02fac39182ed9c38b6c60d538678c08885cd4a2446415012b81->enter($__internal_2b0711adef1ab02fac39182ed9c38b6c60d538678c08885cd4a2446415012b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_140a8a59c949ef618f39c9278b52e42b4151cab67af0da2b272fd2ff02d48fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140a8a59c949ef618f39c9278b52e42b4151cab67af0da2b272fd2ff02d48fdc->enter($__internal_140a8a59c949ef618f39c9278b52e42b4151cab67af0da2b272fd2ff02d48fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_140a8a59c949ef618f39c9278b52e42b4151cab67af0da2b272fd2ff02d48fdc->leave($__internal_140a8a59c949ef618f39c9278b52e42b4151cab67af0da2b272fd2ff02d48fdc_prof);

        
        $__internal_2b0711adef1ab02fac39182ed9c38b6c60d538678c08885cd4a2446415012b81->leave($__internal_2b0711adef1ab02fac39182ed9c38b6c60d538678c08885cd4a2446415012b81_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5c2847e758e8a79b18b5cefc9fec71395a3f511d0a4e2d4c224504c26c54300e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2847e758e8a79b18b5cefc9fec71395a3f511d0a4e2d4c224504c26c54300e->enter($__internal_5c2847e758e8a79b18b5cefc9fec71395a3f511d0a4e2d4c224504c26c54300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7b3a496ee598d01718414d167c824138f604a09cf2b2d1f1854297fda5993b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3a496ee598d01718414d167c824138f604a09cf2b2d1f1854297fda5993b2b->enter($__internal_7b3a496ee598d01718414d167c824138f604a09cf2b2d1f1854297fda5993b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b3a496ee598d01718414d167c824138f604a09cf2b2d1f1854297fda5993b2b->leave($__internal_7b3a496ee598d01718414d167c824138f604a09cf2b2d1f1854297fda5993b2b_prof);

        
        $__internal_5c2847e758e8a79b18b5cefc9fec71395a3f511d0a4e2d4c224504c26c54300e->leave($__internal_5c2847e758e8a79b18b5cefc9fec71395a3f511d0a4e2d4c224504c26c54300e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
