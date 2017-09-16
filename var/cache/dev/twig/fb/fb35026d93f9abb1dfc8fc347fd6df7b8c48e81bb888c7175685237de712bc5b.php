<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f005f94db9f77f322dddbc17cdf34f91fb9a6d88356e1d9a270360539a617cc0 extends Twig_Template
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
        $__internal_cbdc3c8dba81b44ca8325d9a743d476480a5676b8b21afe91a39eba6b7c60921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdc3c8dba81b44ca8325d9a743d476480a5676b8b21afe91a39eba6b7c60921->enter($__internal_cbdc3c8dba81b44ca8325d9a743d476480a5676b8b21afe91a39eba6b7c60921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_896fa31c811232a29f5867bf3930b4453ed2ce47f75de9ecab0e975292c455c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896fa31c811232a29f5867bf3930b4453ed2ce47f75de9ecab0e975292c455c2->enter($__internal_896fa31c811232a29f5867bf3930b4453ed2ce47f75de9ecab0e975292c455c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cbdc3c8dba81b44ca8325d9a743d476480a5676b8b21afe91a39eba6b7c60921->leave($__internal_cbdc3c8dba81b44ca8325d9a743d476480a5676b8b21afe91a39eba6b7c60921_prof);

        
        $__internal_896fa31c811232a29f5867bf3930b4453ed2ce47f75de9ecab0e975292c455c2->leave($__internal_896fa31c811232a29f5867bf3930b4453ed2ce47f75de9ecab0e975292c455c2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2b35d59ec019ca6e089d59b7aacd86528a978d302fb8dc2f93d1bf9df2c60286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b35d59ec019ca6e089d59b7aacd86528a978d302fb8dc2f93d1bf9df2c60286->enter($__internal_2b35d59ec019ca6e089d59b7aacd86528a978d302fb8dc2f93d1bf9df2c60286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_674afaacdcce874f2f5d1973603f9518aecdcaab7a2a845fb58f6fbc3c269aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674afaacdcce874f2f5d1973603f9518aecdcaab7a2a845fb58f6fbc3c269aee->enter($__internal_674afaacdcce874f2f5d1973603f9518aecdcaab7a2a845fb58f6fbc3c269aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_674afaacdcce874f2f5d1973603f9518aecdcaab7a2a845fb58f6fbc3c269aee->leave($__internal_674afaacdcce874f2f5d1973603f9518aecdcaab7a2a845fb58f6fbc3c269aee_prof);

        
        $__internal_2b35d59ec019ca6e089d59b7aacd86528a978d302fb8dc2f93d1bf9df2c60286->leave($__internal_2b35d59ec019ca6e089d59b7aacd86528a978d302fb8dc2f93d1bf9df2c60286_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5717a0a5b20b86d50749750a62506dc171f9c153edd631fe6b38a503aeec101d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5717a0a5b20b86d50749750a62506dc171f9c153edd631fe6b38a503aeec101d->enter($__internal_5717a0a5b20b86d50749750a62506dc171f9c153edd631fe6b38a503aeec101d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_de9f7ee4d515a005c97c540b9832697388640053568faf088640f321c2b965de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9f7ee4d515a005c97c540b9832697388640053568faf088640f321c2b965de->enter($__internal_de9f7ee4d515a005c97c540b9832697388640053568faf088640f321c2b965de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_de9f7ee4d515a005c97c540b9832697388640053568faf088640f321c2b965de->leave($__internal_de9f7ee4d515a005c97c540b9832697388640053568faf088640f321c2b965de_prof);

        
        $__internal_5717a0a5b20b86d50749750a62506dc171f9c153edd631fe6b38a503aeec101d->leave($__internal_5717a0a5b20b86d50749750a62506dc171f9c153edd631fe6b38a503aeec101d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f0d4f284ec83ebcfc0fa40bccb14eac182cce76316d732121b1620b4a0f20d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d4f284ec83ebcfc0fa40bccb14eac182cce76316d732121b1620b4a0f20d36->enter($__internal_f0d4f284ec83ebcfc0fa40bccb14eac182cce76316d732121b1620b4a0f20d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7f801bdac9884f405fbeaad40bd913bc52eb08e9af4f71e7db3bb332857e7ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f801bdac9884f405fbeaad40bd913bc52eb08e9af4f71e7db3bb332857e7ad6->enter($__internal_7f801bdac9884f405fbeaad40bd913bc52eb08e9af4f71e7db3bb332857e7ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7f801bdac9884f405fbeaad40bd913bc52eb08e9af4f71e7db3bb332857e7ad6->leave($__internal_7f801bdac9884f405fbeaad40bd913bc52eb08e9af4f71e7db3bb332857e7ad6_prof);

        
        $__internal_f0d4f284ec83ebcfc0fa40bccb14eac182cce76316d732121b1620b4a0f20d36->leave($__internal_f0d4f284ec83ebcfc0fa40bccb14eac182cce76316d732121b1620b4a0f20d36_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
