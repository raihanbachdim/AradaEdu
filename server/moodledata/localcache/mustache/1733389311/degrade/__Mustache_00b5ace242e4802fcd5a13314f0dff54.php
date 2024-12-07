<?php

class __Mustache_00b5ace242e4802fcd5a13314f0dff54 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="section-navigation navigationtitle d-flex justify-content-between">
';
        $buffer .= $indent . '    <div class="prevsection">
';
        $value = $context->find('hasprevious');
        $buffer .= $this->sectionD3348142f8ce29a0410a6eec3bf32331($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="nextsection">
';
        $value = $context->find('hasnext');
        $buffer .= $this->sectionBceea57db41a7231e70f5ce701684afd($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2446e1efa274c39c0eab1ef564e1f8ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' dimmed_text ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3348142f8ce29a0410a6eec3bf32331(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{{previousurl}}}" class="{{#previoushidden}} dimmed_text {{/previoushidden}}">
            <span class="larrow">{{{larrow}}}</span>{{{previousname}}}
        </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('previousurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $context->find('previoushidden');
                $buffer .= $this->section2446e1efa274c39c0eab1ef564e1f8ed($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="larrow">';
                $value = $this->resolveValue($context->find('larrow'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $value = $this->resolveValue($context->find('previousname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBceea57db41a7231e70f5ce701684afd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{{nexturl}}}" class="{{#nexthidden}} dimmed_text {{/nexthidden}}">
            <span class="rarrow">{{{rarrow}}}</span>{{{nextname}}}
        </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('nexturl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="';
                $value = $context->find('nexthidden');
                $buffer .= $this->section2446e1efa274c39c0eab1ef564e1f8ed($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="rarrow">';
                $value = $this->resolveValue($context->find('rarrow'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $value = $this->resolveValue($context->find('nextname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
