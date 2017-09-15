<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a578328802c4b404def3be14a096784cbfc79376723443982e53544f6003a9cc extends Twig_Template
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
        $__internal_c4815ffaeaf459e4ec2a1db0957e0ac4beba5e5ec8aea45f0fb6ae34ae7d38eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4815ffaeaf459e4ec2a1db0957e0ac4beba5e5ec8aea45f0fb6ae34ae7d38eb->enter($__internal_c4815ffaeaf459e4ec2a1db0957e0ac4beba5e5ec8aea45f0fb6ae34ae7d38eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_2010cc2d1b44e44d755959865ac1b6445b8cff22ee114dd590e5a607967425af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2010cc2d1b44e44d755959865ac1b6445b8cff22ee114dd590e5a607967425af->enter($__internal_2010cc2d1b44e44d755959865ac1b6445b8cff22ee114dd590e5a607967425af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c4815ffaeaf459e4ec2a1db0957e0ac4beba5e5ec8aea45f0fb6ae34ae7d38eb->leave($__internal_c4815ffaeaf459e4ec2a1db0957e0ac4beba5e5ec8aea45f0fb6ae34ae7d38eb_prof);

        
        $__internal_2010cc2d1b44e44d755959865ac1b6445b8cff22ee114dd590e5a607967425af->leave($__internal_2010cc2d1b44e44d755959865ac1b6445b8cff22ee114dd590e5a607967425af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
