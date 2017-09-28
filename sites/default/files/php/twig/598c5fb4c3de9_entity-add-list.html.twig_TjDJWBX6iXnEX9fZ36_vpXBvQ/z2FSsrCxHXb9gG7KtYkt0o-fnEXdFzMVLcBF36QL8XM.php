<?php

/* core/themes/seven/templates/entity-add-list.html.twig */
class __TwigTemplate_197ded523cec15c1964182b9014422afe7f7b3d35af24de7f3a92f7bd6a05e17 extends Twig_Template
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
        $tags = array("if" => 17, "for" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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
        if ( !twig_test_empty((isset($context["bundles"]) ? $context["bundles"] : null))) {
            // line 18
            echo "  <ul class=\"admin-list\">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bundles"]) ? $context["bundles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
                // line 20
                echo "      <li class=\"clearfix\"><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["bundle"], "add_link", array()), "url", array()), "html", null, true));
                echo "\"><span class=\"label\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["bundle"], "label", array()), "html", null, true));
                echo "</span><div class=\"description\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["bundle"], "description", array()), "html", null, true));
                echo "</div></a></li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </ul>
";
        } elseif ( !twig_test_empty(        // line 23
(isset($context["add_bundle_message"]) ? $context["add_bundle_message"] : null))) {
            // line 24
            echo "  <p>
    ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["add_bundle_message"]) ? $context["add_bundle_message"] : null), "html", null, true));
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/entity-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  70 => 24,  68 => 23,  65 => 22,  52 => 20,  48 => 19,  45 => 18,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to to present a list of available bundles.
 *
 * Available variables:
 *   - bundles: A list of bundles, each with the following properties:
 *     - label: Bundle label.
 *     - description: Bundle description.
 *     - add_link: Link to create an entity of this bundle.
 *   - add_bundle_message: The message shown when there are no bundles. Only
 *                         available if the entity type uses bundle entities.
 *
 * @see template_preprocess_entity_add_list()
 */
#}
{% if bundles is not empty %}
  <ul class=\"admin-list\">
    {% for bundle in bundles %}
      <li class=\"clearfix\"><a href=\"{{ bundle.add_link.url }}\"><span class=\"label\">{{ bundle.label }}</span><div class=\"description\">{{ bundle.description }}</div></a></li>
    {% endfor %}
  </ul>
{% elseif add_bundle_message is not empty %}
  <p>
    {{ add_bundle_message }}
  </p>
{% endif %}
";
    }
}
