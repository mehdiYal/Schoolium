<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_57797d445e1ae7026835a8dbf36ce0a3d974979017a5af17014fbde7106a22c8 extends Twig_Template
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
        $__internal_be061524d6f0b228d7a8b15dece3d2c6a61c506ee6d09f67ce19110b11da4db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be061524d6f0b228d7a8b15dece3d2c6a61c506ee6d09f67ce19110b11da4db9->enter($__internal_be061524d6f0b228d7a8b15dece3d2c6a61c506ee6d09f67ce19110b11da4db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_da6d98bda3dc0e4a42ccb075479ab4fb5d80bf4b091a7d0403614fa70abe017b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6d98bda3dc0e4a42ccb075479ab4fb5d80bf4b091a7d0403614fa70abe017b->enter($__internal_da6d98bda3dc0e4a42ccb075479ab4fb5d80bf4b091a7d0403614fa70abe017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_be061524d6f0b228d7a8b15dece3d2c6a61c506ee6d09f67ce19110b11da4db9->leave($__internal_be061524d6f0b228d7a8b15dece3d2c6a61c506ee6d09f67ce19110b11da4db9_prof);

        
        $__internal_da6d98bda3dc0e4a42ccb075479ab4fb5d80bf4b091a7d0403614fa70abe017b->leave($__internal_da6d98bda3dc0e4a42ccb075479ab4fb5d80bf4b091a7d0403614fa70abe017b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
