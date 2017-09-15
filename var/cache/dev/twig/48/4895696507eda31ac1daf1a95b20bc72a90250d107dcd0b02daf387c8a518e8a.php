<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a92cbbfa89cf4291d5cd0d4b349a43cb1b7e0e7cd48659c3f8735b3fe74d4a28 extends Twig_Template
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
        $__internal_e086c749a3d1aec8c2c8a3f64b1959f8036088bef2eb0a7d2d6c3e4a545636a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e086c749a3d1aec8c2c8a3f64b1959f8036088bef2eb0a7d2d6c3e4a545636a6->enter($__internal_e086c749a3d1aec8c2c8a3f64b1959f8036088bef2eb0a7d2d6c3e4a545636a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_961aa186755b8c60f414cef08be0707d70c62472905d6186a1667a93eeb22c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961aa186755b8c60f414cef08be0707d70c62472905d6186a1667a93eeb22c4d->enter($__internal_961aa186755b8c60f414cef08be0707d70c62472905d6186a1667a93eeb22c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e086c749a3d1aec8c2c8a3f64b1959f8036088bef2eb0a7d2d6c3e4a545636a6->leave($__internal_e086c749a3d1aec8c2c8a3f64b1959f8036088bef2eb0a7d2d6c3e4a545636a6_prof);

        
        $__internal_961aa186755b8c60f414cef08be0707d70c62472905d6186a1667a93eeb22c4d->leave($__internal_961aa186755b8c60f414cef08be0707d70c62472905d6186a1667a93eeb22c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
