<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_af2117130abf5bcacf87e2b63e32640f77062e16e1e828690d94fbc760c093ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fd1cdbb01117f761e06f229c2edd7236c8601ccaa4d8fab5a086942a9b4928f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd1cdbb01117f761e06f229c2edd7236c8601ccaa4d8fab5a086942a9b4928f->enter($__internal_5fd1cdbb01117f761e06f229c2edd7236c8601ccaa4d8fab5a086942a9b4928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f61672d9d90dd14baaef68fb6484c5f8805bc3811f61440f4b0344251d539b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61672d9d90dd14baaef68fb6484c5f8805bc3811f61440f4b0344251d539b86->enter($__internal_f61672d9d90dd14baaef68fb6484c5f8805bc3811f61440f4b0344251d539b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5fd1cdbb01117f761e06f229c2edd7236c8601ccaa4d8fab5a086942a9b4928f->leave($__internal_5fd1cdbb01117f761e06f229c2edd7236c8601ccaa4d8fab5a086942a9b4928f_prof);

        
        $__internal_f61672d9d90dd14baaef68fb6484c5f8805bc3811f61440f4b0344251d539b86->leave($__internal_f61672d9d90dd14baaef68fb6484c5f8805bc3811f61440f4b0344251d539b86_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
