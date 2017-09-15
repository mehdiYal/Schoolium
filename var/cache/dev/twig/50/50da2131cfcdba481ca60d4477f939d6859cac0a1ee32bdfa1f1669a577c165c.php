<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_99b9e4703e43c91c969313a817e7b2bc364f5fb80750ff4ab02f10a2ebd0a9c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8d32f811a17225a91e17aba0831e08859d303b5257af85711df8ed965993d3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d32f811a17225a91e17aba0831e08859d303b5257af85711df8ed965993d3a2->enter($__internal_8d32f811a17225a91e17aba0831e08859d303b5257af85711df8ed965993d3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_b8f5e243d95a17f5ac11222ebfc302fff9e577a83a5c3defab1ecac3df383b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f5e243d95a17f5ac11222ebfc302fff9e577a83a5c3defab1ecac3df383b21->enter($__internal_b8f5e243d95a17f5ac11222ebfc302fff9e577a83a5c3defab1ecac3df383b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d32f811a17225a91e17aba0831e08859d303b5257af85711df8ed965993d3a2->leave($__internal_8d32f811a17225a91e17aba0831e08859d303b5257af85711df8ed965993d3a2_prof);

        
        $__internal_b8f5e243d95a17f5ac11222ebfc302fff9e577a83a5c3defab1ecac3df383b21->leave($__internal_b8f5e243d95a17f5ac11222ebfc302fff9e577a83a5c3defab1ecac3df383b21_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b3fdb8880390242f3f864bd7d9e6f9bdac7538ce0d7b2cb6c93b1310709a5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3fdb8880390242f3f864bd7d9e6f9bdac7538ce0d7b2cb6c93b1310709a5d9->enter($__internal_3b3fdb8880390242f3f864bd7d9e6f9bdac7538ce0d7b2cb6c93b1310709a5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62d3c179e6070aae05e3b4c721ed70a603894ebecfa8b5f9a9bd1bab142bf91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d3c179e6070aae05e3b4c721ed70a603894ebecfa8b5f9a9bd1bab142bf91c->enter($__internal_62d3c179e6070aae05e3b4c721ed70a603894ebecfa8b5f9a9bd1bab142bf91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_62d3c179e6070aae05e3b4c721ed70a603894ebecfa8b5f9a9bd1bab142bf91c->leave($__internal_62d3c179e6070aae05e3b4c721ed70a603894ebecfa8b5f9a9bd1bab142bf91c_prof);

        
        $__internal_3b3fdb8880390242f3f864bd7d9e6f9bdac7538ce0d7b2cb6c93b1310709a5d9->leave($__internal_3b3fdb8880390242f3f864bd7d9e6f9bdac7538ce0d7b2cb6c93b1310709a5d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
