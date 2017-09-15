<?php

/* parentsViews/parent.html.twig */
class __TwigTemplate_1bd4059a5fc7ecf5f576636b837bbf9127551756605da7361aa5b05be7e63229 extends Twig_Template
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
        $__internal_774a64f2891125f89a989014b1ce9939d73c97773663e2c8748cfc48a2cc6c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774a64f2891125f89a989014b1ce9939d73c97773663e2c8748cfc48a2cc6c79->enter($__internal_774a64f2891125f89a989014b1ce9939d73c97773663e2c8748cfc48a2cc6c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/parent.html.twig"));

        $__internal_f04b5e661c5c461ff4d4a5bc38d0f35645622c705f192968c1f7830e7fe1d352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04b5e661c5c461ff4d4a5bc38d0f35645622c705f192968c1f7830e7fe1d352->enter($__internal_f04b5e661c5c461ff4d4a5bc38d0f35645622c705f192968c1f7830e7fe1d352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parentsViews/parent.html.twig"));

        // line 1
        echo "
  <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_774a64f2891125f89a989014b1ce9939d73c97773663e2c8748cfc48a2cc6c79->leave($__internal_774a64f2891125f89a989014b1ce9939d73c97773663e2c8748cfc48a2cc6c79_prof);

        
        $__internal_f04b5e661c5c461ff4d4a5bc38d0f35645622c705f192968c1f7830e7fe1d352->leave($__internal_f04b5e661c5c461ff4d4a5bc38d0f35645622c705f192968c1f7830e7fe1d352_prof);

    }

    public function getTemplateName()
    {
        return "parentsViews/parent.html.twig";
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
        return new Twig_Source("
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", "parentsViews/parent.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\parentsViews\\parent.html.twig");
    }
}
