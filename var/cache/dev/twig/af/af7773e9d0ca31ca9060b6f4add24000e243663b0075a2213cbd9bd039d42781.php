<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_edc9aaef04fa8619329105cd4b97f06c797c8f553c4df2118495d67fd5d7ed8a extends Twig_Template
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
        $__internal_99060cd3c05d5d2a5992bfb63c97f4571c7d6e9731ad140716d2bbb769e1dcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99060cd3c05d5d2a5992bfb63c97f4571c7d6e9731ad140716d2bbb769e1dcf3->enter($__internal_99060cd3c05d5d2a5992bfb63c97f4571c7d6e9731ad140716d2bbb769e1dcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_de08ab207dfeec6b6054a9429042ffa0b6bf5a4f052a8a47b850d92cf603c2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de08ab207dfeec6b6054a9429042ffa0b6bf5a4f052a8a47b850d92cf603c2f6->enter($__internal_de08ab207dfeec6b6054a9429042ffa0b6bf5a4f052a8a47b850d92cf603c2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_99060cd3c05d5d2a5992bfb63c97f4571c7d6e9731ad140716d2bbb769e1dcf3->leave($__internal_99060cd3c05d5d2a5992bfb63c97f4571c7d6e9731ad140716d2bbb769e1dcf3_prof);

        
        $__internal_de08ab207dfeec6b6054a9429042ffa0b6bf5a4f052a8a47b850d92cf603c2f6->leave($__internal_de08ab207dfeec6b6054a9429042ffa0b6bf5a4f052a8a47b850d92cf603c2f6_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
