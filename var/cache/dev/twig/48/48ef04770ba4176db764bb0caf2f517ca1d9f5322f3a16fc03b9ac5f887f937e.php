<?php

/* SchoolBundle:Default:index.html.twig */
class __TwigTemplate_1c44fcd87d0f0ba12fcd1317778cb4723697d452afa79d16ec96e3c7b9c9b21e extends Twig_Template
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
        $__internal_88c7e1ee6e3a15142d9ec5f0487edb1a4f20559507dfabd4a5e164362355ecc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c7e1ee6e3a15142d9ec5f0487edb1a4f20559507dfabd4a5e164362355ecc4->enter($__internal_88c7e1ee6e3a15142d9ec5f0487edb1a4f20559507dfabd4a5e164362355ecc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        $__internal_d6c2d750df48a5a6ebc1adf4be081f1c1fcda9ff42f879a51eae29af1520b7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c2d750df48a5a6ebc1adf4be081f1c1fcda9ff42f879a51eae29af1520b7c9->enter($__internal_d6c2d750df48a5a6ebc1adf4be081f1c1fcda9ff42f879a51eae29af1520b7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SchoolBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_88c7e1ee6e3a15142d9ec5f0487edb1a4f20559507dfabd4a5e164362355ecc4->leave($__internal_88c7e1ee6e3a15142d9ec5f0487edb1a4f20559507dfabd4a5e164362355ecc4_prof);

        
        $__internal_d6c2d750df48a5a6ebc1adf4be081f1c1fcda9ff42f879a51eae29af1520b7c9->leave($__internal_d6c2d750df48a5a6ebc1adf4be081f1c1fcda9ff42f879a51eae29af1520b7c9_prof);

    }

    public function getTemplateName()
    {
        return "SchoolBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "SchoolBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/src/SchoolBundle/Resources/views/Default/index.html.twig");
    }
}
