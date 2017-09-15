<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2e228051c03e77a1b82ee3800c4acabc8fe02ca2c249317a943d16608030b111 extends Twig_Template
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
        $__internal_643475c4a1abab856d03f8803e69ea147a604361f4a4d01ee3f1d633592b515f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643475c4a1abab856d03f8803e69ea147a604361f4a4d01ee3f1d633592b515f->enter($__internal_643475c4a1abab856d03f8803e69ea147a604361f4a4d01ee3f1d633592b515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_03c0d32ed565e7cb0e5f7163ef3fec2a74caa38a567925dbbe492792991f04f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c0d32ed565e7cb0e5f7163ef3fec2a74caa38a567925dbbe492792991f04f9->enter($__internal_03c0d32ed565e7cb0e5f7163ef3fec2a74caa38a567925dbbe492792991f04f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_643475c4a1abab856d03f8803e69ea147a604361f4a4d01ee3f1d633592b515f->leave($__internal_643475c4a1abab856d03f8803e69ea147a604361f4a4d01ee3f1d633592b515f_prof);

        
        $__internal_03c0d32ed565e7cb0e5f7163ef3fec2a74caa38a567925dbbe492792991f04f9->leave($__internal_03c0d32ed565e7cb0e5f7163ef3fec2a74caa38a567925dbbe492792991f04f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
