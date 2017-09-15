<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0035f0a4f7fbe9dc77fbe7f7c2891f9f7d5f77e310f837f43f35c5b04cdf1d99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b84059c4df0a4badb0423eda2057cc00a391ecc78042fccda37dd4171bc58e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84059c4df0a4badb0423eda2057cc00a391ecc78042fccda37dd4171bc58e6a->enter($__internal_b84059c4df0a4badb0423eda2057cc00a391ecc78042fccda37dd4171bc58e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_94fdd7ea7097747f4a4483201c6eda8b8e925f558b95856e5a7ad88af1698cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fdd7ea7097747f4a4483201c6eda8b8e925f558b95856e5a7ad88af1698cd3->enter($__internal_94fdd7ea7097747f4a4483201c6eda8b8e925f558b95856e5a7ad88af1698cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b84059c4df0a4badb0423eda2057cc00a391ecc78042fccda37dd4171bc58e6a->leave($__internal_b84059c4df0a4badb0423eda2057cc00a391ecc78042fccda37dd4171bc58e6a_prof);

        
        $__internal_94fdd7ea7097747f4a4483201c6eda8b8e925f558b95856e5a7ad88af1698cd3->leave($__internal_94fdd7ea7097747f4a4483201c6eda8b8e925f558b95856e5a7ad88af1698cd3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1823b5cb7f84e91594a3c6933fd547b7762ef13ceb5bc8e81c1c460cf857de4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1823b5cb7f84e91594a3c6933fd547b7762ef13ceb5bc8e81c1c460cf857de4a->enter($__internal_1823b5cb7f84e91594a3c6933fd547b7762ef13ceb5bc8e81c1c460cf857de4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0df14b0d454cefd2acc9592d6be1048737871891383445c27ad00dce30aaddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0df14b0d454cefd2acc9592d6be1048737871891383445c27ad00dce30aaddc->enter($__internal_f0df14b0d454cefd2acc9592d6be1048737871891383445c27ad00dce30aaddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f0df14b0d454cefd2acc9592d6be1048737871891383445c27ad00dce30aaddc->leave($__internal_f0df14b0d454cefd2acc9592d6be1048737871891383445c27ad00dce30aaddc_prof);

        
        $__internal_1823b5cb7f84e91594a3c6933fd547b7762ef13ceb5bc8e81c1c460cf857de4a->leave($__internal_1823b5cb7f84e91594a3c6933fd547b7762ef13ceb5bc8e81c1c460cf857de4a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
