<?php

/* enseignantsViews/listClasses.html.twig */
class __TwigTemplate_90a2908c334246f40906650e913acd3166d016714e24053196b6db6ea0d471aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enseignantsViews/listClasses.html.twig", 1);
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
        $__internal_54780fe8067b4784f69af83823d9f5a3d16e62a70d5425b5f429b8772f65beac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54780fe8067b4784f69af83823d9f5a3d16e62a70d5425b5f429b8772f65beac->enter($__internal_54780fe8067b4784f69af83823d9f5a3d16e62a70d5425b5f429b8772f65beac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $__internal_5a1fc7998d04834b33a0e17132ccbe7068fc1bef13e824a6cace0b9b7d8c879b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1fc7998d04834b33a0e17132ccbe7068fc1bef13e824a6cace0b9b7d8c879b->enter($__internal_5a1fc7998d04834b33a0e17132ccbe7068fc1bef13e824a6cace0b9b7d8c879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enseignantsViews/listClasses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54780fe8067b4784f69af83823d9f5a3d16e62a70d5425b5f429b8772f65beac->leave($__internal_54780fe8067b4784f69af83823d9f5a3d16e62a70d5425b5f429b8772f65beac_prof);

        
        $__internal_5a1fc7998d04834b33a0e17132ccbe7068fc1bef13e824a6cace0b9b7d8c879b->leave($__internal_5a1fc7998d04834b33a0e17132ccbe7068fc1bef13e824a6cace0b9b7d8c879b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7f651360301cc6799ba788c0a5cf909c00aae803dd3456c27630cc1fbd2cb1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f651360301cc6799ba788c0a5cf909c00aae803dd3456c27630cc1fbd2cb1d->enter($__internal_a7f651360301cc6799ba788c0a5cf909c00aae803dd3456c27630cc1fbd2cb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8267ea08758368f37393921be0eac2b339aa887de7b1405b0e03a42430483527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8267ea08758368f37393921be0eac2b339aa887de7b1405b0e03a42430483527->enter($__internal_8267ea08758368f37393921be0eac2b339aa887de7b1405b0e03a42430483527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
";
        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump(($context["classes"] ?? $this->getContext($context, "classes")));
        }
        // line 6
        echo "\t<ol>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 8
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showEleve", array("idClasse" => $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((((((($this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "ecole", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute($context["classe"], "classe", array()), "annee", array()), "niveau", array())) . " ") . $this->getAttribute($this->getAttribute($context["classe"], "matiere", array()), "nom", array())), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ol>
\t
";
        
        $__internal_8267ea08758368f37393921be0eac2b339aa887de7b1405b0e03a42430483527->leave($__internal_8267ea08758368f37393921be0eac2b339aa887de7b1405b0e03a42430483527_prof);

        
        $__internal_a7f651360301cc6799ba788c0a5cf909c00aae803dd3456c27630cc1fbd2cb1d->leave($__internal_a7f651360301cc6799ba788c0a5cf909c00aae803dd3456c27630cc1fbd2cb1d_prof);

    }

    public function getTemplateName()
    {
        return "enseignantsViews/listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  67 => 8,  63 => 7,  60 => 6,  57 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% dump(classes) %}
\t<ol>
\t\t{% for classe in classes %}
\t\t\t<li><a href=\"{{ path('showEleve', { 'idClasse': classe.classe.id, 'idMatiere': classe.matiere.id}) }}\">{{classe.classe.ecole.nom~' '~classe.classe.nom~' '~classe.classe.annee.nom~' '~classe.classe.annee.niveau~' '~classe.matiere.nom}}</a></li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "enseignantsViews/listClasses.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\enseignantsViews\\listClasses.html.twig");
    }
}
