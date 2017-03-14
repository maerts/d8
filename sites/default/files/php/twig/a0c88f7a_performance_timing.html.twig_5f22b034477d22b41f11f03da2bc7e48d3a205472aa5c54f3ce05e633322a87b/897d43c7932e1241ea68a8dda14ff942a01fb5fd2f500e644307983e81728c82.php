<?php

/* @webprofiler/Collector/performance_timing.html.twig */
class __TwigTemplate_fc5f0eff8df4e442bc73aeb849cb08bbe5fcb539770d998d5b24d0e9377e7772 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_790ce34165bcfe803e0af5c2ab5b9f2290385be7e5a8ec7eedd1f1a74f6e508d = $this->env->getExtension("native_profiler");
        $__internal_790ce34165bcfe803e0af5c2ab5b9f2290385be7e5a8ec7eedd1f1a74f6e508d->enter($__internal_790ce34165bcfe803e0af5c2ab5b9f2290385be7e5a8ec7eedd1f1a74f6e508d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/performance_timing.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 4, "default" => 35);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
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

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_790ce34165bcfe803e0af5c2ab5b9f2290385be7e5a8ec7eedd1f1a74f6e508d->leave($__internal_790ce34165bcfe803e0af5c2ab5b9f2290385be7e5a8ec7eedd1f1a74f6e508d_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26a4bff20d3ff5470f2819b3d1139b755e1c67b1dbc0de822ab3b3490e0edee0 = $this->env->getExtension("native_profiler");
        $__internal_26a4bff20d3ff5470f2819b3d1139b755e1c67b1dbc0de822ab3b3490e0edee0->enter($__internal_26a4bff20d3ff5470f2819b3d1139b755e1c67b1dbc0de822ab3b3490e0edee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "performance_timing")), "html", null, true));
        echo "\"
       title=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Performance Timing")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Performance Timing")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span id=\"wp--frontend__toolbar\"></span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("DNS lookup")));
        echo "</b>
        <span id=\"wp--frontend__dns\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("TCP handshake")));
        echo "</b>
        <span id=\"wp--frontend__tcp\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("TTFB"));
        echo "</b>
        <span id=\"wp--frontend__ttfb\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Data download")));
        echo "</b>
        <span id=\"wp--frontend__data\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("DOM building")));
        echo "</b>
        <span id=\"wp--frontend__dom\"></span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>

    <script>
        var perf = performance.timing,
                dns = parseInt(perf.domainLookupEnd - perf.domainLookupStart),
                tcp = parseInt(perf.connectEnd - perf.connectStart),
                ttfb = parseInt(perf.responseStart - perf.connectEnd),
                data = parseInt(perf.responseEnd - perf.responseStart),
                dom = parseInt(perf.loadEventStart - perf.responseEnd);

        Webprofiler.ajax('";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.frontend.save", array("profile" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true));
        echo "', false, JSON.stringify(perf));

        document.getElementById('wp--frontend__toolbar').innerHTML = ttfb + ' ms';
        document.getElementById('wp--frontend__dns').innerHTML = dns + ' ms';
        document.getElementById('wp--frontend__tcp').innerHTML = tcp + ' ms';
        document.getElementById('wp--frontend__ttfb').innerHTML = ttfb + ' ms';
        document.getElementById('wp--frontend__data').innerHTML = data + ' ms';
        document.getElementById('wp--frontend__dom').innerHTML = dom + ' ms';
    </script>
";
        
        $__internal_26a4bff20d3ff5470f2819b3d1139b755e1c67b1dbc0de822ab3b3490e0edee0->leave($__internal_26a4bff20d3ff5470f2819b3d1139b755e1c67b1dbc0de822ab3b3490e0edee0_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4974324f594bc9fa9da7dc87d125596ea4e023cb7a9b82753c3054b271d6a05c = $this->env->getExtension("native_profiler");
        $__internal_4974324f594bc9fa9da7dc87d125596ea4e023cb7a9b82753c3054b271d6a05c->enter($__internal_4974324f594bc9fa9da7dc87d125596ea4e023cb7a9b82753c3054b271d6a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <script id=\"performance_timing\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Performance timing")));
        echo "</h2>
        <div class=\"panel__container\">
            <% if(data.performance && data.performance.computed) { %>
                <table class=\"table--duo\">
                    <% _.each( data.performance.computed, function( item, key ){ %>
                    <tr>
                        <th><%- key %></th>
                        <td><%- Drupal.webprofiler.helpers.printTime(item) %></td>
                    </tr>
                    <% }); %>
                </table>
            <% } else { %>
                <p>";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No collected data, maybe this profile hasn't been generated by a browser GET o has been generated by an unsupported browser.")));
        echo "</p>
            <% } %>
        </div>
    </script>
