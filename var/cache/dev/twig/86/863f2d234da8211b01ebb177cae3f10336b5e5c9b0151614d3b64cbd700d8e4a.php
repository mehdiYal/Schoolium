<?php

/* programme/show.html.twig */
class __TwigTemplate_bc64f2a76baad5f6c9c02751e2088ccb57b5a8e96c7d5d971165f8bee8fc4c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "programme/show.html.twig", 1);
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
        $__internal_e64da88a1cce2e494171fd3acf8e39c2267102cf93d9e339262d825ad015c29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64da88a1cce2e494171fd3acf8e39c2267102cf93d9e339262d825ad015c29a->enter($__internal_e64da88a1cce2e494171fd3acf8e39c2267102cf93d9e339262d825ad015c29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programme/show.html.twig"));

        $__internal_f9ead1e73599059bc06fc1658324b6d2623d055f8d127fe9e6665abc20a093f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ead1e73599059bc06fc1658324b6d2623d055f8d127fe9e6665abc20a093f1->enter($__internal_f9ead1e73599059bc06fc1658324b6d2623d055f8d127fe9e6665abc20a093f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programme/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64da88a1cce2e494171fd3acf8e39c2267102cf93d9e339262d825ad015c29a->leave($__internal_e64da88a1cce2e494171fd3acf8e39c2267102cf93d9e339262d825ad015c29a_prof);

        
        $__internal_f9ead1e73599059bc06fc1658324b6d2623d055f8d127fe9e6665abc20a093f1->leave($__internal_f9ead1e73599059bc06fc1658324b6d2623d055f8d127fe9e6665abc20a093f1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcb808a1550175353ae525fd28d4f5947efa2c48cd8b2b5ba2e04f315643dd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb808a1550175353ae525fd28d4f5947efa2c48cd8b2b5ba2e04f315643dd28->enter($__internal_dcb808a1550175353ae525fd28d4f5947efa2c48cd8b2b5ba2e04f315643dd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_530674ad962a4487bc81efb3b56e15e1f7192db4af0bfa8377a16d9e77640136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530674ad962a4487bc81efb3b56e15e1f7192db4af0bfa8377a16d9e77640136->enter($__internal_530674ad962a4487bc81efb3b56e15e1f7192db4af0bfa8377a16d9e77640136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        if ($this->env->isDebug()) {
            // line 5
            \Symfony\Component\VarDumper\VarDumper::dump(($context["data"] ?? $this->getContext($context, "data")));
        }
        // line 6
        echo "\t<table>
\t\t
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "jour", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["jour"]) {
            // line 9
            echo "\t\t<th>
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["jour"], "nom", array()), "html", null, true);
            echo "
\t\t</th>
\t\t
\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "horraire", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["horraire"]) {
                // line 14
                echo "\t\t<tr>\t
\t\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($context["horraire"], "heureDeb", array()), "H") . "H - ") . twig_date_format_filter($this->env, $this->getAttribute($context["horraire"], "heureFin", array()), "H")) . "H"), "html", null, true);
                echo "</td>
\t\t\t\t";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "programme", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
                    // line 17
                    echo "\t\t\t\t\t";
                    if ((($this->getAttribute($this->getAttribute($context["programme"], "jour", array()), "id", array()) == $this->getAttribute($context["jour"], "id", array())) && ($this->getAttribute($this->getAttribute($context["programme"], "horraire", array()), "id", array()) == $this->getAttribute($context["horraire"], "id", array())))) {
                        // line 18
                        echo "\t\t\t\t\t<td>";
                        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["programme"], "matiere", array()), "nom", array()) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "enseignant", array()), "nom", array())) . " ") . $this->getAttribute($this->getAttribute($context["programme"], "salle", array()), "nom", array())), "html", null, true);
                        echo "</td>
\t\t\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "\t\t\t\t
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horraire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t
\t</table>

";
        
        $__internal_530674ad962a4487bc81efb3b56e15e1f7192db4af0bfa8377a16d9e77640136->leave($__internal_530674ad962a4487bc81efb3b56e15e1f7192db4af0bfa8377a16d9e77640136_prof);

        
        $__internal_dcb808a1550175353ae525fd28d4f5947efa2c48cd8b2b5ba2e04f315643dd28->leave($__internal_dcb808a1550175353ae525fd28d4f5947efa2c48cd8b2b5ba2e04f315643dd28_prof);

    }

    public function getTemplateName()
    {
        return "programme/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  108 => 24,  100 => 21,  94 => 20,  88 => 18,  85 => 17,  81 => 16,  77 => 15,  74 => 14,  70 => 13,  64 => 10,  61 => 9,  57 => 8,  53 => 6,  50 => 5,  40 => 4,  11 => 1,);
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
{%dump(data)%}
\t<table>
\t\t
\t{% for jour in data.jour %}
\t\t<th>
\t\t\t{{jour.nom}}
\t\t</th>
\t\t
\t\t{% for horraire in data.horraire %}
\t\t<tr>\t
\t\t\t\t<td>{{horraire.heureDeb|date('H')~'H - '~horraire.heureFin|date('H')~'H'}}</td>
\t\t\t\t{% for programme in data.programme %}
\t\t\t\t\t{% if programme.jour.id==jour.id and programme.horraire.id==horraire.id %}
\t\t\t\t\t<td>{{programme.matiere.nom~' '~programme.enseignant.nom~' '~programme.salle.nom}}</td>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t
\t\t</tr>
\t\t{% endfor %}
\t{% endfor %}

\t
\t</table>

{% endblock %}", "programme/show.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\views\\programme\\show.html.twig");
    }
}
