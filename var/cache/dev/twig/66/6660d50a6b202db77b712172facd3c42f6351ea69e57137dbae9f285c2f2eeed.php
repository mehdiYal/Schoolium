<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_97f84cba036027b3815354ded6b88be556a78664ec2b5f65f80fbdd1ed4ac8db extends Twig_Template
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
        $__internal_d6799679e8ba5e3068c6f85ce6c414ab4db5aa0b598f282fbdeced9a307b2dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6799679e8ba5e3068c6f85ce6c414ab4db5aa0b598f282fbdeced9a307b2dc6->enter($__internal_d6799679e8ba5e3068c6f85ce6c414ab4db5aa0b598f282fbdeced9a307b2dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9461b9406ebdf3b685e3ebc6ddad35ccb2933aaaf9171c90ae00c928f2881b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9461b9406ebdf3b685e3ebc6ddad35ccb2933aaaf9171c90ae00c928f2881b4a->enter($__internal_9461b9406ebdf3b685e3ebc6ddad35ccb2933aaaf9171c90ae00c928f2881b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d6799679e8ba5e3068c6f85ce6c414ab4db5aa0b598f282fbdeced9a307b2dc6->leave($__internal_d6799679e8ba5e3068c6f85ce6c414ab4db5aa0b598f282fbdeced9a307b2dc6_prof);

        
        $__internal_9461b9406ebdf3b685e3ebc6ddad35ccb2933aaaf9171c90ae00c928f2881b4a->leave($__internal_9461b9406ebdf3b685e3ebc6ddad35ccb2933aaaf9171c90ae00c928f2881b4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
