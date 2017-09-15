<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a508d1d3a1c75649f70630d4fa437adcc7b1206c6d649d5601803631cc904672 extends Twig_Template
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
        $__internal_d7f3035746893e118008867f76baf9266c268c839a48159c177b3d9369d7aa67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f3035746893e118008867f76baf9266c268c839a48159c177b3d9369d7aa67->enter($__internal_d7f3035746893e118008867f76baf9266c268c839a48159c177b3d9369d7aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1de4559c3f5e10b387c612868f57cf1d2f202f7579f1a76d73648c336faae2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de4559c3f5e10b387c612868f57cf1d2f202f7579f1a76d73648c336faae2c4->enter($__internal_1de4559c3f5e10b387c612868f57cf1d2f202f7579f1a76d73648c336faae2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d7f3035746893e118008867f76baf9266c268c839a48159c177b3d9369d7aa67->leave($__internal_d7f3035746893e118008867f76baf9266c268c839a48159c177b3d9369d7aa67_prof);

        
        $__internal_1de4559c3f5e10b387c612868f57cf1d2f202f7579f1a76d73648c336faae2c4->leave($__internal_1de4559c3f5e10b387c612868f57cf1d2f202f7579f1a76d73648c336faae2c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
