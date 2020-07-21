<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/admin/status-report.html.twig */
class __TwigTemplate_46bf923785d3fbd9bd2649d6d8aba0fcaddac2409afe92333a552335507e6844 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 20, "if" => 22];
        $filters = ["escape" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 18
        echo "<table class=\"system-status-report\">
  <tbody>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 21
            echo "    <tr class=\"system-status-report__entry system-status-report__entry--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "severity_status", [])), "html", null, true);
            echo " color-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "severity_status", [])), "html", null, true);
            echo "\">
      ";
            // line 22
            if (twig_in_filter($this->getAttribute($context["requirement"], "severity_status", []), [0 => "warning", 1 => "error"])) {
                // line 23
                echo "        <th class=\"system-status-report__status-title system-status-report__status-icon system-status-report__status-icon--";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "severity_status", [])), "html", null, true);
                echo "\">
          <span class=\"visually-hidden\">";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "severity_title", [])), "html", null, true);
                echo "</span>
      ";
            } else {
                // line 26
                echo "        <th class=\"system-status-report__status-title\">
      ";
            }
            // line 28
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "title", [])), "html", null, true);
            echo "
      </th>
      <td>
        ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "value", [])), "html", null, true);
            echo "
        ";
            // line 32
            if ($this->getAttribute($context["requirement"], "description", [])) {
                // line 33
                echo "          <div class=\"description\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "description", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 35
            echo "      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/status-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  105 => 35,  99 => 33,  97 => 32,  93 => 31,  86 => 28,  82 => 26,  77 => 24,  72 => 23,  70 => 22,  63 => 21,  59 => 20,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/admin/status-report.html.twig", "C:\\Users\\Tolesla\\Sites\\devdesktop\\eCommerce\\core\\themes\\stable\\templates\\admin\\status-report.html.twig");
    }
}
