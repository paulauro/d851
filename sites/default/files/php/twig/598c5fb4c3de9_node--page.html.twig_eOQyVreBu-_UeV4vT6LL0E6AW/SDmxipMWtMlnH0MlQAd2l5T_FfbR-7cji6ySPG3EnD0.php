<?php

/* themes/bootstrapsub/templates/node--page.html.twig */
class __TwigTemplate_37950bcb30c814d956c4d96bd4268bd44d7c83a3f03690ec415bb5b7cb91f112 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 14, "trans" => 25);
        $filters = array("clean_class" => 3);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class'),
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

        // line 2
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 3
(isset($context["node"]) ? $context["node"] : null), "bundle", array())), 1 => (($this->getAttribute(        // line 4
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 5
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 6
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 7
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null))) : ("")), 5 => "clearfix");
        // line 11
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

  ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 14
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 15
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
      <a href=\"";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 19
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 21
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 22
            echo "    <footer>
      ";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
      <div";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "author"), "method"), "html", null, true));
            echo ">
        ";
            // line 25
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 26
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 30
        echo "
  <div";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
   page template test <h1>";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "title", array()), "value", array()), "html", null, true));
        echo "</h1>
   
   ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_hide_image", array()), "value", array()) == "1")) {
            // line 35
            echo "   <div class=\"image\">
";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image1", array()), "html", null, true));
            echo "
   </div>
";
        }
        // line 39
        echo "   
   
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrapsub/templates/node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  121 => 36,  118 => 35,  116 => 34,  111 => 32,  107 => 31,  104 => 30,  96 => 26,  94 => 25,  90 => 24,  86 => 23,  83 => 22,  81 => 21,  75 => 19,  67 => 16,  62 => 15,  60 => 14,  56 => 13,  50 => 11,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
  set classes = [
    node.bundle|clean_class,
    node.isPromoted() ? 'is-promoted',
    node.isSticky() ? 'is-sticky',
    not node.isPublished() ? 'is-unpublished',
    view_mode ? view_mode|clean_class,
    'clearfix',
  ]
%}
<article{{ attributes.addClass(classes) }}>

  {{ title_prefix }}
  {% if not page %}
    <h2{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <footer>
      {{ author_picture }}
      <div{{ author_attributes.addClass('author') }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}

  <div{{ content_attributes.addClass('content') }}>
   page template test <h1>{{ node.title.value }}</h1>
   
   {% if node.field_hide_image.value == '1' %}
   <div class=\"image\">
{{ content.field_image1 }}
   </div>
{% endif %}
   
   
  </div>

</article>
";
    }
}
