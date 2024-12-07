<?php

class __Mustache_f18e2ed97b8a899686a8d6c06b0085f9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionD29229e07a83cca1d96bbf5ab5cedbe4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <ol class="crumbs">
';
        $value = $context->find('get_items');
        $buffer .= $this->sectionDb480f824e3abdb879fc9954464dfd53($context, $indent, $value);
        $buffer .= $indent . '    </ol>
';
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function sectionD29229e07a83cca1d96bbf5ab5cedbe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'breadcrumb, access';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'breadcrumb, access';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b0060da9667da720e6932d1b9543c15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' dimmed_text';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dabfc6e3de0f7ff4baa136bb16e58d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="page"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="page"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD354c672815be9693153e2ed645cc2eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{get_title}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('get_title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9466bd1feb1d1610bf1c8ea4e8179f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="crumbs-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}"
                       {{#is_last}}aria-current="page"{{/is_last}} {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{get_content}}}</a>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="crumbs-item';
                $value = $context->find('is_hidden');
                $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                       ';
                $value = $context->find('is_last');
                $buffer .= $this->section6dabfc6e3de0f7ff4baa136bb16e58d0($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('get_title');
                $buffer .= $this->sectionD354c672815be9693153e2ed645cc2eb($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('get_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb480f824e3abdb879fc9954464dfd53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#has_action}}
                <li class="crumbs-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}"
                       {{#is_last}}aria-current="page"{{/is_last}} {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{get_content}}}</a>
                </li>
            {{/has_action}}
            {{^has_action}}
                <li class="crumbs-item{{#is_hidden}} dimmed_text{{/is_hidden}}"><span>{{{text}}}</span></li>
            {{/has_action}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('has_action');
                $buffer .= $this->sectionD9466bd1feb1d1610bf1c8ea4e8179f7($context, $indent, $value);
                $value = $context->find('has_action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="crumbs-item';
                    $value = $context->find('is_hidden');
                    $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                    $buffer .= '"><span>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
