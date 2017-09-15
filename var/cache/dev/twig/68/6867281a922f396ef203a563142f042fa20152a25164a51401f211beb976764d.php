<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a19bda121ee4596e3f49be1d55380b502617e75c6213f5a735ef4dbf693a42c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_cadd83a7ce042617c1c93b5115c948c6666d8e1565eb86364a88fbf15a39df9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadd83a7ce042617c1c93b5115c948c6666d8e1565eb86364a88fbf15a39df9b->enter($__internal_cadd83a7ce042617c1c93b5115c948c6666d8e1565eb86364a88fbf15a39df9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_1a096291b5e83ffb094d2034402269d9cd02b899d7ba333dcf19c91bc5c17692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a096291b5e83ffb094d2034402269d9cd02b899d7ba333dcf19c91bc5c17692->enter($__internal_1a096291b5e83ffb094d2034402269d9cd02b899d7ba333dcf19c91bc5c17692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cadd83a7ce042617c1c93b5115c948c6666d8e1565eb86364a88fbf15a39df9b->leave($__internal_cadd83a7ce042617c1c93b5115c948c6666d8e1565eb86364a88fbf15a39df9b_prof);

        
        $__internal_1a096291b5e83ffb094d2034402269d9cd02b899d7ba333dcf19c91bc5c17692->leave($__internal_1a096291b5e83ffb094d2034402269d9cd02b899d7ba333dcf19c91bc5c17692_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dc69843338d3eb844879c4bff23ced614caf28a8bd550f4c6831cb1b5cb21d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc69843338d3eb844879c4bff23ced614caf28a8bd550f4c6831cb1b5cb21d0->enter($__internal_2dc69843338d3eb844879c4bff23ced614caf28a8bd550f4c6831cb1b5cb21d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c38839afd68d7d52ca960a5824572cc74d619234b4317fb80fbf9c238677a04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38839afd68d7d52ca960a5824572cc74d619234b4317fb80fbf9c238677a04b->enter($__internal_c38839afd68d7d52ca960a5824572cc74d619234b4317fb80fbf9c238677a04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c38839afd68d7d52ca960a5824572cc74d619234b4317fb80fbf9c238677a04b->leave($__internal_c38839afd68d7d52ca960a5824572cc74d619234b4317fb80fbf9c238677a04b_prof);

        
        $__internal_2dc69843338d3eb844879c4bff23ced614caf28a8bd550f4c6831cb1b5cb21d0->leave($__internal_2dc69843338d3eb844879c4bff23ced614caf28a8bd550f4c6831cb1b5cb21d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cc79afb7c55095d1d04446c97fdf18ceadbc003f4e860912dc0fd0c0a8967a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc79afb7c55095d1d04446c97fdf18ceadbc003f4e860912dc0fd0c0a8967a0->enter($__internal_4cc79afb7c55095d1d04446c97fdf18ceadbc003f4e860912dc0fd0c0a8967a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3861fefa476787df1143b9dc9642e2046767b0b2909bb002e96b8ea2e01f99ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3861fefa476787df1143b9dc9642e2046767b0b2909bb002e96b8ea2e01f99ac->enter($__internal_3861fefa476787df1143b9dc9642e2046767b0b2909bb002e96b8ea2e01f99ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_3861fefa476787df1143b9dc9642e2046767b0b2909bb002e96b8ea2e01f99ac->leave($__internal_3861fefa476787df1143b9dc9642e2046767b0b2909bb002e96b8ea2e01f99ac_prof);

        
        $__internal_4cc79afb7c55095d1d04446c97fdf18ceadbc003f4e860912dc0fd0c0a8967a0->leave($__internal_4cc79afb7c55095d1d04446c97fdf18ceadbc003f4e860912dc0fd0c0a8967a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
