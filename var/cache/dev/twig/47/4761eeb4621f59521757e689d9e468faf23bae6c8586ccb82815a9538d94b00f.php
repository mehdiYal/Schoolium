<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ba363fbd425dba3ee04e04ebf4e424d68874a07f83cd9b29648e31992d6ef3b3 extends Twig_Template
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
        $__internal_179f50647aa7deadcbeb9e435c2061905f8f899ca9ee066d4aa7ca13f059671b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179f50647aa7deadcbeb9e435c2061905f8f899ca9ee066d4aa7ca13f059671b->enter($__internal_179f50647aa7deadcbeb9e435c2061905f8f899ca9ee066d4aa7ca13f059671b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_65632b195520c2a453c40046bb665ff0d5c4e45ea52efad56c89e26917228676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65632b195520c2a453c40046bb665ff0d5c4e45ea52efad56c89e26917228676->enter($__internal_65632b195520c2a453c40046bb665ff0d5c4e45ea52efad56c89e26917228676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_179f50647aa7deadcbeb9e435c2061905f8f899ca9ee066d4aa7ca13f059671b->leave($__internal_179f50647aa7deadcbeb9e435c2061905f8f899ca9ee066d4aa7ca13f059671b_prof);

        
        $__internal_65632b195520c2a453c40046bb665ff0d5c4e45ea52efad56c89e26917228676->leave($__internal_65632b195520c2a453c40046bb665ff0d5c4e45ea52efad56c89e26917228676_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
