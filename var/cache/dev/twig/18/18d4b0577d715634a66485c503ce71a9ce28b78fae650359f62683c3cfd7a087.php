<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8d63f96e59730aa31ded04d89d5ea9d3c00c754f5589fe6da826ecc8d295fd3 extends Twig_Template
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
        $__internal_5220d21a101acbf2d485c8aa1206e05cd00ef741bb400f526e5d2c1529fc2ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5220d21a101acbf2d485c8aa1206e05cd00ef741bb400f526e5d2c1529fc2ce7->enter($__internal_5220d21a101acbf2d485c8aa1206e05cd00ef741bb400f526e5d2c1529fc2ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ce42b43d4ab0c0f9e28f62460ab74138079c32d0064b08bdb56bb923d90bab64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce42b43d4ab0c0f9e28f62460ab74138079c32d0064b08bdb56bb923d90bab64->enter($__internal_ce42b43d4ab0c0f9e28f62460ab74138079c32d0064b08bdb56bb923d90bab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5220d21a101acbf2d485c8aa1206e05cd00ef741bb400f526e5d2c1529fc2ce7->leave($__internal_5220d21a101acbf2d485c8aa1206e05cd00ef741bb400f526e5d2c1529fc2ce7_prof);

        
        $__internal_ce42b43d4ab0c0f9e28f62460ab74138079c32d0064b08bdb56bb923d90bab64->leave($__internal_ce42b43d4ab0c0f9e28f62460ab74138079c32d0064b08bdb56bb923d90bab64_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
