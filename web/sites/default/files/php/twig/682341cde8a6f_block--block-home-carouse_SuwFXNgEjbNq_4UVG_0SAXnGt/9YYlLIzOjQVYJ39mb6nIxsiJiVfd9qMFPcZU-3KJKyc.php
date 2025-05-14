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

/* themes/custom_theme/templates/blocks/block--block-home-carousel.html.twig */
class __TwigTemplate_7ccdbfd3f4fc2f3ed51fbee85d7bc6c0 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield " <div id=\"carouselExample\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_carousel_block_field", [], "any", false, false, true, 3)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_carousel_block_field", [], "any", false, false, true, 3), "#items", [], "array", false, false, true, 3)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            yield "      ";
            $context["paragraph"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 4);
            // line 5
            yield "      <div class=\"carousel-item ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 5)) ? ("active") : ("")));
            yield "\">
        
        ";
            // line 8
            yield "        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_image", [], "any", false, false, true, 8), "entity", [], "any", false, false, true, 8))) {
                // line 9
                yield "          <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_image", [], "any", false, false, true, 9), "entity", [], "any", false, false, true, 9), "fileuri", [], "any", false, false, true, 9)), "html", null, true);
                yield "\" class=\"d-block w-100\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_image", [], "any", false, false, true, 9), "alt", [], "any", false, false, true, 9), "html", null, true);
                yield "\">
        ";
            }
            // line 11
            yield "
        <div class=\"carousel-caption d-none d-md-block\">
          
          ";
            // line 15
            yield "          ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_title", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15))) {
                // line 16
                yield "            <h5>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_title", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), "html", null, true);
                yield "</h5>
          ";
            }
            // line 18
            yield "
          ";
            // line 20
            yield "          ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_description", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20))) {
                // line 21
                yield "            <p>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_description", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), "html", null, true);
                yield "</p>
          ";
            }
            // line 22
            yield " 

          ";
            // line 25
            yield "          ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_link", [], "any", false, false, true, 25), "uri", [], "any", false, false, true, 25))) {
                // line 26
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_link", [], "any", false, false, true, 26), "uri", [], "any", false, false, true, 26), "html", null, true);
                yield "\" class=\"btn btn-primary\">
              ";
                // line 27
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_link", [], "any", false, false, true, 27), "title", [], "any", false, false, true, 27)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_carousel_link", [], "any", false, false, true, 27), "title", [], "any", false, false, true, 27), "html", null, true)) : ("Learn More"));
                yield "
            </a>
          ";
            }
            // line 30
            yield "
        </div>

      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "  </div>

  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </button>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom_theme/templates/blocks/block--block-home-carousel.html.twig";
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
        return array (  147 => 35,  129 => 30,  123 => 27,  118 => 26,  115 => 25,  111 => 22,  105 => 21,  102 => 20,  99 => 18,  93 => 16,  90 => 15,  85 => 11,  77 => 9,  74 => 8,  68 => 5,  65 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <div id=\"carouselExample\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-inner\">
    {% for item in content.field_carousel_block_field['#items'] %}
      {% set paragraph = item.entity %}
      <div class=\"carousel-item {{ loop.first ? 'active' }}\">
        
        {# Image #}
        {% if paragraph.field_carousel_image.entity is not empty %}
          <img src=\"{{ file_url(paragraph.field_carousel_image.entity.fileuri) }}\" class=\"d-block w-100\" alt=\"{{ paragraph.field_carousel_image.alt }}\">
        {% endif %}

        <div class=\"carousel-caption d-none d-md-block\">
          
          {# Title #}
          {% if paragraph.field_carousel_title.value is not empty %}
            <h5>{{ paragraph.field_carousel_title.value }}</h5>
          {% endif %}

          {# Description #}
          {% if paragraph.field_carousel_description.value is not empty %}
            <p>{{ paragraph.field_carousel_description.value }}</p>
          {% endif %} 

          {# Link (if available) #}
          {% if paragraph.field_carousel_link.uri is not empty %}
            <a href=\"{{ paragraph.field_carousel_link.uri }}\" class=\"btn btn-primary\">
              {{ paragraph.field_carousel_link.title ?: 'Learn More' }}
            </a>
          {% endif %}

        </div>

      </div>
    {% endfor %}
  </div>

  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\"></span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\"></span>
  </button>
</div>
", "themes/custom_theme/templates/blocks/block--block-home-carousel.html.twig", "C:\\xampp\\htdocs\\drupal_site\\web\\themes\\custom_theme\\templates\\blocks\\block--block-home-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 3, "set" => 4, "if" => 8];
        static $filters = ["escape" => 9];
        static $functions = ["file_url" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                ['file_url'],
                $this->source
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
