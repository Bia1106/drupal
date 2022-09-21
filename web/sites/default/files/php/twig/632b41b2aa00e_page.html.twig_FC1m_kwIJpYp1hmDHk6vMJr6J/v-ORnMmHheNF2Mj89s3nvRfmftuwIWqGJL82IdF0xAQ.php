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

/* themes/realestate/templates/page.html.twig */
class __TwigTemplate_c947632812bc06a3c5063d623cb54319 extends \Twig\Template
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
        echo "<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"Real Estate Builders Free Responsive Website Templates - icon\">
\t\t<meta name=\"author\" content=\"webThemez.com\">
\t\t<title>Real Estate Builders Free Responsive Website - icon</title>
\t\t<link rel=\"favicon\" href=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 15, $this->source), "html", null, true);
        echo "/assets/images/favicon.png\">
\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"assets/js/html5shiv.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"assets/js/respond.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<![endif]-->
\t</head>
\t<body>
\t\t<!-- Fixed navbar -->
\t\t\t<div class=\"navbar navbar-inverse\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"navbar-header\">
\t\t\t\t\t\t<!-- Button for smallest screens -->
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 36, $this->source), "html", null, true);
        echo "/assets/images/logo.png\" alt=\"Techro HTML5 template\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t\t";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<!--/.nav-collapse -->
\t\t\t\t</div>
\t\t\t</div>
\t\t<!-- /.navbar -->

\t\t<!-- Header -->
\t\t<div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
\t\t\t<div id=\"main\" class=\"layout-main clearfix\">
\t\t\t\t<main id=\"content\" class=\"column main-content\" role=\"main\">
\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t\t\t\t\t";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</section>
\t\t\t\t</main>
\t\t\t</div>
\t\t</div>
\t\t<!-- /Header -->
\t\t<section id=\"search\">
\t\t\t<div class=\"search-panel\">
\t\t\t\t<form class=\"form-inline\" role=\"form\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"city\" placeholder=\"City\" autocomplete=\"off\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group hidden-xs adv\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<div class=\"input-group-addon\">\$</div>
\t\t\t\t\t\t\t<input class=\"form-control price\" type=\"text\" placeholder=\"From\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group hidden-xs adv\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<div class=\"input-group-addon\">\$</div>
\t\t\t\t\t\t\t<input class=\"form-control price\" type=\"text\" placeholder=\"To\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group hidden-xs adv\">
\t\t\t\t\t\t<div class=\"checkbox custom-checkbox\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\"><span class=\"fa fa-check\"></span>
\t\t\t\t\t\t\t\tFor Rent</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group hidden-xs adv\">
\t\t\t\t\t\t<div class=\"checkbox custom-checkbox\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\"><span class=\"fa fa-check\"></span>
\t\t\t\t\t\t\t\tFor Sale</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<a href=\"\" class=\"btn btnsearch\">Search</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"secpadding\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"title-box clearfix \">
\t\t\t\t\t\t\t<h2 class=\"title-box_primary\">Welcome</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui. Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibuLorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p>
\t\t\t\t\t\t<p>penatibus et magnis dis parturient montes ascetur ridiculus musull dui. Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibuLorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"news-box\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2>
\t\t\t\t\t<span>Current projects</span>
\t\t\t\t</h2>
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"thumbnail thumbnail4\">
\t\t\t\t\t\t\t<img src=\"";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 116, $this->source), "html", null, true);
        echo "/assets/images/news2.jpg\" alt=\"\">

\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tAliquam eu aliquet quam
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSouvlaki ignitus carborundum e pluribus unumfacto lingo est igpay atinlay arquee
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    selectus. non provisio incongruous feline nolo contendre. Gratuitous octopus niacin,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    sodium glutimate. Quote meon
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"#\" data-title=\"Read More\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t<span>Read More</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"thumbnail thumbnail4\">
\t\t\t\t\t\t\t<img src=\"";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 138, $this->source), "html", null, true);
        echo "/assets/images/news3.jpg\" alt=\"\">

\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tFactorial non deposit
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tEnumfacto lingo est igpay atinlay arquee selectus.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    non provisio incongruous feline nolo contendre. Grat uitous octopus niacin, sodium
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    glutimate. Quote meon an estimate et non interruptus stad
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"#\" data-title=\"Read More\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t<span>Read More</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"thumbnail thumbnail4\">
\t\t\t\t\t\t\t<img src=\"";
        // line 160
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 160, $this->source), "html", null, true);
        echo "/assets/images/news4.jpg\" alt=\"\">

\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tDeposit quid proquo
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tArquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    niacin, sodium gluti mate. Quote meon an estimate et non interruptus stad ium. Sic
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    tempus fugit esperanto
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"#\" data-title=\"Read More\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t<span>Read More</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"packages\" class=\"secpadding\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2>
\t\t\t\t\t<span>Completed Projects</span>
\t\t\t\t</h2>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"cuadro_intro_hover \" style=\"background-color:#cccccc;\">
\t\t\t\t\t\t\t<p style=\"text-align:center;\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 195, $this->source), "html", null, true);
        echo "/assets/images/pic/pic-5.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"blur\"></div>
