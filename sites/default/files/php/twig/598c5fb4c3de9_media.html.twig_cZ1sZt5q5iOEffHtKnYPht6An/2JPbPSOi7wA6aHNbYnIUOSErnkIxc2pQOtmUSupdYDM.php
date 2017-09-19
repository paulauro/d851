<?php

/* profiles/lightning/modules/contrib/media_entity/templates/media.html.twig */
class __TwigTemplate_f7ecea5a5897a6013aabe072977965717d01c84c5a9a7e3f17d1be81e31d3484 extends Twig_Template
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
        $tags = array("if" => 16);
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

        // line 15
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 16
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  ";
        }
        // line 19
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "profiles/lightning/modules/contrib/media_entity/templates/media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  50 => 17,  48 => 16,  43 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to present a media entity.
 *
 * Available variables:
 * - name: Name of the media.
 * - content: Media content.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  {% if content %}
    {{ content }}
  {% endif %}
</article>
";
    }
}
