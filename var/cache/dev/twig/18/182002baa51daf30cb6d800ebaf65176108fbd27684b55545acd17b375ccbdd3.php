<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1a49977e5395a82ac8a7750f8dddbbf2e834be1e31711ae2a638825303e6ad01 extends Twig_Template
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
        $__internal_7945109d6d650efd68d1cda4fc74ceee965352c32c46ecb23b77f35bb05f2e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7945109d6d650efd68d1cda4fc74ceee965352c32c46ecb23b77f35bb05f2e39->enter($__internal_7945109d6d650efd68d1cda4fc74ceee965352c32c46ecb23b77f35bb05f2e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7e453f5ae415f7cce94a1f188ac4f12a723d6f718011fd2c352433a5a12a24a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e453f5ae415f7cce94a1f188ac4f12a723d6f718011fd2c352433a5a12a24a9->enter($__internal_7e453f5ae415f7cce94a1f188ac4f12a723d6f718011fd2c352433a5a12a24a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7945109d6d650efd68d1cda4fc74ceee965352c32c46ecb23b77f35bb05f2e39->leave($__internal_7945109d6d650efd68d1cda4fc74ceee965352c32c46ecb23b77f35bb05f2e39_prof);

        
        $__internal_7e453f5ae415f7cce94a1f188ac4f12a723d6f718011fd2c352433a5a12a24a9->leave($__internal_7e453f5ae415f7cce94a1f188ac4f12a723d6f718011fd2c352433a5a12a24a9_prof);

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
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
