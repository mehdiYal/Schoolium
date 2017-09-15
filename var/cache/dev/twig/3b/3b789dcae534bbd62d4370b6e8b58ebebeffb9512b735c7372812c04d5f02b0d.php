<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a8766f8ad97ba714943c19ae7e83ef34ee29f5de36831996a90851cab62a26d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d7a6f297e09542e5b1a23b9c440e37d4c2adad27d72427457acb8cce819e8a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a6f297e09542e5b1a23b9c440e37d4c2adad27d72427457acb8cce819e8a72->enter($__internal_d7a6f297e09542e5b1a23b9c440e37d4c2adad27d72427457acb8cce819e8a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_de16020fd5c1ae81f171463fb53a5230d54e697b536a212f5a8f7db3a28cdab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de16020fd5c1ae81f171463fb53a5230d54e697b536a212f5a8f7db3a28cdab7->enter($__internal_de16020fd5c1ae81f171463fb53a5230d54e697b536a212f5a8f7db3a28cdab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a6f297e09542e5b1a23b9c440e37d4c2adad27d72427457acb8cce819e8a72->leave($__internal_d7a6f297e09542e5b1a23b9c440e37d4c2adad27d72427457acb8cce819e8a72_prof);

        
        $__internal_de16020fd5c1ae81f171463fb53a5230d54e697b536a212f5a8f7db3a28cdab7->leave($__internal_de16020fd5c1ae81f171463fb53a5230d54e697b536a212f5a8f7db3a28cdab7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7dd7b9723ba8da6f1936f718df5c80b0d7971f636b4f579cbe5601f8d4b21608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd7b9723ba8da6f1936f718df5c80b0d7971f636b4f579cbe5601f8d4b21608->enter($__internal_7dd7b9723ba8da6f1936f718df5c80b0d7971f636b4f579cbe5601f8d4b21608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_58fd7ea85c3a72936687961615efde0f8ff4b0223fb04a6d55f90a157ceaa384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fd7ea85c3a72936687961615efde0f8ff4b0223fb04a6d55f90a157ceaa384->enter($__internal_58fd7ea85c3a72936687961615efde0f8ff4b0223fb04a6d55f90a157ceaa384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_58fd7ea85c3a72936687961615efde0f8ff4b0223fb04a6d55f90a157ceaa384->leave($__internal_58fd7ea85c3a72936687961615efde0f8ff4b0223fb04a6d55f90a157ceaa384_prof);

        
        $__internal_7dd7b9723ba8da6f1936f718df5c80b0d7971f636b4f579cbe5601f8d4b21608->leave($__internal_7dd7b9723ba8da6f1936f718df5c80b0d7971f636b4f579cbe5601f8d4b21608_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
