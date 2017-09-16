<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_35062b352eb103734c01ebe25a1c295e6c61d654f8854e8c017eec3583602ec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61c585d116eeb6bd9f4742bc0a1cf050d2e7e2813506379558eb3ba9eefcbe38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c585d116eeb6bd9f4742bc0a1cf050d2e7e2813506379558eb3ba9eefcbe38->enter($__internal_61c585d116eeb6bd9f4742bc0a1cf050d2e7e2813506379558eb3ba9eefcbe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_eb49ce75473b6b00e5fc6f34f70885a4b0e1f2aadcf961aab7b0edc6f00e44e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb49ce75473b6b00e5fc6f34f70885a4b0e1f2aadcf961aab7b0edc6f00e44e4->enter($__internal_eb49ce75473b6b00e5fc6f34f70885a4b0e1f2aadcf961aab7b0edc6f00e44e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61c585d116eeb6bd9f4742bc0a1cf050d2e7e2813506379558eb3ba9eefcbe38->leave($__internal_61c585d116eeb6bd9f4742bc0a1cf050d2e7e2813506379558eb3ba9eefcbe38_prof);

        
        $__internal_eb49ce75473b6b00e5fc6f34f70885a4b0e1f2aadcf961aab7b0edc6f00e44e4->leave($__internal_eb49ce75473b6b00e5fc6f34f70885a4b0e1f2aadcf961aab7b0edc6f00e44e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bccd55864e05c62289263070c0a4cbec616956b9c28bd10f43dfb2e20191af4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccd55864e05c62289263070c0a4cbec616956b9c28bd10f43dfb2e20191af4c->enter($__internal_bccd55864e05c62289263070c0a4cbec616956b9c28bd10f43dfb2e20191af4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64c8e97a8da67712e0aa0d2780b193d2d3b9ba829aa34c4b2adaaea2135e4035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c8e97a8da67712e0aa0d2780b193d2d3b9ba829aa34c4b2adaaea2135e4035->enter($__internal_64c8e97a8da67712e0aa0d2780b193d2d3b9ba829aa34c4b2adaaea2135e4035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_64c8e97a8da67712e0aa0d2780b193d2d3b9ba829aa34c4b2adaaea2135e4035->leave($__internal_64c8e97a8da67712e0aa0d2780b193d2d3b9ba829aa34c4b2adaaea2135e4035_prof);

        
        $__internal_bccd55864e05c62289263070c0a4cbec616956b9c28bd10f43dfb2e20191af4c->leave($__internal_bccd55864e05c62289263070c0a4cbec616956b9c28bd10f43dfb2e20191af4c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d781e93c1712e9745815a0919403dd6f647a8b88e53e2f136d41b0ddf90b2b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d781e93c1712e9745815a0919403dd6f647a8b88e53e2f136d41b0ddf90b2b8d->enter($__internal_d781e93c1712e9745815a0919403dd6f647a8b88e53e2f136d41b0ddf90b2b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_210a23f08f2969b1eeb55d60a4118bfc0bb721d9824a208a76ec612490253032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210a23f08f2969b1eeb55d60a4118bfc0bb721d9824a208a76ec612490253032->enter($__internal_210a23f08f2969b1eeb55d60a4118bfc0bb721d9824a208a76ec612490253032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_210a23f08f2969b1eeb55d60a4118bfc0bb721d9824a208a76ec612490253032->leave($__internal_210a23f08f2969b1eeb55d60a4118bfc0bb721d9824a208a76ec612490253032_prof);

        
        $__internal_d781e93c1712e9745815a0919403dd6f647a8b88e53e2f136d41b0ddf90b2b8d->leave($__internal_d781e93c1712e9745815a0919403dd6f647a8b88e53e2f136d41b0ddf90b2b8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
