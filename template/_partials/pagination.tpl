{if Context::getContext()->isMobile() == 1}
<div class="col-md-12">
  <div class="pagination">
     
    {*var_dump($pagination)*}
    {block name='pagination_page_list'}
     {if $pagination.should_be_displayed}
        <ul class="page-list">
          {foreach from=$pagination.pages item="page"}
            <li {if $page.current} class="current" {/if}>
              {if $page.type === 'spacer'}
                <span class="spacer">&hellip;</span>
              {else}
                <a
                  rel="{if $page.type === 'previous'}prev{elseif $page.type === 'next'}next{else}nofollow{/if}"
                  href="{$page.url}"
                  class="{if $page.type === 'previous'}prev {elseif $page.type === 'next'}next {/if}{['disabled' => !$page.clickable, 'js-search-link' => true]|classnames}"
                >
                  {if $page.type === 'previous'}
					<i class="ion-ios-arrow-left"></i>
                  {elseif $page.type === 'next'}
					<i class="ion-ios-arrow-right"></i>
                  {else}
                    {$page.page}
                  {/if}
                </a>
              {/if}
            </li>
          {/foreach}
        </ul>
      {/if}
    {/block}
  </div>
</div>
	
{else}

<div class="col-md-12">
  <div class="pagination">
    <div class="item-pagination">
      {block name='pagination_summary'}
        {l s=' %total% elementos encontrados' d='Shop.Theme.Catalog' sprintf=['%from%' => $pagination.items_shown_from ,'%to%' => $pagination.items_shown_to, '%total%' => $pagination.total_items]}
      {/block}
    </div>
    <div class="item-pagination">
      {block name='pagination_summary'}
        {if $pagination.total_items > 0}
                {assign var='num_page' value=($pagination.items_shown_to/(int)Configuration::get('PS_PRODUCTS_PER_PAGE'))|ceil}
                {assign var='tot_page' value=($pagination.total_items/(int)Configuration::get('PS_PRODUCTS_PER_PAGE'))|ceil}
        {else}
                {assign var='num_page' value=1}
                {assign var='tot_page' value=1}
        {/if}

        
        {l s='Página %from% de %total%' d='Shop.Theme.Catalog' sprintf=['%from%' => $num_page, '%total%' => $tot_page]}
      {/block}
    </div>

    {*var_dump($pagination)*}
    {block name='pagination_page_list'}
     {if $pagination.should_be_displayed}
        <ul class="page-list">
          {foreach from=$pagination.pages item="page"}
            <li {if $page.current} class="current" {/if}>
              {if $page.type === 'spacer'}
                <span class="spacer">&hellip;</span>
              {else}
                <a
                  rel="{if $page.type === 'previous'}prev{elseif $page.type === 'next'}next{else}nofollow{/if}"
                  href="{$page.url}"
                  class="{if $page.type === 'previous'}prev {elseif $page.type === 'next'}next {/if}{['disabled' => !$page.clickable, 'js-search-link' => true]|classnames}"
                >
                  {if $page.type === 'previous'}
                    <i class="ion-ios-arrow-left"></i>
                  {elseif $page.type === 'next'}
                    <i class="ion-ios-arrow-right"></i>
                  {else}
                    {$page.page}
                  {/if}
                </a>
              {/if}
            </li>
          {/foreach}
        </ul>
      {/if}
    {/block}
  </div>
</div>
    
	
	
{/if}
{literal}
<script type="application/javascript">
  //Cuando cargue la página completamente
  $(document).ready(function(){
    //Creamos un evento click para el enlace
    $(".js-search-link").click(function(evento){
        evento.preventDefault();
        var codigo = "#headercat";
        //scroll al header de la categoria
        $("html,body").animate({scrollTop: $(codigo).offset().top}, 200);
        console.log("hola");
    });
  });
</script>
{/literal}