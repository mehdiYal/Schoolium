<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c9bc84a19fabbd8e27d99cb8208e01dbbdb7715dad259eb49b3fa1b46e5148d5 extends Twig_Template
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
        $__internal_76ac0610690a760a12c3867d3bea0ab04d8c8a9cf00809f26f85eefc5e348d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ac0610690a760a12c3867d3bea0ab04d8c8a9cf00809f26f85eefc5e348d0a->enter($__internal_76ac0610690a760a12c3867d3bea0ab04d8c8a9cf00809f26f85eefc5e348d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_90e96cb2dfacfbafd6b6ca7cbfe3fa7fee7bdadd6e928feeaa52f0572f6f52d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e96cb2dfacfbafd6b6ca7cbfe3fa7fee7bdadd6e928feeaa52f0572f6f52d4->enter($__internal_90e96cb2dfacfbafd6b6ca7cbfe3fa7fee7bdadd6e928feeaa52f0572f6f52d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_76ac0610690a760a12c3867d3bea0ab04d8c8a9cf00809f26f85eefc5e348d0a->leave($__internal_76ac0610690a760a12c3867d3bea0ab04d8c8a9cf00809f26f85eefc5e348d0a_prof);

        
        $__internal_90e96cb2dfacfbafd6b6ca7cbfe3fa7fee7bdadd6e928feeaa52f0572f6f52d4->leave($__internal_90e96cb2dfacfbafd6b6ca7cbfe3fa7fee7bdadd6e928feeaa52f0572f6f52d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
