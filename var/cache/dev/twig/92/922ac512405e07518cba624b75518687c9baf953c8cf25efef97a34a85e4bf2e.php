<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4078abc49a60432fb79832f1dd40d9d6c6e110f57742a12ed28485a2e425418d extends Twig_Template
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
        $__internal_32c592f0db7585afa06751256415fb8c2837e02ae103e97e8858ae0597ebe1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c592f0db7585afa06751256415fb8c2837e02ae103e97e8858ae0597ebe1f9->enter($__internal_32c592f0db7585afa06751256415fb8c2837e02ae103e97e8858ae0597ebe1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_05b7bd1c432f2a056f511df59a73d10cc8a744c7fc9af12a0e92cf929570f2ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b7bd1c432f2a056f511df59a73d10cc8a744c7fc9af12a0e92cf929570f2ea->enter($__internal_05b7bd1c432f2a056f511df59a73d10cc8a744c7fc9af12a0e92cf929570f2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_32c592f0db7585afa06751256415fb8c2837e02ae103e97e8858ae0597ebe1f9->leave($__internal_32c592f0db7585afa06751256415fb8c2837e02ae103e97e8858ae0597ebe1f9_prof);

        
        $__internal_05b7bd1c432f2a056f511df59a73d10cc8a744c7fc9af12a0e92cf929570f2ea->leave($__internal_05b7bd1c432f2a056f511df59a73d10cc8a744c7fc9af12a0e92cf929570f2ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
