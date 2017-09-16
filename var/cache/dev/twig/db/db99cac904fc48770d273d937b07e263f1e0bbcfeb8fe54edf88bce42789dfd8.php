<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9598503888c21e9b5c7496035f20cacd9bd1084422c53ff9ef06525e67802b75 extends Twig_Template
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
        $__internal_169057fb8f7b05d2759ba9576e18e4a0c7ec728934a56f60d80f15eee92fa0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169057fb8f7b05d2759ba9576e18e4a0c7ec728934a56f60d80f15eee92fa0e2->enter($__internal_169057fb8f7b05d2759ba9576e18e4a0c7ec728934a56f60d80f15eee92fa0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9491df9a56b3b67e8bd52c78472c085045ac13faf381e4727de5ad6e4a858a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9491df9a56b3b67e8bd52c78472c085045ac13faf381e4727de5ad6e4a858a03->enter($__internal_9491df9a56b3b67e8bd52c78472c085045ac13faf381e4727de5ad6e4a858a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_169057fb8f7b05d2759ba9576e18e4a0c7ec728934a56f60d80f15eee92fa0e2->leave($__internal_169057fb8f7b05d2759ba9576e18e4a0c7ec728934a56f60d80f15eee92fa0e2_prof);

        
        $__internal_9491df9a56b3b67e8bd52c78472c085045ac13faf381e4727de5ad6e4a858a03->leave($__internal_9491df9a56b3b67e8bd52c78472c085045ac13faf381e4727de5ad6e4a858a03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1492b8fcbbdfb75f24a77087ff8a57289d57e07b674f6598b84005b0a864a847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1492b8fcbbdfb75f24a77087ff8a57289d57e07b674f6598b84005b0a864a847->enter($__internal_1492b8fcbbdfb75f24a77087ff8a57289d57e07b674f6598b84005b0a864a847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_059c67e5340bfa5b3f221642fd6355b65b405cd972b7f4b9d89822c311c20aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059c67e5340bfa5b3f221642fd6355b65b405cd972b7f4b9d89822c311c20aff->enter($__internal_059c67e5340bfa5b3f221642fd6355b65b405cd972b7f4b9d89822c311c20aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_059c67e5340bfa5b3f221642fd6355b65b405cd972b7f4b9d89822c311c20aff->leave($__internal_059c67e5340bfa5b3f221642fd6355b65b405cd972b7f4b9d89822c311c20aff_prof);

        
        $__internal_1492b8fcbbdfb75f24a77087ff8a57289d57e07b674f6598b84005b0a864a847->leave($__internal_1492b8fcbbdfb75f24a77087ff8a57289d57e07b674f6598b84005b0a864a847_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
