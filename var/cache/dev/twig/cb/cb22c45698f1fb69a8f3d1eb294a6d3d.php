<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_db81a7385db1039e91270bd46a0230c8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<!-- Page content-->
<div class=\"container mt-5\">
   

    <section class=\"mt-4\">
        <h2 class=\"mb-4\">Matchs à venir</h2>
        <div class=\"row\">
            <!-- Card 1 -->
            <div class=\"col-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Équipe A vs Équipe B</h5>
                        <p class=\"card-text\">Date du match : 6 septembre 2024</p>
                        <div class=\"d-flex justify-content-center gap-3\">
                            <button class=\"btn btn-success\">Parier sur l'equipe A</button>
                            <button class=\"btn btn-danger\">Parier sur l'equipe B</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class=\"col-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Équipe C vs Équipe D</h5>
                        <p class=\"card-text\">Date du match : 7 septembre 2024</p>
                        <div class=\"d-flex justify-content-center gap-3\">
                            <button class=\"btn btn-success\">Parier sur l'equipe A</button>
                            <button class=\"btn btn-danger\">Parier sur l'equipe B</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block content %}
<!-- Page content-->
<div class=\"container mt-5\">
   

    <section class=\"mt-4\">
        <h2 class=\"mb-4\">Matchs à venir</h2>
        <div class=\"row\">
            <!-- Card 1 -->
            <div class=\"col-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Équipe A vs Équipe B</h5>
                        <p class=\"card-text\">Date du match : 6 septembre 2024</p>
                        <div class=\"d-flex justify-content-center gap-3\">
                            <button class=\"btn btn-success\">Parier sur l'equipe A</button>
                            <button class=\"btn btn-danger\">Parier sur l'equipe B</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class=\"col-12 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Équipe C vs Équipe D</h5>
                        <p class=\"card-text\">Date du match : 7 septembre 2024</p>
                        <div class=\"d-flex justify-content-center gap-3\">
                            <button class=\"btn btn-success\">Parier sur l'equipe A</button>
                            <button class=\"btn btn-danger\">Parier sur l'equipe B</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}
", "home/index.html.twig", "/Users/enzosuire/Desktop/ECF PariBasket/git/PariBasket/templates/home/index.html.twig");
    }
}
