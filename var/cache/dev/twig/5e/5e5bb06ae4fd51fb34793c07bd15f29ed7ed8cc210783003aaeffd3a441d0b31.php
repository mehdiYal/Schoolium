<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c13385ea139856d471117f5e16c5d1c3831a830b6ed30f5e89edac540c9b4a91 extends Twig_Template
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
        $__internal_d6547176500497b5a5e801d8ad297284e7f40cfcd47db0c222fae0c881483381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6547176500497b5a5e801d8ad297284e7f40cfcd47db0c222fae0c881483381->enter($__internal_d6547176500497b5a5e801d8ad297284e7f40cfcd47db0c222fae0c881483381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_619cdc09d13174578c3321b92324daedf6e978aa9575a6788cbea864cadf8252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619cdc09d13174578c3321b92324daedf6e978aa9575a6788cbea864cadf8252->enter($__internal_619cdc09d13174578c3321b92324daedf6e978aa9575a6788cbea864cadf8252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d6547176500497b5a5e801d8ad297284e7f40cfcd47db0c222fae0c881483381->leave($__internal_d6547176500497b5a5e801d8ad297284e7f40cfcd47db0c222fae0c881483381_prof);

        
        $__internal_619cdc09d13174578c3321b92324daedf6e978aa9575a6788cbea864cadf8252->leave($__internal_619cdc09d13174578c3321b92324daedf6e978aa9575a6788cbea864cadf8252_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
