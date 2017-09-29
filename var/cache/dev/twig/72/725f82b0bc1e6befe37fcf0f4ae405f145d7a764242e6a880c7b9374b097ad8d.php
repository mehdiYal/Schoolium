<?php

/* classesViews/listClasses.html.twig */
class __TwigTemplate_eaae3f6df637d9502581c7f9fc910129ca5fbd24060e2a896a5c99a1246ac0d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classesViews/listClasses.html.twig", 1);
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
        $__internal_a72f3bd5027b104a6f560b0636102ebeb4748f0788c07690ebcc9db2959f4b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72f3bd5027b104a6f560b0636102ebeb4748f0788c07690ebcc9db2959f4b35->enter($__internal_a72f3bd5027b104a6f560b0636102ebeb4748f0788c07690ebcc9db2959f4b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $__internal_a4b4e776263708fc5627df3822b504b8cf9642cc6253420c8989bb4127fa5058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4e776263708fc5627df3822b504b8cf9642cc6253420c8989bb4127fa5058->enter($__internal_a4b4e776263708fc5627df3822b504b8cf9642cc6253420c8989bb4127fa5058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classesViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a72f3bd5027b104a6f560b0636102ebeb4748f0788c07690ebcc9db2959f4b35->leave($__internal_a72f3bd5027b104a6f560b0636102ebeb4748f0788c07690ebcc9db2959f4b35_prof);

        
        $__internal_a4b4e776263708fc5627df3822b504b8cf9642cc6253420c8989bb4127fa5058->leave($__internal_a4b4e776263708fc5627df3822b504b8cf9642cc6253420c8989bb4127fa5058_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43111814b473fe679d5dd576d72f8a734cea563023dfe6f59a2b69fb9f6537d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43111814b473fe679d5dd576d72f8a734cea563023dfe6f59a2b69fb9f6537d3->enter($__internal_43111814b473fe679d5dd576d72f8a734cea563023dfe6f59a2b69fb9f6537d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd68f7ea32301b444e2ba08fab5b3d79eb7a71d778f055c2775428d4cc50f1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd68f7ea32301b444e2ba08fab5b3d79eb7a71d778f055c2775428d4cc50f1c8->enter($__internal_bd68f7ea32301b444e2ba08fab5b3d79eb7a71d778f055c2775428d4cc50f1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classe"), "html", null, true);
        echo "</h1>
\t<ol>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ecole", array()), "classes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 7
            echo "\t\t\t<li>
\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "description", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "annee", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["classe"], "eleves", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["classe"], "responsable", array()), "nom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removeClasse", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectProf", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\">affecter profs</a> 
\t\t\t\t<ol>
\t\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["classe"], "ensMat", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
                // line 11
                echo "\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "matiere", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mat"], "enseignant", array()), "nom", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t\t</ol>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ol>
\t
";
        
        $__internal_bd68f7ea32301b444e2ba08fab5b3d79eb7a71d778f055c2775428d4cc50f1c8->leave($__internal_bd68f7ea32301b444e2ba08fab5b3d79eb7a71d778f055c2775428d4cc50f1c8_prof);

        
        $__internal_43111814b473fe679d5dd576d72f8a734cea563023dfe6f59a2b69fb9f6537d3->leave($__internal_43111814b473fe679d5dd576d72f8a734cea563023dfe6f59a2b69fb9f6537d3_prof);

    }

    public function getTemplateName()
    {
        return "classesViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 16,  98 => 13,  87 => 11,  83 => 10,  64 => 8,  61 => 7,  57 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
<h1>{{'list'|trans}} {{'classe'|trans}}</h1>
\t<ol>
\t\t{% for classe in app.user.ecole.classes %}
\t\t\t<li>
\t\t\t\t{{ classe.nom}} {{ classe.description}} {{ classe.annee.nom}} {{ classe.eleves|length}} {{ classe.responsable.nom}} <a href=\"{{ path('editClasse',{'id':classe.id})}}\">Modifier</a> <a href=\"{{ path('removeClasse',{'id':classe.id})}}\">Supprimer</a> <a href=\"{{ path('affectProf',{'id':classe.id})}}\">affecter profs</a> 
\t\t\t\t<ol>
\t\t\t\t\t{% for mat in classe.ensMat %}
\t\t\t\t\t\t<li>{{ mat.matiere.nom}} {{ mat.enseignant.nom}}</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>
\t\t\t</li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "classesViews/listClasses.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/views/classesViews/listClasses.html.twig");
    }
}
