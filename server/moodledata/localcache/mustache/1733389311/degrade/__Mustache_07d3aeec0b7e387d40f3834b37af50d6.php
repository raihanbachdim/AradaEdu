<?php

class __Mustache_07d3aeec0b7e387d40f3834b37af50d6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="course-content">
';
        $value = $context->find('showsettings');
        $buffer .= $this->section8864e0a5883ef2eb50a24fb1adbc307d($context, $indent, $value);
        $buffer .= $indent . '    <div class="sitetopic">
';
        $buffer .= $indent . '        <ul class="topics frontpage">
';
        $value = $context->find('sections');
        $buffer .= $this->sectionE906d22505faf08ef6e8ee3eb1fbd5a6($context, $indent, $value);
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9a58bd3b46eea9f9784c07a37fbde3e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA77901af407ee1e447045c7d2b6ed22a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/settings, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8864e0a5883ef2eb50a24fb1adbc307d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="mb-2">
        <a href="{{{settingsurl}}}" title="{{#str}} edit {{/str}}" aria-label="{{#str}} edit {{/str}}">
            {{#pix}} i/settings, moodle {{/pix}}
        </a>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="mb-2">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('settingsurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section9a58bd3b46eea9f9784c07a37fbde3e5($context, $indent, $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section9a58bd3b46eea9f9784c07a37fbde3e5($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionA77901af407ee1e447045c7d2b6ed22a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE906d22505faf08ef6e8ee3eb1fbd5a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_courseformat/local/content/section }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
