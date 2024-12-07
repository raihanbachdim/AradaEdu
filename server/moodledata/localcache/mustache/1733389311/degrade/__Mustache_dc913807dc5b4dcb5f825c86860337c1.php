<?php

class __Mustache_dc913807dc5b4dcb5f825c86860337c1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="course-box">
';
        $buffer .= $indent . '    <div class="frontpage-course-box">
';
        $buffer .= $indent . '        <div class="course-item">
';
        $buffer .= $indent . '            <div class="course-item-img">
';
        $buffer .= $indent . '                <a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" style="background-image: url(\'';
        $value = $this->resolveValue($context->find('courseimage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\')">&nbsp;</a>
';
        $value = $context->find('is_enrolled');
        if (empty($value)) {
            
            $value = $context->find('freename');
            $buffer .= $this->section6525ba41cae4ce1da40505dcb7cf12ad($context, $indent, $value);
            $value = $context->find('priceval');
            $buffer .= $this->section07a3356cb683f92803abd2d2a5621609($context, $indent, $value);
        }
        $value = $context->find('has_course_create');
        $buffer .= $this->section869cb558ce3dec971e83ea990954c346($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="course-content">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <h3 class="title instructor-text">
';
        $buffer .= $indent . '                    <a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                </h3>
';
        $buffer .= $indent . '                <div class="course-info d-flex align-items-center">
';
        $buffer .= $indent . '                    <div class="lesson-group d-flex align-items-center" style="width: 100%;">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('pix');
        $buffer .= $this->section16568d6763a6427f2a7b789252950a94($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        <p>';
        $value = $this->resolveValue($context->find('countlessons'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $value = $context->find('showinstructor');
        $buffer .= $this->sectionF9929bcf66065238abe27e8cdc89a0ec($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('is_enrolled');
        $buffer .= $this->sectionB8266a01718b74d653cb2c902b6c82ca($context, $indent, $value);
        $value = $context->find('is_enrolled');
        if (empty($value)) {
            
            $value = $context->find('matricular');
            $buffer .= $this->section4f58bfa38a1dd2eb2dc6d92868761f92($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6525ba41cae4ce1da40505dcb7cf12ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="price">
                            <h3 class="free-color">{{{freename}}}</h3>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="price">
';
                $buffer .= $indent . '                            <h3 class="free-color">';
                $value = $this->resolveValue($context->find('freename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07a3356cb683f92803abd2d2a5621609(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="price">
                            <h3 class="price-color">{{{priceval}}}</h3>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="price">
';
                $buffer .= $indent . '                            <h3 class="price-color">';
                $value = $this->resolveValue($context->find('priceval'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section161fb9a07a0868338019b0914900c2a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit, theme_degrade';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit, theme_degrade';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section869cb558ce3dec971e83ea990954c346(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="edit-icon" href="{{viewurl}}" target="_blank"
                       title="Edit Course">
                        {{#pix}}edit, theme_degrade{{/pix}}
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a class="edit-icon" href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank"
';
                $buffer .= $indent . '                       title="Edit Course">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section161fb9a07a0868338019b0914900c2a7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16568d6763a6427f2a7b789252950a94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lessons, theme_degrade';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lessons, theme_degrade';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a1973c5ae6242b2e2f0b3efe2c9a4f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="instructor-group-img d-flex">
                                <a href="#">
                                    <img alt="{{{instructorname}}}" src="{{{instructorurl}}}" height="50" width="50">
                                </a>
                                <div class="instructor-name">
                                    <h4><a href="#">{{{instructorname}}}</a></h4>
                                    <p>{{{instructortitle}}}</p>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="instructor-group-img d-flex">
';
                $buffer .= $indent . '                                <a href="#">
';
                $buffer .= $indent . '                                    <img alt="';
                $value = $this->resolveValue($context->find('instructorname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" src="';
                $value = $this->resolveValue($context->find('instructorurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" height="50" width="50">
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                                <div class="instructor-name">
';
                $buffer .= $indent . '                                    <h4><a href="#">';
                $value = $this->resolveValue($context->find('instructorname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></h4>
';
                $buffer .= $indent . '                                    <p>';
                $value = $this->resolveValue($context->find('instructortitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9929bcf66065238abe27e8cdc89a0ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="instructor-group d-flex">
                        {{#instructor}}
                            <div class="instructor-group-img d-flex">
                                <a href="#">
                                    <img alt="{{{instructorname}}}" src="{{{instructorurl}}}" height="50" width="50">
                                </a>
                                <div class="instructor-name">
                                    <h4><a href="#">{{{instructorname}}}</a></h4>
                                    <p>{{{instructortitle}}}</p>
                                </div>
                            </div>
                        {{/instructor}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="instructor-group d-flex">
';
                $value = $context->find('instructor');
                $buffer .= $this->section7a1973c5ae6242b2e2f0b3efe2c9a4f5($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4689d84df1cc9d8895e59bb7310fc27c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="course-info d-flex align-items-center">
                            <div class="all-btn all-category d-flex align-items-center">
                                <a href="{{viewurl}}" style="white-space: nowrap;"
                                   class="btn btn-primary matricula-se">{{{acessar}}}</a>
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="course-info d-flex align-items-center">
';
                $buffer .= $indent . '                            <div class="all-btn all-category d-flex align-items-center">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="white-space: nowrap;"
';
                $buffer .= $indent . '                                   class="btn btn-primary matricula-se">';
                $value = $this->resolveValue($context->find('acessar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8266a01718b74d653cb2c902b6c82ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#acessar}}
                        <div class="course-info d-flex align-items-center">
                            <div class="all-btn all-category d-flex align-items-center">
                                <a href="{{viewurl}}" style="white-space: nowrap;"
                                   class="btn btn-primary matricula-se">{{{acessar}}}</a>
                            </div>
                        </div>
                    {{/acessar}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('acessar');
                $buffer .= $this->section4689d84df1cc9d8895e59bb7310fc27c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f58bfa38a1dd2eb2dc6d92868761f92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="course-info d-flex align-items-center">
                            <div class="all-btn all-category d-flex align-items-center">
                                <a href="{{viewurl}}" style="white-space: nowrap;"
                                   class="btn btn-primary matricula-se">{{{matricular}}}</a>
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="course-info d-flex align-items-center">
';
                $buffer .= $indent . '                            <div class="all-btn all-category d-flex align-items-center">
';
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="white-space: nowrap;"
';
                $buffer .= $indent . '                                   class="btn btn-primary matricula-se">';
                $value = $this->resolveValue($context->find('matricular'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
