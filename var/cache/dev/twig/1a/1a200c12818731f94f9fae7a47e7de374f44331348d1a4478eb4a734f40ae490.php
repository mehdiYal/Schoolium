<?php

/* matieresViews/eleves.html.twig */
class __TwigTemplate_32b1cc5f6e25dba7eaa61a8f2fcd6ee63fd39a191e399b01256e022683144ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matieresViews/eleves.html.twig", 1);
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
        $__internal_ada893f46a84f55d7742c4fe99904f7f4909d0a90a9a30b6e0feceec4ece33fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada893f46a84f55d7742c4fe99904f7f4909d0a90a9a30b6e0feceec4ece33fa->enter($__internal_ada893f46a84f55d7742c4fe99904f7f4909d0a90a9a30b6e0feceec4ece33fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/eleves.html.twig"));

        $__internal_142413f8f0aba9dd67eb902ad029b4895bf6cba783f89257453fe95ed1a04759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142413f8f0aba9dd67eb902ad029b4895bf6cba783f89257453fe95ed1a04759->enter($__internal_142413f8f0aba9dd67eb902ad029b4895bf6cba783f89257453fe95ed1a04759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada893f46a84f55d7742c4fe99904f7f4909d0a90a9a30b6e0feceec4ece33fa->leave($__internal_ada893f46a84f55d7742c4fe99904f7f4909d0a90a9a30b6e0feceec4ece33fa_prof);

        
        $__internal_142413f8f0aba9dd67eb902ad029b4895bf6cba783f89257453fe95ed1a04759->leave($__internal_142413f8f0aba9dd67eb902ad029b4895bf6cba783f89257453fe95ed1a04759_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7372aeecfe35279f531372cd65238c46ebf46e74e79a78f1a65d248213e81f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7372aeecfe35279f531372cd65238c46ebf46e74e79a78f1a65d248213e81f4a->enter($__internal_7372aeecfe35279f531372cd65238c46ebf46e74e79a78f1a65d248213e81f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f8d8007a030798a0f4e88e466b7477b5fa2fc9b4a8a9c567b1a43d6432c95d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8d8007a030798a0f4e88e466b7477b5fa2fc9b4a8a9c567b1a43d6432c95d0->enter($__internal_7f8d8007a030798a0f4e88e466b7477b5fa2fc9b4a8a9c567b1a43d6432c95d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("teachers"), "html", null, true);
        echo "</h1>
\t<ol>
\t";
        // line 8
        $context["i"] = 0;
        // line 9
        echo "\t";
        if ($this->env->isDebug()) {
            \Symfony\Component\VarDumper\VarDumper::dump(($context["datas"] ?? $this->getContext($context, "datas")));
        }
        // line 10
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 11
            echo "\t\t<form name=\"addNote\" id=\"addNote\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addNote");
            echo "\" method=\"post\">
\t\t\t";
            // line 12
            if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                // line 13
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMatiereEvaluation", array("idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()))), "html", null, true);
                echo "\">Ajouter une evaluation</a>
\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "html", null, true);
                echo "\">
\t\t\t";
            }
            // line 16
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "prenom", array())), "html", null, true);
            echo "
\t\t\t\t";
            // line 17
            $context["j"] = 0;
            // line 18
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "evaluations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 19
                echo "
\t\t\t\t\t";
                // line 20
                $context["bool"] = false;
                // line 21
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 22
                if ( !(null === $this->getAttribute($context["data"], "note", array()))) {
                    // line 23
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "note", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["notes"]) {
                        // line 24
                        echo "\t\t\t\t\t\t\t";
                        if (((($context["bool"] ?? $this->getContext($context, "bool")) == false) && ($this->getAttribute($context["notes"], "evaluation_id", array()) == $this->getAttribute($context["evaluation"], "id", array())))) {
                            // line 25
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 27
                            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"evaluation";
                            // line 28
                            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"eleve";
                            // line 29
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "note\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "note", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 30
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "Evaluation\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 31
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "MatiereEleve\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t";
                            // line 32
                            $context["bool"] = true;
                            // line 33
                            echo "\t\t\t\t\t\t\t\t";
                            $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                            // line 34
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["loop"], "last", array()) && (($context["bool"] ?? $this->getContext($context, "bool")) == false))) {
                            // line 37
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 39
                            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"evaluation";
                            // line 40
                            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"eleve";
                            // line 41
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "note\" value=\"\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 42
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "Evaluation\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t";
                            // line 44
                            $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                            // line 45
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 46
                        echo "
\t\t\t\t\t\t\t

\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "\t\t\t\t\t";
                } else {
                    echo "\t

\t\t\t\t\t\t";
                    // line 52
                    echo "\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" name=\"evaluation";
                    // line 54
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<input type=\"number\" name=\"eleve";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "note\" value=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "Evaluation\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "MatiereEleve\" value=\"-1\">

\t\t\t\t\t\t";
                    // line 59
                    $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                    // line 60
                    echo "
\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t<input type=\"hidden\" name=\"idmatiere";
            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"ideleve";
            // line 64
            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"lengthEvaluation\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "evaluations", array())), "html", null, true);
            echo "\">
\t\t\t</li>
\t\t\t";
            // line 67
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 68
            echo "\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t<input type=\"hidden\" name=\"cpt\" value=\"";
        echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
        echo "\">
\t\t<input type=\"submit\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.update"), "html", null, true);
        echo "\">
