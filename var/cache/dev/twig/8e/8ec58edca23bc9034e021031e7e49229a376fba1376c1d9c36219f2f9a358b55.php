<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_906e121ca2b51e14af30f3fa6f655c55c0074ef416fb9b669033d2be6938ac4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_0e28303c00eb1a75dba17950e2128037c0d007878913720642093cfd2f53ef58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e28303c00eb1a75dba17950e2128037c0d007878913720642093cfd2f53ef58->enter($__internal_0e28303c00eb1a75dba17950e2128037c0d007878913720642093cfd2f53ef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_9e9a73211d489829896742f77ccc0124dcd873a413a471c911801a4abe15e78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9a73211d489829896742f77ccc0124dcd873a413a471c911801a4abe15e78d->enter($__internal_9e9a73211d489829896742f77ccc0124dcd873a413a471c911801a4abe15e78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e28303c00eb1a75dba17950e2128037c0d007878913720642093cfd2f53ef58->leave($__internal_0e28303c00eb1a75dba17950e2128037c0d007878913720642093cfd2f53ef58_prof);

        
        $__internal_9e9a73211d489829896742f77ccc0124dcd873a413a471c911801a4abe15e78d->leave($__internal_9e9a73211d489829896742f77ccc0124dcd873a413a471c911801a4abe15e78d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_413f1ab79e009b78105647efb9aff3e46e3ba42c0750ab6c4efefe7b0bf1e9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413f1ab79e009b78105647efb9aff3e46e3ba42c0750ab6c4efefe7b0bf1e9a7->enter($__internal_413f1ab79e009b78105647efb9aff3e46e3ba42c0750ab6c4efefe7b0bf1e9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac521a7f50cf216cc1961ceb9a865f8de813f6d5897ad6393edc58d095b96c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac521a7f50cf216cc1961ceb9a865f8de813f6d5897ad6393edc58d095b96c50->enter($__internal_ac521a7f50cf216cc1961ceb9a865f8de813f6d5897ad6393edc58d095b96c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ac521a7f50cf216cc1961ceb9a865f8de813f6d5897ad6393edc58d095b96c50->leave($__internal_ac521a7f50cf216cc1961ceb9a865f8de813f6d5897ad6393edc58d095b96c50_prof);

        
        $__internal_413f1ab79e009b78105647efb9aff3e46e3ba42c0750ab6c4efefe7b0bf1e9a7->leave($__internal_413f1ab79e009b78105647efb9aff3e46e3ba42c0750ab6c4efefe7b0bf1e9a7_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf8abc0241dd405a3900ae6f2c159ef593f06ad706aab470feff7057ba039de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8abc0241dd405a3900ae6f2c159ef593f06ad706aab470feff7057ba039de2->enter($__internal_cf8abc0241dd405a3900ae6f2c159ef593f06ad706aab470feff7057ba039de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_403677a0d3aaac12fad961f38166c1107227945ac47ac18c3aebcbff5b90d825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403677a0d3aaac12fad961f38166c1107227945ac47ac18c3aebcbff5b90d825->enter($__internal_403677a0d3aaac12fad961f38166c1107227945ac47ac18c3aebcbff5b90d825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_403677a0d3aaac12fad961f38166c1107227945ac47ac18c3aebcbff5b90d825->leave($__internal_403677a0d3aaac12fad961f38166c1107227945ac47ac18c3aebcbff5b90d825_prof);

        
        $__internal_cf8abc0241dd405a3900ae6f2c159ef593f06ad706aab470feff7057ba039de2->leave($__internal_cf8abc0241dd405a3900ae6f2c159ef593f06ad706aab470feff7057ba039de2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
