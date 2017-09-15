<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_74bb0f4a81e996c5da683467d74cb1861a7079244961a426ee8851ebe0654cbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_b5274eb7291bbba7478d85c4d7788f108a1b59c214bdeeceac749b2fc480edc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5274eb7291bbba7478d85c4d7788f108a1b59c214bdeeceac749b2fc480edc7->enter($__internal_b5274eb7291bbba7478d85c4d7788f108a1b59c214bdeeceac749b2fc480edc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_868b86b16f78ce1098acc30f521ac816342d262315fb9a386aed28e49902362e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868b86b16f78ce1098acc30f521ac816342d262315fb9a386aed28e49902362e->enter($__internal_868b86b16f78ce1098acc30f521ac816342d262315fb9a386aed28e49902362e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5274eb7291bbba7478d85c4d7788f108a1b59c214bdeeceac749b2fc480edc7->leave($__internal_b5274eb7291bbba7478d85c4d7788f108a1b59c214bdeeceac749b2fc480edc7_prof);

        
        $__internal_868b86b16f78ce1098acc30f521ac816342d262315fb9a386aed28e49902362e->leave($__internal_868b86b16f78ce1098acc30f521ac816342d262315fb9a386aed28e49902362e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44719fb906107ed23c8f5b883b0b71da46bd6472071404d5150adc69f43b6c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44719fb906107ed23c8f5b883b0b71da46bd6472071404d5150adc69f43b6c3d->enter($__internal_44719fb906107ed23c8f5b883b0b71da46bd6472071404d5150adc69f43b6c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3fc6b7d0551695676d571969cf19be8ecb4942340e24fbba96b2dac9bfac8eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc6b7d0551695676d571969cf19be8ecb4942340e24fbba96b2dac9bfac8eb5->enter($__internal_3fc6b7d0551695676d571969cf19be8ecb4942340e24fbba96b2dac9bfac8eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3fc6b7d0551695676d571969cf19be8ecb4942340e24fbba96b2dac9bfac8eb5->leave($__internal_3fc6b7d0551695676d571969cf19be8ecb4942340e24fbba96b2dac9bfac8eb5_prof);

        
        $__internal_44719fb906107ed23c8f5b883b0b71da46bd6472071404d5150adc69f43b6c3d->leave($__internal_44719fb906107ed23c8f5b883b0b71da46bd6472071404d5150adc69f43b6c3d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
