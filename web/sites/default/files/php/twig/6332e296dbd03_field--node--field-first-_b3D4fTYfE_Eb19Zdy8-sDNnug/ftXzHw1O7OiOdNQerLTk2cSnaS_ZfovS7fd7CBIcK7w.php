<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/mytheme/templates/field/field--node--field-first-block.html.twig */
class __TwigTemplate_f20fd1041cfb2325143b17acbab4af0b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"first-block\" class=\"container\">
  <div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"title\"><h3>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mytheme"] ?? null), "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h3></div>
    <div class=\"subtitle\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mytheme"] ?? null), "subtitle", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</div>
    <div class=\"button wow fadeInUp\" data-wow-delay=\"1s\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mytheme"] ?? null), "button", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"col-lg-6\">
    <div style=\"float: right; background-image: url('";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mytheme"] ?? null), "image_url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "')\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["mytheme"] ?? null), "image", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</div>
  </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/field/field--node--field-first-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  52 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"first-block\" class=\"container\">
  <div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"title\"><h3>{{mytheme.title}}</h3></div>
    <div class=\"subtitle\">{{mytheme.subtitle}}</div>
    <div class=\"button wow fadeInUp\" data-wow-delay=\"1s\">{{ mytheme.button }}</div>
  </div>
  <div class=\"col-lg-6\">
    <div style=\"float: right; background-image: url('{{mytheme.image_url}}')\">{{ mytheme.image }}</div>
  </div>
  </div>
</section>
", "themes/mytheme/templates/field/field--node--field-first-block.html.twig", "C:\\xampp\\htdocs\\drupal_project\\web\\themes\\mytheme\\templates\\field\\field--node--field-first-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
