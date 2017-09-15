<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_ddf2108aa83c97024691b1f725f9db1c9b53b098424ea4327de277dc69adc7f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7e062fc6a70dc2074d7f9fc4ed20dcac1cda4270fd64852f8fca98cc928668b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e062fc6a70dc2074d7f9fc4ed20dcac1cda4270fd64852f8fca98cc928668b3->enter($__internal_7e062fc6a70dc2074d7f9fc4ed20dcac1cda4270fd64852f8fca98cc928668b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_0eb16abca1fd76a16e6f00c389f74416a0c8cde8dfa128456efe6de5f1214303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb16abca1fd76a16e6f00c389f74416a0c8cde8dfa128456efe6de5f1214303->enter($__internal_0eb16abca1fd76a16e6f00c389f74416a0c8cde8dfa128456efe6de5f1214303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e062fc6a70dc2074d7f9fc4ed20dcac1cda4270fd64852f8fca98cc928668b3->leave($__internal_7e062fc6a70dc2074d7f9fc4ed20dcac1cda4270fd64852f8fca98cc928668b3_prof);

        
        $__internal_0eb16abca1fd76a16e6f00c389f74416a0c8cde8dfa128456efe6de5f1214303->leave($__internal_0eb16abca1fd76a16e6f00c389f74416a0c8cde8dfa128456efe6de5f1214303_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7dd33391f87ee614a060dd74b184cf10102df9e332c519eefd7e0fc8f41bcdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd33391f87ee614a060dd74b184cf10102df9e332c519eefd7e0fc8f41bcdb6->enter($__internal_7dd33391f87ee614a060dd74b184cf10102df9e332c519eefd7e0fc8f41bcdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e39bef8782292128c06a9deb0b5b3eb495babc01ad1655fe03a74ece3414341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e39bef8782292128c06a9deb0b5b3eb495babc01ad1655fe03a74ece3414341->enter($__internal_9e39bef8782292128c06a9deb0b5b3eb495babc01ad1655fe03a74ece3414341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9e39bef8782292128c06a9deb0b5b3eb495babc01ad1655fe03a74ece3414341->leave($__internal_9e39bef8782292128c06a9deb0b5b3eb495babc01ad1655fe03a74ece3414341_prof);

        
        $__internal_7dd33391f87ee614a060dd74b184cf10102df9e332c519eefd7e0fc8f41bcdb6->leave($__internal_7dd33391f87ee614a060dd74b184cf10102df9e332c519eefd7e0fc8f41bcdb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
