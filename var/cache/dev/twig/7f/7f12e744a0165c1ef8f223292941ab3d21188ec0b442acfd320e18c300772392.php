<?php

/* :parentsViews:parent.html.twig */
class __TwigTemplate_13988ba1130e3f0e7a8826da2a7cdc12888346c1c15e01bf98775ece83700d57 extends Twig_Template
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
        $__internal_5b276b621b478bf23af54ca8842864f5dd3565d9b31cd240a99fd56b776aa96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b276b621b478bf23af54ca8842864f5dd3565d9b31cd240a99fd56b776aa96c->enter($__internal_5b276b621b478bf23af54ca8842864f5dd3565d9b31cd240a99fd56b776aa96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        $__internal_be79390dbf02203f39883c8588e8a9fe135838863c2d43f336b622187accd896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be79390dbf02203f39883c8588e8a9fe135838863c2d43f336b622187accd896->enter($__internal_be79390dbf02203f39883c8588e8a9fe135838863c2d43f336b622187accd896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:parent.html.twig"));

        // line 1
        echo "
  <li class=\"\"><a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>";
        
        $__internal_5b276b621b478bf23af54ca8842864f5dd3565d9b31cd240a99fd56b776aa96c->leave($__internal_5b276b621b478bf23af54ca8842864f5dd3565d9b31cd240a99fd56b776aa96c_prof);

        
        $__internal_be79390dbf02203f39883c8588e8a9fe135838863c2d43f336b622187accd896->leave($__internal_be79390dbf02203f39883c8588e8a9fe135838863c2d43f336b622187accd896_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:parent.html.twig";
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
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>", ":parentsViews:parent.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/parentsViews/parent.html.twig");
    }
}
