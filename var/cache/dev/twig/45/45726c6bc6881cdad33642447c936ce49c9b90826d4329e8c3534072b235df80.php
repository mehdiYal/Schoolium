<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_70e010c7b4ff4403cdfda0252f71551df2105b48e4acff64d4925836fbe43417 extends Twig_Template
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
        $__internal_8c0cd510f81fe840438e15cf7a9c3c96ab4e3afe06ea9f79d5d818bca0d96062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0cd510f81fe840438e15cf7a9c3c96ab4e3afe06ea9f79d5d818bca0d96062->enter($__internal_8c0cd510f81fe840438e15cf7a9c3c96ab4e3afe06ea9f79d5d818bca0d96062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_bc27c7b9bf284ea63ea1f9c4a5913aee90eb9325d8ab7233008beba85ac5c40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc27c7b9bf284ea63ea1f9c4a5913aee90eb9325d8ab7233008beba85ac5c40d->enter($__internal_bc27c7b9bf284ea63ea1f9c4a5913aee90eb9325d8ab7233008beba85ac5c40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0cd510f81fe840438e15cf7a9c3c96ab4e3afe06ea9f79d5d818bca0d96062->leave($__internal_8c0cd510f81fe840438e15cf7a9c3c96ab4e3afe06ea9f79d5d818bca0d96062_prof);

        
        $__internal_bc27c7b9bf284ea63ea1f9c4a5913aee90eb9325d8ab7233008beba85ac5c40d->leave($__internal_bc27c7b9bf284ea63ea1f9c4a5913aee90eb9325d8ab7233008beba85ac5c40d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fec46cd3a655bd4698d0583abad4c94025a3f0d54e5ab629c381b61c3403a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fec46cd3a655bd4698d0583abad4c94025a3f0d54e5ab629c381b61c3403a34->enter($__internal_3fec46cd3a655bd4698d0583abad4c94025a3f0d54e5ab629c381b61c3403a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2216e626de3241cb1056dc8fe53e30f0411202b12ef4259a767e889cb727f419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2216e626de3241cb1056dc8fe53e30f0411202b12ef4259a767e889cb727f419->enter($__internal_2216e626de3241cb1056dc8fe53e30f0411202b12ef4259a767e889cb727f419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2216e626de3241cb1056dc8fe53e30f0411202b12ef4259a767e889cb727f419->leave($__internal_2216e626de3241cb1056dc8fe53e30f0411202b12ef4259a767e889cb727f419_prof);

        
        $__internal_3fec46cd3a655bd4698d0583abad4c94025a3f0d54e5ab629c381b61c3403a34->leave($__internal_3fec46cd3a655bd4698d0583abad4c94025a3f0d54e5ab629c381b61c3403a34_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
