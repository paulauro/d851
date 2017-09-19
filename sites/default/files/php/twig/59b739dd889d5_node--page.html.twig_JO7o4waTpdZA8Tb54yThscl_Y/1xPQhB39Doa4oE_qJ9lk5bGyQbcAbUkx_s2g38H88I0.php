<?php

/* themes/bootstrapsub/templates/node--page.html.twig */
class __TwigTemplate_48d6e583014b483688928ce9d8ee9f8d0c8c28eff66f4fc6eb06d6e99b456a2b extends Twig_Template
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
        $filters = array("clean_class" => 3, "date" => 38);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'date'),
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
   <!-- ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo " -->

</br>
";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_date1", array()), "value", array())) {
            echo " 
<h3>Date field value</h3>
</br>
";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_date1", array()), "value", array()), "m/d/Y"), "html", null, true));
            echo "
";
        }
        // line 40
        echo "
</br>
</br>


</br>
<h3>plain text field value</h3>
</br>
    ";
        // line 48
        if (($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_plain_text_field", array()), "value", array()) == "hello")) {
            // line 49
            echo "      <p>Plain text field has value hello</p>
    ";
        } else {
            // line 51
            echo "      <p>plain text field does not have value hello</p>
    ";
        }
        // line 53
        echo "
</br>
</br>

<h3>List text field value</h3>
</br>
    ";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_list_text_field", array()), "value", array()) == "car")) {
            // line 60
            echo "      <p>The value is Car</p>
    ";
        } else {
            // line 62
            echo "      <p>The value is Bike</p>
    ";
        }
        // line 64
        echo "
</br>
</br>

<h3>Boolean field value</h3>
</br>
    ";
        // line 70
        if (($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_boolean_field", array()), "value", array()) == "1")) {
            // line 71
            echo "      <p>The value is Yes</p>
    ";
        } else {
            // line 73
            echo "      <p>The value is No</p>
    ";
        }
        // line 75
        echo "
</br>
</br>

<h3>Term reference field value</h3>
</br>
";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_term_reference", array()), "html", null, true));
        echo "
</br>
</br>

";
        // line 85
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_term_reference", array()), "entity", array()), "label", array()) == "bass")) {
            // line 86
            echo "      <p>The value is Bass</p>
    ";
        } else {
            // line 88
            echo "      <p>The value is Gold</p>
    ";
        }
        // line 90
        echo "
</br>
</br>test1
";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_multi_term_reference", array()), "html", null, true));
        echo "
</br>test2
";
        // line 95
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_multi_term_reference", array()), "entity", array()), "label", array()) == "bass") && "finch")) {
            // line 96
            echo "      <p>The value is Bass and Finch</p>
    ";
        } else {
            // line 98
            echo "      <p>The value is Other</p>
    ";
        }
        // line 100
        echo "

</br>test555
";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_term_reference", array()), "html", null, true));
        echo "
</br>
";
        // line 105
        if (($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_term_reference", array()), "target_id", array()) == "1")) {
            // line 106
            echo "      <p>The value is Bass</p>
    ";
        } else {
            // line 108
            echo "      <p>The value is Other</p>
    ";
        }
        // line 110
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
        return array (  249 => 110,  245 => 108,  241 => 106,  239 => 105,  234 => 103,  229 => 100,  225 => 98,  221 => 96,  219 => 95,  214 => 93,  209 => 90,  205 => 88,  201 => 86,  199 => 85,  192 => 81,  184 => 75,  180 => 73,  176 => 71,  174 => 70,  166 => 64,  162 => 62,  158 => 60,  156 => 59,  148 => 53,  144 => 51,  140 => 49,  138 => 48,  128 => 40,  123 => 38,  117 => 35,  111 => 32,  107 => 31,  104 => 30,  96 => 26,  94 => 25,  90 => 24,  86 => 23,  83 => 22,  81 => 21,  75 => 19,  67 => 16,  62 => 15,  60 => 14,  56 => 13,  50 => 11,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  43 => 2,);
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
   <!-- {{ content }} -->

</br>
{% if node.field_date1.value %} 
<h3>Date field value</h3>
</br>
{{ content.field_date1.value|date(\"m/d/Y\") }}
{% endif %}

</br>
</br>


</br>
<h3>plain text field value</h3>
</br>
    {% if node.field_plain_text_field.value == \"hello\" %}
      <p>Plain text field has value hello</p>
    {% else %}
      <p>plain text field does not have value hello</p>
    {% endif %}

</br>
</br>

<h3>List text field value</h3>
</br>
    {% if node.field_list_text_field.value == \"car\" %}
      <p>The value is Car</p>
    {% else %}
      <p>The value is Bike</p>
    {% endif %}

</br>
</br>

<h3>Boolean field value</h3>
</br>
    {% if node.field_boolean_field.value == '1' %}
      <p>The value is Yes</p>
    {% else %}
      <p>The value is No</p>
    {% endif %}

</br>
</br>

<h3>Term reference field value</h3>
</br>
{{ content.field_term_reference }}
</br>
</br>

{% if node.field_term_reference.entity.label == \"bass\" %}
      <p>The value is Bass</p>
    {% else %}
      <p>The value is Gold</p>
    {% endif %}

</br>
</br>test1
{{ content.field_multi_term_reference }}
</br>test2
{% if node.field_multi_term_reference.entity.label == \"bass\" and \"finch\" %}
      <p>The value is Bass and Finch</p>
    {% else %}
      <p>The value is Other</p>
    {% endif %}


</br>test555
{{ content.field_term_reference }}
</br>
{% if node.field_term_reference.target_id == '1' %}
      <p>The value is Bass</p>
    {% else %}
      <p>The value is Other</p>
    {% endif %}


</div>

</article>
";
    }
}
