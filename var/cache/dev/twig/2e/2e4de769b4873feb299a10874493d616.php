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

/* registration/register.html.twig */
class __TwigTemplate_d8f80241f2d31b5efdca604d2bd072ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Inscription";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 col-lg-4\">
            <form method=\"post\" class=\"card shadow-sm p-4\">
                <h1 class=\"h4 mb-4 text-center font-weight-bold\">Inscrivez-vous</h1>
                
                <!-- Affichage des erreurs globaux du formulaire -->
                ";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            yield "                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
            // line 15
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'errors');
            yield "
                    </div>
                ";
        }
        // line 18
        yield "
                <!-- Champ email -->
                <div class=\"form-group mb-3\">
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'row', ["label" => "Adresse Email", "attr" => ["class" => "form-control", "placeholder" => "Entrez votre email"]]);
        // line 24
        yield "
                </div>

                <!-- Champ mot de passe -->
                <div class=\"form-group mb-3\">
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control", "placeholder" => "Entrez votre mot de passe"]]);
        // line 32
        yield "
                </div>

                <!-- Champ nom -->
                <div class=\"form-group mb-3\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'row', ["label" => "Nom", "attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom"]]);
        // line 40
        yield "
                </div>

                <!-- Champ prénom -->
                <div class=\"form-group mb-3\">
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'row', ["label" => "Prénom", "attr" => ["class" => "form-control", "placeholder" => "Entrez votre prénom"]]);
        // line 48
        yield "
                </div>

                <!-- Champ date de naissance -->
                <div class=\"form-group mb-3\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "dateNaissance", [], "any", false, false, false, 53), 'row', ["label" => "Date de naissance", "attr" => ["class" => "form-control", "placeholder" => "Sélectionnez votre date de naissance"]]);
        // line 56
        yield "
                </div>

                <!-- Champ solde -->
                <div class=\"form-group mb-3\">
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "solde", [], "any", false, false, false, 61), 'row', ["label" => "Solde initial", "attr" => ["class" => "form-control", "placeholder" => "Solde initial"]]);
        // line 64
        yield "
                </div>

                <!-- Case à cocher des termes et conditions -->
                <div class=\"form-check mb-3\">
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "agreeTerms", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-check-input"]]);
        // line 71
        yield "
                    <label class=\"form-check-label\" for=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "agreeTerms", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\">
                        J'accepte les termes et conditions
                    </label>
                </div>

                <!-- Bouton d'inscription -->
                <div class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-warning w-100\">S'inscrire</button>
                </div>

                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), 'rest');
        yield "
            </form>
        </div>
    </div>
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
        return "registration/register.html.twig";
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
        return array (  197 => 82,  184 => 72,  181 => 71,  179 => 69,  172 => 64,  170 => 61,  163 => 56,  161 => 53,  154 => 48,  152 => 45,  145 => 40,  143 => 37,  136 => 32,  134 => 29,  127 => 24,  125 => 21,  120 => 18,  114 => 15,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6 col-lg-4\">
            <form method=\"post\" class=\"card shadow-sm p-4\">
                <h1 class=\"h4 mb-4 text-center font-weight-bold\">Inscrivez-vous</h1>
                
                <!-- Affichage des erreurs globaux du formulaire -->
                {% if registrationForm.vars.errors|length > 0 %}
                    <div class=\"alert alert-danger\" role=\"alert\">
                        {{ form_errors(registrationForm) }}
                    </div>
                {% endif %}

                <!-- Champ email -->
                <div class=\"form-group mb-3\">
                    {{ form_row(registrationForm.email, {
                        'label': 'Adresse Email',
                        'attr': {'class': 'form-control', 'placeholder': 'Entrez votre email'}
                    }) }}
                </div>

                <!-- Champ mot de passe -->
                <div class=\"form-group mb-3\">
                    {{ form_row(registrationForm.plainPassword, {
                        'label': 'Mot de passe',
                        'attr': {'class': 'form-control', 'placeholder': 'Entrez votre mot de passe'}
                    }) }}
                </div>

                <!-- Champ nom -->
                <div class=\"form-group mb-3\">
                    {{ form_row(registrationForm.nom, {
                        'label': 'Nom',
                        'attr': {'class': 'form-control', 'placeholder': 'Entrez votre nom'}
                    }) }}
                </div>

                <!-- Champ prénom -->
                <div class=\"form-group mb-3\">
                    {{ form_row(registrationForm.prenom, {
                        'label': 'Prénom',
                        'attr': {'class': 'form-control', 'placeholder': 'Entrez votre prénom'}
                    }) }}
                </div>

                <!-- Champ date de naissance -->
                <div class=\"form-group mb-3\">
                    {{ form_row(registrationForm.dateNaissance, {
                        'label': 'Date de naissance',
                        'attr': {'class': 'form-control', 'placeholder': 'Sélectionnez votre date de naissance'}
                    }) }}
                </div>

                <!-- Champ solde -->
                <div class=\"form-group mb-3\">
                    {{ form_row(registrationForm.solde, {
                        'label': 'Solde initial',
                        'attr': {'class': 'form-control', 'placeholder': 'Solde initial'}
                    }) }}
                </div>

                <!-- Case à cocher des termes et conditions -->
                <div class=\"form-check mb-3\">
                    {{ form_widget(registrationForm.agreeTerms, {
                        'attr': {'class': 'form-check-input'}
                    }) }}
                    <label class=\"form-check-label\" for=\"{{ registrationForm.agreeTerms.vars.id }}\">
                        J'accepte les termes et conditions
                    </label>
                </div>

                <!-- Bouton d'inscription -->
                <div class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-warning w-100\">S'inscrire</button>
                </div>

                {{ form_rest(registrationForm) }}
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "/Users/enzosuire/Desktop/ECF PariBasket/git/PariBasket/templates/registration/register.html.twig");
    }
}
