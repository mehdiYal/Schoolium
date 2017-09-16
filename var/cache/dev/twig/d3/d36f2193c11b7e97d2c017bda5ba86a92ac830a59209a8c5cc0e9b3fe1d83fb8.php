<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_37b0f039533a20a7270d216a36c5c20b20a66add3184093a3ccef98c170cbe96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_49de86c8d59c4b947e30ed295607ed884bd39fbb04a145b8a457102d58df594f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49de86c8d59c4b947e30ed295607ed884bd39fbb04a145b8a457102d58df594f->enter($__internal_49de86c8d59c4b947e30ed295607ed884bd39fbb04a145b8a457102d58df594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_de3aa773633bb90ac394586e878135af91edd3dc2dc7099a4d0c1a456d100a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3aa773633bb90ac394586e878135af91edd3dc2dc7099a4d0c1a456d100a0c->enter($__internal_de3aa773633bb90ac394586e878135af91edd3dc2dc7099a4d0c1a456d100a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49de86c8d59c4b947e30ed295607ed884bd39fbb04a145b8a457102d58df594f->leave($__internal_49de86c8d59c4b947e30ed295607ed884bd39fbb04a145b8a457102d58df594f_prof);

        
        $__internal_de3aa773633bb90ac394586e878135af91edd3dc2dc7099a4d0c1a456d100a0c->leave($__internal_de3aa773633bb90ac394586e878135af91edd3dc2dc7099a4d0c1a456d100a0c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74c268c37ee645fd334711121fbeae776cd4b51bfe7f473416312d6dd13b0d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c268c37ee645fd334711121fbeae776cd4b51bfe7f473416312d6dd13b0d51->enter($__internal_74c268c37ee645fd334711121fbeae776cd4b51bfe7f473416312d6dd13b0d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e1c9928d20b2564b2f2205db697794e62e179592e56c11013db47dcf8d2ab7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1c9928d20b2564b2f2205db697794e62e179592e56c11013db47dcf8d2ab7e->enter($__internal_6e1c9928d20b2564b2f2205db697794e62e179592e56c11013db47dcf8d2ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6e1c9928d20b2564b2f2205db697794e62e179592e56c11013db47dcf8d2ab7e->leave($__internal_6e1c9928d20b2564b2f2205db697794e62e179592e56c11013db47dcf8d2ab7e_prof);

        
        $__internal_74c268c37ee645fd334711121fbeae776cd4b51bfe7f473416312d6dd13b0d51->leave($__internal_74c268c37ee645fd334711121fbeae776cd4b51bfe7f473416312d6dd13b0d51_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
