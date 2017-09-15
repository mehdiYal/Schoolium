<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_72e37d53b3c0ea5b2e0a9828a1eb65dd6176e644353de866bdc311f1ec0027b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96ba01bbdef3d5c0dd0be65b01a3497423e2bcc9e5fb0d4457cc06e82f58c4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ba01bbdef3d5c0dd0be65b01a3497423e2bcc9e5fb0d4457cc06e82f58c4d6->enter($__internal_96ba01bbdef3d5c0dd0be65b01a3497423e2bcc9e5fb0d4457cc06e82f58c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_645bb6b3edc9ab490351407a447c376ac37dfa9df6a933bc33db7c364b2f61a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645bb6b3edc9ab490351407a447c376ac37dfa9df6a933bc33db7c364b2f61a6->enter($__internal_645bb6b3edc9ab490351407a447c376ac37dfa9df6a933bc33db7c364b2f61a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ba01bbdef3d5c0dd0be65b01a3497423e2bcc9e5fb0d4457cc06e82f58c4d6->leave($__internal_96ba01bbdef3d5c0dd0be65b01a3497423e2bcc9e5fb0d4457cc06e82f58c4d6_prof);

        
        $__internal_645bb6b3edc9ab490351407a447c376ac37dfa9df6a933bc33db7c364b2f61a6->leave($__internal_645bb6b3edc9ab490351407a447c376ac37dfa9df6a933bc33db7c364b2f61a6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1899251e18c6bd831226092c4760379daa3da2e0e7bdd9635fa74d5a0eee97bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1899251e18c6bd831226092c4760379daa3da2e0e7bdd9635fa74d5a0eee97bd->enter($__internal_1899251e18c6bd831226092c4760379daa3da2e0e7bdd9635fa74d5a0eee97bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_96472c0d3b90f8c3eab3ac2645ebaf5bc25546824b39845655fd95cbcc7029c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96472c0d3b90f8c3eab3ac2645ebaf5bc25546824b39845655fd95cbcc7029c2->enter($__internal_96472c0d3b90f8c3eab3ac2645ebaf5bc25546824b39845655fd95cbcc7029c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_96472c0d3b90f8c3eab3ac2645ebaf5bc25546824b39845655fd95cbcc7029c2->leave($__internal_96472c0d3b90f8c3eab3ac2645ebaf5bc25546824b39845655fd95cbcc7029c2_prof);

        
        $__internal_1899251e18c6bd831226092c4760379daa3da2e0e7bdd9635fa74d5a0eee97bd->leave($__internal_1899251e18c6bd831226092c4760379daa3da2e0e7bdd9635fa74d5a0eee97bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
