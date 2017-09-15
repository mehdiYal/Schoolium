<?php

/* adminsViews/admin.html.twig */
class __TwigTemplate_3f9593377e7e4f1a7e787cba7f5e8323fc7ffc98d1343efd392e414c293b3ef0 extends Twig_Template
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
        $__internal_5ac569e1ffafa64c187079307f40bd43199df348026d39def02e4d2525513004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac569e1ffafa64c187079307f40bd43199df348026d39def02e4d2525513004->enter($__internal_5ac569e1ffafa64c187079307f40bd43199df348026d39def02e4d2525513004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/admin.html.twig"));

        $__internal_bd6865ebbf22a8c96536216e149a07b57de21024bf00943584dcaa53fca85ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6865ebbf22a8c96536216e149a07b57de21024bf00943584dcaa53fca85ab1->enter($__internal_bd6865ebbf22a8c96536216e149a07b57de21024bf00943584dcaa53fca85ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminsViews/admin.html.twig"));

        // line 1
        echo "<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown2"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEnseignant");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link3"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEnseignants");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link4"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
 </ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown3"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addEleve");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link5"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listEleves");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link6"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.dropdown.dropdown4"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addParental");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link7"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listParentals");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link8"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Classes"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addClasse");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ajouter classe"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listClasses");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list des classes"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Salles"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addSalle");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ajouter salle"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listSalles");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list des salles"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transports"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addTransport");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ajouter tansport"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listTransports");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list des tansports"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menus"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addMenu");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ajouter menu"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listMenus");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list des menus"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"\"><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mySchool");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.link.link16"), "html", null, true);
        echo "<span class=\"sr-only\"></span></a></li>
";
        
        $__internal_5ac569e1ffafa64c187079307f40bd43199df348026d39def02e4d2525513004->leave($__internal_5ac569e1ffafa64c187079307f40bd43199df348026d39def02e4d2525513004_prof);

        
        $__internal_bd6865ebbf22a8c96536216e149a07b57de21024bf00943584dcaa53fca85ab1->leave($__internal_bd6865ebbf22a8c96536216e149a07b57de21024bf00943584dcaa53fca85ab1_prof);

    }

    public function getTemplateName()
    {
        return "adminsViews/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 50,  159 => 47,  153 => 46,  148 => 44,  139 => 40,  133 => 39,  128 => 37,  119 => 33,  113 => 32,  108 => 30,  99 => 26,  93 => 25,  88 => 23,  79 => 19,  73 => 18,  68 => 16,  59 => 12,  53 => 11,  48 => 9,  39 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown2'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addEnseignant') }}\">{{'navbar.link.link3'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listEnseignants') }}\">{{'navbar.link.link4'|trans}}<span class=\"sr-only\"></span></a></li>
 </ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown3'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addEleve') }}\">{{'navbar.link.link5'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listEleves') }}\">{{'navbar.link.link6'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'navbar.dropdown.dropdown4'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addParental') }}\">{{'navbar.link.link7'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listParentals') }}\">{{'navbar.link.link8'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'Classes'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addClasse') }}\">{{'ajouter classe'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listClasses') }}\">{{'list des classes'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'Salles'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addSalle') }}\">{{'ajouter salle'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listSalles') }}\">{{'list des salles'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'Transports'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addTransport') }}\">{{'ajouter tansport'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listTransports') }}\">{{'list des tansports'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{'Menus'|trans}} <span class=\"caret\"></span></a>
  <ul class=\"dropdown-menu\">
  <li class=\"\"><a href=\"{{ path('addMenu') }}\">{{'ajouter menu'|trans}}<span class=\"sr-only\"></span></a></li>
  <li class=\"\"><a href=\"{{ path('listMenus') }}\">{{'list des menus'|trans}}<span class=\"sr-only\"></span></a></li>
</ul>
</li>
<li class=\"\"><a href=\"{{ path('mySchool') }}\">{{'navbar.link.link16'|trans}}<span class=\"sr-only\"></span></a></li>
", "adminsViews/admin.html.twig", "C:\\xamppS\\htdocs\\Symfony\\app\\Resources\\views\\adminsViews\\admin.html.twig");
    }
}
