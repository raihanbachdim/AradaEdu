<?php

class __Mustache_25010f59739446abe43b9bb4f942068d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('maintenancefooter');
        $buffer .= $this->section73c49a230bcb0c42e0d056988a076e61($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('maintenancefooter');
        if (empty($value)) {
            
            $buffer .= $indent . '    <footer id="page-footer" class="footer-block">
';
            $value = $context->find('footer_html');
            $buffer .= $this->section9f21df1be052ec2e71448d6bcd24622b($context, $indent, $value);
            $value = $context->find('footer_html');
            if (empty($value)) {
                
                $value = $context->find('footer_enable_block');
                $buffer .= $this->sectionEa1edee2c5f207f27c92b89b2fc03fe7($context, $indent, $value);
            }
            $buffer .= $indent . '
';
            $buffer .= $indent . '        <div class="footer-content-debugging footer-dark bg-dark text-light">
';
            $buffer .= $indent . '            <div class="container-fluid footer-dark-inner">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </footer>
';
        }
        $value = $context->find('js');
        $buffer .= $this->section559b18aa79489851f0fb2e1453416c9b($context, $indent, $value);

        return $buffer;
    }

    private function section73c49a230bcb0c42e0d056988a076e61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
        <div id="footer">
            <div class="footer-bootom">
                <p class="text-center">
                    Feito com ❤️ Por <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
                    Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
                </p>
            </div>
        </div>
    </footer>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
';
                $buffer .= $indent . '        <div id="footer">
';
                $buffer .= $indent . '            <div class="footer-bootom">
';
                $buffer .= $indent . '                <p class="text-center">
';
                $buffer .= $indent . '                    Feito com ❤️ Por <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
';
                $buffer .= $indent . '                    Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
