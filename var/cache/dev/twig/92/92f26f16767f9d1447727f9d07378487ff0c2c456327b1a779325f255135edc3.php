<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_37d7b5f1d36ff5ea377199294e58ae7ab5404c716386dd5877c6a9c12b30e3e0 extends Twig_Template
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
        $__internal_e74e844eb9b89c0feee5ca1f20415488d2b5295dba92fcf6c581b69b17237f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74e844eb9b89c0feee5ca1f20415488d2b5295dba92fcf6c581b69b17237f81->enter($__internal_e74e844eb9b89c0feee5ca1f20415488d2b5295dba92fcf6c581b69b17237f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4d547a69ba35ab87af7739394df3c3d087a7c0bd4cf3b6aa22cd1e8ae7fd3ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d547a69ba35ab87af7739394df3c3d087a7c0bd4cf3b6aa22cd1e8ae7fd3ffa->enter($__internal_4d547a69ba35ab87af7739394df3c3d087a7c0bd4cf3b6aa22cd1e8ae7fd3ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e74e844eb9b89c0feee5ca1f20415488d2b5295dba92fcf6c581b69b17237f81->leave($__internal_e74e844eb9b89c0feee5ca1f20415488d2b5295dba92fcf6c581b69b17237f81_prof);

        
        $__internal_4d547a69ba35ab87af7739394df3c3d087a7c0bd4cf3b6aa22cd1e8ae7fd3ffa->leave($__internal_4d547a69ba35ab87af7739394df3c3d087a7c0bd4cf3b6aa22cd1e8ae7fd3ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
