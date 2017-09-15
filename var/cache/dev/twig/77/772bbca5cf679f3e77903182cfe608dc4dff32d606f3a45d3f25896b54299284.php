<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9e67c20553c2f629de5fe9eb5ed38b96a8fb84415f7d3109d2cbbaf5963d97c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8778ca428982d0271d4a192e7fd389e4012a7d921c410ab47e9d99274fd668cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8778ca428982d0271d4a192e7fd389e4012a7d921c410ab47e9d99274fd668cb->enter($__internal_8778ca428982d0271d4a192e7fd389e4012a7d921c410ab47e9d99274fd668cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5343b2ac93fb5cb3cc118da161523ade339814c010a47c51408334dabfe45425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5343b2ac93fb5cb3cc118da161523ade339814c010a47c51408334dabfe45425->enter($__internal_5343b2ac93fb5cb3cc118da161523ade339814c010a47c51408334dabfe45425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8778ca428982d0271d4a192e7fd389e4012a7d921c410ab47e9d99274fd668cb->leave($__internal_8778ca428982d0271d4a192e7fd389e4012a7d921c410ab47e9d99274fd668cb_prof);

        
        $__internal_5343b2ac93fb5cb3cc118da161523ade339814c010a47c51408334dabfe45425->leave($__internal_5343b2ac93fb5cb3cc118da161523ade339814c010a47c51408334dabfe45425_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa934a009f7d5855bcc13acefb5822669b9dd4fbaa9f131f05050d94b9974fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa934a009f7d5855bcc13acefb5822669b9dd4fbaa9f131f05050d94b9974fc8->enter($__internal_aa934a009f7d5855bcc13acefb5822669b9dd4fbaa9f131f05050d94b9974fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_daea97192e9c5aa01aaa2d8f0d817e8e00d76d575a320b5399c97b6f03de4dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daea97192e9c5aa01aaa2d8f0d817e8e00d76d575a320b5399c97b6f03de4dfd->enter($__internal_daea97192e9c5aa01aaa2d8f0d817e8e00d76d575a320b5399c97b6f03de4dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_daea97192e9c5aa01aaa2d8f0d817e8e00d76d575a320b5399c97b6f03de4dfd->leave($__internal_daea97192e9c5aa01aaa2d8f0d817e8e00d76d575a320b5399c97b6f03de4dfd_prof);

        
        $__internal_aa934a009f7d5855bcc13acefb5822669b9dd4fbaa9f131f05050d94b9974fc8->leave($__internal_aa934a009f7d5855bcc13acefb5822669b9dd4fbaa9f131f05050d94b9974fc8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
