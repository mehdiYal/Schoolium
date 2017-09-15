<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6bed18124c9bdca4ae01d82739d5173c769ae941aac0fc8cf5458d61db72de5a extends Twig_Template
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
        $__internal_f3825151e0571d4f878e9534ba234c23898ba57772101561bcc7b2a29ad48f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3825151e0571d4f878e9534ba234c23898ba57772101561bcc7b2a29ad48f1c->enter($__internal_f3825151e0571d4f878e9534ba234c23898ba57772101561bcc7b2a29ad48f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_1cae4900ee02312e70a7061a752b94482651e7d045f6006d95713193ec4a3fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cae4900ee02312e70a7061a752b94482651e7d045f6006d95713193ec4a3fe4->enter($__internal_1cae4900ee02312e70a7061a752b94482651e7d045f6006d95713193ec4a3fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3825151e0571d4f878e9534ba234c23898ba57772101561bcc7b2a29ad48f1c->leave($__internal_f3825151e0571d4f878e9534ba234c23898ba57772101561bcc7b2a29ad48f1c_prof);

        
        $__internal_1cae4900ee02312e70a7061a752b94482651e7d045f6006d95713193ec4a3fe4->leave($__internal_1cae4900ee02312e70a7061a752b94482651e7d045f6006d95713193ec4a3fe4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b53a3c5ef310bee2843750acbfded441bc0ba2a07ed3240257821ed799d377e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b53a3c5ef310bee2843750acbfded441bc0ba2a07ed3240257821ed799d377e->enter($__internal_3b53a3c5ef310bee2843750acbfded441bc0ba2a07ed3240257821ed799d377e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fa807b6dced67349521440a6dca97f6a57bf3501c6f6429618b39a07bfe16729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa807b6dced67349521440a6dca97f6a57bf3501c6f6429618b39a07bfe16729->enter($__internal_fa807b6dced67349521440a6dca97f6a57bf3501c6f6429618b39a07bfe16729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_fa807b6dced67349521440a6dca97f6a57bf3501c6f6429618b39a07bfe16729->leave($__internal_fa807b6dced67349521440a6dca97f6a57bf3501c6f6429618b39a07bfe16729_prof);

        
        $__internal_3b53a3c5ef310bee2843750acbfded441bc0ba2a07ed3240257821ed799d377e->leave($__internal_3b53a3c5ef310bee2843750acbfded441bc0ba2a07ed3240257821ed799d377e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a9cd227c83714c78781a4d3418ef0c732d3c99735b749210180130f6b0c8735e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9cd227c83714c78781a4d3418ef0c732d3c99735b749210180130f6b0c8735e->enter($__internal_a9cd227c83714c78781a4d3418ef0c732d3c99735b749210180130f6b0c8735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3d1d39033851bcb34d63735e48b7e63daa7cf1a0e83dfd453f373dec5c27f319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1d39033851bcb34d63735e48b7e63daa7cf1a0e83dfd453f373dec5c27f319->enter($__internal_3d1d39033851bcb34d63735e48b7e63daa7cf1a0e83dfd453f373dec5c27f319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d1d39033851bcb34d63735e48b7e63daa7cf1a0e83dfd453f373dec5c27f319->leave($__internal_3d1d39033851bcb34d63735e48b7e63daa7cf1a0e83dfd453f373dec5c27f319_prof);

        
        $__internal_a9cd227c83714c78781a4d3418ef0c732d3c99735b749210180130f6b0c8735e->leave($__internal_a9cd227c83714c78781a4d3418ef0c732d3c99735b749210180130f6b0c8735e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_05f9357aca6a9a55ede9d046721587e8d157a80273fa4f3894b067a5b223fd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f9357aca6a9a55ede9d046721587e8d157a80273fa4f3894b067a5b223fd19->enter($__internal_05f9357aca6a9a55ede9d046721587e8d157a80273fa4f3894b067a5b223fd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4f10a36818c7c9841e09d22fce851031129c66ed0d1340269eea00089b3d86c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f10a36818c7c9841e09d22fce851031129c66ed0d1340269eea00089b3d86c2->enter($__internal_4f10a36818c7c9841e09d22fce851031129c66ed0d1340269eea00089b3d86c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f10a36818c7c9841e09d22fce851031129c66ed0d1340269eea00089b3d86c2->leave($__internal_4f10a36818c7c9841e09d22fce851031129c66ed0d1340269eea00089b3d86c2_prof);

        
        $__internal_05f9357aca6a9a55ede9d046721587e8d157a80273fa4f3894b067a5b223fd19->leave($__internal_05f9357aca6a9a55ede9d046721587e8d157a80273fa4f3894b067a5b223fd19_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
