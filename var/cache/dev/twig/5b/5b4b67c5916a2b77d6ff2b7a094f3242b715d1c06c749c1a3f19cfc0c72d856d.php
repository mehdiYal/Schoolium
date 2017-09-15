<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_44105c05aef898e5c71d5de114cd08919e427223e3e8789a0835dafc1907cb7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd339f417d5ffca12fee75fc8606b114e6092903a07a768f52796d90889c98b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd339f417d5ffca12fee75fc8606b114e6092903a07a768f52796d90889c98b7->enter($__internal_bd339f417d5ffca12fee75fc8606b114e6092903a07a768f52796d90889c98b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_dce2f129f9ba2e5348ecc5569eeeb8ee0325377e6aae269ad4ad27e6bc8eeb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce2f129f9ba2e5348ecc5569eeeb8ee0325377e6aae269ad4ad27e6bc8eeb0b->enter($__internal_dce2f129f9ba2e5348ecc5569eeeb8ee0325377e6aae269ad4ad27e6bc8eeb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bd339f417d5ffca12fee75fc8606b114e6092903a07a768f52796d90889c98b7->leave($__internal_bd339f417d5ffca12fee75fc8606b114e6092903a07a768f52796d90889c98b7_prof);

        
        $__internal_dce2f129f9ba2e5348ecc5569eeeb8ee0325377e6aae269ad4ad27e6bc8eeb0b->leave($__internal_dce2f129f9ba2e5348ecc5569eeeb8ee0325377e6aae269ad4ad27e6bc8eeb0b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b395567ae093eaff1e3b5635eac994b8dfbbaedd2307f7776c2f538ed5bb83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b395567ae093eaff1e3b5635eac994b8dfbbaedd2307f7776c2f538ed5bb83b->enter($__internal_0b395567ae093eaff1e3b5635eac994b8dfbbaedd2307f7776c2f538ed5bb83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9a32f740a066969f4140f463cf3fff767e847ddf9ca66c5b102645fc742faa81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a32f740a066969f4140f463cf3fff767e847ddf9ca66c5b102645fc742faa81->enter($__internal_9a32f740a066969f4140f463cf3fff767e847ddf9ca66c5b102645fc742faa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9a32f740a066969f4140f463cf3fff767e847ddf9ca66c5b102645fc742faa81->leave($__internal_9a32f740a066969f4140f463cf3fff767e847ddf9ca66c5b102645fc742faa81_prof);

        
        $__internal_0b395567ae093eaff1e3b5635eac994b8dfbbaedd2307f7776c2f538ed5bb83b->leave($__internal_0b395567ae093eaff1e3b5635eac994b8dfbbaedd2307f7776c2f538ed5bb83b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e6717f07454c3eddfcb85db255625b590ca881a2b84f90b4941d3657c52e6ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6717f07454c3eddfcb85db255625b590ca881a2b84f90b4941d3657c52e6ab3->enter($__internal_e6717f07454c3eddfcb85db255625b590ca881a2b84f90b4941d3657c52e6ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_075ab21a3c994af663525fb98259ab5180f88aff26b33324123a1ae4b746a1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075ab21a3c994af663525fb98259ab5180f88aff26b33324123a1ae4b746a1f7->enter($__internal_075ab21a3c994af663525fb98259ab5180f88aff26b33324123a1ae4b746a1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_075ab21a3c994af663525fb98259ab5180f88aff26b33324123a1ae4b746a1f7->leave($__internal_075ab21a3c994af663525fb98259ab5180f88aff26b33324123a1ae4b746a1f7_prof);

        
        $__internal_e6717f07454c3eddfcb85db255625b590ca881a2b84f90b4941d3657c52e6ab3->leave($__internal_e6717f07454c3eddfcb85db255625b590ca881a2b84f90b4941d3657c52e6ab3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_079a93c21d432d6c4c56187732221de8a1e597a5ce50a92ad3163468179d3c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079a93c21d432d6c4c56187732221de8a1e597a5ce50a92ad3163468179d3c67->enter($__internal_079a93c21d432d6c4c56187732221de8a1e597a5ce50a92ad3163468179d3c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_de2cadcf85a97af2ecd40f912b6d4ec45ca5f0d637ffe0c75e77b8c3bc12896a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2cadcf85a97af2ecd40f912b6d4ec45ca5f0d637ffe0c75e77b8c3bc12896a->enter($__internal_de2cadcf85a97af2ecd40f912b6d4ec45ca5f0d637ffe0c75e77b8c3bc12896a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_de2cadcf85a97af2ecd40f912b6d4ec45ca5f0d637ffe0c75e77b8c3bc12896a->leave($__internal_de2cadcf85a97af2ecd40f912b6d4ec45ca5f0d637ffe0c75e77b8c3bc12896a_prof);

        
        $__internal_079a93c21d432d6c4c56187732221de8a1e597a5ce50a92ad3163468179d3c67->leave($__internal_079a93c21d432d6c4c56187732221de8a1e597a5ce50a92ad3163468179d3c67_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
