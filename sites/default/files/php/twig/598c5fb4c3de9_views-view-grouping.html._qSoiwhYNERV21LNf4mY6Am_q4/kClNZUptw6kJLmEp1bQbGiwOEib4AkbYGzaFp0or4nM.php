<?php

/* core/themes/classy/templates/views/views-view-grouping.html.twig */
class __TwigTemplate_7e5349b64d1dd9e02af983e6c56279bde204c6b2cc0ce1c8e9efd52161d51e5b extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 17
        echo "<div class=\"view-grouping\">
  <div class=\"view-grouping-header\">";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
  <div class=\"view-grouping-content\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-grouping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  46 => 18,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single views grouping.
 *
 * Available variables:
 * - view: The view object.
 * - grouping: The grouping instruction.
 * - grouping_level: A number indicating the hierarchical level of the grouping.
 * - title: The group heading.
 * - content: The content to be grouped.
 * - rows: The rows returned from the view.
 *
 * @see template_preprocess_views_view_grouping()
 */
#}
<div class=\"view-grouping\">
  <div class=\"view-grouping-header\">{{ title }}</div>
  <div class=\"view-grouping-content\">{{ content }}</div>
</div>
";
    }
}
