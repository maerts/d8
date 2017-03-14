<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_bfea1a0c56049dc02755ae3233188ccefb35b4269b2a217717aaa05748e4bf7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17352004560d641b1c6b9d69b9f60f5e5c345101addf1bf68c406438dfa36c8f = $this->env->getExtension("native_profiler");
        $__internal_17352004560d641b1c6b9d69b9f60f5e5c345101addf1bf68c406438dfa36c8f->enter($__internal_17352004560d641b1c6b9d69b9f60f5e5c345101addf1bf68c406438dfa36c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17352004560d641b1c6b9d69b9f60f5e5c345101addf1bf68c406438dfa36c8f->leave($__internal_17352004560d641b1c6b9d69b9f60f5e5c345101addf1bf68c406438dfa36c8f_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_c73e9fc1cf9b54df5e5f3b32ccd374bfc9067d7868e4039404390edb2d3b117c = $this->env->getExtension("native_profiler");
        $__internal_c73e9fc1cf9b54df5e5f3b32ccd374bfc9067d7868e4039404390edb2d3b117c->enter($__internal_c73e9fc1cf9b54df5e5f3b32ccd374bfc9067d7868e4039404390edb2d3b117c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_c73e9fc1cf9b54df5e5f3b32ccd374bfc9067d7868e4039404390edb2d3b117c->leave($__internal_c73e9fc1cf9b54df5e5f3b32ccd374bfc9067d7868e4039404390edb2d3b117c_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "@block/block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for local actions (primary admin actions.)*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <ul class="action-links">*/
/*       {{ content }}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
