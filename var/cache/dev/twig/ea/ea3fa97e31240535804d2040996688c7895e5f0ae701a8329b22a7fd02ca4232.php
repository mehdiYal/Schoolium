<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_518dfe9ac541d13a99cf4edb625eb89e6cb519b8aae5755467dae980e686f171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_1571f9a6542707a2f0d2234b5367465f285732f2c80866fa331544e5832e4b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1571f9a6542707a2f0d2234b5367465f285732f2c80866fa331544e5832e4b8e->enter($__internal_1571f9a6542707a2f0d2234b5367465f285732f2c80866fa331544e5832e4b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_7f31ba5002bffe75314bad0660924a0045d5ce20cc4ccc6c8e5f8132c6cbe601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f31ba5002bffe75314bad0660924a0045d5ce20cc4ccc6c8e5f8132c6cbe601->enter($__internal_7f31ba5002bffe75314bad0660924a0045d5ce20cc4ccc6c8e5f8132c6cbe601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1571f9a6542707a2f0d2234b5367465f285732f2c80866fa331544e5832e4b8e->leave($__internal_1571f9a6542707a2f0d2234b5367465f285732f2c80866fa331544e5832e4b8e_prof);

        
        $__internal_7f31ba5002bffe75314bad0660924a0045d5ce20cc4ccc6c8e5f8132c6cbe601->leave($__internal_7f31ba5002bffe75314bad0660924a0045d5ce20cc4ccc6c8e5f8132c6cbe601_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2eadd9c53bef3404be87261bc6f9fe5138da995dda809a91c148985df2cba566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eadd9c53bef3404be87261bc6f9fe5138da995dda809a91c148985df2cba566->enter($__internal_2eadd9c53bef3404be87261bc6f9fe5138da995dda809a91c148985df2cba566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76d6faa89282d6cd71c5748eb7e498d0e90ab8f85ad5036a9e760cbd1bfca59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d6faa89282d6cd71c5748eb7e498d0e90ab8f85ad5036a9e760cbd1bfca59a->enter($__internal_76d6faa89282d6cd71c5748eb7e498d0e90ab8f85ad5036a9e760cbd1bfca59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_76d6faa89282d6cd71c5748eb7e498d0e90ab8f85ad5036a9e760cbd1bfca59a->leave($__internal_76d6faa89282d6cd71c5748eb7e498d0e90ab8f85ad5036a9e760cbd1bfca59a_prof);

        
        $__internal_2eadd9c53bef3404be87261bc6f9fe5138da995dda809a91c148985df2cba566->leave($__internal_2eadd9c53bef3404be87261bc6f9fe5138da995dda809a91c148985df2cba566_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
