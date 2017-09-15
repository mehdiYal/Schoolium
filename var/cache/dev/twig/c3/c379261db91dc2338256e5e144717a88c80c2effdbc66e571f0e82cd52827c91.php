<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_126071e8eb4adb587cae0210c07d4420db5f52a8037dcd76ed8eda03ed7fa307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_9b77457abe89ea0b178bd6e5e9fcfe6eced8623f1e8a75609c649a5f2f390866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b77457abe89ea0b178bd6e5e9fcfe6eced8623f1e8a75609c649a5f2f390866->enter($__internal_9b77457abe89ea0b178bd6e5e9fcfe6eced8623f1e8a75609c649a5f2f390866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d6348c886a886a83624f94f2bdaa70e462febc1b3f49bbb6f6b665f2bd2244f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6348c886a886a83624f94f2bdaa70e462febc1b3f49bbb6f6b665f2bd2244f7->enter($__internal_d6348c886a886a83624f94f2bdaa70e462febc1b3f49bbb6f6b665f2bd2244f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b77457abe89ea0b178bd6e5e9fcfe6eced8623f1e8a75609c649a5f2f390866->leave($__internal_9b77457abe89ea0b178bd6e5e9fcfe6eced8623f1e8a75609c649a5f2f390866_prof);

        
        $__internal_d6348c886a886a83624f94f2bdaa70e462febc1b3f49bbb6f6b665f2bd2244f7->leave($__internal_d6348c886a886a83624f94f2bdaa70e462febc1b3f49bbb6f6b665f2bd2244f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4858e6151e814f31d132cbb23df1a394e004d71fcbb2e96682b89544040bd993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4858e6151e814f31d132cbb23df1a394e004d71fcbb2e96682b89544040bd993->enter($__internal_4858e6151e814f31d132cbb23df1a394e004d71fcbb2e96682b89544040bd993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3ba5af74428763474d45232416e1752c7d145f743650a05c7bf45e5eb53255a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ba5af74428763474d45232416e1752c7d145f743650a05c7bf45e5eb53255a->enter($__internal_c3ba5af74428763474d45232416e1752c7d145f743650a05c7bf45e5eb53255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c3ba5af74428763474d45232416e1752c7d145f743650a05c7bf45e5eb53255a->leave($__internal_c3ba5af74428763474d45232416e1752c7d145f743650a05c7bf45e5eb53255a_prof);

        
        $__internal_4858e6151e814f31d132cbb23df1a394e004d71fcbb2e96682b89544040bd993->leave($__internal_4858e6151e814f31d132cbb23df1a394e004d71fcbb2e96682b89544040bd993_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
