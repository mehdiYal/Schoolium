<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1ea11146c7f902620f5f9e825cfcd8d2d01d1660c3e5e59ce27a2aae5f1f025a extends Twig_Template
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
        $__internal_da0e40674efd7f63949e691540c7b1fb71e1a2fcfe99eb78a3361c3f51bb2dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0e40674efd7f63949e691540c7b1fb71e1a2fcfe99eb78a3361c3f51bb2dcc->enter($__internal_da0e40674efd7f63949e691540c7b1fb71e1a2fcfe99eb78a3361c3f51bb2dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_553b3afaabc383adb2538f6596f0e444dbe7ac67ea636ecf4d5402c58bb2d9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553b3afaabc383adb2538f6596f0e444dbe7ac67ea636ecf4d5402c58bb2d9bc->enter($__internal_553b3afaabc383adb2538f6596f0e444dbe7ac67ea636ecf4d5402c58bb2d9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da0e40674efd7f63949e691540c7b1fb71e1a2fcfe99eb78a3361c3f51bb2dcc->leave($__internal_da0e40674efd7f63949e691540c7b1fb71e1a2fcfe99eb78a3361c3f51bb2dcc_prof);

        
        $__internal_553b3afaabc383adb2538f6596f0e444dbe7ac67ea636ecf4d5402c58bb2d9bc->leave($__internal_553b3afaabc383adb2538f6596f0e444dbe7ac67ea636ecf4d5402c58bb2d9bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_960ce739107a7cdd4a2118859137230e88a90abdb88c06dff7fd9e9f3c16b4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960ce739107a7cdd4a2118859137230e88a90abdb88c06dff7fd9e9f3c16b4f6->enter($__internal_960ce739107a7cdd4a2118859137230e88a90abdb88c06dff7fd9e9f3c16b4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd071d34a972840a42ba99460bc5b35adafb3a29eda40a42b39c66fa623f82cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd071d34a972840a42ba99460bc5b35adafb3a29eda40a42b39c66fa623f82cb->enter($__internal_bd071d34a972840a42ba99460bc5b35adafb3a29eda40a42b39c66fa623f82cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd071d34a972840a42ba99460bc5b35adafb3a29eda40a42b39c66fa623f82cb->leave($__internal_bd071d34a972840a42ba99460bc5b35adafb3a29eda40a42b39c66fa623f82cb_prof);

        
        $__internal_960ce739107a7cdd4a2118859137230e88a90abdb88c06dff7fd9e9f3c16b4f6->leave($__internal_960ce739107a7cdd4a2118859137230e88a90abdb88c06dff7fd9e9f3c16b4f6_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_466c3f820b298ffdd20d39473109cf426b1bf02759b1f0d4596f52ef73a2c3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466c3f820b298ffdd20d39473109cf426b1bf02759b1f0d4596f52ef73a2c3f2->enter($__internal_466c3f820b298ffdd20d39473109cf426b1bf02759b1f0d4596f52ef73a2c3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c14d2e2910015e695e9490a22f591675021c8c6bdb1f8dd64390174eed5b341c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14d2e2910015e695e9490a22f591675021c8c6bdb1f8dd64390174eed5b341c->enter($__internal_c14d2e2910015e695e9490a22f591675021c8c6bdb1f8dd64390174eed5b341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_c14d2e2910015e695e9490a22f591675021c8c6bdb1f8dd64390174eed5b341c->leave($__internal_c14d2e2910015e695e9490a22f591675021c8c6bdb1f8dd64390174eed5b341c_prof);

        
        $__internal_466c3f820b298ffdd20d39473109cf426b1bf02759b1f0d4596f52ef73a2c3f2->leave($__internal_466c3f820b298ffdd20d39473109cf426b1bf02759b1f0d4596f52ef73a2c3f2_prof);

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
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Schoolium\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
