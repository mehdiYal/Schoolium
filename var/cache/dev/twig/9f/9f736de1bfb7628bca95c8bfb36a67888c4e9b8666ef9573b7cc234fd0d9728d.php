<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_85faf65782437735cdd6c20c5ea463db3c015b474845e533e63ca44edd928ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_5afe99caf768421d7ef197c3a54dffc5be9cbcc7c858560722f5f4b812b5f326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afe99caf768421d7ef197c3a54dffc5be9cbcc7c858560722f5f4b812b5f326->enter($__internal_5afe99caf768421d7ef197c3a54dffc5be9cbcc7c858560722f5f4b812b5f326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_91a620b78745ef035c86c3c08eff88a562faccd874c8ee2e57d7d22edb864edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a620b78745ef035c86c3c08eff88a562faccd874c8ee2e57d7d22edb864edb->enter($__internal_91a620b78745ef035c86c3c08eff88a562faccd874c8ee2e57d7d22edb864edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5afe99caf768421d7ef197c3a54dffc5be9cbcc7c858560722f5f4b812b5f326->leave($__internal_5afe99caf768421d7ef197c3a54dffc5be9cbcc7c858560722f5f4b812b5f326_prof);

        
        $__internal_91a620b78745ef035c86c3c08eff88a562faccd874c8ee2e57d7d22edb864edb->leave($__internal_91a620b78745ef035c86c3c08eff88a562faccd874c8ee2e57d7d22edb864edb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9cb64958f12c8652145441835726ce142252126f7c72d15c6f9f07bb35704c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cb64958f12c8652145441835726ce142252126f7c72d15c6f9f07bb35704c7->enter($__internal_f9cb64958f12c8652145441835726ce142252126f7c72d15c6f9f07bb35704c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a36b05909c63930ca3f3e26a31bef5e6bf1f15702f05e24ee5f1e6fe3d9a3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a36b05909c63930ca3f3e26a31bef5e6bf1f15702f05e24ee5f1e6fe3d9a3e6->enter($__internal_8a36b05909c63930ca3f3e26a31bef5e6bf1f15702f05e24ee5f1e6fe3d9a3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8a36b05909c63930ca3f3e26a31bef5e6bf1f15702f05e24ee5f1e6fe3d9a3e6->leave($__internal_8a36b05909c63930ca3f3e26a31bef5e6bf1f15702f05e24ee5f1e6fe3d9a3e6_prof);

        
        $__internal_f9cb64958f12c8652145441835726ce142252126f7c72d15c6f9f07bb35704c7->leave($__internal_f9cb64958f12c8652145441835726ce142252126f7c72d15c6f9f07bb35704c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
