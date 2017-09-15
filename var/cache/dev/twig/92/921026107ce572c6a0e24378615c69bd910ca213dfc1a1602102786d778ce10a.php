<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5ed607c29339f1784fb92de8a9a278e8f7a304a35b95959aa5af88e6a003e782 extends Twig_Template
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
        $__internal_1eb93f6d45814496f18547fc44a5df964793019b99c235863580835c7827c0a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb93f6d45814496f18547fc44a5df964793019b99c235863580835c7827c0a9->enter($__internal_1eb93f6d45814496f18547fc44a5df964793019b99c235863580835c7827c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f406fd7a2b6d37c76317512ba4b71dd2023aba59de21cab1e718bca7bf29626a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f406fd7a2b6d37c76317512ba4b71dd2023aba59de21cab1e718bca7bf29626a->enter($__internal_f406fd7a2b6d37c76317512ba4b71dd2023aba59de21cab1e718bca7bf29626a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_1eb93f6d45814496f18547fc44a5df964793019b99c235863580835c7827c0a9->leave($__internal_1eb93f6d45814496f18547fc44a5df964793019b99c235863580835c7827c0a9_prof);

        
        $__internal_f406fd7a2b6d37c76317512ba4b71dd2023aba59de21cab1e718bca7bf29626a->leave($__internal_f406fd7a2b6d37c76317512ba4b71dd2023aba59de21cab1e718bca7bf29626a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
