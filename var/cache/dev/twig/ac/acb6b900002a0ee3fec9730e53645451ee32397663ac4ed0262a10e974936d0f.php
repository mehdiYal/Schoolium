<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_318816ca07eee82e6969e1299dd2c3bc57c76f2be658898ca129199b24b1f7a6 extends Twig_Template
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
        $__internal_c03eac5933cc9dd75da438228a904f7338f9d15aa24d3ec2b007e07a529f6971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03eac5933cc9dd75da438228a904f7338f9d15aa24d3ec2b007e07a529f6971->enter($__internal_c03eac5933cc9dd75da438228a904f7338f9d15aa24d3ec2b007e07a529f6971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_fd96187458b915df7c59fc6ca749bf7f902a5f939e55eecf2d974932c2b01e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd96187458b915df7c59fc6ca749bf7f902a5f939e55eecf2d974932c2b01e1c->enter($__internal_fd96187458b915df7c59fc6ca749bf7f902a5f939e55eecf2d974932c2b01e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c03eac5933cc9dd75da438228a904f7338f9d15aa24d3ec2b007e07a529f6971->leave($__internal_c03eac5933cc9dd75da438228a904f7338f9d15aa24d3ec2b007e07a529f6971_prof);

        
        $__internal_fd96187458b915df7c59fc6ca749bf7f902a5f939e55eecf2d974932c2b01e1c->leave($__internal_fd96187458b915df7c59fc6ca749bf7f902a5f939e55eecf2d974932c2b01e1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
