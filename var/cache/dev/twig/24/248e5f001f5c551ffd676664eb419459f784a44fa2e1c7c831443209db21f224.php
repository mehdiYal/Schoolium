<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_753e4a9e5e0c8c34fb97e716b33d9bfd20eb0cd544457124ed4a676c24dda39c extends Twig_Template
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
        $__internal_0a77e708a1b9f3544909f6931cc743a2b3dbe6de0de9548bbc4e7a04fb336c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a77e708a1b9f3544909f6931cc743a2b3dbe6de0de9548bbc4e7a04fb336c9e->enter($__internal_0a77e708a1b9f3544909f6931cc743a2b3dbe6de0de9548bbc4e7a04fb336c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_2007725404d07ed118f1655b3dcc253d1940da5e47068487f76ea42d9420ebbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2007725404d07ed118f1655b3dcc253d1940da5e47068487f76ea42d9420ebbe->enter($__internal_2007725404d07ed118f1655b3dcc253d1940da5e47068487f76ea42d9420ebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0a77e708a1b9f3544909f6931cc743a2b3dbe6de0de9548bbc4e7a04fb336c9e->leave($__internal_0a77e708a1b9f3544909f6931cc743a2b3dbe6de0de9548bbc4e7a04fb336c9e_prof);

        
        $__internal_2007725404d07ed118f1655b3dcc253d1940da5e47068487f76ea42d9420ebbe->leave($__internal_2007725404d07ed118f1655b3dcc253d1940da5e47068487f76ea42d9420ebbe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
