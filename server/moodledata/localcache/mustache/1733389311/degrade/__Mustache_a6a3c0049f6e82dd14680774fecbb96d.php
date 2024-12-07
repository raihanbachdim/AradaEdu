<?php

class __Mustache_a6a3c0049f6e82dd14680774fecbb96d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<nav id="header" class="navbar navbar-light navbar-expand"
';
        $buffer .= $indent . '     aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        <div class="header-menubar header-menubar-inner">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="header-logo">
';
        $buffer .= $indent . '                <a class="navbar-brand" href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/?redirect=0">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('logourl_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers"
';
        $buffer .= $indent . '                    data-action="toggle" data-target="theme_boost-drawers-primary">
';
        $buffer .= $indent . '                <span class="navbar-toggler-icon"></span>
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '
';
        $value = $context->find('primarymoremenu');
        $buffer .= $this->section8b7adeb075adc59aaee92d0f972c3797($context, $indent, $value);
        $buffer .= $indent . '            <div class="primary-navigation">
';
        $buffer .= $indent . '                <div class="custom-menu navigation">
';
        $buffer .= $indent . '                    <ul class="navbar-nav mr-auto">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
        $buffer .= $indent . '                <!-- page_heading_menu -->
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div id="usernavigation" class="navbar-nav ml-auto">
';
        $buffer .= $indent . '                <div class="layout-mode">
';
        $buffer .= $indent . '                    <div class="dark-mode">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('pix');
        $buffer .= $this->sectionDa912cc9470746ce5b94cb6dba4b041e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="light-mode">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('pix');
        $buffer .= $this->section063141a5a61b6dc46b67f28e6b10064a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $value = $context->findDot('output.search_box');
        $buffer .= $this->sectionE63f647c180636a74c3c339829273346($context, $indent, $value);
        $value = $context->find('langmenu');
        $buffer .= $this->sectionD81edf8769a7fe73a45b6e75800499a3($context, $indent, $value);
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="d-flex align-items-center usermenu-container" data-region="usermenu">
';
        $value = $context->find('usermenu');
        $buffer .= $this->section5c7c274143b56ca3eabd09325bd17030($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section6468e0bd121894626b009abae69a7724($context, $indent, $value);

        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b7adeb075adc59aaee92d0f972c3797(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="primary-navigation">
                    {{> core/moremenu}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa912cc9470746ce5b94cb6dba4b041e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dark/dark-lua, theme_degrade';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dark/dark-lua, theme_degrade';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section063141a5a61b6dc46b67f28e6b10064a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dark/dark-sol, theme_degrade';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dark/dark-sol, theme_degrade';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE63f647c180636a74c3c339829273346(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{output.search_box}}}
                    <div class="divider border-left h-75 align-self-center mx-1"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.search_box'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD81edf8769a7fe73a45b6e75800499a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> theme_boost/language_menu}}
                    <div class="divider border-left h-75 align-self-center mx-1"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_boost/language_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                    <div class="divider border-left h-75 align-self-center mx-1"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c7c274143b56ca3eabd09325bd17030(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/user_menu}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6468e0bd121894626b009abae69a7724(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require(["jquery", "core/ajax"], function($, ajax) {

        var top_scroll = Math.floor("{{top_scroll}}");
        if (!top_scroll) {
            var header = $("#header");
            var page = $("#page");
            $(window).on("scroll", window_scroll);
            window_scroll();

            function window_scroll() {

                if ($(window).width() < 800) {
                    header.removeClass("fixed-top");
                    return;
                }

                var top = $(window).scrollTop();
                if (top > 90 && !header.hasClass("fixed-top")) {
                    header.addClass("fixed-top");

                    page.css({
                        "margin-top" : header.height() + 14
                    });
                }
                if (top < 15 && header.hasClass("fixed-top")) {
                    header.removeClass("fixed-top");

                    page.css({
                        "margin-top" : 14
                    });
                }
            }
        }

        // layout-mode
        var $layoutMode = $(".layout-mode div");
        $layoutMode.click(function() {
            $("body").addClass("dark-animation");
            setTimeout(function() {
                $("body").removeClass("dark-animation");
            }, 500);

            var layout = "dark";
            if ($("html").attr("data-bs-theme") == "dark") {
                layout = "light";
            }
            $("html").attr("data-bs-theme", layout);

            ajax.call([{
                methodname : "theme_degrade_userprerence_layout",
                args       : {layout : layout}
            }]);
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require(["jquery", "core/ajax"], function($, ajax) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var top_scroll = Math.floor("';
                $value = $this->resolveValue($context->find('top_scroll'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '");
';
                $buffer .= $indent . '        if (!top_scroll) {
';
                $buffer .= $indent . '            var header = $("#header");
';
                $buffer .= $indent . '            var page = $("#page");
';
                $buffer .= $indent . '            $(window).on("scroll", window_scroll);
';
                $buffer .= $indent . '            window_scroll();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            function window_scroll() {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                if ($(window).width() < 800) {
';
                $buffer .= $indent . '                    header.removeClass("fixed-top");
';
                $buffer .= $indent . '                    return;
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                var top = $(window).scrollTop();
';
                $buffer .= $indent . '                if (top > 90 && !header.hasClass("fixed-top")) {
';
                $buffer .= $indent . '                    header.addClass("fixed-top");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    page.css({
';
                $buffer .= $indent . '                        "margin-top" : header.height() + 14
';
                $buffer .= $indent . '                    });
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                if (top < 15 && header.hasClass("fixed-top")) {
';
                $buffer .= $indent . '                    header.removeClass("fixed-top");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    page.css({
';
                $buffer .= $indent . '                        "margin-top" : 14
';
                $buffer .= $indent . '                    });
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        // layout-mode
';
                $buffer .= $indent . '        var $layoutMode = $(".layout-mode div");
';
                $buffer .= $indent . '        $layoutMode.click(function() {
';
                $buffer .= $indent . '            $("body").addClass("dark-animation");
';
                $buffer .= $indent . '            setTimeout(function() {
';
                $buffer .= $indent . '                $("body").removeClass("dark-animation");
';
                $buffer .= $indent . '            }, 500);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            var layout = "dark";
';
                $buffer .= $indent . '            if ($("html").attr("data-bs-theme") == "dark") {
';
                $buffer .= $indent . '                layout = "light";
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            $("html").attr("data-bs-theme", layout);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ajax.call([{
';
                $buffer .= $indent . '                methodname : "theme_degrade_userprerence_layout",
';
                $buffer .= $indent . '                args       : {layout : layout}
';
                $buffer .= $indent . '            }]);
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
