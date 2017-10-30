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
        $__internal_7f9b61b944ad322c6959b2b7539bb8856507ba26630913f8c555a04d56bb662d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9b61b944ad322c6959b2b7539bb8856507ba26630913f8c555a04d56bb662d->enter($__internal_7f9b61b944ad322c6959b2b7539bb8856507ba26630913f8c555a04d56bb662d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/eleves.html.twig"));

        $__internal_631973d7a57a5a887510cff967fdae7eb0126b0f1436779bac5b689f7c156c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631973d7a57a5a887510cff967fdae7eb0126b0f1436779bac5b689f7c156c4c->enter($__internal_631973d7a57a5a887510cff967fdae7eb0126b0f1436779bac5b689f7c156c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matieresViews/eleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f9b61b944ad322c6959b2b7539bb8856507ba26630913f8c555a04d56bb662d->leave($__internal_7f9b61b944ad322c6959b2b7539bb8856507ba26630913f8c555a04d56bb662d_prof);

        
        $__internal_631973d7a57a5a887510cff967fdae7eb0126b0f1436779bac5b689f7c156c4c->leave($__internal_631973d7a57a5a887510cff967fdae7eb0126b0f1436779bac5b689f7c156c4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0efc22db651a7ae22b65785c80a766fde791e3776fe35b568107946c9936583b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efc22db651a7ae22b65785c80a766fde791e3776fe35b568107946c9936583b->enter($__internal_0efc22db651a7ae22b65785c80a766fde791e3776fe35b568107946c9936583b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5928c3abd9c7bcd269b6db17184eef015e75586a524d61783242ff4899db834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5928c3abd9c7bcd269b6db17184eef015e75586a524d61783242ff4899db834->enter($__internal_e5928c3abd9c7bcd269b6db17184eef015e75586a524d61783242ff4899db834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

\t<ol>
\t";
        // line 7
        $context["i"] = 0;
        // line 8
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 9
            echo "\t\t<form name=\"addNote\" id=\"addNote\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addNote");
            echo "\" method=\"post\">
\t\t\t";
            // line 10
            if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                // line 11
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMatiereEvaluation", array("idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation.add"), "html", null, true);
                echo "</a>
\t\t\t<a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_cours", array("idClasse" => $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.add"), "html", null, true);
                echo "</a>
\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "classe", array()), "id", array()), "html", null, true);
                echo "\">
\t\t\t";
            }
            // line 15
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "prenom", array())), "html", null, true);
            echo "
\t\t\t\t";
            // line 16
            $context["j"] = 0;
            // line 17
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "evaluations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 18
                echo "
\t\t\t\t\t";
                // line 19
                $context["bool"] = false;
                // line 20
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 21
                if ( !(null === $this->getAttribute($context["data"], "note", array()))) {
                    // line 22
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
                        // line 23
                        echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
                        // line 24
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
                            echo "\" disabled>
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
\t\t\t\t\t\t\t\t<a href=\"";
                            // line 32
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_note", array("id" => $this->getAttribute($context["notes"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.delete"), "html", null, true);
                            echo "</a>
\t\t\t\t\t\t\t\t";
                            // line 33
                            $context["bool"] = true;
                            // line 34
                            echo "\t\t\t\t\t\t\t\t";
                            $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                            // line 35
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 37
                        echo "\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["loop"], "last", array()) && (($context["bool"] ?? $this->getContext($context, "bool")) == false))) {
                            // line 38
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 40
                            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"evaluation";
                            // line 41
                            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                            echo "\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                            echo "\" disabled>
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"eleve";
                            // line 42
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "note\" value=\"\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "Evaluation\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                            // line 44
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                            echo "id";
                            echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                            echo "MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t";
                            // line 45
                            $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                            // line 46
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 47
                        echo "\t\t\t\t\t\t\t</div>
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
                    // line 49
                    echo "\t\t\t\t\t";
                } else {
                    echo "\t

\t\t\t\t\t\t";
                    // line 51
                    echo "\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" name=\"evaluation";
                    // line 53
                    echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "nom", array()), "html", null, true);
                    echo "\" disabled>
\t\t\t\t\t\t<input type=\"number\" name=\"eleve";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "note\" value=\"\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "Evaluation\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
                    echo "id";
                    echo twig_escape_filter($this->env, ($context["j"] ?? $this->getContext($context, "j")), "html", null, true);
                    echo "MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t";
                    // line 57
                    $context["j"] = (($context["j"] ?? $this->getContext($context, "j")) + 1);
                    // line 58
                    echo "
\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t<input type=\"hidden\" name=\"idmatiere";
            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "matiere", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"ideleve";
            // line 62
            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "eleve", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"lengthEvaluation\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "evaluations", array())), "html", null, true);
            echo "\">
\t\t\t</li>
\t\t\t";
            // line 65
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 66
            echo "\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t<input type=\"hidden\" name=\"cpt\" value=\"";
        echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
        echo "\">
\t\t<input type=\"submit\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("global.update"), "html", null, true);
        echo "\">
\t\t</form>
\t</ol>

\t<ol>
\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datas"] ?? $this->getContext($context, "datas")), "cours", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 75
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "titre", array()), "html", null, true);
            echo " 