\t\t\t\t\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t\t\t\t\t<h3>Project Name</h3>
\t\t\t\t\t\t\t\t\t<a class=\" btn btn-default\" href=\"#\">\$4600</i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3  col-sm-6\">
\t\t\t\t\t<div class=\"cuadro_intro_hover \" style=\"background-color:#cccccc;\">
\t\t\t\t\t\t<p style=\"text-align:center;\">
\t\t\t\t\t\t\t<img src=\"";
        // line 211
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 211, $this->source), "html", null, true);
        echo "/assets/images/pic/pic-6.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<div class=\"blur\"></div>
\t\t\t\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t\t\t\t<h3>Project Name</h3>
\t\t\t\t\t\t\t\t<a class=\" btn btn-default\" href=\"#\">\$4600</i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"col-md-3  col-sm-6\">
\t\t\t\t<div class=\"cuadro_intro_hover \" style=\"background-color:#cccccc;\">
\t\t\t\t\t<p style=\"text-align:center;\">
\t\t\t\t\t\t<img src=\"";
        // line 227
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 227, $this->source), "html", null, true);
        echo "/assets/images/pic/pic-7.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<div class=\"blur\"></div>
\t\t\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t\t\t<h3>Project Name</h3>
\t\t\t\t\t\t\t<a class=\" btn btn-default\" href=\"#\">\$4600</i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"col-md-3  col-sm-6\">
\t\t\t<div class=\"cuadro_intro_hover \" style=\"background-color:#cccccc;\">
\t\t\t\t<p style=\"text-align:center;\">
\t\t\t\t\t<img src=\"";
        // line 243
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 243, $this->source), "html", null, true);
        echo "/assets/images/pic/pic-8.jpg\" class=\"img-responsive\" alt=\"\">
\t\t\t\t</p>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<div class=\"blur\"></div>
\t\t\t\t\t<div class=\"caption-text\">
\t\t\t\t\t\t<h3>Project Name</h3>
\t\t\t\t\t\t<a class=\" btn btn-default\" href=\"#\">\$4600</i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html></div></div></div></section><section class=\"btm-section secpadding\"><div class=\"container\"><div class=\"row\"><div class=\"col-md-4\">
<div class=\"title-box clearfix \">
\t<h3 class=\"title-box_primary\">New Projects</h3>
</div>
<div class=\"list styled custom-list\">
\t<ul>
\t\t<li><a title=\"Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus.\" href=\"#\">Singapore Township</a></li>
\t\t<li><a title=\"Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus.\" href=\"#\">Mega luxury Villas</a></li>
\t\t<li><a title=\"Penatibus et magnis dis parturient montes ascetur ridiculus mus.\" href=\"#\">RNT Commercial Shopping Mall</a></li>
\t\t<li><a title=\"Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci.\" href=\"#\">SVN Independent & Duplex Houses</a></li>
\t\t<li><a title=\"Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus.\" href=\"#\">World wide IT park</a></li>
\t\t<li><a title=\"Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus.\" href=\"#\">North Arena SNT Township</a></li>
\t</ul>
</div></div><div class=\"col-md-4\">
<div class=\"title-box clearfix \">
\t<h3 class=\"title-box_primary\">Large Projects</h3>
</div>
<div class=\"list styled custom-list\">
\t<ul>
\t\t<li><a title=\"Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus.\" href=\"#\">Singapore Township</a></li>
\t\t<li><a title=\"Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus.\" href=\"#\">Mega luxury Villas</a></li>
\t\t<li><a title=\"Penatibus et magnis dis parturient montes ascetur ridiculus mus.\" href=\"#\">RNT Commercial Shopping Mall</a></li>
\t\t<li><a title=\"Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci.\" href=\"#\">SVN Independent & Duplex Houses</a></li>
\t\t<li><a title=\"Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus.\" href=\"#\">World wide IT park</a></li>
\t\t<li><a title=\"Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus.\" href=\"#\">North Arena SNT Township</a></li>
\t</ul>
</div></div><div class=\"col-md-4\">
<div class=\"title-box clearfix \">
\t<h3 class=\"title-box_primary\">Our Clients</h3>
</div>
<blockquote class=\"blockquote-1\">
\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid</p>
\t<small>Someone famous in
\t\t<cite title=\"Source Title\">Source Title</cite>
\t</small>
</blockquote></div></div></div></section><footer id=\"footer\"><div class=\"footer2\"><div class=\"container\"><div
class=\"row\">

";
        // line 310
        echo "
<div class=\"col-md-6 panel\">
\t<div class=\"panel-body\">
\t\t<p class=\"text-right\">
\t\t\tCopyright &copy; 2015. Template by
\t\t\t<a href=\"http://webthemez.com/\" rel=\"develop\">WebThemez.com</a>
\t\t</p>
\t</div>
</div></div><!-- /row of panels --></div></div></footer><!-- JavaScript libs are placed at the end of the document so the pages load faster --><script>(function (\$) {
\$(document).ready(function () {
\$('#camera_wrap_4').camera({
height: '750',
loader: 'bar',
pagination: false,
thumbnails: false,
hover: false,
opacityOnGrid: false,
imagePath: 'assets/image/'
})
});

});</script></body></html>
";
    }

    public function getTemplateName()
    {
        return "themes/realestate/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 310,  313 => 243,  294 => 227,  275 => 211,  256 => 195,  218 => 160,  193 => 138,  168 => 116,  101 => 52,  85 => 39,  79 => 36,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/realestate/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal_project\\web\\themes\\realestate\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 15);
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
