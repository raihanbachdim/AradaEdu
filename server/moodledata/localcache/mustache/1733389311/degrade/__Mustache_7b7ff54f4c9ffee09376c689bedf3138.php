<?php

class __Mustache_7b7ff54f4c9ffee09376c689bedf3138 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="block-myoverview-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="block-myoverview block-cards" data-region="myoverview" role="navigation">
';
        $buffer .= $indent . '    <hr class="mt-0"/>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div role="search" data-region="filter" class="d-flex align-items-center my-2"
';
        $buffer .= $indent . '         aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6dacaeff51ba425cb4a640a8ca853997($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="row no-gutters">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/nav-grouping-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/nav-search-widget')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/nav-sort-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '
';
        $value = $context->find('displaydropdown');
        $buffer .= $this->sectionF755227f9d9c4ba23d6e06631f2ba0e3($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid p-0">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/courses-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section5b8cf699e3068ec9190c160ffb5d3e48($context, $indent, $value);

        return $buffer;
    }

    private function section6dacaeff51ba425cb4a640a8ca853997(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:controls, block_myoverview ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria:controls, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF755227f9d9c4ba23d6e06631f2ba0e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> block_myoverview/nav-display-selector}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_myoverview/nav-display-selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b8cf699e3068ec9190c160ffb5d3e48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'block_myoverview/main\', \'core/ajax\', \'core/notification\'], function($, Main, ajax, notification) {
        var $root = $(\'#block-myoverview-{{uniqid}}\');
        Main.init($root);

        ajax.call([{
            methodname : \'theme_degrade_mycourses_html\',
            args       : {}
        }])[0].then(function(data) {

            $root.before(data.html);

            $("#block-region-content").before("<div id=\'block-my-links-destination\'></div>");
            $(".page-mycourses #block-my-links")
                    .show()
                    .appendTo("#block-my-links-destination");

        }).then(function(msg) {
            console.error(msg);
        }).catch(notification.exception);

    });

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'block_myoverview/main\', \'core/ajax\', \'core/notification\'], function($, Main, ajax, notification) {
';
                $buffer .= $indent . '        var $root = $(\'#block-myoverview-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '        Main.init($root);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        ajax.call([{
';
                $buffer .= $indent . '            methodname : \'theme_degrade_mycourses_html\',
';
                $buffer .= $indent . '            args       : {}
';
                $buffer .= $indent . '        }])[0].then(function(data) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $root.before(data.html);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $("#block-region-content").before("<div id=\'block-my-links-destination\'></div>");
';
                $buffer .= $indent . '            $(".page-mycourses #block-my-links")
';
                $buffer .= $indent . '                    .show()
';
                $buffer .= $indent . '                    .appendTo("#block-my-links-destination");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        }).then(function(msg) {
';
                $buffer .= $indent . '            console.error(msg);
';
                $buffer .= $indent . '        }).catch(notification.exception);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