\t\t\t<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_cours_support"] ?? $this->getContext($context, "uploads_cours_support")) . "/") . $this->getAttribute($context["cours"], "support", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.support.title"), "html", null, true);
            echo "</a> 
\t\t\t<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_cours_devoir"] ?? $this->getContext($context, "uploads_cours_devoir")) . "/") . $this->getAttribute($context["cours"], "devoir", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("devoir.maison.title"), "html", null, true);
            echo "</a> 
\t\t\t<a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($context["uploads_cours_annexe"] ?? $this->getContext($context, "uploads_cours_annexe")) . "/") . $this->getAttribute($context["cours"], "annexe", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cours.annexe.title"), "html", null, true);
            echo "</a>
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t</ol>
\t
";
        
        $__internal_e5928c3abd9c7bcd269b6db17184eef015e75586a524d61783242ff4899db834->leave($__internal_e5928c3abd9c7bcd269b6db17184eef015e75586a524d61783242ff4899db834_prof);

        
        $__internal_0efc22db651a7ae22b65785c80a766fde791e3776fe35b568107946c9936583b->leave($__internal_0efc22db651a7ae22b65785c80a766fde791e3776fe35b568107946c9936583b_prof);

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
        return array (  357 => 81,  346 => 78,  340 => 77,  334 => 76,  329 => 75,  325 => 74,  317 => 69,  312 => 68,  305 => 66,  303 => 65,  298 => 63,  292 => 62,  285 => 61,  279 => 60,  275 => 58,  273 => 57,  267 => 56,  259 => 55,  253 => 54,  247 => 53,  243 => 51,  237 => 49,  222 => 47,  219 => 46,  217 => 45,  211 => 44,  203 => 43,  197 => 42,  191 => 41,  188 => 40,  185 => 38,  182 => 37,  178 => 35,  175 => 34,  173 => 33,  167 => 32,  159 => 31,  151 => 30,  143 => 29,  137 => 28,  134 => 27,  131 => 25,  129 => 24,  126 => 23,  108 => 22,  106 => 21,  103 => 20,  101 => 19,  98 => 18,  93 => 17,  91 => 16,  86 => 15,  81 => 13,  75 => 12,  68 => 11,  66 => 10,  61 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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


\t<ol>
\t{% set i=0 %}
\t\t{% for data in datas.data %}
\t\t<form name=\"addNote\" id=\"addNote\" action=\"{{path('addNote')}}\" method=\"post\">
\t\t\t{% if i==0 %}
\t\t\t<a href=\"{{ path('addMatiereEvaluation', { 'idClasse': data.eleve.classe.id, 'idMatiere': datas.matiere.id}) }}\">{{'evaluation.add'|trans}}</a>
\t\t\t<a href=\"{{ path('new_cours', { 'idClasse': data.eleve.classe.id, 'idMatiere': datas.matiere.id}) }}\">{{'cours.add'|trans}}</a>
\t\t\t<input type=\"hidden\" name=\"idClasse\" value=\"{{data.eleve.classe.id}}\">
\t\t\t{% endif %}
\t\t\t<li>{{datas.matiere.nom~' '~data.eleve.nom~' '~data.eleve.prenom}}
\t\t\t\t{% set j=0 %}
\t\t\t\t{% for evaluation in datas.evaluations %}

\t\t\t\t\t{% set bool=false %}
\t\t\t\t\t
\t\t\t\t\t{% if(data.note is not null) %}
\t\t\t\t\t\t{% for notes in data.note %}
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{% if bool==false and notes.evaluation_id==evaluation.id %}

\t\t\t\t\t\t\t\t{# Cas où l'evaluation a été noté #}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\" disabled>
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"{{notes.note}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"{{notes.id}}\">
\t\t\t\t\t\t\t\t<a href=\"{{path('delete_note', { 'id': notes.id })}}\">{{'global.delete'|trans()}}</a>
\t\t\t\t\t\t\t\t{% set bool=true %}
\t\t\t\t\t\t\t\t{% set j=j+1 %}

\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if loop.last and bool==false %}

\t\t\t\t\t\t\t\t{# Cas où l'evaluation n'a pas été noté #}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\" disabled>
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"eleve{{data.eleve.id}}id{{j}}note\" value=\"\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}Evaluation\" value=\"{{evaluation.id}}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"eleve{{data.eleve.id}}id{{j}}MatiereEleve\" value=\"-1\">
\t\t\t\t\t\t\t\t{% set j=j+1 %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}\t

\t\t\t\t\t\t{# Cas où l'eleve n'a pas été noté #}\t
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" name=\"evaluation{{i}}\" value=\"{{evaluation.nom}}\" disabled>
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

\t<ol>
\t\t{% for cours in datas.cours %}
\t\t<li>{{cours.titre}} 
\t\t\t<a href=\"{{asset(uploads_cours_support~'/'~cours.support)}}\">{{'cours.support.title'|trans}}</a> 
\t\t\t<a href=\"{{asset(uploads_cours_devoir~'/'~cours.devoir)}}\">{{'devoir.maison.title'|trans}}</a> 
\t\t\t<a href=\"{{asset(uploads_cours_annexe~'/'~cours.annexe)}}\">{{'cours.annexe.title'|trans}}</a>
\t\t</li>
\t\t{% endfor %}
\t</ol>
\t
{% endblock %}", "matieresViews/eleves.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\matieresViews\\eleves.html.twig");
    }
}
