<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9eb5e1684f85d4c209494d057ce4ab24edce783152a5b30ce999200c6ca0d836 extends Twig_Template
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
        $__internal_59e678bf3616e6f480154b1b87c0e655e67c165e2ff1787c8829ccd22fae7d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e678bf3616e6f480154b1b87c0e655e67c165e2ff1787c8829ccd22fae7d44->enter($__internal_59e678bf3616e6f480154b1b87c0e655e67c165e2ff1787c8829ccd22fae7d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0d01ff9218d7061622ee84579c3df88241e7e4e367c62320b280f6fbaa135513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d01ff9218d7061622ee84579c3df88241e7e4e367c62320b280f6fbaa135513->enter($__internal_0d01ff9218d7061622ee84579c3df88241e7e4e367c62320b280f6fbaa135513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_59e678bf3616e6f480154b1b87c0e655e67c165e2ff1787c8829ccd22fae7d44->leave($__internal_59e678bf3616e6f480154b1b87c0e655e67c165e2ff1787c8829ccd22fae7d44_prof);

        
        $__internal_0d01ff9218d7061622ee84579c3df88241e7e4e367c62320b280f6fbaa135513->leave($__internal_0d01ff9218d7061622ee84579c3df88241e7e4e367c62320b280f6fbaa135513_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
