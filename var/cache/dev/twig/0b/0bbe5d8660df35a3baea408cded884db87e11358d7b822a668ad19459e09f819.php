<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_081e1661fc5bf311bd140fa8dcdca50c6784ec6fb732dc0f7b540371803d5c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_567a80f6edf62acbb64bc5ed46128e11322f96d180b65886dd74a1c1b2a4ca78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567a80f6edf62acbb64bc5ed46128e11322f96d180b65886dd74a1c1b2a4ca78->enter($__internal_567a80f6edf62acbb64bc5ed46128e11322f96d180b65886dd74a1c1b2a4ca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_d0d5b91d93f77e0e4f4b5abe16ffbeabb82f3d9175c79ec2b9af75aee356bd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d5b91d93f77e0e4f4b5abe16ffbeabb82f3d9175c79ec2b9af75aee356bd7f->enter($__internal_d0d5b91d93f77e0e4f4b5abe16ffbeabb82f3d9175c79ec2b9af75aee356bd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_567a80f6edf62acbb64bc5ed46128e11322f96d180b65886dd74a1c1b2a4ca78->leave($__internal_567a80f6edf62acbb64bc5ed46128e11322f96d180b65886dd74a1c1b2a4ca78_prof);

        
        $__internal_d0d5b91d93f77e0e4f4b5abe16ffbeabb82f3d9175c79ec2b9af75aee356bd7f->leave($__internal_d0d5b91d93f77e0e4f4b5abe16ffbeabb82f3d9175c79ec2b9af75aee356bd7f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/Applications/MAMP/htdocs/Symfony/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
