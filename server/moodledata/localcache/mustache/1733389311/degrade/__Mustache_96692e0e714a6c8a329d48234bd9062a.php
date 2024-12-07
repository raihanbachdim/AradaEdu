<?php

class __Mustache_96692e0e714a6c8a329d48234bd9062a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body data-templates="login" ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper" class="login-wrapper position-relative login_theme--';
        $value = $this->resolveValue($context->find('login_theme'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="login-logo-area">
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/?redirect=0">
';
        $buffer .= $indent . '            <div class="logo">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('logourl_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="login-area">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="login-background-area" style="';
        $value = $this->resolveValue($context->find('login_background_image'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="login-color-area">
';
        $buffer .= $indent . '                <div id="login_login_description">';
        $value = $this->resolveValue($context->find('login_login_description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div id="login_forgot_description">';
        $value = $this->resolveValue($context->find('login_forgot_description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div id="login_signup_description">';
        $value = $this->resolveValue($context->find('login_signup_description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="login-form-area">
';
        $buffer .= $indent . '            <div class="form-content">
';
        $buffer .= $indent . '                <div class="form-items">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light">
';
        $buffer .= $indent . '        <div class="container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->sectionE17668e8bb3b6f6d7c5a69b2159e36b6($context, $indent, $value);

        return $buffer;
    }

    private function sectionE17668e8bb3b6f6d7c5a69b2159e36b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'theme_boost/footer-popover\', \'theme_boost/drawer\', \'theme_boost/loader\'],
        function(FooterPopover, Drawer, Loader) {
            FooterPopover.init();
            Drawer.init();
            M.util.js_complete(\'theme_boost/loader\');
        });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'theme_boost/footer-popover\', \'theme_boost/drawer\', \'theme_boost/loader\'],
';
                $buffer .= $indent . '        function(FooterPopover, Drawer, Loader) {
';
                $buffer .= $indent . '            FooterPopover.init();
';
                $buffer .= $indent . '            Drawer.init();
';
                $buffer .= $indent . '            M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
