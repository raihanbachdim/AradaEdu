<?php

class __Mustache_70e824199164dd0c0c0ac7389bec531e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span id="maincontent"></span>
';
        $buffer .= $indent . '<div id="id-activity-header" class="activity-header" data-for="page-activity-header">
';
        $value = $context->find('title');
        $buffer .= $this->section371881fb392796d5bf282adae8d9ef6c($context, $indent, $value);
        $value = $context->find('completion');
        $buffer .= $this->section52bde71ba7c6925dbee3b2b0cb4430f4($context, $indent, $value);
        $value = $context->find('description');
        $buffer .= $this->sectionEac0569895696837cd28b6a8d830d1cd($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('additional_items');
        $buffer .= $this->sectionB290eb9f4a19dbbc0642e76856a0acf9($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section70167deab05f907889e42b82079d9c2c($context, $indent, $value);

        return $buffer;
    }

    private function section371881fb392796d5bf282adae8d9ef6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2>{{{title}}}</h2>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21485ddbf620161c42cce56fdf9efccf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overallaggregation, completion ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' overallaggregation, completion ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52bde71ba7c6925dbee3b2b0cb4430f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="sr-only">{{#str}} overallaggregation, completion {{/str}}</span>
        {{{completion}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section21485ddbf620161c42cce56fdf9efccf($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEac0569895696837cd28b6a8d830d1cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="activity-description" id="intro">
            {{{description}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="activity-description" id="intro">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4edf690e2a4ac24d0c576a6184c12a89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' additionalcustomnav, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' additionalcustomnav, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB290eb9f4a19dbbc0642e76856a0acf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav aria-label="{{#str}} additionalcustomnav, core {{/str}}">
        {{> core/url_select}}
    </nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <nav aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section4edf690e2a4ac24d0c576a6184c12a89($context, $indent, $value);
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70167deab05f907889e42b82079d9c2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\'], function($) {
        /*
        var $destination = $("#page-header .page-context-header");
        $("#id-activity-header").appendTo( $destination.parent().parent() );
        */
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        /*
';
                $buffer .= $indent . '        var $destination = $("#page-header .page-context-header");
';
                $buffer .= $indent . '        $("#id-activity-header").appendTo( $destination.parent().parent() );
';
                $buffer .= $indent . '        */
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
