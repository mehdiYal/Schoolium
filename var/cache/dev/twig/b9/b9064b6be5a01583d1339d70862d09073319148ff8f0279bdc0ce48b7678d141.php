<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_196fc751e8eff37053a59b16d65991cef582337b190b691419e76d75fd72247f extends Twig_Template
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
        $__internal_2777e7d74a66912c7dd69817474f60c57bcfc9981b0ba7683aebe3946538d854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2777e7d74a66912c7dd69817474f60c57bcfc9981b0ba7683aebe3946538d854->enter($__internal_2777e7d74a66912c7dd69817474f60c57bcfc9981b0ba7683aebe3946538d854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_72a7666622aa9663cea6ad09c944f75124c28e83e10b5a4fa677aacc2d4d63b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a7666622aa9663cea6ad09c944f75124c28e83e10b5a4fa677aacc2d4d63b7->enter($__internal_72a7666622aa9663cea6ad09c944f75124c28e83e10b5a4fa677aacc2d4d63b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2777e7d74a66912c7dd69817474f60c57bcfc9981b0ba7683aebe3946538d854->leave($__internal_2777e7d74a66912c7dd69817474f60c57bcfc9981b0ba7683aebe3946538d854_prof);

        
        $__internal_72a7666622aa9663cea6ad09c944f75124c28e83e10b5a4fa677aacc2d4d63b7->leave($__internal_72a7666622aa9663cea6ad09c944f75124c28e83e10b5a4fa677aacc2d4d63b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
