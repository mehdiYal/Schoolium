<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5bf1591ed6ec2cc122188630a87f284e478792dc2fbd04534fce90ae9a440bc9 extends Twig_Template
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
        $__internal_75cf544b6fac2097cf38c77b588171856d1a34ae8a432a9cb5fe854821331486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cf544b6fac2097cf38c77b588171856d1a34ae8a432a9cb5fe854821331486->enter($__internal_75cf544b6fac2097cf38c77b588171856d1a34ae8a432a9cb5fe854821331486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d3775a97229438baf7c2042317c89be882ef1c6ccd89ff7075d8071e378a5847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3775a97229438baf7c2042317c89be882ef1c6ccd89ff7075d8071e378a5847->enter($__internal_d3775a97229438baf7c2042317c89be882ef1c6ccd89ff7075d8071e378a5847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_75cf544b6fac2097cf38c77b588171856d1a34ae8a432a9cb5fe854821331486->leave($__internal_75cf544b6fac2097cf38c77b588171856d1a34ae8a432a9cb5fe854821331486_prof);

        
        $__internal_d3775a97229438baf7c2042317c89be882ef1c6ccd89ff7075d8071e378a5847->leave($__internal_d3775a97229438baf7c2042317c89be882ef1c6ccd89ff7075d8071e378a5847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
