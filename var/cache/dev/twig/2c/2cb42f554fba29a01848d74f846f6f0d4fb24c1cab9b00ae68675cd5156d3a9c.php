<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_30e9bbb82f9fee8bc94608bd66aa6aa6ef68ed20c28369f8980de978da4aace0 extends Twig_Template
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
        $__internal_d482c6494d5e5b084711fa54a4031bf95ea3a7703d4292e57fec86b84a93e74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d482c6494d5e5b084711fa54a4031bf95ea3a7703d4292e57fec86b84a93e74a->enter($__internal_d482c6494d5e5b084711fa54a4031bf95ea3a7703d4292e57fec86b84a93e74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ac032ca76be3c8195372c8c8a3ba983978835d4c7910bdbe17c09700b1081a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac032ca76be3c8195372c8c8a3ba983978835d4c7910bdbe17c09700b1081a48->enter($__internal_ac032ca76be3c8195372c8c8a3ba983978835d4c7910bdbe17c09700b1081a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d482c6494d5e5b084711fa54a4031bf95ea3a7703d4292e57fec86b84a93e74a->leave($__internal_d482c6494d5e5b084711fa54a4031bf95ea3a7703d4292e57fec86b84a93e74a_prof);

        
        $__internal_ac032ca76be3c8195372c8c8a3ba983978835d4c7910bdbe17c09700b1081a48->leave($__internal_ac032ca76be3c8195372c8c8a3ba983978835d4c7910bdbe17c09700b1081a48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
