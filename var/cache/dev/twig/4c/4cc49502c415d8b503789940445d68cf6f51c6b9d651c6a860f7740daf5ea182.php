<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1f9425598ab0fbe7741ee69a19d9d559f48c85838e4044d26f38f8d49a4f1877 extends Twig_Template
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
        $__internal_e77907f2389b3bb90ddbcbd61a5de78dae19b473806217651e9647b6b77f30ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77907f2389b3bb90ddbcbd61a5de78dae19b473806217651e9647b6b77f30ce->enter($__internal_e77907f2389b3bb90ddbcbd61a5de78dae19b473806217651e9647b6b77f30ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_93f750f42d5f405b265677bcc63a4a28e73eb4388f90ed69081c8dae30ed17fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f750f42d5f405b265677bcc63a4a28e73eb4388f90ed69081c8dae30ed17fe->enter($__internal_93f750f42d5f405b265677bcc63a4a28e73eb4388f90ed69081c8dae30ed17fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e77907f2389b3bb90ddbcbd61a5de78dae19b473806217651e9647b6b77f30ce->leave($__internal_e77907f2389b3bb90ddbcbd61a5de78dae19b473806217651e9647b6b77f30ce_prof);

        
        $__internal_93f750f42d5f405b265677bcc63a4a28e73eb4388f90ed69081c8dae30ed17fe->leave($__internal_93f750f42d5f405b265677bcc63a4a28e73eb4388f90ed69081c8dae30ed17fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
