<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_afabcaa289a78be0d6362e0d3a9fa74b7734b1209c3d08c48f48c2a56b87ee74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a69b160c71bb2c7f3cdaeb2b0c2041c77d4bad10f5b69f45a0d55520da019c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69b160c71bb2c7f3cdaeb2b0c2041c77d4bad10f5b69f45a0d55520da019c31->enter($__internal_a69b160c71bb2c7f3cdaeb2b0c2041c77d4bad10f5b69f45a0d55520da019c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_a402b7e5197f37e45ac3ba13399d47c73a04ca2cec70e28d8070c63a3b912100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a402b7e5197f37e45ac3ba13399d47c73a04ca2cec70e28d8070c63a3b912100->enter($__internal_a402b7e5197f37e45ac3ba13399d47c73a04ca2cec70e28d8070c63a3b912100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a69b160c71bb2c7f3cdaeb2b0c2041c77d4bad10f5b69f45a0d55520da019c31->leave($__internal_a69b160c71bb2c7f3cdaeb2b0c2041c77d4bad10f5b69f45a0d55520da019c31_prof);

        
        $__internal_a402b7e5197f37e45ac3ba13399d47c73a04ca2cec70e28d8070c63a3b912100->leave($__internal_a402b7e5197f37e45ac3ba13399d47c73a04ca2cec70e28d8070c63a3b912100_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d613bcb2ae8b7015307c240cf3d801c39ea26b095914108a01d40408382a381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d613bcb2ae8b7015307c240cf3d801c39ea26b095914108a01d40408382a381->enter($__internal_7d613bcb2ae8b7015307c240cf3d801c39ea26b095914108a01d40408382a381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbb4aa421a2e5aece78f45d15802d3ee056d370d7561d5b37284c41b3b40b4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb4aa421a2e5aece78f45d15802d3ee056d370d7561d5b37284c41b3b40b4d3->enter($__internal_dbb4aa421a2e5aece78f45d15802d3ee056d370d7561d5b37284c41b3b40b4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            
        </div>

        ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 9
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 10
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        <div>
            ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "        </div>
";
        
        $__internal_dbb4aa421a2e5aece78f45d15802d3ee056d370d7561d5b37284c41b3b40b4d3->leave($__internal_dbb4aa421a2e5aece78f45d15802d3ee056d370d7561d5b37284c41b3b40b4d3_prof);

        
        $__internal_7d613bcb2ae8b7015307c240cf3d801c39ea26b095914108a01d40408382a381->leave($__internal_7d613bcb2ae8b7015307c240cf3d801c39ea26b095914108a01d40408382a381_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_507329139d1e6740216783b39ea725a5a33e3e6f1fecbf0ccbe9e36ec507771e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507329139d1e6740216783b39ea725a5a33e3e6f1fecbf0ccbe9e36ec507771e->enter($__internal_507329139d1e6740216783b39ea725a5a33e3e6f1fecbf0ccbe9e36ec507771e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_963de4a37a24e722cb597b5e58e81fedd386a6bb74046399fd905d5e0078e7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963de4a37a24e722cb597b5e58e81fedd386a6bb74046399fd905d5e0078e7b3->enter($__internal_963de4a37a24e722cb597b5e58e81fedd386a6bb74046399fd905d5e0078e7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_963de4a37a24e722cb597b5e58e81fedd386a6bb74046399fd905d5e0078e7b3->leave($__internal_963de4a37a24e722cb597b5e58e81fedd386a6bb74046399fd905d5e0078e7b3_prof);

        
        $__internal_507329139d1e6740216783b39ea725a5a33e3e6f1fecbf0ccbe9e36ec507771e->leave($__internal_507329139d1e6740216783b39ea725a5a33e3e6f1fecbf0ccbe9e36ec507771e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 19,  107 => 18,  96 => 20,  94 => 18,  90 => 16,  87 => 15,  81 => 14,  72 => 11,  67 => 10,  62 => 9,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
            
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
