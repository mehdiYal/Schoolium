<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a84195f80aa6238e7cf8df97bc1765a89e796fd7a9b56905858e4c316871b2b extends Twig_Template
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
        $__internal_7b072d81947465df8c4db9b19a96acb66a9327c0ccf60bb9772c2271904bb660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b072d81947465df8c4db9b19a96acb66a9327c0ccf60bb9772c2271904bb660->enter($__internal_7b072d81947465df8c4db9b19a96acb66a9327c0ccf60bb9772c2271904bb660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e9a813f7ba240754aa2b67bdaa9f076e041160f46cbcc1866d3f043d14672174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a813f7ba240754aa2b67bdaa9f076e041160f46cbcc1866d3f043d14672174->enter($__internal_e9a813f7ba240754aa2b67bdaa9f076e041160f46cbcc1866d3f043d14672174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7b072d81947465df8c4db9b19a96acb66a9327c0ccf60bb9772c2271904bb660->leave($__internal_7b072d81947465df8c4db9b19a96acb66a9327c0ccf60bb9772c2271904bb660_prof);

        
        $__internal_e9a813f7ba240754aa2b67bdaa9f076e041160f46cbcc1866d3f043d14672174->leave($__internal_e9a813f7ba240754aa2b67bdaa9f076e041160f46cbcc1866d3f043d14672174_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
