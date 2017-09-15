<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4b7edc73be1df84354e2b6fcc211065fce6f5b9fedf694944c129d535991b375 extends Twig_Template
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
        $__internal_9bd11e7bfad660a7c28665f7f772b2a6496c789391b5b4ca317f56e6807cc9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd11e7bfad660a7c28665f7f772b2a6496c789391b5b4ca317f56e6807cc9b8->enter($__internal_9bd11e7bfad660a7c28665f7f772b2a6496c789391b5b4ca317f56e6807cc9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e1ecdf4e067ef713b7f983150c8d9cc6a9e7b581fe5fc33ee8fb7dd5c2aa6498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ecdf4e067ef713b7f983150c8d9cc6a9e7b581fe5fc33ee8fb7dd5c2aa6498->enter($__internal_e1ecdf4e067ef713b7f983150c8d9cc6a9e7b581fe5fc33ee8fb7dd5c2aa6498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9bd11e7bfad660a7c28665f7f772b2a6496c789391b5b4ca317f56e6807cc9b8->leave($__internal_9bd11e7bfad660a7c28665f7f772b2a6496c789391b5b4ca317f56e6807cc9b8_prof);

        
        $__internal_e1ecdf4e067ef713b7f983150c8d9cc6a9e7b581fe5fc33ee8fb7dd5c2aa6498->leave($__internal_e1ecdf4e067ef713b7f983150c8d9cc6a9e7b581fe5fc33ee8fb7dd5c2aa6498_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
