<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_61f170c333b5ede6459a16dc2614afb08d4feef01928814a760135a5c709e278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_fd33f356cf72cb3a71fe63a83734a7d4c4ebf09fc0dd1f0ba6f44d43caba5e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd33f356cf72cb3a71fe63a83734a7d4c4ebf09fc0dd1f0ba6f44d43caba5e9e->enter($__internal_fd33f356cf72cb3a71fe63a83734a7d4c4ebf09fc0dd1f0ba6f44d43caba5e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_3a0457ebd7ac1cae09d706c1334e925b386759e776b9eb92db73011551cba376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0457ebd7ac1cae09d706c1334e925b386759e776b9eb92db73011551cba376->enter($__internal_3a0457ebd7ac1cae09d706c1334e925b386759e776b9eb92db73011551cba376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd33f356cf72cb3a71fe63a83734a7d4c4ebf09fc0dd1f0ba6f44d43caba5e9e->leave($__internal_fd33f356cf72cb3a71fe63a83734a7d4c4ebf09fc0dd1f0ba6f44d43caba5e9e_prof);

        
        $__internal_3a0457ebd7ac1cae09d706c1334e925b386759e776b9eb92db73011551cba376->leave($__internal_3a0457ebd7ac1cae09d706c1334e925b386759e776b9eb92db73011551cba376_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ffa74a27df4f569265245bb6c5154c0b4f2700e223ddc8868b98083e7c1c71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffa74a27df4f569265245bb6c5154c0b4f2700e223ddc8868b98083e7c1c71b->enter($__internal_9ffa74a27df4f569265245bb6c5154c0b4f2700e223ddc8868b98083e7c1c71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0ba44cf0abe70c725a6dd5fbef7b4188cf74d6799237705165ffbba34dee9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ba44cf0abe70c725a6dd5fbef7b4188cf74d6799237705165ffbba34dee9bb->enter($__internal_d0ba44cf0abe70c725a6dd5fbef7b4188cf74d6799237705165ffbba34dee9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d0ba44cf0abe70c725a6dd5fbef7b4188cf74d6799237705165ffbba34dee9bb->leave($__internal_d0ba44cf0abe70c725a6dd5fbef7b4188cf74d6799237705165ffbba34dee9bb_prof);

        
        $__internal_9ffa74a27df4f569265245bb6c5154c0b4f2700e223ddc8868b98083e7c1c71b->leave($__internal_9ffa74a27df4f569265245bb6c5154c0b4f2700e223ddc8868b98083e7c1c71b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
