<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_651e124b08ad2e8b97a31c1adf9145acb9dc478b66847d837ae0dafb40cefaf5 extends Twig_Template
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
        $__internal_c4b5bb4145de18238dd9d0430880972f73a3158730f9f2e0d0648d1d600ee329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b5bb4145de18238dd9d0430880972f73a3158730f9f2e0d0648d1d600ee329->enter($__internal_c4b5bb4145de18238dd9d0430880972f73a3158730f9f2e0d0648d1d600ee329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_0da29ab3e521eeb4023e6b1488cfdee2a0f224953a3d49e4904207d8c209e72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da29ab3e521eeb4023e6b1488cfdee2a0f224953a3d49e4904207d8c209e72b->enter($__internal_0da29ab3e521eeb4023e6b1488cfdee2a0f224953a3d49e4904207d8c209e72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_c4b5bb4145de18238dd9d0430880972f73a3158730f9f2e0d0648d1d600ee329->leave($__internal_c4b5bb4145de18238dd9d0430880972f73a3158730f9f2e0d0648d1d600ee329_prof);

        
        $__internal_0da29ab3e521eeb4023e6b1488cfdee2a0f224953a3d49e4904207d8c209e72b->leave($__internal_0da29ab3e521eeb4023e6b1488cfdee2a0f224953a3d49e4904207d8c209e72b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
