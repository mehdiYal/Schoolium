<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_0a66db1d453019ec933d9eb5adbb819f44a0ed72c48e08f4e8fd0533a96e0311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_10442eaa49288d69e7c4778573aeacfc1a9dddc1d36da77724bec776597f9f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10442eaa49288d69e7c4778573aeacfc1a9dddc1d36da77724bec776597f9f59->enter($__internal_10442eaa49288d69e7c4778573aeacfc1a9dddc1d36da77724bec776597f9f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_fffc319f99afa2c6c43424ee581164603b1c8e3eb5f3f287bb61163c62f56348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffc319f99afa2c6c43424ee581164603b1c8e3eb5f3f287bb61163c62f56348->enter($__internal_fffc319f99afa2c6c43424ee581164603b1c8e3eb5f3f287bb61163c62f56348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10442eaa49288d69e7c4778573aeacfc1a9dddc1d36da77724bec776597f9f59->leave($__internal_10442eaa49288d69e7c4778573aeacfc1a9dddc1d36da77724bec776597f9f59_prof);

        
        $__internal_fffc319f99afa2c6c43424ee581164603b1c8e3eb5f3f287bb61163c62f56348->leave($__internal_fffc319f99afa2c6c43424ee581164603b1c8e3eb5f3f287bb61163c62f56348_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed921709944f1f46e055b3b3d0e4294462f44dcbb1a5511f0aaf04fd7505e972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed921709944f1f46e055b3b3d0e4294462f44dcbb1a5511f0aaf04fd7505e972->enter($__internal_ed921709944f1f46e055b3b3d0e4294462f44dcbb1a5511f0aaf04fd7505e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_47a59b201441102c7466ee27bf68c46c857dc40b8f29d094bc39938a64321378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a59b201441102c7466ee27bf68c46c857dc40b8f29d094bc39938a64321378->enter($__internal_47a59b201441102c7466ee27bf68c46c857dc40b8f29d094bc39938a64321378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_47a59b201441102c7466ee27bf68c46c857dc40b8f29d094bc39938a64321378->leave($__internal_47a59b201441102c7466ee27bf68c46c857dc40b8f29d094bc39938a64321378_prof);

        
        $__internal_ed921709944f1f46e055b3b3d0e4294462f44dcbb1a5511f0aaf04fd7505e972->leave($__internal_ed921709944f1f46e055b3b3d0e4294462f44dcbb1a5511f0aaf04fd7505e972_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