\t\t</form>
\t</ol>
\t
";
        
        $__internal_7f8d8007a030798a0f4e88e466b7477b5fa2fc9b4a8a9c567b1a43d6432c95d0->leave($__internal_7f8d8007a030798a0f4e88e466b7477b5fa2fc9b4a8a9c567b1a43d6432c95d0_prof);

        
        $__internal_7372aeecfe35279f531372cd65238c46ebf46e74e79a78f1a65d248213e81f4a->leave($__internal_7372aeecfe35279f531372cd65238c46ebf46e74e79a78f1a65d248213e81f4a_prof);

    }

    public function getTemplateName()
    {
        return "matieresViews/eleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 71,  310 => 70,  303 => 68,  301 => 67,  296 => 65,  290 => 64,  283 => 63,  277 => 62,  273 => 60,  271 => 59,  264 => 57,  256 => 56,  250 => 55,  244 => 54,  240 => 52,  234 => 50,  217 => 46,  214 => 45,  212 => 44,  206 => 43,  198 => 42,  192 => 41,  186 => 40,  183 => 39,  180 => 37,  177 => 36,  173 => 34,  170 => 33,  168 => 32,  160 => 31,  152 => 30,  144 => 29,  138 => 28,  135 => 27,  132 => 25,  129 => 24,  111 => 23,  109 => 22,  106 => 21,  104 => 20,  101 => 19,  96 => 18,  94 => 17,  89 => 16,  84 => 14,  79 => 13,  77 => 12,  72 => 11,  67 => 10,  62 => 9,  60 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
\t{% set i=0 %}
\t{% dump(datas) %}
\t\t{% for data in datas.data %}
\t\t<form name=\"addNote\" id=\"addNote\" action=\"{{path('addNote')}}\" method=\"post\">
\t\t\t{% if i==0 %}
\t\t\t<a href=\"{{ path('addMatiereEvaluation', { 'idClasse': data.eleve.classe.id, 'idMatiere': datas.matiere.id}) }}\">Ajouter une evaluation</a>
\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"{{data.eleve.classe.id}}\">
\t\t\t{% endif %}
\t\t\t<li>{{datas.matiere.nom~' '~data.eleve.nom~' '~data.eleve.prenom}}
\t\t\t\t{% set j=0 %}
\t\t\t\t{% for evaluation in datas.evaluations %}

\t\t\t\t\t{% set bool=false %}
\t\t\t\t\t
\t\t\t\t\t{% if(data.note is not null) %}
\t\t\t\t\t\t{% for notes in data.note %}
\t\t\t\t\t\t\t{% if bool==false and notes.evaluation_id==evaluation.id %}

\t\t\t\t\t\t\t\t{# Cas où l'evaluation a été noté #}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"{{notes.note}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"{{notes.id}}\">
\t\t\t\t\t\t\t\t{% set bool=true %}
\t\t\t\t\t\t\t\t{% set j=j+1 %}

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if loop.last and bool==false %}

\t\t\t\t\t\t\t\t{# Cas où l'evaluation n'a pas été noté #}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\">
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t{% set j=j+1 %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t

\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}\t

\t\t\t\t\t\t{# Cas où l'eleve n'a pas été noté #}\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\">
\t\t\t\t\t\t<input type=\"number\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"-1\">

\t\t\t\t\t\t{% set j=j+1 %}

\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t<input type=\"hidden\" name=\"idmatiere{{i}}\" value=\"{{datas.matiere.id}}\">
\t\t\t\t<input type=\"hidden\" name=\"ideleve{{i}}\" value=\"{{data.eleve.id}}\">
\t\t\t\t<input type=\"hidden\" name=\"lengthEvaluation\" value=\"{{datas.evaluations|length}}\">
\t\t\t</li>
\t\t\t{% set i=i+1 %}
\t\t\t
\t\t{% endfor %}
\t\t<input type=\"hidden\" name=\"cpt\" value=\"{{i}}\">
\t\t<input type=\"submit\" value=\"{{'global.update'|trans}}\">
\t\t</form>
\t</ol>
\t
{% endblock %}", "matieresViews/eleves.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\matieresViews\\eleves.html.twig");
    }
}
