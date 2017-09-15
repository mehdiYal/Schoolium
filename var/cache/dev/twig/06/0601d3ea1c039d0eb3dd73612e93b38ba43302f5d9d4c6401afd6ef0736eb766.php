<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_88f11b1e857296202947b18f268b2cc539470e8047fba297f0948838878d304b extends Twig_Template
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
        $__internal_deb5d1208d27a5dd8d44e62a7ce6c822401a67196bb5b93355e27b79d5d6f525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb5d1208d27a5dd8d44e62a7ce6c822401a67196bb5b93355e27b79d5d6f525->enter($__internal_deb5d1208d27a5dd8d44e62a7ce6c822401a67196bb5b93355e27b79d5d6f525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_be61aad90ed1dd6bb3d824cc078fcdc8538e24c5219e5b781c9fb48c62bd6ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be61aad90ed1dd6bb3d824cc078fcdc8538e24c5219e5b781c9fb48c62bd6ef7->enter($__internal_be61aad90ed1dd6bb3d824cc078fcdc8538e24c5219e5b781c9fb48c62bd6ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_deb5d1208d27a5dd8d44e62a7ce6c822401a67196bb5b93355e27b79d5d6f525->leave($__internal_deb5d1208d27a5dd8d44e62a7ce6c822401a67196bb5b93355e27b79d5d6f525_prof);

        
        $__internal_be61aad90ed1dd6bb3d824cc078fcdc8538e24c5219e5b781c9fb48c62bd6ef7->leave($__internal_be61aad90ed1dd6bb3d824cc078fcdc8538e24c5219e5b781c9fb48c62bd6ef7_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\xamppS\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
