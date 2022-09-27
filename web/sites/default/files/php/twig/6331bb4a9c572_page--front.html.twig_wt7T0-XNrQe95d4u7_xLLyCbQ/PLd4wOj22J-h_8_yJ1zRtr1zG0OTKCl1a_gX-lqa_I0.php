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

/* themes/mytheme/templates/home/page--front.html.twig */
class __TwigTemplate_02b62b90ebe64cc35d7635dc7953adb1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 1), "fluid_container", [], "any", false, false, true, 1)) ? ("container-fluid") : ("container"));
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 3) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 3))) {
            // line 4
            echo "\t";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('main', $context, $blocks);
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 49)) {
            // line 50
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 4
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t";
        // line 6
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["theme"] ?? null), "settings", [], "any", false, false, true, 8), "navbar_inverse", [], "any", false, false, true, 8)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
($context["theme"] ?? null), "settings", [], "any", false, false, true, 9), "navbar_position", [], "any", false, false, true, 9)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 9), "navbar_position", [], "any", false, false, true, 9), 9, $this->source)))) : (($context["container"] ?? null)))];
        // line 12
        echo "\t\t<header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
\t\t\t";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 13)) {
            // line 14
            echo "\t\t\t\t<div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 14, $this->source), "html", null, true);
            echo "\">
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 19
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 19)) {
            // line 20
            echo "\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"sr-only\">";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t</div>

\t\t\t\t";
        // line 30
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 30)) {
            // line 31
            echo "\t\t\t\t\t<div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
\t\t\t\t\t\t";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 35)) {
            // line 36
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 38
        echo "\t\t</header>
\t";
    }

    // line 43
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "\t";
        // line 45
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "</section>";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "\t\t<a id=\"main-content\"></a>
\t\t";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
\t";
    }

    // line 50
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "\t<footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 51, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
\t\t";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
\t</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/mytheme/templates/home/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 52,  166 => 51,  162 => 50,  156 => 47,  153 => 46,  149 => 45,  145 => 49,  142 => 45,  140 => 44,  136 => 43,  131 => 38,  127 => 36,  124 => 35,  118 => 32,  115 => 31,  112 => 30,  108 => 27,  99 => 21,  96 => 20,  93 => 19,  89 => 17,  86 => 16,  80 => 14,  78 => 13,  73 => 12,  71 => 9,  70 => 8,  69 => 6,  67 => 5,  63 => 4,  58 => 50,  56 => 49,  54 => 43,  51 => 41,  47 => 4,  45 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/mytheme/templates/home/page--front.html.twig", "C:\\xampp\\htdocs\\drupal_project\\web\\themes\\mytheme\\templates\\home\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3, "block" => 4);
        static $filters = array("clean_class" => 9, "escape" => 12, "t" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
