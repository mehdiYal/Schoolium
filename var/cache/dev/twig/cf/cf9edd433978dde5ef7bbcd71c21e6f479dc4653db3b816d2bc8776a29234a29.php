<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_98cc9add6a81fe5647a7b72f484169234177a571e4365477dfac2117a1eb3208 extends Twig_Template
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
        $__internal_43b7fa9f5334e4210faaec4a12ab208c7ef63ffc18766dcfd078e14ffdb27b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b7fa9f5334e4210faaec4a12ab208c7ef63ffc18766dcfd078e14ffdb27b86->enter($__internal_43b7fa9f5334e4210faaec4a12ab208c7ef63ffc18766dcfd078e14ffdb27b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d01621241ee86050ee45f3a9c357c9d9605e7ed75cc818262b5547e32881cc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01621241ee86050ee45f3a9c357c9d9605e7ed75cc818262b5547e32881cc6b->enter($__internal_d01621241ee86050ee45f3a9c357c9d9605e7ed75cc818262b5547e32881cc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43b7fa9f5334e4210faaec4a12ab208c7ef63ffc18766dcfd078e14ffdb27b86->leave($__internal_43b7fa9f5334e4210faaec4a12ab208c7ef63ffc18766dcfd078e14ffdb27b86_prof);

        
        $__internal_d01621241ee86050ee45f3a9c357c9d9605e7ed75cc818262b5547e32881cc6b->leave($__internal_d01621241ee86050ee45f3a9c357c9d9605e7ed75cc818262b5547e32881cc6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
