<?php

/* sallesViews/listSalles.html.twig */
class __TwigTemplate_4e9336883f4f88ba9e792ae1c2c485b84b59fc65a8212dcd07fa36ced1eee52c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sallesViews/listSalles.html.twig", 1);
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
        $__internal_0d93d6efdf2896789482504c5e0d5ec077ece4f999263e05b424ed3492f3b2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d93d6efdf2896789482504c5e0d5ec077ece4f999263e05b424ed3492f3b2d2->enter($__internal_0d93d6efdf2896789482504c5e0d5ec077ece4f999263e05b424ed3492f3b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $__internal_dcae5155b2d8688dcb021675968b15a8ce8609726b380cf6f2b685b00927865c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcae5155b2d8688dcb021675968b15a8ce8609726b380cf6f2b685b00927865c->enter($__internal_dcae5155b2d8688dcb021675968b15a8ce8609726b380cf6f2b685b00927865c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sallesViews/listSalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d93d6efdf2896789482504c5e0d5ec077ece4f999263e05b424ed3492f3b2d2->leave($__internal_0d93d6efdf2896789482504c5e0d5ec077ece4f999263e05b424ed3492f3b2d2_prof);

        
        $__internal_dcae5155b2d8688dcb021675968b15a8ce8609726b380cf6f2b685b00927865c->leave($__internal_dcae5155b2d8688dcb021675968b15a8ce8609726b380cf6f2b685b00927865c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcd30b04bd9daf44379f9770969cbb8c2d127f8d1cade6e6f5480047e88931ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd30b04bd9daf44379f9770969cbb8c2d127f8d1cade6e6f5480047e88931ee->enter($__internal_fcd30b04bd9daf44379f9770969cbb8c2d127f8d1cade6e6f5480047e88931ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_134f7ab29c68247e5fdccb6c1ef973ea4e3f0f8ff46dc3afce516add5ec179c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134f7ab29c68247e5fdccb6c1ef973ea4e3f0f8ff46dc3afce516add5ec179c8->enter($__internal_134f7ab29c68247e5fdccb6c1ef973ea4e3f0f8ff46dc3afce516add5ec179c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("salles"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "salles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 7
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "capacite", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["salle"], "equipement", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeSalle", array("id" => $this->getAttribute($context["salle"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ol>
\t
";
        
        $__internal_134f7ab29c68247e5fdccb6c1ef973ea4e3f0f8ff46dc3afce516add5ec179c8->leave($__internal_134f7ab29c68247e5fdccb6c1ef973ea4e3f0f8ff46dc3afce516add5ec179c8_prof);

        
        $__internal_fcd30b04bd9daf44379f9770969cbb8c2d127f8d1cade6e6f5480047e88931ee->leave($__internal_fcd30b04bd9daf44379f9770969cbb8c2d127f8d1cade6e6f5480047e88931ee_prof);

    }

    public function getTemplateName()
    {
        return "sallesViews/listSalles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'salles'|trans}}</h1>
\t<ol>
\t\t{% for salle in app.user.ecole.salles %}
\t\t\t<li>{{ salle.nom}} {{ salle.capacite}} {{ salle.equipement}} <a href=\"{{ path('editSalle',{'id':salle.id})}}\">Modifier</a> <a href=\"{{ path('removeSalle',{'id':salle.id})}}\">Supprimer</a>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "sallesViews/listSalles.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/sallesViews/listSalles.html.twig");
    }
}
