<?php

/* :enseignantsViews:listEnseignants.html.twig */
class __TwigTemplate_9c7f8a63b4fde463eef03f1e0575adc1bfbfad0f5b010475c57ab3055a265d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":enseignantsViews:listEnseignants.html.twig", 1);
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
        $__internal_c7891e900eb93fce386363de94d952cb26f2efc430f0e21c0394bfa2139e0ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7891e900eb93fce386363de94d952cb26f2efc430f0e21c0394bfa2139e0ffb->enter($__internal_c7891e900eb93fce386363de94d952cb26f2efc430f0e21c0394bfa2139e0ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $__internal_cf8abeee6265cd3ad5395ce54855b9078191a1dff73a37fe92985e9480fd9ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8abeee6265cd3ad5395ce54855b9078191a1dff73a37fe92985e9480fd9ccd->enter($__internal_cf8abeee6265cd3ad5395ce54855b9078191a1dff73a37fe92985e9480fd9ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":enseignantsViews:listEnseignants.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7891e900eb93fce386363de94d952cb26f2efc430f0e21c0394bfa2139e0ffb->leave($__internal_c7891e900eb93fce386363de94d952cb26f2efc430f0e21c0394bfa2139e0ffb_prof);

        
        $__internal_cf8abeee6265cd3ad5395ce54855b9078191a1dff73a37fe92985e9480fd9ccd->leave($__internal_cf8abeee6265cd3ad5395ce54855b9078191a1dff73a37fe92985e9480fd9ccd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17949813566f104695b9fbe1601d26c18282079b4f0d8e853aa0a9462e748c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17949813566f104695b9fbe1601d26c18282079b4f0d8e853aa0a9462e748c4e->enter($__internal_17949813566f104695b9fbe1601d26c18282079b4f0d8e853aa0a9462e748c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_361ee3bb29e147f6f01372a8900b69bbcb16a036ac66581058bbb78f61e3166b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361ee3bb29e147f6f01372a8900b69bbcb16a036ac66581058bbb78f61e3166b->enter($__internal_361ee3bb29e147f6f01372a8900b69bbcb16a036ac66581058bbb78f61e3166b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignants"]) ? $context["enseignants"] : $this->getContext($context, "enseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete"), "html", null, true);
            echo "</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profileEnseignant", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_361ee3bb29e147f6f01372a8900b69bbcb16a036ac66581058bbb78f61e3166b->leave($__internal_361ee3bb29e147f6f01372a8900b69bbcb16a036ac66581058bbb78f61e3166b_prof);

        
        $__internal_17949813566f104695b9fbe1601d26c18282079b4f0d8e853aa0a9462e748c4e->leave($__internal_17949813566f104695b9fbe1601d26c18282079b4f0d8e853aa0a9462e748c4e_prof);

    }

    public function getTemplateName()
    {
        return ":enseignantsViews:listEnseignants.html.twig";
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
<h1>{{'list'|trans}} {{'teachers'|trans}}</h1>
\t<ol>
\t\t{% for enseignant in enseignants %}
\t\t\t<li>{{ enseignant.nom}} {{ enseignant.prenom}} <a href=\"{{ path('editEnseignant',{'id':enseignant.id})}}\">{{'edit'|trans}}</a> <a href=\"{{ path('removeEnseignant',{'id':enseignant.id})}}\">{{'delete'|trans}}</a> <a href=\"{{ path('profileEnseignant',{'id':enseignant.id})}}\">{{'profile'|trans}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", ":enseignantsViews:listEnseignants.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/enseignantsViews/listEnseignants.html.twig");
    }
}
