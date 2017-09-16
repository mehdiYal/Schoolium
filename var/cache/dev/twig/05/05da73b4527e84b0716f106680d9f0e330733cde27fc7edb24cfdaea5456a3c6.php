<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_134ed41aef2b6f1bf9d1d0ecb21777aab4cdf4480e8feb21cf0f990c198c8fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c05367ee3aa31cd6e1f935054ec84858b98f2285630cf853dc52feab921897e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05367ee3aa31cd6e1f935054ec84858b98f2285630cf853dc52feab921897e7->enter($__internal_c05367ee3aa31cd6e1f935054ec84858b98f2285630cf853dc52feab921897e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_666c7f92322ac59d8b1382aaea1f478e4dac2ec6fcee711fe078e2ad449729f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666c7f92322ac59d8b1382aaea1f478e4dac2ec6fcee711fe078e2ad449729f5->enter($__internal_666c7f92322ac59d8b1382aaea1f478e4dac2ec6fcee711fe078e2ad449729f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05367ee3aa31cd6e1f935054ec84858b98f2285630cf853dc52feab921897e7->leave($__internal_c05367ee3aa31cd6e1f935054ec84858b98f2285630cf853dc52feab921897e7_prof);

        
        $__internal_666c7f92322ac59d8b1382aaea1f478e4dac2ec6fcee711fe078e2ad449729f5->leave($__internal_666c7f92322ac59d8b1382aaea1f478e4dac2ec6fcee711fe078e2ad449729f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b189004c1a41fda0a66fedf8c3dbb2d5acd766f76dfb0d4545f8c94553d0842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b189004c1a41fda0a66fedf8c3dbb2d5acd766f76dfb0d4545f8c94553d0842->enter($__internal_5b189004c1a41fda0a66fedf8c3dbb2d5acd766f76dfb0d4545f8c94553d0842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aada8140708de4708c57093aabf6556cf456204f73418ab007a2967225997573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aada8140708de4708c57093aabf6556cf456204f73418ab007a2967225997573->enter($__internal_aada8140708de4708c57093aabf6556cf456204f73418ab007a2967225997573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_aada8140708de4708c57093aabf6556cf456204f73418ab007a2967225997573->leave($__internal_aada8140708de4708c57093aabf6556cf456204f73418ab007a2967225997573_prof);

        
        $__internal_5b189004c1a41fda0a66fedf8c3dbb2d5acd766f76dfb0d4545f8c94553d0842->leave($__internal_5b189004c1a41fda0a66fedf8c3dbb2d5acd766f76dfb0d4545f8c94553d0842_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
