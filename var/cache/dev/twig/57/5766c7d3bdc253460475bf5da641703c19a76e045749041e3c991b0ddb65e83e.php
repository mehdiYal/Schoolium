<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e6b6dac7e936bb57d75006d0c746222d6f70b41180c920cfa59323bf84daf746 extends Twig_Template
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
        $__internal_31f605a3971405ad4b793043c197f0e6c156fac4b96e896f825b07dd7c960f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f605a3971405ad4b793043c197f0e6c156fac4b96e896f825b07dd7c960f8e->enter($__internal_31f605a3971405ad4b793043c197f0e6c156fac4b96e896f825b07dd7c960f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_21b893ffd711f809bc6b5b775cb8f3fa450faa90b33d23a57dfe07b6c296b076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b893ffd711f809bc6b5b775cb8f3fa450faa90b33d23a57dfe07b6c296b076->enter($__internal_21b893ffd711f809bc6b5b775cb8f3fa450faa90b33d23a57dfe07b6c296b076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_31f605a3971405ad4b793043c197f0e6c156fac4b96e896f825b07dd7c960f8e->leave($__internal_31f605a3971405ad4b793043c197f0e6c156fac4b96e896f825b07dd7c960f8e_prof);

        
        $__internal_21b893ffd711f809bc6b5b775cb8f3fa450faa90b33d23a57dfe07b6c296b076->leave($__internal_21b893ffd711f809bc6b5b775cb8f3fa450faa90b33d23a57dfe07b6c296b076_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
