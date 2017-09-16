<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_52b8f74340cccf1ea36f7bc98ee3aeb77f57b23ed6fb26c93c3cd8d6924e6ee2 extends Twig_Template
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
        $__internal_5a5c077926c43d0c30f24239e5701afe6c78a36de8bff474467b3c80f3453491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5c077926c43d0c30f24239e5701afe6c78a36de8bff474467b3c80f3453491->enter($__internal_5a5c077926c43d0c30f24239e5701afe6c78a36de8bff474467b3c80f3453491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_16978c786d4a8bebfd281374f6284d672b949e07e5d41296413e42601120e239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16978c786d4a8bebfd281374f6284d672b949e07e5d41296413e42601120e239->enter($__internal_16978c786d4a8bebfd281374f6284d672b949e07e5d41296413e42601120e239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5c077926c43d0c30f24239e5701afe6c78a36de8bff474467b3c80f3453491->leave($__internal_5a5c077926c43d0c30f24239e5701afe6c78a36de8bff474467b3c80f3453491_prof);

        
        $__internal_16978c786d4a8bebfd281374f6284d672b949e07e5d41296413e42601120e239->leave($__internal_16978c786d4a8bebfd281374f6284d672b949e07e5d41296413e42601120e239_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_305c55f963a61952deb9d4945713cd88d6d65d073e6fb08a9e7a37d8487fed80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305c55f963a61952deb9d4945713cd88d6d65d073e6fb08a9e7a37d8487fed80->enter($__internal_305c55f963a61952deb9d4945713cd88d6d65d073e6fb08a9e7a37d8487fed80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1368fcc06e860faf002d2683c4c03c23820f2c3a452d076380b201fa74307d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1368fcc06e860faf002d2683c4c03c23820f2c3a452d076380b201fa74307d69->enter($__internal_1368fcc06e860faf002d2683c4c03c23820f2c3a452d076380b201fa74307d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            
        </div>

        ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 8
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_1368fcc06e860faf002d2683c4c03c23820f2c3a452d076380b201fa74307d69->leave($__internal_1368fcc06e860faf002d2683c4c03c23820f2c3a452d076380b201fa74307d69_prof);

        
        $__internal_305c55f963a61952deb9d4945713cd88d6d65d073e6fb08a9e7a37d8487fed80->leave($__internal_305c55f963a61952deb9d4945713cd88d6d65d073e6fb08a9e7a37d8487fed80_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69321ca6834cb71a491756fce900e94e38862c3d05515355af45fae5a9664700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69321ca6834cb71a491756fce900e94e38862c3d05515355af45fae5a9664700->enter($__internal_69321ca6834cb71a491756fce900e94e38862c3d05515355af45fae5a9664700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_045ede4fcac3ea0c2185c57b6facba7c757f5913b5281c330c63ddf520dd3cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045ede4fcac3ea0c2185c57b6facba7c757f5913b5281c330c63ddf520dd3cac->enter($__internal_045ede4fcac3ea0c2185c57b6facba7c757f5913b5281c330c63ddf520dd3cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "            ";
        
        $__internal_045ede4fcac3ea0c2185c57b6facba7c757f5913b5281c330c63ddf520dd3cac->leave($__internal_045ede4fcac3ea0c2185c57b6facba7c757f5913b5281c330c63ddf520dd3cac_prof);

        
        $__internal_69321ca6834cb71a491756fce900e94e38862c3d05515355af45fae5a9664700->leave($__internal_69321ca6834cb71a491756fce900e94e38862c3d05515355af45fae5a9664700_prof);

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
