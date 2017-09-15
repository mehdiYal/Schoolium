<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8c02e2e7c4c1be191f60bfcf969a441b80a59321483a91ca09e2dd35689d1c2 extends Twig_Template
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
        $__internal_3312064c61b418690f402beb32aba7861aecee09e9699289ddcf099890390f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3312064c61b418690f402beb32aba7861aecee09e9699289ddcf099890390f1f->enter($__internal_3312064c61b418690f402beb32aba7861aecee09e9699289ddcf099890390f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5ed65ec2bc20fe6569a88f6785568147aae173e7dd3c35dcaa88684c26909524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed65ec2bc20fe6569a88f6785568147aae173e7dd3c35dcaa88684c26909524->enter($__internal_5ed65ec2bc20fe6569a88f6785568147aae173e7dd3c35dcaa88684c26909524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3312064c61b418690f402beb32aba7861aecee09e9699289ddcf099890390f1f->leave($__internal_3312064c61b418690f402beb32aba7861aecee09e9699289ddcf099890390f1f_prof);

        
        $__internal_5ed65ec2bc20fe6569a88f6785568147aae173e7dd3c35dcaa88684c26909524->leave($__internal_5ed65ec2bc20fe6569a88f6785568147aae173e7dd3c35dcaa88684c26909524_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