';
                $buffer .= $indent . '                </p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </footer>
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

    private function section805d9cb785cbf035a145f2fe53fd20bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a class="settings-edit" href="{{{footer_settings_edit}}}">
                            {{#pix}}edit, theme_degrade{{/pix}}
                        </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a class="settings-edit" href="';
                $value = $this->resolveValue($context->find('footer_settings_edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section161fb9a07a0868338019b0914900c2a7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f21df1be052ec2e71448d6bcd24622b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="footer">
                <div class="footer-main text-center mt-0 pb-5">
                    {{{footer_htmleditor}}}
                    {{#footer_settings_edit}}
                        <a class="settings-edit" href="{{{footer_settings_edit}}}">
                            {{#pix}}edit, theme_degrade{{/pix}}
                        </a>
                    {{/footer_settings_edit}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="footer">
';
                $buffer .= $indent . '                <div class="footer-main text-center mt-0 pb-5">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('footer_htmleditor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section805d9cb785cbf035a145f2fe53fd20bb($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section215c22becfe153a788f54d242b48629d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_degrade{{/pix}}
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a class="settings-edit" href="';
                $value = $this->resolveValue($context->find('footer_settings_edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('pix');
                $buffer .= $this->section161fb9a07a0868338019b0914900c2a7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6cf73314a88f404e162fcb12c6cb4dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{{footer_block_class}}}">
                                        <div class="footer-desc">
                                            <div class="logo-footer">
                                                <a href="{{{config.wwwroot}}}/?redirect=0">
                                                    {{{logourl_footer}}}
                                                </a>
                                            </div>
                                            <p>{{{footer_description}}}</p>

                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_degrade{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="footer-desc">
';
                $buffer .= $indent . '                                            <div class="logo-footer">
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/?redirect=0">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('logourl_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <p>';
                $value = $this->resolveValue($context->find('footer_description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section215c22becfe153a788f54d242b48629d($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE22f5db3c3d508891aa952fc21c226e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{{footer_block_class}}}">
                                        <div class="footer-nav">
                                            <h4>{{{footer_links_title}}}</h4>
                                            <ul>
                                                {{{footer_links}}}
                                            </ul>
                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_degrade{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="footer-nav">
';
                $buffer .= $indent . '                                            <h4>';
                $value = $this->resolveValue($context->find('footer_links_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                            <ul>
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('footer_links'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </ul>
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section215c22becfe153a788f54d242b48629d($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section152ce93ed6b0ed4e120d041f44f5280d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <li class="smedia-02">
                                                        <a href="{{{social_youtube}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-youtube"></i>
                                                        </span>
                                                            <span class="media-name">{{{youtube_name}}}</span>
                                                        </a>
                                                    </li>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <li class="smedia-02">
';
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('social_youtube'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fab fa fa-youtube"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                            <span class="media-name">';
                $value = $this->resolveValue($context->find('youtube_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        </a>
';
                $buffer .= $indent . '                                                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0357560a3d46b0636becddfa9bcaa803(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <li class="smedia-02">
                                                        <a href="{{{social_linkedin}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-linkedin"></i>
                                                        </span>
                                                            <span class="media-name">{{{linkedin_name}}}</span>
                                                        </a>
                                                    </li>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <li class="smedia-02">
';
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('social_linkedin'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fab fa fa-linkedin"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                            <span class="media-name">';
                $value = $this->resolveValue($context->find('linkedin_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        </a>
';
                $buffer .= $indent . '                                                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section761006395e19ca2744ee0b95234443ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <li class="smedia-02">
                                                        <a href="{{{social_twitter}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-twitter"></i>
                                                        </span>
                                                            <span class="media-name">{{{twitter_name}}}</span>
                                                        </a>
                                                    </li>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <li class="smedia-02">
';
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('social_twitter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fab fa fa-twitter"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                            <span class="media-name">';
                $value = $this->resolveValue($context->find('twitter_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        </a>
';
                $buffer .= $indent . '                                                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9945843c9c75093b0d3bb39a1ebef5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <li class="smedia-04">
                                                        <a href="{{{social_instagram}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-instagram"></i>
                                                        </span>
                                                            <span class="media-name">{{{instagram_name}}}</span>
                                                        </a>
                                                    </li>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <li class="smedia-04">
';
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('social_instagram'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                        <span class="media-icon">
';
                $buffer .= $indent . '                                                            <i class="fab fa fa-instagram"></i>
';
                $buffer .= $indent . '                                                        </span>
';
                $buffer .= $indent . '                                                            <span class="media-name">';
                $value = $this->resolveValue($context->find('instagram_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        </a>
';
                $buffer .= $indent . '                                                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a16d972182680be628e1eb8d564a447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <li class="smedia-01">
                                                        <a href="{{{social_facebook}}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fab fa fa-facebook"></i>
                                                </span>
                                                            <span class="media-name">{{{facebook_name}}}</span>
                                                        </a>
                                                    </li>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <li class="smedia-01">
';
                $buffer .= $indent . '                                                        <a href="';
                $value = $this->resolveValue($context->find('social_facebook'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                                                <span class="media-icon">
';
                $buffer .= $indent . '                                                <i class="fab fa fa-facebook"></i>
';
                $buffer .= $indent . '                                                </span>
';
                $buffer .= $indent . '                                                            <span class="media-name">';
                $value = $this->resolveValue($context->find('facebook_name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        </a>
';
                $buffer .= $indent . '                                                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f04cb76ccf65a918697d53c5330262c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                        {{#pix}}edit, theme_degrade{{/pix}}
                                                    </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <a class="settings-edit" href="';
                $value = $this->resolveValue($context->find('footer_settings_edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        ';
                $value = $context->find('pix');
                $buffer .= $this->section161fb9a07a0868338019b0914900c2a7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf2cfa48c63159841c57b2fbe4484ca6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{{footer_block_class}}}">
                                        <div class="social-media">
                                            <h4>{{{footer_social_title}}}</h4>
                                            <ul>
                                                {{#social_youtube}}
                                                    <li class="smedia-02">
                                                        <a href="{{{social_youtube}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-youtube"></i>
                                                        </span>
                                                            <span class="media-name">{{{youtube_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_youtube}}

                                                {{#social_linkedin}}
                                                    <li class="smedia-02">
                                                        <a href="{{{social_linkedin}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-linkedin"></i>
                                                        </span>
                                                            <span class="media-name">{{{linkedin_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_linkedin}}

                                                {{#social_twitter}}
                                                    <li class="smedia-02">
                                                        <a href="{{{social_twitter}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-twitter"></i>
                                                        </span>
                                                            <span class="media-name">{{{twitter_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_twitter}}

                                                {{#social_instagram}}
                                                    <li class="smedia-04">
                                                        <a href="{{{social_instagram}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-instagram"></i>
                                                        </span>
                                                            <span class="media-name">{{{instagram_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_instagram}}

                                                {{#social_facebook}}
                                                    <li class="smedia-01">
                                                        <a href="{{{social_facebook}}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fab fa fa-facebook"></i>
                                                </span>
                                                            <span class="media-name">{{{facebook_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_facebook}}

                                                {{#footer_settings_edit}}
                                                    <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                        {{#pix}}edit, theme_degrade{{/pix}}
                                                    </a>
                                                {{/footer_settings_edit}}
                                            </ul>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="social-media">
';
                $buffer .= $indent . '                                            <h4>';
                $value = $this->resolveValue($context->find('footer_social_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                                            <ul>
';
                $value = $context->find('social_youtube');
                $buffer .= $this->section152ce93ed6b0ed4e120d041f44f5280d($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_linkedin');
                $buffer .= $this->section0357560a3d46b0636becddfa9bcaa803($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_twitter');
                $buffer .= $this->section761006395e19ca2744ee0b95234443ce($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_instagram');
                $buffer .= $this->sectionE9945843c9c75093b0d3bb39a1ebef5d($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('social_facebook');
                $buffer .= $this->section5a16d972182680be628e1eb8d564a447($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section5f04cb76ccf65a918697d53c5330262c($context, $indent, $value);
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aa72f97cf9317deddcfe837e7697f52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p>{{{contact_address}}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p>';
                $value = $this->resolveValue($context->find('contact_address'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d86ea4a5d1fdbe8ede59d88c57c56dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p><i class="fa fa-phone-square"></i>{{{contact_phone}}}</p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p><i class="fa fa-phone-square"></i>';
                $value = $this->resolveValue($context->find('contact_phone'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78fe205935a8151c737eecebdb888c6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <p><i class="fa fa-envelope"></i>
                                                    <a class="mail-link"
                                                       href="mailto:{{{contact_email}}}">{{{contact_email}}}</a>
                                                </p>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <p><i class="fa fa-envelope"></i>
';
                $buffer .= $indent . '                                                    <a class="mail-link"
';
                $buffer .= $indent . '                                                       href="mailto:';
                $value = $this->resolveValue($context->find('contact_email'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('contact_email'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                                </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d3fb1d7ded2fbce722e40fac49c69f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="{{{footer_block_class}}}">
                                        <div class="footer-contact">
                                            <h4>{{{contact_footer_title}}}</h4>

                                            {{#contact_phone}}
                                                <p>{{{contact_address}}}</p>
                                            {{/contact_phone}}
                                            {{#contact_phone}}
                                                <p><i class="fa fa-phone-square"></i>{{{contact_phone}}}</p>
                                            {{/contact_phone}}

                                            {{#contact_email}}
                                                <p><i class="fa fa-envelope"></i>
                                                    <a class="mail-link"
                                                       href="mailto:{{{contact_email}}}">{{{contact_email}}}</a>
                                                </p>
                                            {{/contact_email}}

                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_degrade{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}

                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="';
                $value = $this->resolveValue($context->find('footer_block_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <div class="footer-contact">
';
                $buffer .= $indent . '                                            <h4>';
                $value = $this->resolveValue($context->find('contact_footer_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '
';
                $value = $context->find('contact_phone');
                $buffer .= $this->section8aa72f97cf9317deddcfe837e7697f52($context, $indent, $value);
                $value = $context->find('contact_phone');
                $buffer .= $this->section6d86ea4a5d1fdbe8ede59d88c57c56dd($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('contact_email');
                $buffer .= $this->section78fe205935a8151c737eecebdb888c6f($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footer_settings_edit');
                $buffer .= $this->section215c22becfe153a788f54d242b48629d($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB50ac9261b58853d68320305b4785332(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'footerblock_copywriter,theme_degrade';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'footerblock_copywriter,theme_degrade';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb7ac0010cd6e3e9dc2dadce61475ad7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="footer-foot">
                                <div class="container">
                                    <p class="text-center">
                                        {{#str}}footerblock_copywriter,theme_degrade{{/str}}
                                        <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
                                        Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
                                    </p>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="footer-foot">
';
                $buffer .= $indent . '                                <div class="container">
';
                $buffer .= $indent . '                                    <p class="text-center">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionB50ac9261b58853d68320305b4785332($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
';
                $buffer .= $indent . '                                        Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
';
                $buffer .= $indent . '                                    </p>
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

    private function sectionEa1edee2c5f207f27c92b89b2fc03fe7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="footer">
                    <div class="footer-main">
                        <div class="container-fluid">
                            <div class="row">
                                {{#enable_block_description}}
                                    <div class="{{{footer_block_class}}}">
                                        <div class="footer-desc">
                                            <div class="logo-footer">
                                                <a href="{{{config.wwwroot}}}/?redirect=0">
                                                    {{{logourl_footer}}}
                                                </a>
                                            </div>
                                            <p>{{{footer_description}}}</p>

                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_degrade{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}
                                        </div>
                                    </div>
                                {{/enable_block_description}}
                                {{#enable_block_links}}
                                    <div class="{{{footer_block_class}}}">
                                        <div class="footer-nav">
                                            <h4>{{{footer_links_title}}}</h4>
                                            <ul>
                                                {{{footer_links}}}
                                            </ul>
                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_degrade{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}
                                        </div>
                                    </div>
                                {{/enable_block_links}}
                                {{#enable_block_social}}
                                    <div class="{{{footer_block_class}}}">
                                        <div class="social-media">
                                            <h4>{{{footer_social_title}}}</h4>
                                            <ul>
                                                {{#social_youtube}}
                                                    <li class="smedia-02">
                                                        <a href="{{{social_youtube}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-youtube"></i>
                                                        </span>
                                                            <span class="media-name">{{{youtube_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_youtube}}

                                                {{#social_linkedin}}
                                                    <li class="smedia-02">
                                                        <a href="{{{social_linkedin}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-linkedin"></i>
                                                        </span>
                                                            <span class="media-name">{{{linkedin_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_linkedin}}

                                                {{#social_twitter}}
                                                    <li class="smedia-02">
                                                        <a href="{{{social_twitter}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-twitter"></i>
                                                        </span>
                                                            <span class="media-name">{{{twitter_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_twitter}}

                                                {{#social_instagram}}
                                                    <li class="smedia-04">
                                                        <a href="{{{social_instagram}}}" target="_blank">
                                                        <span class="media-icon">
                                                            <i class="fab fa fa-instagram"></i>
                                                        </span>
                                                            <span class="media-name">{{{instagram_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_instagram}}

                                                {{#social_facebook}}
                                                    <li class="smedia-01">
                                                        <a href="{{{social_facebook}}}" target="_blank">
                                                <span class="media-icon">
                                                <i class="fab fa fa-facebook"></i>
                                                </span>
                                                            <span class="media-name">{{{facebook_name}}}</span>
                                                        </a>
                                                    </li>
                                                {{/social_facebook}}

                                                {{#footer_settings_edit}}
                                                    <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                        {{#pix}}edit, theme_degrade{{/pix}}
                                                    </a>
                                                {{/footer_settings_edit}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/enable_block_social}}
                                {{#enable_block_contact}}
                                    <div class="{{{footer_block_class}}}">
                                        <div class="footer-contact">
                                            <h4>{{{contact_footer_title}}}</h4>

                                            {{#contact_phone}}
                                                <p>{{{contact_address}}}</p>
                                            {{/contact_phone}}
                                            {{#contact_phone}}
                                                <p><i class="fa fa-phone-square"></i>{{{contact_phone}}}</p>
                                            {{/contact_phone}}

                                            {{#contact_email}}
                                                <p><i class="fa fa-envelope"></i>
                                                    <a class="mail-link"
                                                       href="mailto:{{{contact_email}}}">{{{contact_email}}}</a>
                                                </p>
                                            {{/contact_email}}

                                            {{#footer_settings_edit}}
                                                <a class="settings-edit" href="{{{footer_settings_edit}}}">
                                                    {{#pix}}edit, theme_degrade{{/pix}}
                                                </a>
                                            {{/footer_settings_edit}}

                                        </div>
                                    </div>
                                {{/enable_block_contact}}
                            </div>
                        </div>
                        {{#enable_copywriter}}
                            <div class="footer-foot">
                                <div class="container">
                                    <p class="text-center">
                                        {{#str}}footerblock_copywriter,theme_degrade{{/str}}
                                        <a href="https://eduardokraus.com" target="_blank">Eduardo Kraus</a>.
                                        Powered by <a href="https://moodle.org" target="_blank">Moodle</a>
                                    </p>
                                </div>
                            </div>
                        {{/enable_copywriter}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div id="footer">
';
                $buffer .= $indent . '                    <div class="footer-main">
';
                $buffer .= $indent . '                        <div class="container-fluid">
';
                $buffer .= $indent . '                            <div class="row">
';
                $value = $context->find('enable_block_description');
                $buffer .= $this->sectionD6cf73314a88f404e162fcb12c6cb4dc($context, $indent, $value);
                $value = $context->find('enable_block_links');
                $buffer .= $this->sectionE22f5db3c3d508891aa952fc21c226e6($context, $indent, $value);
                $value = $context->find('enable_block_social');
                $buffer .= $this->sectionFf2cfa48c63159841c57b2fbe4484ca6($context, $indent, $value);
                $value = $context->find('enable_block_contact');
                $buffer .= $this->section3d3fb1d7ded2fbce722e40fac49c69f1($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $value = $context->find('enable_copywriter');
                $buffer .= $this->sectionDb7ac0010cd6e3e9dc2dadce61475ad7($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section559b18aa79489851f0fb2e1453416c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'theme_boost/footer-popover\'], function(FooterPopover) {
        FooterPopover.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '        FooterPopover.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
