<?php

class __Mustache_62597d8f0fde87837cccc731fe621cde extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('mycourses_numblock');
        $buffer .= $this->section2765845b0e19576690ca6bf392909d4f($context, $indent, $value);

        return $buffer;
    }

    private function section10fc074e0cfc40ac49d4e607bcd1e1e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-{{{mycourses_col}}}">
                    <a href="{{{mycourses_url}}}" class="ff_one">
                        <div class="detais">
                            <div>{{{mycourses_title}}}</div>
                        </div>
                        <div class="ff_icon" style="background-color: {{mycourses_color}}">
                            <img src="{{{mycourses_icon}}}">
                        </div>
                    </a>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-';
                $value = $this->resolveValue($context->find('mycourses_col'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('mycourses_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="ff_one">
';
                $buffer .= $indent . '                        <div class="detais">
';
                $buffer .= $indent . '                            <div>';
                $value = $this->resolveValue($context->find('mycourses_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="ff_icon" style="background-color: ';
                $value = $this->resolveValue($context->find('mycourses_color'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            <img src="';
                $value = $this->resolveValue($context->find('mycourses_icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section179d075bde4414d36f6d074db693182d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{mycourses_edit_settings}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('mycourses_edit_settings'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2765845b0e19576690ca6bf392909d4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="block-my-links" class="row block-my-links" style="display:none">
        <div class="row" style="width:100%">
            {{#mycourses_block}}
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-{{{mycourses_col}}}">
                    <a href="{{{mycourses_url}}}" class="ff_one">
                        <div class="detais">
                            <div>{{{mycourses_title}}}</div>
                        </div>
                        <div class="ff_icon" style="background-color: {{mycourses_color}}">
                            <img src="{{{mycourses_icon}}}">
                        </div>
                    </a>
                </div>
            {{/mycourses_block}}
        </div>

        {{#mycourses_edit_settings}}
            {{{mycourses_edit_settings}}}
        {{/mycourses_edit_settings}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="block-my-links" class="row block-my-links" style="display:none">
';
                $buffer .= $indent . '        <div class="row" style="width:100%">
';
                $value = $context->find('mycourses_block');
                $buffer .= $this->section10fc074e0cfc40ac49d4e607bcd1e1e6($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('mycourses_edit_settings');
                $buffer .= $this->section179d075bde4414d36f6d074db693182d($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
