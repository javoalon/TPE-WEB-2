{include file="header.tpl"}
<div class="flex-container">
{foreach from=$teams item=$team}
    <div><a href="equipo/{$team->id}">{$team->equipo}<a></div>
{/foreach}
</div>