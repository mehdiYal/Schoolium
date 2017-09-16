<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8a7ec5f1297f82813348b436c25490e6cba5ca727f589e4bd4d8646d90b99f7e extends Twig_Template
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
        $__internal_07e8bf3170590cd129d95514fece2b4025e0db722b61938317384f0807252f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e8bf3170590cd129d95514fece2b4025e0db722b61938317384f0807252f22->enter($__internal_07e8bf3170590cd129d95514fece2b4025e0db722b61938317384f0807252f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d3bf9a11e71ab9f3e57e872b8563e02cfc00e50babc294636b6fbc3dc90844e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bf9a11e71ab9f3e57e872b8563e02cfc00e50babc294636b6fbc3dc90844e0->enter($__internal_d3bf9a11e71ab9f3e57e872b8563e02cfc00e50babc294636b6fbc3dc90844e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_07e8bf3170590cd129d95514fece2b4025e0db722b61938317384f0807252f22->leave($__internal_07e8bf3170590cd129d95514fece2b4025e0db722b61938317384f0807252f22_prof);

        
        $__internal_d3bf9a11e71ab9f3e57e872b8563e02cfc00e50babc294636b6fbc3dc90844e0->leave($__internal_d3bf9a11e71ab9f3e57e872b8563e02cfc00e50babc294636b6fbc3dc90844e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
