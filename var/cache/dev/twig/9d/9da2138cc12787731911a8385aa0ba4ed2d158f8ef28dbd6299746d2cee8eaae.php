<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_22e3d684e273eeee28b5254e3271dc32f0e9923eea92051a16a2651d95620f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_27f9f5f85531d94a61d1cd22133e13d56404dd2ba274a5954929b1afbc8c3f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f9f5f85531d94a61d1cd22133e13d56404dd2ba274a5954929b1afbc8c3f08->enter($__internal_27f9f5f85531d94a61d1cd22133e13d56404dd2ba274a5954929b1afbc8c3f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_a80de9745991fddbb586670cd86b4e90f4a856bb25af4be5326fb20ba7a4e193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80de9745991fddbb586670cd86b4e90f4a856bb25af4be5326fb20ba7a4e193->enter($__internal_a80de9745991fddbb586670cd86b4e90f4a856bb25af4be5326fb20ba7a4e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f9f5f85531d94a61d1cd22133e13d56404dd2ba274a5954929b1afbc8c3f08->leave($__internal_27f9f5f85531d94a61d1cd22133e13d56404dd2ba274a5954929b1afbc8c3f08_prof);

        
        $__internal_a80de9745991fddbb586670cd86b4e90f4a856bb25af4be5326fb20ba7a4e193->leave($__internal_a80de9745991fddbb586670cd86b4e90f4a856bb25af4be5326fb20ba7a4e193_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4a37a7de841ffb473966797671e07fe1307a03177d11aece74f752ac1f197bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a37a7de841ffb473966797671e07fe1307a03177d11aece74f752ac1f197bf->enter($__internal_c4a37a7de841ffb473966797671e07fe1307a03177d11aece74f752ac1f197bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c519013903d309c45881ba6713fbd1f5c01c524c02964c278205e6c7f4a217b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c519013903d309c45881ba6713fbd1f5c01c524c02964c278205e6c7f4a217b->enter($__internal_7c519013903d309c45881ba6713fbd1f5c01c524c02964c278205e6c7f4a217b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7c519013903d309c45881ba6713fbd1f5c01c524c02964c278205e6c7f4a217b->leave($__internal_7c519013903d309c45881ba6713fbd1f5c01c524c02964c278205e6c7f4a217b_prof);

        
        $__internal_c4a37a7de841ffb473966797671e07fe1307a03177d11aece74f752ac1f197bf->leave($__internal_c4a37a7de841ffb473966797671e07fe1307a03177d11aece74f752ac1f197bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
