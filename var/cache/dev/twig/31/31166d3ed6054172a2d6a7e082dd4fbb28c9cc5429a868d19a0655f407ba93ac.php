<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_cd4de73fde2a71f79dcaa6c79c7012113e05272a31fd01d3c9886166d07f977f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4064319feabf612202dc4b71d24c44cec327791e9d95ce1d9bce7c974cdd875b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4064319feabf612202dc4b71d24c44cec327791e9d95ce1d9bce7c974cdd875b->enter($__internal_4064319feabf612202dc4b71d24c44cec327791e9d95ce1d9bce7c974cdd875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_0fe8f1829892a1cb4f366e1e47ba33076727b5981b4020251c3e49af0e7de0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe8f1829892a1cb4f366e1e47ba33076727b5981b4020251c3e49af0e7de0c4->enter($__internal_0fe8f1829892a1cb4f366e1e47ba33076727b5981b4020251c3e49af0e7de0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4064319feabf612202dc4b71d24c44cec327791e9d95ce1d9bce7c974cdd875b->leave($__internal_4064319feabf612202dc4b71d24c44cec327791e9d95ce1d9bce7c974cdd875b_prof);

        
        $__internal_0fe8f1829892a1cb4f366e1e47ba33076727b5981b4020251c3e49af0e7de0c4->leave($__internal_0fe8f1829892a1cb4f366e1e47ba33076727b5981b4020251c3e49af0e7de0c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e900c9a890053c61600447a083c7b934410a1521432d2122f1de76157aca42df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e900c9a890053c61600447a083c7b934410a1521432d2122f1de76157aca42df->enter($__internal_e900c9a890053c61600447a083c7b934410a1521432d2122f1de76157aca42df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4006c2a67cdd28de283dee13a2d7da57acdacff75eb952a13319bffdb2552956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4006c2a67cdd28de283dee13a2d7da57acdacff75eb952a13319bffdb2552956->enter($__internal_4006c2a67cdd28de283dee13a2d7da57acdacff75eb952a13319bffdb2552956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4006c2a67cdd28de283dee13a2d7da57acdacff75eb952a13319bffdb2552956->leave($__internal_4006c2a67cdd28de283dee13a2d7da57acdacff75eb952a13319bffdb2552956_prof);

        
        $__internal_e900c9a890053c61600447a083c7b934410a1521432d2122f1de76157aca42df->leave($__internal_e900c9a890053c61600447a083c7b934410a1521432d2122f1de76157aca42df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
