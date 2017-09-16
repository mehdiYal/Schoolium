<?php

/* :parentsViews:listParents.html.twig */
class __TwigTemplate_3fe1379553a94565b5654b8ee620cc3cf29a75e02709a5d54fbf141d096d31cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":parentsViews:listParents.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12307bfe26f6c4548ccc665031552867c527f1b5a0318390b3b81f48bc96ee26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12307bfe26f6c4548ccc665031552867c527f1b5a0318390b3b81f48bc96ee26->enter($__internal_12307bfe26f6c4548ccc665031552867c527f1b5a0318390b3b81f48bc96ee26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $__internal_f8f2a5167fa5bebd14fee76fd5499f13544888da401d10c61146ae07d0dbb00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f2a5167fa5bebd14fee76fd5499f13544888da401d10c61146ae07d0dbb00d->enter($__internal_f8f2a5167fa5bebd14fee76fd5499f13544888da401d10c61146ae07d0dbb00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parentsViews:listParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12307bfe26f6c4548ccc665031552867c527f1b5a0318390b3b81f48bc96ee26->leave($__internal_12307bfe26f6c4548ccc665031552867c527f1b5a0318390b3b81f48bc96ee26_prof);

        
        $__internal_f8f2a5167fa5bebd14fee76fd5499f13544888da401d10c61146ae07d0dbb00d->leave($__internal_f8f2a5167fa5bebd14fee76fd5499f13544888da401d10c61146ae07d0dbb00d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87b8e535cbe9c59482ed7fb45dda6657f23ae791a493fd14d401951ea61d7626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b8e535cbe9c59482ed7fb45dda6657f23ae791a493fd14d401951ea61d7626->enter($__internal_87b8e535cbe9c59482ed7fb45dda6657f23ae791a493fd14d401951ea61d7626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_288591e5b1d4bb75a7171542cb5a994b77762e951eec2d301bbf455d3451112d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288591e5b1d4bb75a7171542cb5a994b77762e951eec2d301bbf455d3451112d->enter($__internal_288591e5b1d4bb75a7171542cb5a994b77762e951eec2d301bbf455d3451112d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parents"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parentals"]) ? $context["parentals"] : $this->getContext($context, "parentals")));
        foreach ($context['_seq'] as $context["_key"] => $context["parant"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileParental", array("id" => $this->getAttribute($context["parant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_288591e5b1d4bb75a7171542cb5a994b77762e951eec2d301bbf455d3451112d->leave($__internal_288591e5b1d4bb75a7171542cb5a994b77762e951eec2d301bbf455d3451112d_prof);

        
        $__internal_87b8e535cbe9c59482ed7fb45dda6657f23ae791a493fd14d401951ea61d7626->leave($__internal_87b8e535cbe9c59482ed7fb45dda6657f23ae791a493fd14d401951ea61d7626_prof);

    }

    public function getTemplateName()
    {
        return ":parentsViews:listParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>{{'list'|trans}} {{'parents'|trans}}</h1>
\t<ol>
\t\t{% for parant in parentals %}
\t\t\t<li>{{ parant.nom}} {{ parant.prenom}} <a href=\"{{ path('editParental',{'id':parant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeParental',{'id':parant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileParental',{'id':parant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":parentsViews:listParents.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/parentsViews/listParents.html.twig");
    }
}
