<?php

class __Mustache_906ff13618d5e7ea5d64d3665704eedb extends Mustache_Template
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
        $buffer .= $indent . '<body data-templates="frontpage" ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block position-relative">
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_degrade/includes/header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $context->find('courseindex');
        $buffer .= $this->sectionB5049b9c4ecec8354d1e8b1429b3e6e9($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionDa048f4cddfd0b5e66cb79e3791ce426($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller"
';
        $buffer .= $indent . '         class="drawers
';
        $buffer .= $indent . '             ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section6b40e2748488de16028fd4032111cc9b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '             ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '             ';
        $value = $context->find('home_html');
        $buffer .= $this->sectionEabd104fa195d335755eb40d5939a5e0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '             drag-container">
';
        $buffer .= $indent . '
';
        $value = $context->find('slideshow_numslides');
        $buffer .= $this->section81838fbe7f56adadce3778fec725f428($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('home_html');
        $buffer .= $this->section5f5a469610bb351df1ef87de4f676147($context, $indent, $value);
        $value = $context->find('home_html');
        if (empty($value)) {
            
            $value = $context->find('frontpage_about_enable');
            $buffer .= $this->section84b3c54e7a2371c4a6f18e17c95abca7($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <div id="topofscroll" class="main-inner">
';
            $buffer .= $indent . '                <div class="drawer-toggles d-flex">
';
            $value = $context->find('courseindex');
            $buffer .= $this->section2241b2a3d7e4d77a850eb6ea7c31fb61($context, $indent, $value);
            $value = $context->find('hasblocks');
            $buffer .= $this->section2566e28427035ea58d0b54361654975b($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.full_header'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $value = $context->find('secondarymoremenu');
            $buffer .= $this->section4f721713009e54f14c799fa89336f6ee($context, $indent, $value);
            $buffer .= $indent . '                <div id="page-content" class="pb-3 d-print-block">
';
            $buffer .= $indent . '                    <div id="region-main-box">
';
            $value = $context->find('hasregionmainsettingsmenu');
            $buffer .= $this->section57fed93d78bdc520ac7ba90b2fc02d85($context, $indent, $value);
            $buffer .= $indent . '                        <section id="region-main" aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '
';
            $value = $context->find('hasregionmainsettingsmenu');
            $buffer .= $this->section85b38e2ef114feb4bcec35483a18248f($context, $indent, $value);
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $value = $context->find('headercontent');
            $buffer .= $this->section8f376c8d8ea9926f1737d88e2fc2e13b($context, $indent, $value);
            $value = $context->find('overflow');
            $buffer .= $this->section6bf36f1a79af754fa25425b0182d3182($context, $indent, $value);
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.main_content'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        </section>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
        }
        if ($partial = $this->mustache->loadPartial('theme_degrade/includes/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section567ddd548ab09b461c17ca4bf660d658($context, $indent, $value);

        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA95ec613521985d7eb496bee67e2faf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courseindex, core_courseformat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courseindex, core_courseformat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5049b9c4ecec8354d1e8b1429b3e6e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< theme_boost/drawer}}
    {{$id}}theme_boost-drawers-courseindex{{/id}}
{{$drawerclasses}}drawer drawer-left {{#courseindexopen}}show{{/courseindexopen}}{{/drawerclasses}}
{{$drawerheading}}
{{#str}}courseindex, core_courseformat{{/str}}
{{/drawerheading}}
{{$drawercontent}}
{{{courseindex}}}
{{/drawercontent}}
{{$drawerpreferencename}}drawer-open-index{{/drawerpreferencename}}
{{$drawerstate}}show-drawer-left{{/drawerstate}}
{{/theme_boost/drawer}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'blockEfc32b531594d5d62ec9c68e35a53dc3'),
                        'drawerclasses' => array($this, 'block0dcbcdb48783bd0043cc25a3ecb99947'),
                        'drawerheading' => array($this, 'blockF67a6263c0ba12ff27e00fd21177c561'),
                        'drawercontent' => array($this, 'blockB13928256fe79c7df829272654abe5f3'),
                        'drawerpreferencename' => array($this, 'block24fc4cc7410bc884a3b9fba5f26dc7b9'),
                        'drawerstate' => array($this, 'blockBd5099c9b82bf8a4037bbd56bb374a89'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cb47d3ed9b97c6d6d496d2358bec253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bd0cc4642e36d67e46c9dd550f1fa06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31618380a8d2d407a8b2acf35dd449a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closeblockdrawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closeblockdrawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa048f4cddfd0b5e66cb79e3791ce426(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< theme_boost/drawer}}
    {{$id}}theme_boost-drawers-blocks{{/id}}
{{$drawerclasses}}drawer drawer-right{{#blockdraweropen}} show{{/blockdraweropen}}{{/drawerclasses}}
{{$drawercontent}}
    <section class="d-print-none" aria-label="{{#str}}blocks{{/str}}">
        {{{addblockbutton}}}
        {{{sidepreblocks}}}
    </section>
{{/drawercontent}}
{{$drawerpreferencename}}drawer-open-block{{/drawerpreferencename}}
{{$forceopen}}{{#forceblockdraweropen}}1{{/forceblockdraweropen}}{{/forceopen}}
{{$drawerstate}}show-drawer-right{{/drawerstate}}
{{$tooltipplacement}}left{{/tooltipplacement}}
{{$drawercloseonresize}}1{{/drawercloseonresize}}
{{$closebuttontext}}{{#str}}closeblockdrawer, core{{/str}}{{/closebuttontext}}
{{/theme_boost/drawer}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'block4ca482bf2f4c0292197ede951a52b02e'),
                        'drawerclasses' => array($this, 'block874d06fc7c30c807dc0ee7226cad4ec8'),
                        'drawercontent' => array($this, 'block66d65e25fb753137130038e2eb5f751b'),
                        'drawerpreferencename' => array($this, 'block59146569a56c3d2642fa2e8224817be0'),
                        'forceopen' => array($this, 'block13847ba3219919ecdb2378620735177c'),
                        'drawerstate' => array($this, 'block0ea572ae0e89f9c5cc1dc5d7238a50d5'),
                        'tooltipplacement' => array($this, 'blockC945de95615645c65d6b2f192042e6ea'),
                        'drawercloseonresize' => array($this, 'blockE052079a625ca42b568ba24af19cc7eb'),
                        'closebuttontext' => array($this, 'blockC879444321d250421c3438099ae68173'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b40e2748488de16028fd4032111cc9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEabd104fa195d335755eb40d5939a5e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^slideshow_numslides}}home-html{{/slideshow_numslides}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slideshow_numslides');
                if (empty($value)) {
                    
                    $buffer .= 'home-html';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section285cdcc99e5965660f86dd4f9037d595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="slideshow-text">{{{slideshow_text}}}</div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="slideshow-text">';
                $value = $this->resolveValue($context->find('slideshow_text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48e68faea277e4c42089d653381c6f75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{{slideshow_url}}}"
                               class="slideshow-item slideshow-item-{{{slideshow_num}}} slideshow-fade">
                                <div class="slideshow-numbertext">{{{slideshow_num}}} / {{{slideshow_numslides}}}</div>
                                <img src="{{{slideshow_image}}}" style="width:100%">
                                {{#slideshow_text}}
                                    <div class="slideshow-text">{{{slideshow_text}}}</div>
                                {{/slideshow_text}}
                            </a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('slideshow_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                               class="slideshow-item slideshow-item-';
                $value = $this->resolveValue($context->find('slideshow_num'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' slideshow-fade">
';
                $buffer .= $indent . '                                <div class="slideshow-numbertext">';
                $value = $this->resolveValue($context->find('slideshow_num'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' / ';
                $value = $this->resolveValue($context->find('slideshow_numslides'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('slideshow_image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="width:100%">
';
                $value = $context->find('slideshow_text');
                $buffer .= $this->section285cdcc99e5965660f86dd4f9037d595($context, $indent, $value);
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f67b4d973ea1a04e5e101c26c4271f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#slideshow_url}}
                            <a href="{{{slideshow_url}}}"
                               class="slideshow-item slideshow-item-{{{slideshow_num}}} slideshow-fade">
                                <div class="slideshow-numbertext">{{{slideshow_num}}} / {{{slideshow_numslides}}}</div>
                                <img src="{{{slideshow_image}}}" style="width:100%">
                                {{#slideshow_text}}
                                    <div class="slideshow-text">{{{slideshow_text}}}</div>
                                {{/slideshow_text}}
                            </a>
                        {{/slideshow_url}}
                        {{^slideshow_url}}
                            <span class="slideshow-item slideshow-item-{{{slideshow_num}}} slideshow-fade">
                                <div class="slideshow-numbertext">{{{slideshow_num}}} / {{{slideshow_numslides}}}</div>
                                <img src="{{{slideshow_image}}}" style="width:100%">
                                {{#slideshow_text}}
                                    <div class="slideshow-text">{{{slideshow_text}}}</div>
                                {{/slideshow_text}}
                            </span>
                        {{/slideshow_url}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('slideshow_url');
                $buffer .= $this->section48e68faea277e4c42089d653381c6f75($context, $indent, $value);
                $value = $context->find('slideshow_url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <span class="slideshow-item slideshow-item-';
                    $value = $this->resolveValue($context->find('slideshow_num'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= ' slideshow-fade">
';
                    $buffer .= $indent . '                                <div class="slideshow-numbertext">';
                    $value = $this->resolveValue($context->find('slideshow_num'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= ' / ';
                    $value = $this->resolveValue($context->find('slideshow_numslides'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                                <img src="';
                    $value = $this->resolveValue($context->find('slideshow_image'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" style="width:100%">
';
                    $value = $context->find('slideshow_text');
                    $buffer .= $this->section285cdcc99e5965660f86dd4f9037d595($context, $indent, $value);
                    $buffer .= $indent . '                            </span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5aebc46793b30410919241d42bc3e2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="slideshow-dot slideshow-dot-{{{slideshow_num}}}"
                              data-slidenun="{{{slideshow_num}}}"></span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="slideshow-dot slideshow-dot-';
                $value = $this->resolveValue($context->find('slideshow_num'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                              data-slidenun="';
                $value = $this->resolveValue($context->find('slideshow_num'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16b406fb28e098ecfdc14c4dfb19d156(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{slideshow_edit_settings}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('slideshow_edit_settings'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81838fbe7f56adadce3778fec725f428(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="slideshow">
                <div class="slideshow-container">
                    {{#slideshow_slides}}
                        {{#slideshow_url}}
                            <a href="{{{slideshow_url}}}"
                               class="slideshow-item slideshow-item-{{{slideshow_num}}} slideshow-fade">
                                <div class="slideshow-numbertext">{{{slideshow_num}}} / {{{slideshow_numslides}}}</div>
                                <img src="{{{slideshow_image}}}" style="width:100%">
                                {{#slideshow_text}}
                                    <div class="slideshow-text">{{{slideshow_text}}}</div>
                                {{/slideshow_text}}
                            </a>
                        {{/slideshow_url}}
                        {{^slideshow_url}}
                            <span class="slideshow-item slideshow-item-{{{slideshow_num}}} slideshow-fade">
                                <div class="slideshow-numbertext">{{{slideshow_num}}} / {{{slideshow_numslides}}}</div>
                                <img src="{{{slideshow_image}}}" style="width:100%">
                                {{#slideshow_text}}
                                    <div class="slideshow-text">{{{slideshow_text}}}</div>
                                {{/slideshow_text}}
                            </span>
                        {{/slideshow_url}}
                    {{/slideshow_slides}}
                    <a class="slideshow-prev">❮</a>
                    <a class="slideshow-next">❯</a>
                </div>
                <div class="slideshow-dot-area">
                    {{#slideshow_slides}}
                        <span class="slideshow-dot slideshow-dot-{{{slideshow_num}}}"
                              data-slidenun="{{{slideshow_num}}}"></span>
                    {{/slideshow_slides}}

                    {{#slideshow_edit_settings}}
                        {{{slideshow_edit_settings}}}
                    {{/slideshow_edit_settings}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="slideshow">
';
                $buffer .= $indent . '                <div class="slideshow-container">
';
                $value = $context->find('slideshow_slides');
                $buffer .= $this->section6f67b4d973ea1a04e5e101c26c4271f1($context, $indent, $value);
                $buffer .= $indent . '                    <a class="slideshow-prev">❮</a>
';
                $buffer .= $indent . '                    <a class="slideshow-next">❯</a>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="slideshow-dot-area">
';
                $value = $context->find('slideshow_slides');
                $buffer .= $this->sectionF5aebc46793b30410919241d42bc3e2e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('slideshow_edit_settings');
                $buffer .= $this->section16b406fb28e098ecfdc14c4dfb19d156($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f5a469610bb351df1ef87de4f676147(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{output.full_header}}}
            {{{home_htmleditor}}}

            <!-- {{{output.main_content}}} -->
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.full_header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('home_htmleditor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <!-- ';
                $value = $this->resolveValue($context->findDot('output.main_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC77077ca8e8c22411bab425684652eaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <img class="frontpage_about_logo" src="{{{frontpage_about_logo}}}">
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <img class="frontpage_about_logo" src="';
                $value = $this->resolveValue($context->find('frontpage_about_logo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b2e3f185d0eb064828cae0c925ea5ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{{frontpage_about_edit_settings}}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('frontpage_about_edit_settings'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10b05a88768b0358a11203a5f089f212(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="frontpage_about_box">
                                <span class="separator"></span>
                                <div class="number">
                                    <span class="number_counter text-primary">{{{frontpage_about_number}}}</span>
                                </div>
                                <div class="title_counter">
                                    <h4 class="title">{{frontpage_about_text}}</h4>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="frontpage_about_box">
';
                $buffer .= $indent . '                                <span class="separator"></span>
';
                $buffer .= $indent . '                                <div class="number">
';
                $buffer .= $indent . '                                    <span class="number_counter text-primary">';
                $value = $this->resolveValue($context->find('frontpage_about_number'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="title_counter">
';
                $buffer .= $indent . '                                    <h4 class="title">';
                $value = $this->resolveValue($context->find('frontpage_about_text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h4>
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

    private function section84b3c54e7a2371c4a6f18e17c95abca7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="frontpage_about_area">
                    <div class="frontpage_about_logoarea text-center">
                        {{#frontpage_about_logo}}
                            <img class="frontpage_about_logo" src="{{{frontpage_about_logo}}}">
                        {{/frontpage_about_logo}}
                        <h3>{{{frontpage_about_title}}}</h3>
                        <div class="frontpage_about_description">{{{frontpage_about_description}}}</div>
                        {{#frontpage_about_edit_settings}}
                            {{{frontpage_about_edit_settings}}}
                        {{/frontpage_about_edit_settings}}
                    </div>
                    <div class="frontpage_about_counterbox text-center">
                        {{#about_numbers}}
                            <div class="frontpage_about_box">
                                <span class="separator"></span>
                                <div class="number">
                                    <span class="number_counter text-primary">{{{frontpage_about_number}}}</span>
                                </div>
                                <div class="title_counter">
                                    <h4 class="title">{{frontpage_about_text}}</h4>
                                </div>
                            </div>
                        {{/about_numbers}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="frontpage_about_area">
';
                $buffer .= $indent . '                    <div class="frontpage_about_logoarea text-center">
';
                $value = $context->find('frontpage_about_logo');
                $buffer .= $this->sectionC77077ca8e8c22411bab425684652eaa($context, $indent, $value);
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('frontpage_about_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <div class="frontpage_about_description">';
                $value = $this->resolveValue($context->find('frontpage_about_description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $value = $context->find('frontpage_about_edit_settings');
                $buffer .= $this->section2b2e3f185d0eb064828cae0c925ea5ce($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="frontpage_about_counterbox text-center">
';
                $value = $context->find('about_numbers');
                $buffer .= $this->section10b05a88768b0358a11203a5f089f212($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfaaa3dab86fd46a075d917e3ce891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3feaf801d4aa0a811fe41c3427e53335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/index_drawer, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/index_drawer, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2241b2a3d7e4d77a850eb6ea7c31fb61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                            <button class="btn icon-no-margin"
                                    data-toggler="drawers"
                                    data-action="toggle"
                                    data-target="theme_boost-drawers-courseindex"
                                    data-toggle="tooltip"
                                    data-placement="right"
                                    title="{{#str}}opendrawerindex, core{{/str}}">
                                <span class="sr-only">{{#str}}opendrawerindex, core{{/str}}</span>
                                {{#pix}} t/index_drawer, moodle {{/pix}}
                            </button>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
';
                $buffer .= $indent . '                            <button class="btn icon-no-margin"
';
                $buffer .= $indent . '                                    data-toggler="drawers"
';
                $buffer .= $indent . '                                    data-action="toggle"
';
                $buffer .= $indent . '                                    data-target="theme_boost-drawers-courseindex"
';
                $buffer .= $indent . '                                    data-toggle="tooltip"
';
                $buffer .= $indent . '                                    data-placement="right"
';
                $buffer .= $indent . '                                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                ';
                $value = $context->find('pix');
                $buffer .= $this->section3feaf801d4aa0a811fe41c3427e53335($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section245ba37b5a58f162a63e0d10700eb739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerblocks, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerblocks, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bf870995ed49a0bb4a766ed18e0f142(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD277bad9387573c58f79f77fc705e8dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/blocks_drawer_rtl, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/blocks_drawer_rtl, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2566e28427035ea58d0b54361654975b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
                            <button class="btn icon-no-margin"
                                    data-toggler="drawers"
                                    data-action="toggle"
                                    data-target="theme_boost-drawers-blocks"
                                    data-toggle="tooltip"
                                    data-placement="right"
                                    title="{{#str}}opendrawerblocks, core{{/str}}">
                                <span class="sr-only">{{#str}}opendrawerblocks, core{{/str}}</span>
                                <span class="dir-rtl-hide">{{#pix}}t/blocks_drawer, core{{/pix}}</span>
                                <span class="dir-ltr-hide">{{#pix}}t/blocks_drawer_rtl, core{{/pix}}</span>
                            </button>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="drawer-toggler drawer-right-toggle ml-auto d-print-none">
';
                $buffer .= $indent . '                            <button class="btn icon-no-margin"
';
                $buffer .= $indent . '                                    data-toggler="drawers"
';
                $buffer .= $indent . '                                    data-action="toggle"
';
                $buffer .= $indent . '                                    data-target="theme_boost-drawers-blocks"
';
                $buffer .= $indent . '                                    data-toggle="tooltip"
';
                $buffer .= $indent . '                                    data-placement="right"
';
                $buffer .= $indent . '                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section245ba37b5a58f162a63e0d10700eb739($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section0bf870995ed49a0bb4a766ed18e0f142($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->sectionD277bad9387573c58f79f77fc705e8dd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </button>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f721713009e54f14c799fa89336f6ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="secondary-navigation d-print-none">
                        {{> core/moremenu}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="secondary-navigation d-print-none">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57fed93d78bdc520ac7ba90b2fc02d85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div id="region-main-settings-menu" class="d-print-none">
                                <div> {{{regionmainsettingsmenu}}} </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div id="region-main-settings-menu" class="d-print-none">
';
                $buffer .= $indent . '                                <div> ';
                $value = $this->resolveValue($context->find('regionmainsettingsmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85b38e2ef114feb4bcec35483a18248f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="region_main_settings_menu_proxy"></div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f376c8d8ea9926f1737d88e2fc2e13b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{> core/activity_header}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bf36f1a79af754fa25425b0182d3182(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="container-fluid tertiary-navigation">
                                    <div class="navitem">
                                        {{> core/url_select}}
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                                    <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                }
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section567ddd548ab09b461c17ca4bf660d658(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'theme_boost/loader\', \'theme_boost/drawer\'], function($, Loader, Drawer) {
        Drawer.init();
        M.util.js_complete(\'theme_boost/loader\');
    });
    require([\'theme_degrade/slideshow\'], function(slideshow) {
        slideshow.show();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'theme_boost/loader\', \'theme_boost/drawer\'], function($, Loader, Drawer) {
';
                $buffer .= $indent . '        Drawer.init();
';
                $buffer .= $indent . '        M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    require([\'theme_degrade/slideshow\'], function(slideshow) {
';
                $buffer .= $indent . '        slideshow.show();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockEfc32b531594d5d62ec9c68e35a53dc3($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-courseindex';
    
        return $buffer;
    }

    public function block0dcbcdb48783bd0043cc25a3ecb99947($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF67a6263c0ba12ff27e00fd21177c561($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionA95ec613521985d7eb496bee67e2faf6($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockB13928256fe79c7df829272654abe5f3($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('courseindex'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block24fc4cc7410bc884a3b9fba5f26dc7b9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-index';
    
        return $buffer;
    }

    public function blockBd5099c9b82bf8a4037bbd56bb374a89($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-left';
    
        return $buffer;
    }

    public function block4ca482bf2f4c0292197ede951a52b02e($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-blocks';
    
        return $buffer;
    }

    public function block874d06fc7c30c807dc0ee7226cad4ec8($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-right';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section1cb47d3ed9b97c6d6d496d2358bec253($context, $indent, $value);
    
        return $buffer;
    }

    public function block66d65e25fb753137130038e2eb5f751b($context)
    {
        $indent = $buffer = '';
        $buffer .= '    <section class="d-print-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('addblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sidepreblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </section>
';
    
        return $buffer;
    }

    public function block59146569a56c3d2642fa2e8224817be0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-block';
    
        return $buffer;
    }

    public function block13847ba3219919ecdb2378620735177c($context)
    {
        $indent = $buffer = '';
        $value = $context->find('forceblockdraweropen');
        $buffer .= $this->section1bd0cc4642e36d67e46c9dd550f1fa06($context, $indent, $value);
    
        return $buffer;
    }

    public function block0ea572ae0e89f9c5cc1dc5d7238a50d5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-right';
    
        return $buffer;
    }

    public function blockC945de95615645c65d6b2f192042e6ea($context)
    {
        $indent = $buffer = '';
        $buffer .= 'left';
    
        return $buffer;
    }

    public function blockE052079a625ca42b568ba24af19cc7eb($context)
    {
        $indent = $buffer = '';
        $buffer .= '1';
    
        return $buffer;
    }

    public function blockC879444321d250421c3438099ae68173($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section31618380a8d2d407a8b2acf35dd449a4($context, $indent, $value);
    
        return $buffer;
    }
}
