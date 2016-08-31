{if $P and $P->getLast() > 1}
    {assign var="first" value = true} 
    {assign var="prev" value = true} 
    {assign var="last" value = true} 
    {assign var="next" value = true} 
    {if $controller->getPage() == $P->getFirst()}
        {assign var="first" value = false} 
        {assign var="prev" value = false} 
    {/if}
    {if $controller->getPage() == $P->getLast()}
        {assign var="last" value = false} 
        {assign var="next" value = false}
    {/if}
    
    <ul class="pager">	
        <li class="previous {if !$first}disabled{/if}"><a href="{if $first}{$controller->getUrl()}page/{$P->getFirst()}/{else}#{/if}" title="{if $first} {$Tr->_('go_page')} {$P->getFirst()} {/if}">&larr; {$Tr->_("First")}</a></li>
        <li class="{if !$prev}disabled{/if}"><a href="{if $prev}{$controller->getUrl()}page/{$P->getPrevious()}/{else}#{/if}" title="{if $prev}{$Tr->_('go_page')} {$P->getPrevious()}{/if}">{$Tr->_("Previous")}</a></li>
        <li class="{if !$next}disabled{/if}"><a href="{if $next}{$controller->getUrl()}page/{$P->getNext()}/{else}#{/if}" title="{if $next}{$Tr->_('go_page')} {$P->getNext()}{/if}">{$Tr->_("Next")}</a></li>
        <li class="next {if !$last}disabled{/if}"><a href="{if $last}{$controller->getUrl()}page/{$P->getLast()}/{else}#{/if}" title="{if $last}{$Tr->_('go_page')} {$P->getLast()} {/if}">{$Tr->_("Last")} &rarr;</a></li>
    </ul>
    <div class="text-center small">{$Tr->_("page")} {$controller->getPage()} {$Tr->_("of")} {$P->getLast()}</div>
{/if}
