<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6e7a8411032a9e7fc9fee18ab0fb54b26cfafc0b52b476d6a1e159fc6277a230 extends Twig_Template
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
        $__internal_becc8622b553bd2960e43eaec07e7f493216514c38bd904f2ce04e3c475bdd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becc8622b553bd2960e43eaec07e7f493216514c38bd904f2ce04e3c475bdd70->enter($__internal_becc8622b553bd2960e43eaec07e7f493216514c38bd904f2ce04e3c475bdd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c5178de70e17f56fd649cbefb37bb9ee20fe5f668fa7c3757ce85272525e8e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5178de70e17f56fd649cbefb37bb9ee20fe5f668fa7c3757ce85272525e8e3d->enter($__internal_c5178de70e17f56fd649cbefb37bb9ee20fe5f668fa7c3757ce85272525e8e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_becc8622b553bd2960e43eaec07e7f493216514c38bd904f2ce04e3c475bdd70->leave($__internal_becc8622b553bd2960e43eaec07e7f493216514c38bd904f2ce04e3c475bdd70_prof);

        
        $__internal_c5178de70e17f56fd649cbefb37bb9ee20fe5f668fa7c3757ce85272525e8e3d->leave($__internal_c5178de70e17f56fd649cbefb37bb9ee20fe5f668fa7c3757ce85272525e8e3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