";
        
        $__internal_4974324f594bc9fa9da7dc87d125596ea4e023cb7a9b82753c3054b271d6a05c->leave($__internal_4974324f594bc9fa9da7dc87d125596ea4e023cb7a9b82753c3054b271d6a05c_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/performance_timing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  179 => 60,  176 => 59,  170 => 58,  153 => 47,  139 => 36,  135 => 35,  131 => 33,  124 => 29,  117 => 25,  110 => 21,  103 => 17,  96 => 13,  92 => 11,  89 => 10,  82 => 6,  78 => 5,  74 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 58,  50 => 57,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'performance_timing'}) }}"*/
/*        title="{{ 'Performance Timing'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Performance Timing'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span id="wp--frontend__toolbar"></span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/* */
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'DNS lookup'|t }}</b>*/
/*         <span id="wp--frontend__dns"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'TCP handshake'|t }}</b>*/
/*         <span id="wp--frontend__tcp"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'TTFB' }}</b>*/
/*         <span id="wp--frontend__ttfb"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Data download'|t }}</b>*/
/*         <span id="wp--frontend__data"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'DOM building'|t }}</b>*/
/*         <span id="wp--frontend__dom"></span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         var perf = performance.timing,*/
/*                 dns = parseInt(perf.domainLookupEnd - perf.domainLookupStart),*/
/*                 tcp = parseInt(perf.connectEnd - perf.connectStart),*/
/*                 ttfb = parseInt(perf.responseStart - perf.connectEnd),*/
/*                 data = parseInt(perf.responseEnd - perf.responseStart),*/
/*                 dom = parseInt(perf.loadEventStart - perf.responseEnd);*/
/* */
/*         Webprofiler.ajax('{{ url("webprofiler.frontend.save", {profile: token}) }}', false, JSON.stringify(perf));*/
/* */
/*         document.getElementById('wp--frontend__toolbar').innerHTML = ttfb + ' ms';*/
/*         document.getElementById('wp--frontend__dns').innerHTML = dns + ' ms';*/
/*         document.getElementById('wp--frontend__tcp').innerHTML = tcp + ' ms';*/
/*         document.getElementById('wp--frontend__ttfb').innerHTML = ttfb + ' ms';*/
/*         document.getElementById('wp--frontend__data').innerHTML = data + ' ms';*/
/*         document.getElementById('wp--frontend__dom').innerHTML = dom + ' ms';*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="performance_timing" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Performance timing'|t }}</h2>*/
/*         <div class="panel__container">*/
/*             <% if(data.performance && data.performance.computed) { %>*/
/*                 <table class="table--duo">*/
/*                     <% _.each( data.performance.computed, function( item, key ){ %>*/
/*                     <tr>*/
/*                         <th><%- key %></th>*/
/*                         <td><%- Drupal.webprofiler.helpers.printTime(item) %></td>*/
/*                     </tr>*/
/*                     <% }); %>*/
/*                 </table>*/
/*             <% } else { %>*/
/*                 <p>{{ 'No collected data, maybe this profile hasn\'t been generated by a browser GET o has been generated by an unsupported browser.'|t }}</p>*/
/*             <% } %>*/
/*         </div>*/
/*     </script>*/
/* {% endblock %}*/