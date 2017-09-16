<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_afabcaa289a78be0d6362e0d3a9fa74b7734b1209c3d08c48f48c2a56b87ee74 extends Twig_Template
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
        $__internal_b928f17cf34bbd1ba07e7683b2aee83e67f7fc2ac5d3bd2ee56181f6c68e52d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b928f17cf34bbd1ba07e7683b2aee83e67f7fc2ac5d3bd2ee56181f6c68e52d5->enter($__internal_b928f17cf34bbd1ba07e7683b2aee83e67f7fc2ac5d3bd2ee56181f6c68e52d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a3ba636100e968172d19c88bd1c864c5afe4dcf191a1be4530ecfbcd5a5ac6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ba636100e968172d19c88bd1c864c5afe4dcf191a1be4530ecfbcd5a5ac6a7->enter($__internal_a3ba636100e968172d19c88bd1c864c5afe4dcf191a1be4530ecfbcd5a5ac6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b928f17cf34bbd1ba07e7683b2aee83e67f7fc2ac5d3bd2ee56181f6c68e52d5->leave($__internal_b928f17cf34bbd1ba07e7683b2aee83e67f7fc2ac5d3bd2ee56181f6c68e52d5_prof);

        
        $__internal_a3ba636100e968172d19c88bd1c864c5afe4dcf191a1be4530ecfbcd5a5ac6a7->leave($__internal_a3ba636100e968172d19c88bd1c864c5afe4dcf191a1be4530ecfbcd5a5ac6a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8557370fa843c7ced800d074e0b7fc482ba0c3d99b5fde0885f3d15cb6c64949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8557370fa843c7ced800d074e0b7fc482ba0c3d99b5fde0885f3d15cb6c64949->enter($__internal_8557370fa843c7ced800d074e0b7fc482ba0c3d99b5fde0885f3d15cb6c64949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f07e391420bfef6e119d0684601b02d902ae11450e1cc1501b5c6c110c4db09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f07e391420bfef6e119d0684601b02d902ae11450e1cc1501b5c6c110c4db09->enter($__internal_0f07e391420bfef6e119d0684601b02d902ae11450e1cc1501b5c6c110c4db09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f07e391420bfef6e119d0684601b02d902ae11450e1cc1501b5c6c110c4db09->leave($__internal_0f07e391420bfef6e119d0684601b02d902ae11450e1cc1501b5c6c110c4db09_prof);

        
        $__internal_8557370fa843c7ced800d074e0b7fc482ba0c3d99b5fde0885f3d15cb6c64949->leave($__internal_8557370fa843c7ced800d074e0b7fc482ba0c3d99b5fde0885f3d15cb6c64949_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a286147b042021ca21382a4a6a0a02a2a3e34a71ce049de32e8dac6f512c4b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a286147b042021ca21382a4a6a0a02a2a3e34a71ce049de32e8dac6f512c4b5b->enter($__internal_a286147b042021ca21382a4a6a0a02a2a3e34a71ce049de32e8dac6f512c4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_978a3874397e1f4193de0a0727ba36add5164e81bbbce62709fc87b58a369e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978a3874397e1f4193de0a0727ba36add5164e81bbbce62709fc87b58a369e7e->enter($__internal_978a3874397e1f4193de0a0727ba36add5164e81bbbce62709fc87b58a369e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_978a3874397e1f4193de0a0727ba36add5164e81bbbce62709fc87b58a369e7e->leave($__internal_978a3874397e1f4193de0a0727ba36add5164e81bbbce62709fc87b58a369e7e_prof);

        
        $__internal_a286147b042021ca21382a4a6a0a02a2a3e34a71ce049de32e8dac6f512c4b5b->leave($__internal_a286147b042021ca21382a4a6a0a02a2a3e34a71ce049de32e8dac6f512c4b5b_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
