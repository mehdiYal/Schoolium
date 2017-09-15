<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ce00d3f84e215a7dd5900504a734b124c8fa4d06957df84a4b0582a82a4aa33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_18c3dda62ec2fda1fd7dcc0e7a4986e135af0d335ec037feceedebdc59bb696b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c3dda62ec2fda1fd7dcc0e7a4986e135af0d335ec037feceedebdc59bb696b->enter($__internal_18c3dda62ec2fda1fd7dcc0e7a4986e135af0d335ec037feceedebdc59bb696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_064afe55de24f5277370b772b40f4325acfced250deecac37bd3626dac1c9bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064afe55de24f5277370b772b40f4325acfced250deecac37bd3626dac1c9bb9->enter($__internal_064afe55de24f5277370b772b40f4325acfced250deecac37bd3626dac1c9bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c3dda62ec2fda1fd7dcc0e7a4986e135af0d335ec037feceedebdc59bb696b->leave($__internal_18c3dda62ec2fda1fd7dcc0e7a4986e135af0d335ec037feceedebdc59bb696b_prof);

        
        $__internal_064afe55de24f5277370b772b40f4325acfced250deecac37bd3626dac1c9bb9->leave($__internal_064afe55de24f5277370b772b40f4325acfced250deecac37bd3626dac1c9bb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc9b846a5ddc271f03b4ac5f3d18e7043a4e6f8f34da64a1d8eb117594a63ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9b846a5ddc271f03b4ac5f3d18e7043a4e6f8f34da64a1d8eb117594a63ec0->enter($__internal_bc9b846a5ddc271f03b4ac5f3d18e7043a4e6f8f34da64a1d8eb117594a63ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_05a5f9898740955f44413318186c16326001a75788d502944f5cca33c504e10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a5f9898740955f44413318186c16326001a75788d502944f5cca33c504e10b->enter($__internal_05a5f9898740955f44413318186c16326001a75788d502944f5cca33c504e10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_05a5f9898740955f44413318186c16326001a75788d502944f5cca33c504e10b->leave($__internal_05a5f9898740955f44413318186c16326001a75788d502944f5cca33c504e10b_prof);

        
        $__internal_bc9b846a5ddc271f03b4ac5f3d18e7043a4e6f8f34da64a1d8eb117594a63ec0->leave($__internal_bc9b846a5ddc271f03b4ac5f3d18e7043a4e6f8f34da64a1d8eb117594a63ec0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
